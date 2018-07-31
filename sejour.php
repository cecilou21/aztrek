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
                            <td>
                                <form action="">
                                    <input type="number" placeholder="nombre de places">
                                    <button type="submit">Je reserve</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
        </div>
        
        
    </div>



</section>



<?php get_footer(); ?>


