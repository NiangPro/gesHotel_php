<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Détails Blog</h2>
            <ol class="breadcrumb">
                <li><a href="?page=blog">Blog</a></li>
                <li class="active">Détails Blog</li>
            </ol>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <h1><?= $b->titre ?></h1>
        <div class="row">
            <div class="feature-img col-md-8">
                <img class="img-fluid" src="images/<?= $b->image ?>" style="width:100%;height:500px" alt=""><br>
                <p class="mt-3"><?= $b->description ?></p>
            </div>
            <aside class="single_sidebar_widget popular_post_widget col-md-4">
                <h3 class="widget_title">Blogs récents</h3>
                <?php foreach($blogs as $key => $bl): ?>
                    <?php if($key <= 6 && $bl->id != $b->id ): ?>
                <div class="media post_item">
                    <img src="images/<?= $bl->image ?>" width="60%" height="90px" alt="post">
                    <div class="media-body">
                        <a href="?page=blogDetail&id=<?= $bl->id ?>"><h6><?= $bl->titre ?></h6></a>
                    </div>
                </div><br>
                <?php endif; ?>
                <?php endforeach; ?>
                
                <div class="br"></div>
            </aside>
            
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->