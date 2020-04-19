<?php 
    echo '
    <h2 class="content-title">Nos Produits</h2>
    <div>
        <a href=/stock/index.php?controller=products&action=index>
        <p>Afiiche tous les produits</p>
    </div>'; 
?>
<div style="width: 1500px;">
<?php foreach ($prod as $prod): ?>
	<div class="order" style="margin-left: 0px;">
		
		<a  href="#">
            <?php
                // echo '<img src =/stock/img/'.$prod->img.'>';
                echo '
                <div class="order-info" style="width: 300px;height: 300px;background-image: url(/stock/img/'. $prod->img .');background-size: 300px 300px;">
                    <div style="border-style: solid; border-width: 3px; border-color: black; background-color: white">
                        <a href = "/stock/index.php?controller=products&action=show&catid='. $prod->catid .'">
                        <h3>'.$prod->catname. '</h3>   
                    </div>
                </div>
                <h2 style ="color: red;">'. $prod->name .'</h2>
                <h3>'. $prod->price .'$ </h3>
                <a class="see_details" href = "/stock/index.php?controller=products&action=detail&prodid='.$prod->prodid.'">See order details...</a>';
            ?>  
		</a>
	</div>
<?php endforeach ?>
</div>
