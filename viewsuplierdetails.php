<h2>View Supplier Detail</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>Sl.no</th>
<th>Supplier name</th>
<th>Supplier address</th>
<th>Email</th>
<th>Contact no</th>
<th>Company name</th>
</tr>
<?php
$stmt = $admin->ret("SELECT * FROM `supplier`");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td class="table-success"><?php echo $row['supplierid']; ?></td>
<td class="table-info"><?php echo $row['suppliername']; ?></td>
<td class="table-danger"><?php echo $row['supplieraddress']; ?></td>
<td class="table-default"><?php echo $row['email']; ?></td>
<td class="table-warning"><?php echo $row['contactno']; ?></td>
<td class="table-warning"><?php echo $row['companyname']; ?></td>
</tr>
<?php } ?>
</table>