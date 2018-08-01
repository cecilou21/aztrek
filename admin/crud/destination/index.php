<?php
require_once '../../../model/database.php';

$list_destinations = getAllEntities("destination");

require_once '../../layout/header.php';
?>

<h1>Gestion des Destinations</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th>Libellé</th>
           
            <th>Image</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_destinations as $destination) : ?>
            <tr>
                <td><?php echo $destination["libelle"]; ?></td>
                <td><img src="<?php echo SITE_URL ."/uploads/" . $destination["image"]; ?>" alt="" class="img-thumbnail"></td>
                <td><?php echo $destination["description"]; ?></td>
                <td class="col-actions">
                    <form action="delete_query.php" method="post" class="form-delete">
                        <input type="hidden" name="id" value="<?php echo $destination["id"]; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    <a href="update_form.php?id=<?php echo $destination["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>