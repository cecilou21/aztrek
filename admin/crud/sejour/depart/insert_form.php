<?php

require_once '../../../model/database.php';

$list_departs = getAllEntities("depart");

require_once '../../layout/header.php'; ?>

<h1>Ajouter un départ</h1>
<hr>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de départ</label>
        <div class="col-sm-8">
            <input type="date" name="titre" class="form-control" placeholder="Titre">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-8">
            <input type="number" name="prix" class="form-control" placeholder="Prix">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de places</label>
        <div class="col-sm-8">
            <input type="number" name="places_totales"  class="form-control" placeholder="Nombre de places">
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
    
</form>
<?php require_once '../../layout/footer.php'; ?>
