

<article class="action">
    
    <a href="destinations.php?id=<?php echo $destination["id"]; ?>">
        <img src="uploads/<?php echo $destination["image"]; ?>" alt="<?php echo $destination["libelle"]; ?>">

        <footer class="overlay">
            <div class="info">
                <h3><?php echo $destination["libelle"]; ?></h3>
            </div>
            <div class="more-info">
                <div class="action-info">
                    <?php echo $destination["description"]; ?>
                </div>
            </div>
        </footer>
    </a>
</article>
