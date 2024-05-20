<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title row">
            <h2 class="title_color col-md-10">Liste des réservations</h2>
            <div class="col-md-2">
            <a href="#" onclick="exporter('print')" class="btn btn-secondary"><i class="fa fa-print"></i>Exporter</a>

            </div>
        </div>
        <?php require_once("includes/getMessage.php"); ?>
        <div id="print">
            <table id="myTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Telephone</th>
                        <th>Chambre</th>
                        <th>Date d'entrée</th>
                        <th>Date de départ</th>
                        <th>Montant</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($reservations as $r): ?>
                        <tr>
                            <td><?= $r->reference ?></td>
                            <td><?= $r->prenomclient ?></td>
                            <td><?= $r->nomclient ?></td>
                            <td><?= $r->tel ?></td>
                            <td><?= $r->nomchambre ?></td>
                            <td><?= date("d/m/Y",strtotime($r->date_debut)) ?></td>
                            <td><?= date("d/m/Y",strtotime($r->date_fin)) ?></td>
                            <td><?= $r->prix_total ?> F CFA</td>
                            <td class="text-center h6">
                                <?php if($r->statut == 0): ?>
                                    <span class="text-primary">En attente</span>
                                <?php elseif($r->statut == 1): ?>
                                    <span class="text-success">Validée</span>
                                <?php else: ?>
                                    <span class="text-danger">Rejetée</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($r->statut == 0): ?>
                                    <a href="?page=reservationAdmin&type=valider&id=<?= $r->id ?>" class="btn btn-sm btn-success" title="Valider"><i class="fa fa-check"></i></a>
                                    <a href="?page=reservationAdmin&type=rejeter&id=<?= $r->id ?>" class="btn btn-sm btn-danger" title="Rejeter"><i class="fa fa-close"></i></a>
                                <?php endif; ?>
                                <a href="?page=reservationAdmin&type=edit&id=<?= $r->id ?> " title="editer" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            </td>
    
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>