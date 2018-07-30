<?php
require_once 'lib/functions.php';
require_once 'model/database.php';


get_header("Accueil");
?>

    <section class="section1 owl-carousel owl-theme">

      <article class="section1__country mexique">

        <div class="container">
          <div class="item-infos">
            <h2>Le Mexique</h2>
            <p>Trois treks sur mesure à découvrir</p>
          </div>
          <a href="#" class="btn btn-section1">Voir les treks</a>

        </div>
        <div class="item-img">
          <a href="#">
            <img src="uploads/villagesoleil2.jpg" alt="mexique" />
          </a>
        </div>
      </article>

      <article class="section1__country guatemala">
        <div class="container">
          <div class="item-infos">

            <h2>Le Guatémala</h2>
            <p>Cinq séjours inoubliables</p>

          </div>
          <a href="#" class="btn btn-section1">Voir les treks</a>
        </div>
        <div class="item-img">
          <a href="#">
            <img src="uploads/montagnebrume2.jpg" alt="mexique" />
          </a>
        </div>
      </article>

      <article class="section1__country salvador">
        <div class="container">
          <div class="item-infos">

            <h2>Le Salvador</h2>
            <p>Trois treks à vous couper le souffle</p>

          </div>
          <a href="#" class="btn btn-section1">Voir les treks</a>
        </div>
        <div class="item-img">
          <a href="#">
            <img src="uploads/rueflaque2.jpg" alt="salvador" />
          </a>
        </div>
      </article>

      <article class="section1__country honduras">
        <div class="container">
          <div class="item-infos">
            <h2>Le Honduras</h2>
            <p>Deux périples à travers le pays</p>

          </div>
          <a href="#" class="btn btn-section1">Voir les treks</a>
        </div>
        <div class="item-img">
          <a href="#">
            <img src="uploads/desert2.jpg" alt="honduras" />
          </a>
        </div>
      </article>

      <article class="section1__country honduras">
        <div class="container">
          <div class="item-infos">
            <h2>Le Costa Rica</h2>
            <p>A la découverte des cultures latines</p>

          </div>
          <a href="#" class="btn btn-section1">Voir les treks</a>
        </div>
        <div class="item-img">
          <a href="#">
            <img src="uploads/femmerose2.jpg" alt="costa-rica" />
          </a>
        </div>
      </article>

    </section>
    <!--================deamnder à Pierre pouir plain écran et les ptits points=========================-->

    <section class="section2">
      <h3>Les nouveaux treks</h3>
      <div class="section2-contents container">

        <div class="section2-item">
          <figure>
            <div class="section2-itembox">
              <img src="uploads/cactusbrume2.jpg" alt="brume">
              <p>à partir de
                <span>999€</span>
              </p>
            </div>

            <figcaption>
              Le Guatemala entre nature et aventure
            </figcaption>
          </figure>

          <div class="section2-btnlike">
            <a href="#" class="btn">Voir les treks</a>
            <a href="#">
              <img src="images/Pictos/like.png" alt="like" class="section2-like">
            </a>
          </div>

        </div>

        <div class="section2-item">
          <figure>
            <div class="section2-itembox">
              <img src="uploads/randonne2.jpg" alt="randonnee">
              <p>à partir de
                <span>1200€</span>
              </p>

            </div>
            <figcaption>
              A la découverte du Honduras à pieds
            </figcaption>
          </figure>

          <div class="section2-btnlike">
            <a href="#" class="btn">Voir les treks</a>
            <a href="#">
              <img src="images/Pictos/like.png" alt="like" class="section2-like">
            </a>
          </div>

        </div>

        <div class="section2-item">
          <figure>
            <div class="section2-itembox">
              <img src="uploads/velocamping2.jpg" alt="velo">
              <p>à partir de
                <span>1900€</span>
              </p>
            </div>
            <figcaption>
              Randonnée à vélo à travers le Salvador
            </figcaption>
          </figure>

          <div class="section2-btnlike">
            <a href="#" class="btn">Voir les treks</a>
            <a href="#">
              <img src="images/Pictos/like.png" alt="like" class="section2-like">
            </a>
          </div>

        </div>

      </div>

    </section>

    <section class="section3">
      <h3>Vos activités</h3>
      <div class="section3-contents container owl-carousel">

        <a href="#">
          <img src="images/Pictos/trekking.png" alt="trek">
          <p>à pied</p>
        </a>
        <a href="#">
          <img src="images/Pictos/river.png" alt="escalade">
          <p>escalade</p>
        </a>
        <a href="#">
          <img src="images/Pictos/bike.png" alt="vélo">
          <p>vélo</p>
        </a>
        <a href="#">
          <img src="images/Pictos/desert.png" alt="désert">
          <p>désert</p>
        </a>
        <a href="#">
          <img src="images/Pictos/forest.png" alt="nature">
          <p>nature</p>
        </a>
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