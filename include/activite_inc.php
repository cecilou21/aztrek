

<article class="action activite">
    
    <a href="activites.php?id=<?php echo $activite["id"]; ?>">
        <img src="uploads/<?php echo $activite["image"]; ?>" alt="<?php echo $activite["libelle"]; ?>">

        <div class="overlay">
            <div class="info">
                <h3><?php echo $activite["libelle"]; ?></h3>
            </div>
            
        </div>
    </a>
</article>