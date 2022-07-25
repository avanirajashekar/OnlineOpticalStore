<?php
if(isset($_POST['add']))
{
$supplier=$_POST['supplier'];
$pname=$_POST['pname'];
$pqty=$_POST['qty'];
$iprice=$_POST['price'];
$gst=$_POST['gst'];
$tprice=$_POST['total'];
$date=date('Y-m-d');
$stmt=$admin->cud("INSERT INTO
`purchase`(`suppliername`,`productname`,`quantity`,`date`,`price`,`gst`,`totalprice`)VALUES
('".$supplier."','".$pname."','".$pqty."','".$date."','".$iprice."','".$gst."','".$tprice."')","saved");
echo "<script>alert('data saved sucessfully');window.location='../viewpurchase.php';</script>";
}
?>
