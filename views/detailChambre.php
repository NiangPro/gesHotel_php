<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Details de la chambre : <strong><?= ucwords($c->nom) ?></strong></h2>
            <ol class="breadcrumb">
                <li><a href="?page=home">Accueil</a></li>
                <li><a href="#">Chambres</a></li>
                <li class="active"><?= ucfirst($c->nom) ?></li>
            </ol>
        </div>
    </div>
</section>
<section class="blog_area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="images/<?= $c->image ?>" style="width:100%; height:350px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <ul class="blog_meta list_style">
                                <li><a href="#">Prix journalier<i class="lnr lnr-calendar-full"></i></a></li>
                                <li><a href="#"><?= $c->prix ?> FCFA<i class="lnr lnr-eye"></i></a></li>
                                <li><a href="#">
                                        <?php if ($c->statut == 1) : ?>
                                            <span class="badge badge-danger"> Occupée</span>
                                        <?php else : ?>
                                            <span class="badge badge-success"> Libre</span>
                                        <?php endif; ?>
                                        <i class="lnr lnr-bubble"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2><?= $c->nom ?></h2>
                        <p class="excert">
                            <?= nl2br($c->description) ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <?php if ($c->statut == 0) : ?>
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a href="?page=reservation&id=<?= $c->id ?>" class="btn btn-warning">Reserver</a>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                    <?php endif; ?>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Nouveautés</h3>
                        <?php foreach ($chambres as $key => $chambre) : ?>
                            <?php if ($key < 6 && $chambre->id != $c->id) : ?>
                                <div class="media post_item">
                                    <img src="images/<?= $chambre->image ?>" width="150" height="60" alt="post">
                                    <div class="media-body">
                                        <a href="?page=detailChambre&id=<?= $chambre->id ?>">
                                            <h3><?= $chambre->nom ?></h3>
                                        </a>
                                        <p><?= $chambre->prix ?> FCFA / jour</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <div class="br"></div>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>