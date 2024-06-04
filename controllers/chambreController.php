<?php

// $chambres = recupererTousLesChambres();
$data = pagination("chambres", 8);

$chambres = $data[0];
$totalPages = $data[1];
$pageActuelle = $data[2];


require_once("views/chambre.php");
