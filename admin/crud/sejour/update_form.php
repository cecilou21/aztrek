<?php
require_once '../../../model/database.php';
require_once '../../../lib/functions.php';

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

$list_activites = getAllEntities("activite");

require_once '../../layout/header.php'; ?>

<h1>Modifier un séjour</h1>
<hr>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-8">
            <input type="text" name="titre" value="<?php  echo $sejour["titre"]; ?>" class="form-control" placeholder="Titre">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo$sejour['image']; ?>" class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-7">
            <input type="file" name="image" accept="images/*" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-8">
            <textarea name="description" class="form-control"><?php echo $sejour["description"]; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de jours</label>
        <div class="col-sm-8">
            <input type="number" name="nb_jours" value="<?php  echo $sejour["nb_jours"]; ?>"class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de création</label>
        <div class="col-sm-8">
            <input type="date" name="date_creation" value="<?php  echo $sejour["date_creation"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Question</label>
        <div class="col-sm-8">
            <textarea name="question" class="form-control"><?php echo $sejour["question"]; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Réponse</label>
        <div class="col-sm-8">
            <textarea name="reponse" class="form-control"><?php echo $sejour["reponse"]; ?></textarea>
        </div>
    </div>
    
    <!-- mettre la meme div qu'en dessous pour la destination -->
    
    
    <!-- Database ko car activite_id n'est pas dans la table projet???????????????? -->
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Activité</label>
        <div class="col-sm-8">
            <select name="activite_id" class="form-control">
                <?php foreach ($list_activites as $activite) : ?>
                    <?php $selected = ($activite["id"] == $sejour["activite_id"]) ? "selected" : ""; ?>
                <option value="<?php echo $activite["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $activite["libelle"]; ?>
                </option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
    
</form>
<?php require_once '../../layout/footer.php'; ?>
