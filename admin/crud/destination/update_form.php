<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$destination = getOneEntity("destination", $id);
require_once '../../layout/header.php'; ?>

<h1>Modifier une destination</h1>
<hr>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Libellé</label>
        <div class="col-sm-8">
            <input type="text" name="libelle" value="<?php echo $destination["libelle"]; ?>" class="form-control" placeholder="Libellé" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-8">
            <input type="text" name="description" value="<?php echo $destination["description"]; ?>" class="form-control" placeholder="Description" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-1">
            <img src="../../../images/Photos/<?php echo $destination['image']; ?>" class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-7">
            <input type="file" name="image" accept="images/*" class="form-control">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
    
</form>
<?php require_once '../../layout/footer.php'; ?>
