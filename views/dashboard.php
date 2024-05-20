<section class="blog_categorie_area">
            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="assets/image//blog/cat-post/cat-post-3.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5><?= $nbreDeClients ?></h5></a>
                                    <div class="border_line"></div>
                                    <p>Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="assets/image//blog/cat-post/cat-post-2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5><?= $recettesMensuelles ?> FCFA</h5></a>
                                    <div class="border_line"></div>
                                    <p>Recettes Mensuelles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="assets/image//blog/cat-post/cat-post-1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5><?= $nombreChambre ?></h5></a>
                                    <div class="border_line"></div>
                                    <p>Chambres</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    <div class="container">
        <h1 class="text-center">Comptabilité Générale</h1>
        <canvas id="graphiqueReservations"></canvas>
    </div>
</section>
<script>
    // Récupère les données PHP dans Javascript 
    var montantReservationsParMois = <?= json_encode($montantReservationsParMois) ?>

    // convertit les clés et les valeurs en tableaux séparés 
    var mois = Object.keys(montantReservationsParMois);
    var montants = Object.values(montantReservationsParMois);

    // crée le graphique avec chart.js 
    var ctx= document.getElementById("graphiqueReservations").getContext("2d");

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: mois,
            datasets: [{
                label: 'Montant des réservations par mois',
                data: montants,
                backgroundColor: 'orange',
                borderColor: 'cyan',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y:{
                    beginAtZero: true
                }
            }
        }
    });
</script>