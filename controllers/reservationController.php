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

    $dd = new DateTime($date_debut);
    $df = new DateTime($date_fin);

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
            
            if (ajoutReservation($reference, $date_debut, $date_fin, $prix_total, $_SESSION["user"]->id, $chambre_id)) {
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
require_once("views/reservation.php");