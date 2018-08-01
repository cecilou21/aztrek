<?php
require_once '../../layout/header.php'; ?>

<h1>Ajouter une destination</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Libellé</label>
        <div class="col-sm-8">
            <input type="text" name="libelle" class="form-control" placeholder="Libellé">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-8">
            <input type="file" name="image" accept="images/*" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-8">
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
    
</form>
<?php require_once '../../layout/footer.php'; ?>
