<!-- 
<div class="detail" style = "border: 3px solid blue; border-radius: 5px; width: 50%">
   
    <?php
        // foreach ($prod as $prod)
        //     echo '<img src="img/'. $prod->img .'" alt="Placeholder goes here" style = "max-width:100%; max-height:100%;">';
        //     echo $prod->description;
    ?>
    <br><a href="index.php">Affiche les autres produits</a>
</div> -->

<?php foreach ($prod as $prod): ?>

<div class="card" style="width: 20rem;">
    <img src="/stock/img/<?= $prod->img ?>" class="card-img-top" alt="<?= $prod->name ?>" style = "max-width:100%; max-height:100%;">
    <h3 class="card-title"><?= $prod->name ?></h3>
    <p class="card-text"><?= $prod->description ?></p>

    <a href="index.php" class = "btn btn-primary">Affiche les autres produits</a>
</div>

<?php endforeach ?>