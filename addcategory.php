<?php
if(isset($_POST['add']))
{
$category=$_POST['category'];
$stmt=$admin->cud("INSERT INTO `category`(`categoryname`) VALUES
('".$category."')","saved");
echo "<script>alert('data saved sucessfully');window.location='../addcategory.php';</script>";
}
?>