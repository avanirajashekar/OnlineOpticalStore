</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit" name="login">Login</button>
	</div>

if(isset($_POST['login'])) 
{
	 $name=$_POST['uname']; 
	 $password=$_POST['psw']; </form>
<?php<h2>Admin Login</h2>
<form action="controller/adminlogincontroller.php" method="post">
	<div class="container1">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>
<label for="psw"><b>Password
$stmt=$admin->ret("SELECT * FROM `admin` where username='$name' and password='$password'");
	 $row=$stmt->fetch(PDO::FETCH_ASSOC);
  $num=$stmt->rowCount();
	if($num>0){    
			$_SESSION['id']=$row['adminid'];
$admin->redirect('../Admin/index');
}
}
?>