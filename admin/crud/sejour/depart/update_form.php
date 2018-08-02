<?php
require_once '../../../../model/database.php';
require_once '../../../../lib/functions.php';

$id = $_GET["id"];
$sejour_id = $_GET["sejour_id"];
$depart = getOneEntity("depart", $id);

$list_departs = getAllEntities("activite");

require_once '../../../layout/header.php'; ?>

<h1>Modifier un départ</h1>
<hr>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de départ</label>
        <div class="col-sm-8">
            <input type="date" name="date_depart" value="<?php  echo $depart["date_depart"]; ?>" class="form-control" placeholder="Date de départ">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-8">
            <input type="number" name="prix" value="<?php  echo $depart["prix"]; ?>" class="form-control" placeholder="Prix">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de places</label>
        <div class="col-sm-8">
            <input type="number" name="places_totales" value="<?php  echo $depart["places_totales"]; ?>" class="form-control" placeholder="Nombre de places">
        </div>
    </div>
    
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="sejour_id" value="<?php echo $sejour_id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
    
</form>
<?php require_once '../../../layout/footer.php'; ?>
