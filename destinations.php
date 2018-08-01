<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $list_sejours = getAllSejourByDestination($id);
}

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

<section class="container list-sejour">
    <div class="actions">
    <?php if (isset($list_sejours)) : ?>
        <?php foreach ($list_sejours as $sejour): ?>
            <article class="action image-sejour">
                <a href="sejour.php?id=<?php echo $sejour["id"]; ?>"><img src="uploads/<?php echo $sejour["image"]; ?>" alt="imagesejour"></a>
                <div class="overlay">
                    <div class="info">
                        <h3><?php echo $sejour["titre"]; ?></h3>
                    </div>

                </div>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
    
</section>

<?php get_footer(); ?>
