<?php 

// connexion a la base de donnees 

try {
    $db = new PDO("mysql:host=localhost;dbname=kawsara", "root", "");
} catch (PDOException $th) {
   setMessage($th->getMessage(), "danger");
}

function creerUnCompte($prenom, $nom, $adresse, $tel, $cni, $email, $motdepasse, $role)
{
    // utilisation de la variable $db 
    global $db;

    try {
        $q = $db->prepare("INSERT INTO users VALUES(null, :prenom, :nom, :adresse, :tel, :cni, :email, :motdepasse, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "cni" => $cni,
            "email" => $email,
            "motdepasse" => $motdepasse,
            "role" => $role
        ]);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}


function seConnecter($email){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email =:email");
        $q->execute([
            "email" => $email
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function avoirInfoUtilisateur($id){
    global $db;

    try {
        $q = $db->prepare("SELECT * FROM users WHERE id =:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function mettreAjourLesDonneesUtilisateur($id, $prenom, $nom, $adresse, $tel, $cni, $email, $role)
{
    global $db;
    try{
        $q = $db->prepare("UPDATE users SET prenom =:prenom, nom =:nom, adresse =:adresse,
                    tel =:tel, cni =:cni, email =:email, role =:role WHERE id =:id");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "cni" => $cni,
            "email" => $email,
            "role" => $role,
            "id" => $id
        ]);
    }catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function mettreAjourMotDePasse($id, $mdp){
    global $db;
    try {
        $q = $db->prepare("UPDATE users SET motdepasse =:mdp WHERE id =:id");
        return $q->execute([
            "mdp" => $mdp,
            "id" => $id
        ]);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function ajoutChambre($nom, $prix, $description, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO chambres VALUES(null, :nom, :prix, :description, :image)");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description,
            "image" => $image,
        ]);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function recupererTousLesChambres(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM chambres ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function avoirUneChambre($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM chambres WHERE id =:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function mettreAjourLaChambre($id, $nom, $prix, $description, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE chambres SET nom = :nom, prix =:prix, description =:description,image =:image WHERE id =:id");
        return $q->execute([
            "id" => $id,
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description,
            "image" => $image
        ]);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}

function supprimerUneChambre($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM chambres WHERE id =:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $th) {
       setMessage($th->getMessage(), "danger");
    }
}