<?php
if (isset($_POST['update']))
{
$paymentid=$_POST['paymentid'];
$status=$_POST['status'];
$stmt = $admin->cud("UPDATE `payment` SET `status`='".$status."' WHERE
paymentid=".$paymentid,"updated");
echo "<script>alert('delivery status updated successfully');</script>";
$admin->redirect('../delivery');
}
?>