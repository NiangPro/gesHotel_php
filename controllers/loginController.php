<?php

$erreurs = "";
if (isset($_POST["connecter"])) {
    extract($_POST);

    $user = seConnecter($email);

    if (password_verify($motdepasse, $user->motdepasse)) {
        $_SESSION["user"] = $user;
        if (estAdmin() || estEmploye()) {
            header("Location: ?page=dashboard");
            exit();
        } else {
            header("Location: ?page=profil");
            exit();
        }
        supprimerLesDonneesDeLInput();
    } else {
        $erreurs = "Email ou mot de passe incorrect";
        enregistrerLesDonnesDeLInput();
    }
}

if (isset($_SESSION["user"])) {
    if (estClient()) {
        header("Location:?page=profil");
        exit();
    }else{
        header("Location:?page=dashboard");
        exit();
    }
}else{
    require_once("views/login.php");
}
