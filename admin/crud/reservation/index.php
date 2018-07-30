<?php
require_once '../../../model/database.php';

$list_reservations = getAllEntities("reservation");

require_once '../../layout/header.php';
?>

<h1>Gestion des Reservations</h1>



<hr>

<table class="table table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th>Départ</th>
            <th>Utilisateur</th>
            <th>Nombre de places</th>
            <th>Date de reservation</th>
            <th>Validation</th>
            <th>Action</th>


        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_reservations as $reservation) : ?>
            <tr>
                <td><?php echo $reservation["depart_id"]; ?></td>
                <td><?php echo $reservation["utilisateur_id"]; ?></td>
                <td><?php echo $reservation["nb_places"]; ?></td>
                <td><?php echo $reservation["date_creation"]; ?></td>
                <td>
                    <form action="update_query.php" method="post" class="form-validate">
                        <input type="hidden" name="id" value="<?php echo $reservation["id"]; ?>">
                        
                        <?php if ($reservation["validation"]) : ?>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check-circle"></i>
                            </button>
                        
                        <?php else: ?>
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-times-circle"></i>
                            </button>
                        <?php endif; ?>
                    </form>
                </td>



                <td class="col-actions">
                    <form action="delete_query.php" method="post" class="form-delete">
                        <input type="hidden" name="id" value="<?php echo $reservation["id"]; ?>">
                        <button type="submit" class="btn btn-danger flex-right">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>