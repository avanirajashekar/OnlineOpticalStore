<?php
if(isset($_POST['add']))
{
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$uid=$SESSION['id'];
$stmt=$admin->cud("INSERT INTO `sub-category`(`categoryid`,`subcategoryname`)
VALUES ('".$category."','".$subcategory."')","saved");
echo "<script>alert('data saved sucessfully');window.location='../addsubcategory.php';</script>";
}
?>