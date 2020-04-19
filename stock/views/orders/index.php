<!-- views/orders/index.php -->


<!-- php ob_start()  -->



<table class="table-customer">
	<thead>
		<tr>
		<th scope="col">orderid</th>
		<th scope="col">customerid</th>
		<th scope="col">amount</th>
		<th scope="col">date</th>
		<th scope="col">order_status</th>
		</tr>
  	</thead>
	
	<tbody>
		<?php foreach ($orders as $order): ?>
			<tr>
			<td scope="row"><?= $order->orderid ?></th>
			<td><?= $order->customerid ?></td>
			<td><?= $order->amount ?></td>
			<td><?= $order->date ?></td>
			<td><?= $order->order_status ?> <a href="index.php?controller=orders&action=show&orderid=<?= $order->orderid ?>">View details....</a> </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>


<!-- php $content = ob_get_clean()  -->