<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title row">
            <h2 class="title_color col-md-10">Formulaire d'<?= $_GET["type"] == 'edit' ? 'edition' : 'ajout' ?> Employé</h2>
            <div class="col-md-2">
                <a href="?page=employeAdmin" class="btn btn-info"><i class="fa fa-arrow-left"></i>Retour</a>
            </div>
        </div>
        <?php require_once("includes/getMessage.php"); ?>
        <form action="" class="container" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Prenom <span class="text-danger">*</span></label>
                    <input type="text" name="prenom" value="<?= avoirInput("prenom", isset($e) ? $e : '') ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="nom" value="<?=  avoirInput("nom",isset($e) ? $e : '') ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Adresse <span class="text-danger">*</span></label>
                    <input type="text" name="adresse" value="<?=  avoirInput("adresse",isset($e) ? $e : '') ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Téléphone <span class="text-danger">*</span></label>
                    <input type="text" name="tel" value="<?= avoirInput("tel",isset($e) ? $e : '') ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Carte d'identité nationale <span class="text-danger">*</span></label>
                    <input type="text" name="cni" value="<?= avoirInput("cni",isset($e) ? $e : '')  ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Rôle <span class="text-danger">*</span></label>
                    <select name="role" class="form-control" id="">
                        <option value="employe">Employé</option>
                        <option value="admin">Administrateur</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" value="<?= avoirInput("email",isset($e) ? $e : '')  ?>" required class="form-control">
                </div>
                <?php if ($_GET['type'] == "add") : ?>
                <div class="form-group col-md-6">
                    <label for="">Mot de passe <span class="text-danger">*</span></label>
                    <input type="password" name="motdepasse"  required class="form-control">
                </div>
                <?php endif; ?>
            </div>
            <?php if ($_GET['type'] == "edit") : ?>
                <button class="btn btn-warning mt-3" type="submit" name="modifier">Modifier</button>
            <?php else : ?>
                <button class="btn btn-success" type="submit" name="ajouter">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</section>