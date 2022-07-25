<h2>View Notification</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>Customer id</th>
<th>first name</th>
<th>last name</th>
<th>address</th>
<th>email</th>
<th>Gender</th>
<th>Notification</th>
<th>status</th>
</tr>
<?php
$stmt = $admin->ret("SELECT * FROM `customer` inner join `notification` on
`notification`.customerid=`customer`.customerid");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr><td class="table-success"><?php echo $row['customerid']; ?></td>
<td class="table-info"><?php echo $row['firstname']; ?></td>
<td class="table-info"><?php echo $row['lastname']; ?></td>
<td class="table-danger"><?php echo $row['address']; ?></td>
<td class="table-default"><?php echo $row['email']; ?></td>
<td class="table-warning"><?php echo $row['gender']; ?></td>
<td class="table-warning"><?php echo $row['notification']; ?></td>
<td class="table-warning"><?php echo $row['status']; ?></td>
</tr>
<?php } ?>
</table>