<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Blogs</h2>
            <ol class="breadcrumb">
                <li><a href="?page=home">Accueil</a></li>
                <li class="active">Blogs</li>
            </ol>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="row">
            <?php foreach($blogs as $b): ?>
            <div class="blog_post col-md-4" style="box-shadow: 1px 1px 3px #ccc, -1px -1px 3px #ccc;">
                <img src="images/<?= $b->image ?>" width="100%" height="250px" alt="">
                <div class="blog_details">
                    <a href="#"><h2><?= $b->titre ?></h2></a>
                    <p><?= substr($b->description, 0, 90)  ?>...</p>
                    <a href="?page=blogDetail&id=<?= $b->id ?>" class="view_btn button_hover">Voir plus</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php piedPagination($totalPage, $pageActuelle); ?>
    </div>
</section>
<!--================ Accomodation Area  =================-->