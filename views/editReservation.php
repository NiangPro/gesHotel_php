<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title row">
            <h2 class="title_color col-md-10">Edition de réservation</h2>
            <div class="col-md-2">
                <a href="?page=reservationAdmin" class="btn btn-warning btn-sm">Retour</a>
            </div>
        </div>
        <?php require_once("includes/getMessage.php"); ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Date d'entrée</label>
                <input type="date" class="form-control" value="<?= $r->date_debut ?>"  name="date_debut">
            </div>
            <div class="form-group">
                <label for="">Date de sortie</label>
                <input type="date" class="form-control" value="<?= $r->date_fin ?>"  name="date_fin">
            </div>
            <div class="form-group">
                <label for="">Client</label>
                <select name="client_id" id="" class="form-control">
                    <?php foreach($clients as $c): ?>
                        <option value="<?= $c->id ?>"  <?= $c->id == $r->client_id ? 'selected' : ''  ?> ><?= $c->prenom ?> <?= $c->nom ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Chambres</label>
                <select name="chambre_id" id="" class="form-control">
                    <?php foreach($chambres as $c): ?>
                        <option value="<?= $c->id ?>"  <?= $c->id == $r->chambre_id ? 'selected' : ''  ?> ><?= $c->nom ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Statut</label>
                <select name="statut" id="" class="form-control">
                    <option value="0" <?= $r->statut == 0 ? 'selected' : '' ?> >En attente</option>
                    <option value="1" <?= $r->statut == 1 ? 'selected' : '' ?> >Validée</option>
                    <option value="2" <?= $r->statut == 2 ? 'selected' : '' ?> >Rejetée</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success" name="modifier">Modifier</button>
        </form>
    </div>
</section>