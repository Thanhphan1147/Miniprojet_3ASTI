<div class="detail" style = "border: 3px solid blue; border-radius: 5px; width: 50%">
    <?php
        foreach ($prod as $prod)
            echo '<img src="img/'. $prod->img .'" alt="Placeholder goes here" style = "max-width:100%; max-height:100%;">';
            echo $prod->description;
    ?>
    <br><a href="index.php">Affiche les autres produits</a>
</div>