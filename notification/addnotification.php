<?php
if(isset($_POST['add']))
{
$cid=$_POST['cid'];
$noti=$_POST['noti'];
$status="notified";$date1=date('Y-m-d');
$stmt=$admin->cud("INSERT INTO `notification`(`customerid`, `notification`, `date`, `status`)
VALUES('".$cid."','".$noti."','".$date1
."','".$status."')","saved");
echo "<script>alert('data saved sucessfully');window.location='../addnoti.php';</script>";
}
?>