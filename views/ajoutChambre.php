<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title row">
            <h2 class="title_color col-md-10">Formulaire d'<?= $_GET["type"] == 'edit' ? 'edition' : 'ajout' ?> Chambre</h2>
            <div class="col-md-2">
                <a href="?page=chambreAdmin" class="btn btn-info"><i class="fa fa-arrow-left"></i>Retour</a>
            </div>
        </div>
        <?php require_once("includes/getMessage.php"); ?>
        <form action="" class="container" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="nom" value="<?= isset($c) ? $c->nom : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Prix journalier <span class="text-danger">*</span></label>
                    <input type="number" min="0" value="<?= isset($c) ? $c->prix : '' ?>" step="5" name="prix" required class="form-control">
                </div>
                <div class="form-group col-md-<?= isset($c) ? '12': '6' ?>">
                    <label for="">Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" required> <?= isset($c) ? $c->description : '' ?>
                    </textarea>
                </div>
                <?php if(isset($c)): ?>
                    <div class="col-md-6">
                        <img src="images/<?= $c->image ?>" id="img_cible" width="400" height="200" alt="">
                    </div>
                <?php endif; ?>
                <div class="form-group col-md-6">
                    <label for="">Image <?php if(!isset($c)): ?> <span class="text-danger">*</span> <?php endif; ?></label>
                    <input type="file" id="img" name="image" <?= !isset($c) ? 'required' : '' ?>  class="form-control">
                </div>

            </div>
            <?php if($_GET['type'] == "edit"): ?>
                <button class="btn btn-warning mt-3" type="submit" name="modifier">Modifier</button>
            <?php else: ?>
                <button class="btn btn-success" type="submit" name="ajouter">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</section>

<!-- traitement de l'image en javascript  -->

<script>
    document.getElementById("img").addEventListener("change", (event)=>{
        const file = event.target.files[0];

        // on verifie si l'element est reellement une image 
        if(!file || !file.type.startsWith("image/")){
            alert("Veuillez selectionner une image");
            event.target.src = "";
            return;
        }

        const reader = new FileReader();

        reader.onload = function(e){
            let imgSrc = e.target.result;

            // et on change l'image de la chambre au niveau de l'affichage 
            document.getElementById("img_cible").src = imgSrc;
        }

        reader.readAsDataURL(file);
    })
</script>
