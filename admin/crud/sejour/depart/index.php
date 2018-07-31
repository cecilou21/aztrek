<?php
require_once '../../../model/database.php';


$list_departs = getAllDepartBySejour($id);
?>

<h2>Gestion des Départs</h2>

<a href="depart/insert_form.php?sejour_id=<?php echo $id; ?>" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th>Date</th>
            <th>Prix</th>
            <th>Nombre de places</th>
            <th>Places restantes</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_departs as $depart) : ?>
            <tr>
                <td><?php echo $depart["date_depart"]; ?></td>
                <td><?php echo $depart["prix"]; ?></td>
                <td><?php echo $depart["places_totales"]; ?></td>
                <td><?php echo $depart["places_restantes"]; ?></td>
                <td class="col-actions">
                    <form action="depart/delete_query.php" method="post" class="form-delete">
                        <input type="hidden" name="id" value="<?php echo $depart['id']; ?>">
                        <input type="hidden" name="sejour_id" value="<?php echo $depart['sejour_id']; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    <a href="depart/update_form.php?id=<?php echo $depart["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
