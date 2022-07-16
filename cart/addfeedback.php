<?php 
if(isset($_POST['add']))
{
	$subject=$_POST['subject'];
$stmt=$admin->cud("INSERT INTO `feedback`(`message`) VALUES ('".$subject."')","saved");
	echo "<script>alert('data saved sucessfully');window.location='../index.php';</script>";
}
 ?>
