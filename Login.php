<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
<style>
     p.round3 {
       border: 4px dotted black;
       border-radius: 12px;
	   margin-right: 600px;
	   margin-left: 600px;
       padding: 7px;
              }
     body {
       background-image: url("output-onlinepngtools (1).png");
       background-repeat: no-repeat;
       background-position: left top;
       margin-left: 20px;
       background-attachment: fixed;
		  }
	
	.button1 {width: 150px;}
</style>
</head>

<body>

<p class="round3" align="center" style="font-size: 23pt"><b>Please Login</b></p>
<b>
<form align="center" style="font-size: 15pt" action="Login.php" method="post">
  <label for="uname" >Username: </label>
    <input type="text" placeholder="" name="uname" required><br><br>
  <label for="psw">Password: </label>
    <input type="password" placeholder="" name="psw" required><br><br>
    <button class="button1" type="submit" name="login" style="font-size:80%;">Login</button><br><br>
  <label>
    <input type="checkbox" name="remember"> Remember me<br>

</form>
<p>New user? Please <a href="Sign-up.php">Sign-up</a></p>
<p>Return to <a href="Index.php">home</a> page.</p>
</b>
</body>
</html>


<?php
include("connection.php");
if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['psw'];
	
	$sql="select username,password from admin where username='$uname' and password='$pass'";
	$sql1="select uname,pass from customer where uname='$uname' and pass='$pass'";
			$r=mysqli_query($con,$sql);
			$r1=mysqli_query($con,$sql1);
			if(mysqli_num_rows($r)>0)
			{
				$_SESSION['user_name']=$uname;
				$_SESSION['admin_login_status']="logged in";
				header("Location:admin/home.php");
			}
	
			else if (mysqli_num_rows($r1)>0)
			{
				$_SESSION['user_name']=$uname;
				$_SESSION['customer_login_status']="logged in";
				header("Location:customer/home.php");
			}
			else
			{
				echo "<p style='color: white;'>Incorrect Username or Password</p>";
			}
}
?>