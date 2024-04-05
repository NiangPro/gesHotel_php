<?php 
    session_start();
    require_once("includes/mesFonctions.php");
    require_once("models/database.php");
    require_once("includes/entete.php"); 

    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case 'chambre':
                require_once("controllers/chambreController.php");
                break;
            case 'detailChambre':
                require_once("controllers/detailChambreController.php");
                break;
            case 'chambreAdmin':
                require_once("controllers/chambreAdminController.php");
                break;
            case 'reservationAdmin':
                require_once("controllers/reservationAdminController.php");
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
            case "logout":
                require_once("controllers/logoutController.php");
                break;
            default:
                require_once("controllers/homeController.php");
                break;
        }
    }else{

        require_once("controllers/homeController.php");
    }

    
    require_once("includes/pied.php"); 
