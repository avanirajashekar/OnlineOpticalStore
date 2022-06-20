<?php
$cartid=$_GET['cartid'];
$id=$_SESSION['id'];
$stmt = $admin->cud("DELETE FROM `cart` where cartid=".$cartid,"Deleted");
echo "<script>alert('data deletes successfully');</script>";
$admin->redirect('../checkout.php?id='.$id);	
?>
