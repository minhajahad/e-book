<?php
	session_start();
	if($_SESSION['customer_login_status']!="logged in" and ! isset($_SESSION['user_name'])){
	header("Location:../Login.php");}
	//logout code
	if(isset($_GET['sign']) and $_GET['sign']=="out"){
		$_SESSION['customer_login_status']="logged out";
		unset($_SESSION['user_name']);
	header("Location:../Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="products.php">All Books</a></li>
  <li><a href="porder.php">Place order</a></li>
  <li><a href="chngpass.php">Change password</a></li>
  <li><a class="active" href="myprofile.php">My profile</a></li>
  <li><a href="?sign=out">Logout</a></li>
</ul><br>

<?php
	include("../connection.php");
	$uname=$_SESSION['user_name'];
	$sql="select name,email,image from customer where uname='$uname'";
	$r=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($r);
	$name=$row['name'];
	$email=$row['email'];
	$image=$row['image'];
	echo "<p><b>Name:</b> $name</p>";
	echo "<div class='img'><p><b>Image:</b></p><img src='../uploadedimage/$image' height='250' width='500'></div>";
	echo "<p><b>Email: </b>$email</p><br>";
?>
</body>
</html>