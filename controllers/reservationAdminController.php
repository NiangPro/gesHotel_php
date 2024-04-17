<?php 

$reservations = recupererTousLesReservations();

if (isset($_GET["type"])) {
    $r = recupererUneReservation($_GET["id"]);
    if ($_GET["type"] == "valider") {
        if (changerStatutReservation($r->id, 1)) {
            changerStatutChambre($r->chambre_id, 1);
            setMessage("Réservation validée avec succès");
            header("Location:?page=reservationAdmin");
            exit();
        }else{
            setMessage("Erreur de validation", "danger");
        }
    }elseif ($_GET["type"] == "rejeter") {
        if (changerStatutReservation($r->id, 2)) {
            setMessage("Réservation rejetée avec succès");
            header("Location:?page=reservationAdmin");
            exit();
        }else{
            setMessage("Erreur de rejet", "danger");
        }
    }
}

if (isset($_POST["modifier"])) {
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
            
            if (modifierUneReservation($_GET["id"], $date_debut, $date_fin, $prix_total, $client_id, $chambre_id, $statut)) {
                setMessage("Mis à jour reservation avec succès");
                supprimerLesDonneesDeLInput();
                header("Location:?page=reservationAdmin");
                exit();
            }else{
                setMessage("Erreur de mis à jour  reservation", "danger");
            }
        }else{
            setMessage("Veuillez selectionner une chambre d'abord");
        }
    }

    enregistrerLesDonnesDeLInput();
}

if (isset($_GET["type"]) && $_GET["type"] == "edit") {
    $r = recupererUneReservation($_GET["id"]);
    $chambres = recupererTousLesChambres();
    $clients = recupererTousLesClients();

    require_once("views/editReservation.php");
}else{
    require_once("views/reservationAdmin.php");
}