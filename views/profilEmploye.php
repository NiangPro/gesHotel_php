<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Mon Profil</h2>
            <ol class="breadcrumb">
                <li><a href="#">Accueil</a></li>
                <li class="active">profil</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <?php require_once("includes/getMessage.php"); ?>
        <div class="row">
            <div class="card card-body col-md-8">
                    <h3>Mes informations</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for=""> Prenom</label>
                                <input type="text" value="<?= $user->prenom ?>" name="prenom" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Nom</label>
                                <input type="text" value="<?= $user->nom ?>" name="nom" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Adresse</label>
                                <input type="text" value="<?= $user->adresse ?>" name="adresse" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Telephone</label>
                                <input type="text" name="tel" value="<?= $user->tel ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Numero de carte d'identite</label>
                                <input type="text" value="<?= $user->cni ?>" name="cni" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Email</label>
                                <input type="email" value="<?= $user->email ?>" name="email" required class="form-control">
                            </div>
                        </div>
                        <button name="modifier" type="submit" class="btn btn-outline-warning">Modifier</button>
                    </form>
            </div>
            <div class="card card-body col-md-4">
                    <h5>Changement de mot de passe</h5>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for=""> Mot de passe actuel</label>
                                <input type="password" name="motdepasse" required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for=""> Nouveau Mot de passe</label>
                                <input type="password" name="nouveaumotdepasse" required class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for=""> Mot de passe de confirmation</label>
                                <input type="password" name="motdepasseconfirm" required class="form-control">
                            </div>
                        </div>
                        <button type="submit" name="editpassword" class="btn btn-outline-warning">Modifier</button>
                    </form>
            </div>
        </div>
    </div>
</section>