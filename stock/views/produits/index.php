<?php foreach ($prod as $prod): ?>
	<div class="order" style="margin-left: 0px;">
		
		<a  href="#">
            <?php
                // echo '<img src =/stock/img/'.$prod->img.'>';
                echo '
                <h2>'. $prod->name .'</h2>
                <div class="container" style="width: 300px;height: 300px;background-image: url(/stock/img/'. $prod->img .');background-size: 300px 300px;">
                    <div class="order_info">
                        <h3>'. $prod->description .' </h3>
                        <div class="info">
                            <h3>'. $prod->price .'$ </h3>
                            <span class="see_details">See order details...</span>
                        </div>
                    </div>
                </div>';
            ?>
		</a>
	</div>
<?php endforeach ?>