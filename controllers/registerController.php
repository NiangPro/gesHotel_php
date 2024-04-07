<?php

if (isset($_POST["register"])) {
    extract($_POST);

    // on va hacher le mot de passe 
    $motdepasse = password_hash($motdepasse, PASSWORD_DEFAULT, ["cost" => 12]);
    if (creerUnCompte($prenom, $nom, $adresse, $tel, $cni, $email, $motdepasse, "client")) {
        header("location: ?page=login");
        exit();
    }
}



require_once("views/register.php");
