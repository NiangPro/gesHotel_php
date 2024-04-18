<?php 

$anneeActuelle = date("Y");
$moisActuel = date("m");
$mtGlobal = montantVenteParMois($anneeActuelle);

$moisDeLAnnee = [
    "1" => "Janvier",
    "2" => "Février",
    "3" => "Mars",
    "4" => "Avril",
    "5" => "Mai",
    "6" => "Juin",
    "7" => "Juillet",
    "8" => "Août",
    "9" => "Septembre",
    "10" => "Octobre",
    "11" => "Novembre",
    "12" => "Décembre"
];

$montantReservationsParMois = [];
foreach ($moisDeLAnnee as $key => $mois) {
    $trouve = false;
    foreach ($mtGlobal as $vente) {
        if ($vente->mois == $key) {
            $montantReservationsParMois[$mois] = $vente->montant;
            $trouve = true;
        }
    }

    if ($trouve == false && $key <= $moisActuel) {
        $montantReservationsParMois[$mois] = 0;
    }
}


require_once("views/dashboard.php");