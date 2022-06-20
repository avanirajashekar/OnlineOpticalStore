<?php 
if(isset($_POST['cart']))
{
	$uid=$_SESSION['id'];
	$qty=$_POST['qty'];
	$prid=$_POST['prid'];
	$price=$_POST['price'];
	$gst=$_POST['gst'];
	$tt= $qty * $price;
	$gstamt=$tt * ($gst/100);
	$total= $tt +$gstamt;
$stmt=$admin->cud("INSERT INTO `cart`(`prid`,`customerid`,`quantity`,`price`,`gst`, `totalprice`) VALUES ('".$prid."','".$uid."','".$qty."','".$price."','".$gst."','".$total."')","saved");
	echo "<script>alert('data saved ');</script>";
	$admin->redirect('../checkout');
}
 ?>
