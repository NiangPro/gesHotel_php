<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover row">
            <h2 class="page-cover-tittle col-md-10"><?= $title ?></h2>
            <div class="col-md-2 text-right">
                <?php if(isset($_GET["type"])): ?>
                    <a href="?page=blogAdmin" class="btn btn-warning">Retour</a>
                <?php else: ?>
                    <a href="?page=blogAdmin&type=add" class="btn btn-success">Ajouter</a>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <?php require_once("includes/getMessage.php"); ?>

        <?php if(isset($_GET["type"])): ?>
        <?php require_once("views/ajoutBlog.php"); ?>
        <?php else: ?>
        <table class="table table-bordered table-striped" id="myTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($blogs as $b) : ?>
                        <tr>
                            <td><img src="images/<?= $b->image ?>" width="100" height="50" alt=""></td>
                            <td><?= $b->titre ?></td>
                            <td><?= nl2br($b->description) ?></td>
                            
                            <td>
                                <a href="?page=blogAdmin&type=edit&id=<?= $b->id ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $b->id ?>"><i class="fa fa-trash"></i></a>
                            </td>
    
                            <div class="modal fade" id="exampleModal<?= $b->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                            <a href="?page=blogAdmin&idDeleting=<?= $b->id ?>" class="btn btn-danger">Oui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>

    </div>
</section>
<!--================ Accomodation Area  =================-->