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
	<title>Place order</title>
<link rel="stylesheet" href="style.css">
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75 {
    width: 100%;
    margin-top: 0;
  }
}

.button {
  background-color: white;
  border: solid black;
  color: black;
  padding: 15px 32px;
  float: right;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="products.php">All Books</a></li>
  <li><a class="active" href="porder.php">Place order</a></li>
  <li><a href="chngpass.php">Change password</a></li>
  <li><a href="myprofile.php">My profile</a></li>
  <li><a href="?sign=out">Logout</a></li>
</ul><br>
<div class= "row">
	<div class= "container">
	<form action="porder.php" method="post">
	
	<div class= "row">
	<div class="col-25">
      <label for="booktype"><b>Select a book</b></label>
    </div>
    <div class="col-75">
		<select style="height:43px;width:1135px;" id="book" name="book">
	  
	  <?php
		include("../connection.php");
		$sql="select name from product";
		$r=mysqli_query($con,$sql);
		
			while($row=mysqli_fetch_array($r))
			{
				$b=$row['name'];
				echo "<option value='$b'>$b</option>";
			}
	  ?>
	  
		</select>
    </div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="quantity"><b>Enter Quantity:</b></label>
		</div>
		<div class="col-75">
			<input type="text" id="quantity" name="quantity" value='0' placeholder="quantity...">
		</div>
	</div>
	
	<div class="row">
		<input type="submit" class="button" value="Buy" name="submit">
	</div>
	</form>

<?php
//Save the orders in database
if(isset($_POST['submit']))
{
	include("../connection.php");
	$num=rand(10,1000);
	$order_id="O - ".$num;
	$order_date=date("Y/m/d");
	$uname=$_SESSION['user_name'];
	$name=$_POST['book'];
	$q=$_POST['quantity'];
	$sqlorder="insert into customer_order values('$order_id','$uname','$order_date',0)";
	mysqli_query($con,$sqlorder);
	$query="select bookid from product where name='$name'";
	$r=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($r);
	$bookid=$row['bookid'];
	$query1="select sellingprice from store where bookid='$bookid'";
	$r1=mysqli_query($con,$query1);
	$row1=mysqli_fetch_assoc($r1);
	$price=$row1['sellingprice'];
		$total=$q*$price;
		$sql="insert into orderline values('$order_id', '$bookid', '$q', '$total')";
		mysqli_query($con,$sql);
	
	echo "Your order has been successfully submitted.";
}
?>
	</div>
</div>
</body>
</html>