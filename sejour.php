<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$sejour = getSejour($id);
$list_departs = getAllDepartBySejour($id);

get_header($sejour['titre']);
?>

<section class="container">

    <h1 class="action_title"><?php echo $sejour['titre']; ?></h1>



    <div class="sejourbloc">
        
        <img src="uploads/<?php echo $sejour["image"]; ?>" alt="<?php echo $sejour["titre"]; ?>" class="actions">
        <div class="sejourinfo">
            <p><strong>Votre séjour: </strong><br><br> <?php echo $sejour["description"]; ?></p>
            <div class="sejourdetail">
                <p>Nombre de jours: <?php echo $sejour["nb_jours"]; ?></p>
                <p>Destination: <?php echo $sejour["destination"]; ?></p>
            </div>
            <div class="depart_table">
            <table class="table table-striped table-bordered table-hover">

                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Prix</th>
                        <th>Nombre de places</th>
                        <th>Places restantes</th>
                        <th>Réservation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_departs as $depart) : ?>
                        <tr>
                            <td><?php echo $depart["date_depart"]; ?></td>
                            <td><?php echo $depart["prix"]; ?></td>
                            <td><?php echo $depart["places_totales"]; ?></td>
                            <td><?php echo $depart["places_restantes"]; ?></td>
                             <?php if ($depart["places_restantes"] > 0) : ?>
                                <td>
                                    <form action="crud/insert_reservation.php" method="POST" >
                                        <input type="hidden" name="sejour_id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="depart_id" value="<?php echo $depart['id']; ?>">
                                        <input class="input_nb_places" type="number" name="nb_places" placeholder="nombre de places" min="0" max="<?php echo $depart['places_restantes']; ?>">
                                        <button type="submit">Je reserve</button>
                                    </form>
                                </td>
                                <?php else : ?>
                                    <td>
                                        Aucune place disponible
                                    </td>
                                <?php endif; ?>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (isset($_GET["reservation_envoye"]) ) : ?>
                <div>Votre réservation a bien été enregistrée, vous serez recontacté pour la validation</div>
            <?php endif; ?>

        </div>
        </div>
        
        
    </div>

    

</section>



<?php get_footer(); ?>


