

<?php

//a copier pour les séjours

require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}
$id = $_GET["id"];

$activite = getOneEntity("activite", $id);
$list_sejours = getAllSejourByCategorie($id);

get_header($activite['libelle']);
?>


<section class="container">
    <h1><?php echo $activite['libelle']; ?></h1>
    <aside class="list-users">
        <?php foreach ($list_sejours as $sejour): ?>
        <article>
            <img src="<?php echo $sejour["image"]; ?>" alt="imagesejour">
            <div class="overlay">
                <div class="info">
                    <h3><?php echo $sejour["titre"]; ?></h3>
                </div>
            
             </div>
        </article>
    <?php endforeach; ?>
     </aside>
    
</section>

<?php get_footer(); ?>
