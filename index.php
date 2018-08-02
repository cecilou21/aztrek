<?php

require_once 'lib/functions.php';
require_once 'model/database.php';
require_once 'layout/header.php';

$sejours = getAllSejourWithPrice();
$destinations = getAllEntities("destination");
$activites = getAllEntities("activite");
?>



<section class="section1 owl-carousel owl-theme">
    <?php foreach ($destinations as $destination) : ?>
    <article class="section1__country mexique">
        
        <div class="container">
            <div class="item-infos">
                <h2><?php echo $destination["libelle"]; ?></h2>
                <p><?php echo $destination["description"]; ?></p>
            </div>
            <a href="destinations.php?id=<?php echo $destination["id"]; ?>" class="btn btn-section1">Voir les treks</a>

        </div>
        <div class="item-img">
            <a href="destinations.php?id=<?php echo $destination["id"]; ?>">
                <img src="uploads/<?php echo $destination["image"]; ?>" alt="mexique" />
            </a>
        </div>
    </article>
    <?php endforeach; ?>
    

</section>



<section class="section2">
    <h3>Les nouveaux treks</h3>
    <div class="section2-contents container">
                <?php for($i = 0; $i <= 2; $i = $i + 1) : ?> 
                <?php $sejour = $sejours[$i];  ?>   
                   

        <div class="section2-item">
            <figure>
                <div class="section2-itembox">
                    <img src="uploads/<?php echo $sejour["image"]; ?>" alt="brume">
                    <p>à partir de
                        <span><?php echo $sejour["prix"]; ?> €</span>
                    </p>
                </div>

                <figcaption>
                    <?php echo $sejour["titre"]; ?>
                </figcaption>
            </figure>

            <div class="section2-btnlike">
                <a href="sejour.php?id=<?php echo $sejour["id"]; ?>" class="btn">Voir le trek</a>
                <a href="#">
                    <img src="images/Pictos/like.png" alt="like" class="section2-like">
                </a>
            </div>
            
        </div>
        <?php endfor; ?>

        

    </div>

</section>

<section class="section3">
      <h3>Vos activités</h3>
      
      <div class="section3-contents container owl-carousel">
        <?php foreach ($activites as $activite): ?>
        <a href="activites.php?id=<?php echo $activite["id"]; ?>">
            <img src="uploads/<?php echo $activite["image"]; ?>" alt="trek">
          <p><?php echo $activite["libelle"]; ?></p>
        </a>
        
        <?php endforeach; ?>
      </div>
      
    </section>

<section class="section4 container">
    <div class="section4-left">
        <img src="uploads/volcan2.jpg" alt="volcan">
        <a href="#" class="btn">Voir la destination</a>
    </div>

    <div class="section4-right">
        <h3>Devinette</h3>
        <p>C’est une situation instable,
            <br>Un caractère impétueux,
            <br>Une montagne très capable;
            <br>D’ensevelir jeunes et vieux.
            <br>
            <br> Qui est-il ?
        </p>
        <a href="#" class="btn">Voir la réponse</a>

    </div>

</section>

<section class="section5">
    <h3>vos réseaux sociaux</h3>
    <div class="section5-contents">
        <div class="container">
            <p>Inscivez-vous sur nos réseaux Aztrek pour partager vos photos, trouver des compagnons de route et raconter vos
                plus belles anecdotes de treks.
            </p>

            <div class="section5-items">

                <article class="section5-item">
                    <a href="#">
                        <img src="uploads/volcanchateau2.jpg" alt="photovolcan" class="section5-img">
                    </a>
                    <a href="#">
                        <img src="images/Pictos/instrek.png" alt="" class="section5-RS"> INSTREK</a>
                </article>

                <article class="section5-item">
                    <a href="#">
                        <img src="uploads/trekgroup2.jpg" alt="photorandonnée" class="section5-img">
                    </a>
                    <a href="#">
                        <img src="images/Pictos/trinder.png" alt="" class="section5-RS"> TRINDER</a>
                </article>

                <article class="section5-item">
                    <a href="#">
                        <img src="uploads/lezard2.jpg" alt="lezard" class="section5-img">
                    </a>
                    <a href="#">
                        <img src="images/Pictos/facetrek.png" alt="" class="section5-RS"> FACETREK</a>
                </article>

            </div>
        </div>

    </div>
    <div class="section5-btn">
        <a href="#" class="btn">S'inscrire</a>
    </div>

</section>

<section class="section6 container">

    <div class="section6-text">
        <h3>qui sommes nous?</h3>
        <p>L’équipe « au bureau » est avant tout composée de créatifs faiseurs de voyages, dont la tâche est aussi incalculable
            que délicate. S’ils sont aptes à vendre un voyage, c’est parce qu’ils sont eux-mêmes des voyageurs et des guides.
            De ceux qui usent leurs bottes aux quatre coins du monde. Et dont le soutien est indispensable, et l’efficacité
            redoutable.
        </p>
    </div>

    <aside class="section6-aside">
        <img src="uploads/group2.jpg" alt="equipe">

    </aside>
</section>


<?php get_footer(); ?>