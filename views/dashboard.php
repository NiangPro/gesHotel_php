<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title row">
            <h2 class="title_color col-md-10">Liste des employés</h2>
            <div class="col-md-2">
                <a href="?page=employeAdmin&type=add" class="btn btn-success"><i class="fa fa-plus"></i>Ajouter</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <canvas id="graphiqueReservations"></canvas>
    </div>
</section>
    
<script>
    // Récupère les données PHP dans JavaScript
    var montantReservationsParMois = <?php echo json_encode($montantReservationsParMois); ?>;

    // Convertit les clés et les valeurs en tableaux séparés
    var mois = Object.keys(montantReservationsParMois);
    var montants = Object.values(montantReservationsParMois);

    // Crée le graphique avec Chart.js
    var ctx = document.getElementById('graphiqueReservations').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: mois,
            datasets: [{
                label: 'Montant des réservations par mois',
                data: montants,
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Couleur de fond
                borderColor: 'rgba(54, 162, 235, 1)', // Couleur de la bordure
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>