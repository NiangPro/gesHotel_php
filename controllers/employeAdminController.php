<?php 
if (!estAdmin()) {
    header("Location:?page=home");
}

if (isset($_POST["ajouter"])) {
    extract($_POST);
    $motdepasse = password_hash($motdepasse, PASSWORD_DEFAULT, ["cost" => 12]);
    if (creerUnCompte($prenom, $nom, $adresse, $tel, $cni, $email, $motdepasse, $role)) {
        supprimerLesDonneesDeLInput();
        setMessage("Ajout Employé avec succès");
        header("location: ?page=employeAdmin");
        exit();
    }else{
        setMessage("Erreur d'ajout employé", "danger");
    }

    enregistrerLesDonnesDeLInput();
}

if (isset($_GET["idDeleting"])) {
    if (supprimerUnUtilisateur($_GET["idDeleting"])) {
        setMessage("Suppression avec succes");
        header("Location:?page=employeAdmin");
        exit();
    } else {
        setMessage("Erreur de suppression", "danger");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (mettreAjourLesDonneesUtilisateur($_GET["id"], $prenom, $nom, $adresse, $tel, $cni, $email, $role)) {
        setMessage("Mises à jour avec succès");
        supprimerLesDonneesDeLInput();
        header("Location:?page=employeAdmin");
        exit();
    }else{
        setMessage("Erreur de mises à jour", "warning");
        enregistrerLesDonnesDeLInput();
    }
}


$employes = recupererTousLesEmployes();

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $e = avoirInfoUtilisateur($_GET["id"]);
    }
    require_once("views/ajoutEmploye.php");
}else{
    require_once("views/employeAdmin.php");
}