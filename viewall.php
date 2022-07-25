< h2>View Category</h2>
<table border='1' id="example" class="table table-striped">
<tr><th>Sl.no</th>
<th>Category name</th>
</tr>
<?php
$stmt = $admin->ret("SELECT * FROM `category`");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td class="table-success"><?php echo $row['categoryid']; ?></td>
<td class="table-info"><?php echo $row['categoryname']; ?></td>
</tr>
<?php } ?>
</table>
<h2>View Subcategory</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>Sl.no</th>
<th>Subcategory name</th>
</tr>
<?php
$stmt = $admin->ret("SELECT * FROM `sub-category`");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td class="table-success"><?php echo $row['subcategoryid']; ?></td><td class="table-info"><?php echo $row['subcategoryname']; ?></td>
</tr>
<?php } ?>
</table>
<h2>View Product Detail</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>Sl.no</th>
<th>Category name</th>
<th>SubCategory name</th>
<th>description</th>
<th>product image</th>
<th>Price</th>
<th>Gst</th>
<th>Status</th>
</tr>
<?php
$stmt = $admin->ret("SELECT * FROM `product`");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td class="table-success"><?php echo $row['prid']; ?></td>
<td class="table-info"><?php echo $row['categoryname']; ?></td>
<td class="table-info"><?php echo $row['subcategoryname']; ?></td>
<td class="table-danger"><?php echo $row['description']; ?></td><td><img src="upload/<?php echo $row['image']?>"height="50"width="50"></td>
<td class="table-warning"><?php echo $row['price']; ?></td>
<td class="table-warning"><?php echo $row['gst']; ?></td>
<td class="table-warning"><?php echo $row['status']; ?></td>
</tr>
<?php } ?>
</table>