<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Connexion</h2>
                </div>
                <?php if($erreurs): ?>
                    <div
                        class="alert alert-danger text-center alert-dismissible fade show"
                        role="alert"
                    >
                        <strong><?= $erreurs ?>!</strong>
                    </div>
                    
                <?php endif;  ?>
                <form action="" method="POST" class="col-md-12 d-flex flex-column align-items-center">
                    <div class="form-group col-md-4">
                        <label for="">Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Mot de passe</label>
                        <input type="password" name="motdepasse" required class="form-control">
                    </div>
                    <div class="btn-group">
                        <button type="submit" name="connecter" class="btn btn-success">Se connecter</button>
                        <a href="?page=register" class="btn text-warning">Créer un compte</a>
                    </div>
                </form>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->