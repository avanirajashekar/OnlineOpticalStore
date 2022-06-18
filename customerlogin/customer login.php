<h2>Customer Login</h2>
<form action="controller/clogincontroller.php" method="post">
	<div class="container1">
		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>
		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit" name="login">Login</button>
	<p>Not yet a member? <a href="usersignup.php" style="color:red;">Register</a></p>
	</div>
</form>
<?php
$control=new Controller();
$admin= new Admin();
if(isset($_POST['login'])) 
{
	$email=$_POST['email']; 
	 $password=$_POST['psw'];
$stmt=$admin->ret("SELECT * FROM `customer` where email='$email' and password='$password'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$num=$stmt->rowCount();
  if($num>0){    
			 $_SESSION['id']=$row['customerid'];
			$admin->redirect('../User/index');
			}
	else 
	{
echo "<script>alert('check username and password');window.location='../userlogin.php';</script>";
}
}
?>
