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

function pagination($table, $limite = 10){
    // page actuelle 
    $page = isset($_GET["numero"]) ? $_GET["numero"] : 1;
    $debut = ($page - 1) * $limite;

    // recupérer les enregistrements de la table 
    $elements = elementsPageActuelle($table, $debut, $limite);
    
    // compter le  nombre total d'enregistrements 
    $totalElements = nombreTotalElements($table);
    $totalPages = ceil($totalElements / $limite);

    return [$elements, $totalPages, $page];
}

function piedPagination($totalPages, $pageActuelle){
    
    echo '
            <ul class="container d-flex mt-5 justify-content-center pagination">';
            for($i = 1; $i <= $totalPages; $i++){
                $classActive = $pageActuelle == $i ? "btn-warning" : "";
                echo '<li>
                        <a href="?page='.$_GET['page'].'&numero='.$i.'" class="btn '.$classActive.'">'.$i.'</a>
                    </li>';
            }
       echo  '</ul>';
}

function dateFin($id){
    $c = dateChambreReservee($id);
    return $c ? $c->date_fin : null;
}
