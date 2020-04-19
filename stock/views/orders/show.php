<!-- views/orders/show.php -->

<div style="clear:left">
    <br />
    <h2>Order Number: <?= $myorder->orderid ?></h2>
</div>


<div class="date">Order Date: <?= $myorder->date ?></div>
<div class="body">
   Total Amount: $<?= $myorder->amount ?><br/>
    Order Status: <?= $myorder->order_status ?><br/>
    Client ID: <?= $myorder->customerid ?><br/>
    Client : <?= $myorder->ship_name ?><br/>
    Address: <?= $myorder->ship_address ?><br/>
    <?= $myorder->ship_city ?><br/>
    <?= $myorder->ship_state ?><br/>
    <?= $myorder->ship_zip ?><br/>
    <?= $myorder->ship_country ?><br/>

</div>


