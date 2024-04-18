<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Votre porte d'entrée vers le luxe et le confort</h6>
                <h2>Réservez, détendez-vous et voyagez</h2>
                <p class="h5">
                    Plongez dans un océan de choix, où chaque établissement promet des services 
                    de qualité supérieure, des chambres élégamment aménagées et des expériences culinaires exquises. <br>
                    Notre plateforme conviviale vous permet de naviguer en toute simplicité, de découvrir les offres exclusives 
                    et de réserver en quelques clics seulement.
                </p>
                <a href="?page=reservation" class="btn theme_btn button_hover">Réservez</a>
            </div>
        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Chambres</h2>
        </div>
        <div class="row mb_30">
            <?php foreach ($chambres as $key => $c) : ?>
                <!-- les 4 dernieres chambres  -->
                <?php if ($key < 4) : ?>
                    <div class="col-lg-3 col-sm-6" id="<?= $c->id ?>">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="images/<?= $c->image ?>" height="270" alt="">
                                <?php if ($c->statut == 0) : ?>
                                    <a href="?page=reservation&id=<?= $c->id ?>" class="btn theme_btn button_hover">Reservez</a>
                                <?php else : ?>
                                    <button disabled disa class="btn theme_btn btn-danger button_hover">Occupée</button>
                                <?php endif; ?>
                            </div>
                            <a href="?page=detailChambre&id=<?= $c->id ?>">
                                <h4 class="sec_h4"><?= $c->nom ?></h4>
                            </a>
                            <h5><?= $c->prix ?> FCFA<small>/jour</small></h5>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Royal Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">Notre Mission & Vision</h2>
                    <p>
                        Chez Kawsara, notre engagement est de faire de chaque voyage une expérience mémorable.
                        Laissez-nous vous guider versdes destinations envoûtantes, où le luxe 
                        se mêle à la chaleur de l'accueil. Rejoignez-nous dans cette aventure et laissez-nous 
                        transformer vos voyages en souvenirs inoubliables. Bienvenue chez Kawsara, où le monde 
                        vous attend avec élégance.
                    </p>
                    <a href="?page=register" class="button_hover theme_btn_two">Créer un compte</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="assets/image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->

<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Testimonial from our Clients</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="testimonial_slider owl-carousel">
            <div class="media testimonial_item">
                <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#">
                        <h4 class="sec_h4">Fanny Spencer</h4>
                    </a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#">
                        <h4 class="sec_h4">Fanny Spencer</h4>
                    </a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#">
                        <h4 class="sec_h4">Fanny Spencer</h4>
                    </a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="assets/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                    <a href="#">
                        <h4 class="sec_h4">Fanny Spencer</h4>
                    </a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Testimonial Area  =================-->

<!--================ Latest Blog Area  =================-->
<section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">latest posts from blog</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="assets/image/blog/blog-1.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Travel</a>
                            <a href="#" class="button_hover tag_btn">Life Style</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Low Cost Advertising</h4>
                        </a>
                        <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.</p>
                        <h6 class="date title_color">31st January,2018</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="assets/image/blog/blog-2.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Travel</a>
                            <a href="#" class="button_hover tag_btn">Life Style</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Creative Outdoor Ads</h4>
                        </a>
                        <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and fear are</p>
                        <h6 class="date title_color">31st January,2018</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="assets/image/blog/blog-3.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Travel</a>
                            <a href="#" class="button_hover tag_btn">Life Style</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">It S Classified How To Utilize Free</h4>
                        </a>
                        <p>Why do you want to motivate yourself? Actually, just answering that question fully can </p>
                        <h6 class="date title_color">31st January,2018</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Recent Area  =================-->