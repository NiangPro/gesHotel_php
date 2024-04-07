<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Création compte</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <form action="" method="POST" class="col-md-12 d-flex flex-column align-items-center">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Prenom <span class="text-danger">*</span></label>
                    <input type="text" name="prenom" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Adresse <span class="text-danger">*</span></label>
                    <input type="text" name="adresse" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Numero de telephone <span class="text-danger">*</span></label>
                    <input type="text" name="tel" required class="form-control">
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Numero de carte d'identite <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="cni" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Mot de passe <span class="text-danger">*</span></label>
                    <input type="password" name="motdepasse" required class="form-control">
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" name="register" class="btn btn-success">Créer</button>
                <a href="?page=login" class="btn text-warning">Se connecter</a>
            </div>
        </form>
    </div>
</section>
<!--================ Accomodation Area  =================-->