<?php 

if (!isset($_SESSION["user"])) {
    setMessage("Veuillez vous connecter d'abord");
}

if (isset($_GET["id"])) {
    $chambre = avoirUneChambre($_GET["id"]);
}

if (isset($_POST["reserver"])) {
    extract($_POST);

    $aujourdhui = new DateTime();

    $dd = DateTime::createFromFormat("d/m/Y", $date_debut);
    $df = DateTime::createFromFormat("d/m/Y", $date_fin);

    if ($aujourdhui->diff($dd)->format("%R%a") < 0) {
        setMessage("La date d'entrée ne peut pas être inférieur à la date d'aujourd'hui", "danger");
    }elseif ($aujourdhui->diff($df)->format("%R%a") < 0) {
        setMessage("La date de départ ne peut pas être inférieur à la date d'aujourd'hui", "danger");
    }elseif ($dd->diff($df)->format("%R%a") < 0) {
        setMessage("La date de départ ne peut pas être inférieur à la date d'entrée", "danger");
    }else{


        $c = avoirUneChambre($chambre_id);
        if ($c) {
            $prix_total = intval($dd->diff($df)->format("%R%a")) * $c->prix;
            $reference = "#ref".time();
            
            if (ajoutReservation($reference, $dd->format("Y-m-d"), $df->format("Y-m-d"), $prix_total, $_SESSION["user"]->id, $c->id)) {
                setMessage("Ajout reservation avec succès");
                supprimerLesDonneesDeLInput();
                header("Location:?page=reservation");
                exit();
            }else{
                setMessage("Erreur d'ajout reservation", "danger");
            }
        }else{
            setMessage("Veuillez selectionner une chambre d'abord");
        }
    }

    enregistrerLesDonnesDeLInput();
}
$chambres = recupererTousLesChambres();

$data = pagination("chambres", 8);

$chambresSimilaires = $data[0];
require_once("views/reservation.php");