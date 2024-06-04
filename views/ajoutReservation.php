<?php if (isset($_SESSION["user"])) : ?>
<div class="row hotel_booking_table">
    <div class="col-md-3">
        <h2>Reserver<br> Votre chambre</h2>
    </div>
    <div class="col-md-9">
        <form action="" method="post">
            <div class="boking_table">
                <div class="row">
                    <div class="col-md-4">
                        <div class="book_tabel_item">
                            <div class="form-group">
                                <label for="">Date d'entrée</label>
                                <input type='text' name="date_debut" value="<?= avoirInput("date_debut") ?>" required class="form-control checkin-date" placeholder="Date d'entrée" />
                            </div>
                            <div class="form-group">
                                <label for="">Date de départ</label>
                                <input type='text' name="date_fin"  value="<?= avoirInput("date_fin") ?>" required class="form-control checkin-date" placeholder="Date de depart" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="book_tabel_item">
                            <div class="form-group mt-4">
                                <select class="form-control" <?= isset($_GET['id'])? "disabled": "" ?> name="chambre_id" required>
                                    <label for="" class="text-white">Chambre</label>
                                    <option value="">Veuillez selectionner un chambre</option>
                                    <?php foreach ($chambres as $c) : ?>
                                        <option value="<?= $c->id ?>" <?= (isset($chambre) && $chambre->id == $c->id) || avoirInput("chambre_id") ? 'selected' : ''  ?>><?= $c->nom ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="reserver" class="book_now_btn mt-3 button_hover">Reservez maintenant</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endif; ?>