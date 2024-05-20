        <form action="" class="container" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Titre <span class="text-danger">*</span></label>
                    <input type="text" name="titre" value="<?= isset($b) ? $b->titre : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-<?= isset($b) ? '12' : '6' ?>">
                    <label for="">Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" required> <?= isset($b) ? $b->description : '' ?>
                    </textarea>
                </div>
                <?php if (isset($b)) : ?>
                    <div class="col-md-6">
                        <img src="images/<?= $b->image ?>" id="img_cible" width="400" height="200" alt="">
                    </div>
                <?php endif; ?>
                <div class="form-group col-md-6">
                    <label for="">Image <?php if (!isset($b)) : ?> <span class="text-danger">*</span> <?php endif; ?></label>
                    <input type="file" id="img" name="image" <?= !isset($b) ? 'required' : '' ?> class="form-control">
                </div>

            </div>
            <?php if ($_GET['type'] == "edit") : ?>
                <button class="btn btn-warning mt-3" type="submit" name="modifier">Modifier</button>
            <?php else : ?>
                <button class="btn btn-success" type="submit" name="ajouter">Ajouter</button>
            <?php endif; ?>
        </form>

        
<!-- traitement de l'image en javascript  -->

<script>
    document.getElementById("img").addEventListener("change", (event) => {
        const file = event.target.files[0];

        // on verifie si l'element est reellement une image 
        if (!file || !file.type.startsWith("image/")) {
            alert("Veuillez selectionner une image");
            event.target.src = "";
            return;
        }

        const reader = new FileReader();

        reader.onload = function(e) {
            let imgSrc = e.target.result;

            // et on change l'image de la chambre au niveau de l'affichage 
            document.getElementById("img_cible").src = imgSrc;
        }

        reader.readAsDataURL(file);
    })
</script>