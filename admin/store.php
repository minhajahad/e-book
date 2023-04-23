<?php
	session_start();
	if($_SESSION['admin_login_status']!="logged in" and ! isset($_SESSION['user_name'])){
	header("Location:../Login.php");}
	//logout code
	if(isset($_GET['sign']) and $_GET['sign']=="out"){
		$_SESSION['admin_login_status']="logged out";
		unset($_SESSION['user_name']);
	header("Location:../Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Store</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="store.css">
</head>
<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="addproducts.php">Add Books</a></li>
  <li><a class="active" href="store.php">Store</a></li>
  <li><a href="corders.php">Customer Orders</a></li>
  <li><a href="chngpass.php">Change password</a></li>
  <li><a href="?sign=out">Logout</a></li>
</ul><br>

<div class= "row">
	<div class= "container">
	
	<div class= "row">
	
		<form action="store.php" method="post">
		<input type="submit" class="button" value= "Show Product" name="show">
		</form><br><br><br>
		
		<?php
		include("../connection.php");
		if(isset($_POST['show']))
		{
			$sql="select * from product, store where product.bookid=store.bookid";
			$r=mysqli_query($con,$sql);
			echo "<table id= 'customers'>";
			echo "<tr>
			<th>Book Id</th>
			<th>Book Name</th>
			<th>Book type</th>
			<th>Writer's Name</th>
			<th>Buying Price</th>
			<th>Quantity</th>
			<th>Selling Price</th>
			</tr>";
				while($row=mysqli_fetch_array($r))
				{
					$id=$row['bookid'];
					$name=$row['name'];
					$type=$row['booktype'];
					$writer=$row['writername'];
					$price=$row['bprice'];
					$sprice=$row['sellingprice'];
					$quantity=$row['quantity'];
					echo "<tr>
					<td>$id</td><td>$name</td><td>$type</td><td>$writer</td><td>$price</td><td>$quantity</td><td>$sprice</td>
					</tr>";
				}
				echo "</table>";
		}
		?>
		
	</div>
	
	<form action="store.php" method="post">
	
	<div class= "row">
	<hr/>
	<br><br>
	<div class="col-25">
	  <label for="bookid" ><b>Book Id: </b></label>
	</div>
	
	<div class="col-75">
      <select style="height:43px;width:1135px;" name="bookid">
	  
	  <?php
		include("../connection.php");
		$sql="select bookid from product";
		$r=mysqli_query($con,$sql);
		
			while($row=mysqli_fetch_array($r))
			{
				$id=$row['bookid'];
				echo "<option value= '$id'>$id</option>";
			}
	  ?>
	  
	  </select>
    </div>
	
	</div>
	<div class="row">
		<div class="col-25">
			<label for="quantity"><b>Quantity:</b></label>
		</div>
		<div class="col-75">
			<input type="text" id="quantity" name="quantity" value='0' placeholder="quantity...">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="sprice"><b>Selling Price:</b></label>
		</div>
		<div class="col-75">
			<input type="text" id="sprice" name="sprice" value='0' placeholder="Insert selling price...">
		</div>
	</div>
	<div class="row">
		<input type="submit" class="button" value="Add" name="submit">
		<div class="row">
			<input type="submit" class="button" value="Update" name="update">
		</div>
	</div>
	</form>
	
	</div>
	
</div>
</body>
</html>

<?php

include("../connection.php");
if(isset($_POST['submit']))
{
	$bookid=$_POST['bookid'];
	$quantity=$_POST['quantity'];
	$sprice=$_POST['sprice'];
	
	$query="insert into store values('$bookid','$sprice','$quantity')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
	}
	else
	{
		echo "error!".mysqli_error($con);
	}
}
if(isset($_POST['update']))
{
	$bookid=$_POST['bookid'];
	$quantity=$_POST['quantity'];
	$sprice=$_POST['sprice'];
	
	if($sprice==0)
	{
		$query="update store set quantity=quantity+$quantity where bookid='$bookid'";
	}
	else
	{
		$query="update store set quantity=quantity+$quantity, sellingprice=$sprice where bookid='$bookid'";
	}
	
	if(mysqli_query($con,$query))
	{
		echo "Successfully updated!";
	}
	else
	{
		echo "error!".mysqli_error($con);
	}
}
?>