<h2>View Delivery Status</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>Sl.no</th>
<th>Date</th>
<th>Amount</th>
<th>Address</th>
<th>Method</th>
<th>
Delivery Status
</th>
<th>Action</th>
</tr>
<?php
$stmt=$admin->ret("SELECT * FROM `payment` ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td class="table-success"><?php echo $row['paymentid']; ?></td>
<td class="table-info"><?php echo $row['date']; ?></td>
<td class="table-danger"><?php echo $row['amount']; ?></td>
<td class="table-default"><?php echo $row['address']; ?></td>
<td class="table-warning"><?php echo $row['method']; ?></td>
<td class="table-warning"><?php echo $row['status']; ?></td><td><a href="updatedelivery.php?paymentid=<?php echo $row['paymentid']; ?>"
OnClick="return confirm('are you sure')" style="color: blue;">Update Status</a></td>
</tr>
<?php } ?>
</table>