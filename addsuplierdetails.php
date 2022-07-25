<?php
if(isset($_POST['add']))
{
$sname=$_POST['sname'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$email=$_POST['email'];
$companyname=$_POST['companyname'];
$stmt=$admin->cud("INSERT INTO
`supplier`(`suppliername`,`supplieraddress`,`email`,`contactno`,`companyname`) VALUES
('".$sname."','".$address."','".$email."','".$contactno."','".$companyname."')","saved");
echo "<script>alert('data saved sucessfully');window.location='../viewsupplier.php';</script>";
}
?>