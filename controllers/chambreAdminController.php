<?php 

if (!estAdmin()) {
    header("location:?page=home");
    exit();
}

// traitement ajout 
if (isset($_POST["ajouter"])) {
    extract($_POST);

    $type = explode("/", $_FILES["image"]["type"]);
    if ($type[0] == "image") {
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";
        if (ajoutChambre($nom, $prix, $description, $img_name)) {
            // on deplace l'image dans le dossier images 
            move_uploaded_file($img, "images/".$img_name);

            setMessage("Ajout chambre avec succes");
            header("location:?page=chambreAdmin");
            exit();
        }else{
            setMessage("Erreur d'ajout chambre", "danger");
        }

    }else{
        setMessage("Veuillez choisir une image", "danger");
    }
}

if(isset($_POST["modifier"])){
    extract($_POST);

    $c = avoirUneChambre($_GET["id"]);
    // traitement au niveau de php 

    if ($_FILES["image"]["size"] != 0) {
        $type = explode("/", $_FILES["image"]["type"]);
        if ($type[0] == "image" ) {
            $img_name = uniqid().".jpg";
        }else{
            setMessage("Veuillez selectionner une image", "danger");
        }
    }else{
        $img_name = $c->image;
    }

   

    if (mettreAjourLaChambre($c->id, $nom, $prix, $description, $img_name)) {
        if ($img_name != $c->image) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$img_name);
        }

        setMessage("Mis a jour avec succes");
        header("Location:?page=chambreAdmin");
        exit();
    }else{
        setMessage("Erreur de mis a jour", "danger");
    }
}

if (isset($_GET["idDeleting"])) {
    if (supprimerUneChambre($_GET["idDeleting"])) {
        setMessage("Suppression avec succes");
        header("Location:?page=chambreAdmin");
        exit();
    }else{
        setMessage("Erreur de suppression", "danger");
    }
}

$chambres = recupererTousLesChambres();

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $c = avoirUneChambre($_GET["id"]);
    }
    require_once("views/ajoutChambre.php");
}else{

    require_once("views/chambreAdmin.php");
}