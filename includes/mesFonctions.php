<?php 


// creer une fonction pour recuperer les messages d'erreur et de succes 

function setMessage($message, $type = "success"){
    $_SESSION["message"]["content"] = $message;
    $_SESSION["message"]["type"] = $type;
}

function estAdmin(){
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "admin") {
        return true;
    }

    return false;
}

function estClient(){
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "client") {
        return true;
    }

    return false;
}
