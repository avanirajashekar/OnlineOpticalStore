<h2>View Purchase Detail</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>Sl.no</th>
<th>Supplier name</th>
<th>Product name</th>
<th>Quantity</th>
<th>Date</th>
<th>Price</th>
<th>Gst</th>
<th>Total Price</th>
</tr>
<?php
$stmt = $admin->ret("SELECT * FROM `purchase`");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td class="table-success"><?php echo $row['purchaseid']; ?></td>
<td class="table-info"><?php echo $row['suppliername']; ?></td><td class="table-danger"><?php echo $row['productname']; ?></td>
<td class="table-default"><?php echo $row['quantity']; ?></td>
<td class="table-warning"><?php echo $row['date']; ?></td>
<td class="table-warning"><?php echo $row['price']; ?></td>
<td class="table-warning"><?php echo $row['gst']; ?></td>
<td class="table-warning"><?php echo $row['totalprice']; ?></td>
</tr>
<?php } ?>
</table>