<!--================ Accomodation Area  =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Connexion</h2>
            
        </div>
    </div>
    <div class="container">
        <?php if ($erreurs) : ?>
            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                <strong><?= $erreurs ?>!</strong>
            </div>

        <?php endif;  ?>
        <form action="" method="POST" class="text-white mt-5 col-md-12 d-flex flex-column align-items-center">
            <div class="form-group col-md-4">
                <label for="">Email</label>
                <input type="email" value="<?= avoirInput("email") ?>" name="email" required class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">Mot de passe</label>
                <input type="password" name="motdepasse" required class="form-control">
            </div>
            <div class="btn-group">
                <button type="submit" name="connecter" class="btn btn-success">Se connecter</button>
                <a href="?page=register" class="btn btn-warning">Créer un compte</a>
            </div>
        </form>
    </div>
</section>
