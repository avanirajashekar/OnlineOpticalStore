<?php
if(isset($_POST['add']))
{
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$price=$_POST['price'];
$gst=$_POST['gst'];
$description=$_POST['description'];
$target_dir = "../upload/";
$image = $_FILES['image']['name'];
$image_name_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_name_tmp, "../upload/$image");
$stmt=$admin->cud("INSERT INTO
`product`(`categoryname`,`subcategoryname`,`description`, `image`,`price`,`gst`) VALUES
('".$category."','".$subcategory."','".$description."','".$image."','".$price."','".$gst."')","saved");
echo "<script>alert('data saved sucessfully');window.location='../addproduct.php';</script>";
}
?>