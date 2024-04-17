<?php


// creer une fonction pour recuperer les messages d'erreur et de succes 

function setMessage($message, $type = "success")
{
    $_SESSION["message"]["content"] = $message;
    $_SESSION["message"]["type"] = $type;
}

function estAdmin()
{
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "admin") {
        return true;
    }

    return false;
}

function estEmploye()
{
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "employe") {
        return true;
    }

    return false;
}

function estClient()
{
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "client") {
        return true;
    }

    return false;
}


// cette fonction permet d'enregistrer les valeurs des champs saisis 
function enregistrerLesDonnesDeLInput(){
    if (isset($_POST)) {
        $_SESSION["INPUT"] = $_POST;
    }
}

function supprimerLesDonneesDeLInput(){
    $_SESSION["INPUT"] = null;
}


// permet d'avoir la valeur du champ 
function avoirInput($nom, $obj = null){
    if ($obj) {
        return $obj->$nom;
    }elseif(isset($_SESSION["INPUT"][$nom])){
        return $_SESSION["INPUT"][$nom];
    }else{
        return null;
    }
}
