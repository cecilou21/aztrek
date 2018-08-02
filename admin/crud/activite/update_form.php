<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$activite = getOneEntity("activite", $id);
require_once '../../layout/header.php'; ?>

<h1>Modifier une activité</h1>
<hr>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Libellé</label>
        <div class="col-sm-8">
            <input type="text" name="libelle" value="<?php echo $activite["libelle"]; ?>" class="form-control" placeholder="Libellé" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $activite['image']; ?>" class="img-responsive img-thumbnail">
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
