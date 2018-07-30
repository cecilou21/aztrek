<?php

require_once '../../../model/database.php';

$list_sejours = getAllEntities("sejour");

require_once '../../layout/header.php'; ?>

<h1>Ajouter un séjour</h1>
<hr>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-8">
            <input type="text" name="titre" class="form-control" placeholder="Titre">
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
            <textarea name="description"  class="form-control"></textarea>
    </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de jours</label>
        <div class="col-sm-8">
            <input type="number" name="nb_jours" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de création</label>
        <div class="col-sm-8">
            <input type="date" name="date_fin" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Question</label>
        <div class="col-sm-8">
            <textarea name="question"  class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Réponse</label>
        <div class="col-sm-8">
            <textarea name="reponse"  class="form-control"></textarea>
        </div>
    </div>
    
    
    
    
    <!-- Mettre la destination avant l'activité-->
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Destination</label>
        <div class="col-sm-8">
            <select name="destination" class="form-control">
                <?php foreach ($list_destinations as $destination) : ?>
                <option value="<?php echo $destination["id"]; ?>">
                        <?php echo $destination["libelle"]; ?>
                </option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>
    
    <!-- Dois je mettre la catégorie ici -->
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Activité</label>
        <div class="col-sm-8">
            <select name="activite" class="form-control">
                <?php foreach ($list_activites as $activite) : ?>
                <option value="<?php echo $activite["id"]; ?>">
                        <?php echo $activite["libelle"]; ?>
                </option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
    
</form>
<?php require_once 'depart/index.php'; ?>
<?php require_once '../../layout/footer.php'; ?>
