<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$destinations = getAllEntities("destination");

get_header("Liste des destinations");
?>

<section class="container">
    <h1 class="action_title">LES DESTINATIONS</h1>
    <div class="actions">
        <?php foreach ($destinations as $destination) : ?>
            <?php include 'include/destination_inc.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
