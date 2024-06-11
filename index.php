<?php
session_start();
require_once("includes/mesFonctions.php");
require_once("models/database.php");

// liberer les chambres 
$reserv = recupererReservationsPassees();
foreach ($reserv as $r) {
    $c = avoirUneChambre($r->chambre_id);

    if ($c->statut != 0) {
        changerStatutChambre($c->id, 0);
    }
}

if (isset($_GET["page"])) {
    require_once("includes/entete.php");
    switch ($_GET["page"]) {
        case 'chambre':
            require_once("controllers/chambreController.php");
            break;
        case 'dashboard':
            require_once("controllers/dashboardController.php");
            break;
        case 'detailChambre':
            require_once("controllers/detailChambreController.php");
            break;
        case 'chambreAdmin':
            require_once("controllers/chambreAdminController.php");
            break;
        case 'blogAdmin':
            require_once("controllers/blogAdminController.php");
            break;
        case 'blog':
            require_once("controllers/blogController.php");
            break;
        case 'blogDetail':
            require_once("controllers/blogDetailController.php");
            break;
        case 'reservationAdmin':
            require_once("controllers/reservationAdminController.php");
            break;
        case 'employeAdmin':
            require_once("controllers/employeAdminController.php");
            break;
        case 'profilEmploye':
            require_once("controllers/profilEmployeController.php");
            break;
        case 'reservation':
            require_once("controllers/reservationController.php");
            break;
        case 'login':
            require_once("controllers/loginController.php");
            break;
        case "register":
            require_once("controllers/registerController.php");
            break;
        case "profil":
            require_once("controllers/profilController.php");
            break;
        default:
            require_once("controllers/homeController.php");
            break;
    }
} elseif (isset($_GET["logout"])) {
    require_once("controllers/logoutController.php");
} else {
    require_once("includes/entete.php");
    require_once("controllers/homeController.php");
}


require_once("includes/pied.php");
