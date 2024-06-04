<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Chambres</h2>
            <ol class="breadcrumb">
                <li><a href="?page=home">Accueil</a></li>
                <li class="active">Chambre</li>
            </ol>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Liste des chambres</h2>
        </div>
        <div class="row mb_30">
            <?php foreach ($chambres as $c) : ?>
                <div class="col-lg-4 col-sm-6" id="<?= $c->id ?>">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="images/<?= $c->image ?>" width="100%" height="270" alt="">
                            <?php if ($c->statut == 0) : ?>
                                <a href="?page=reservation&id=<?= $c->id ?>" class="btn theme_btn button_hover">Reservez</a>
                            <?php else : ?>
                                <a href="?page=reservation&id=<?= $c->id ?>" class="btn theme_btn btn-danger button_hover">Occupée <br> jusqu'à <br> <?= date("d/m/Y", strtotime(dateFin($c->id))) ?></a>
                            <?php endif; ?>
                        </div>
                        <a href="?page=detailChambre&id=<?= $c->id ?>">
                            <h4 class="sec_h4"><?= $c->nom ?></h4>
                        </a>
                        <h5><?= $c->prix ?>FCFA<small>/jour</small></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php piedPagination($totalPages, $pageActuelle);  ?>
    </div>
</section>
<!--================ Accomodation Area  =================-->