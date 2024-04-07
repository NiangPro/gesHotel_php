<?php

$erreurs = "";
if (isset($_POST["connecter"])) {
    extract($_POST);

    $user = seConnecter($email);

    if (password_verify($motdepasse, $user->motdepasse)) {
        $_SESSION["user"] = $user;
        if (estAdmin()) {
            header("Location: ?page=chambreAdmin");
            exit();
        } else {
            header("Location: ?page=profil");
            exit();
        }
    } else {
        $erreurs = "Email ou mot de passe incorrect";
    }
}
require_once("views/login.php");
