<!DOCTYPE html>
<html>
<head>
	<title>Sign-up</title>
<link rel="stylesheet" href="Sign-up.css">
</head>
<body>
<br>

                    <p colspan="5" style="vertical-align: top; border-bottom: black 2px solid; text-align: center;
                            height: 27px; font-size: 15pt; color: #000000; font-weight:bold ;font-family: Palatino Linotype;">
							Already have an account? Please <a href="Login.php">Login</a>
					</p>
<a href="Index.php" style="vertical-align: top; color: #003366; font-family: Forte; font-size:17pt;" >Home</a>
<p style="vertical-align: top; font-family: Forte; font-size:17pt;
                            height: 30px; border-bottom: ">User Information:</p>
<div class="container">
  <form action="Sign-up.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="name"><b>Name:</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"><b>Email:</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email address..." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
	  <label for="uname" ><b>Username: </b></label>
	</div>
	<div class="col-75">
      <input type="text" placeholder="" name="uname" required> <input type="submit" name="btn_checkavailability" value="Check Availability" id="btn_checkavailability">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="psw"><b>Password: </b></label>
    </div>
    <div class="col-75">
      <input type="password" placeholder="" name="psw" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="picture"><b>Upload photo: </b></label>
    </div>
    <div class="col-75">
      <input type="file" name="fileupl_photo" id="fileupl_photo">
    </div>
  </div>
  <div class="row">
    <br>
	<button type="submit" class="registerbtn" name="submit">
	<img src="sign-up.jpg" style="height:150px;width:150px;" />
	</button>
  </div>
  </form>
</div>

</body>
</html>



<?php

include("connection.php");
if(isset($_POST['submit']))
{
	// to receive value from the input fields
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pass=$_POST['psw'];
	
	//image upload code
	$ext= explode(".",$_FILES['fileupl_photo']['name']);
	$c=count($ext);
	$ext=$ext[$c-1];
	//echo $ext;
	$date=date("D:M:Y");
	//echo $date;
	$image_name=md5($date);
	$image=$image_name.".".$ext;
	//echo $image
	
	$query="insert into customer values('$name','$email','$uname','$pass','$image')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
		if($image !=null){
			move_uploaded_file($_FILES['fileupl_photo']['tmp_name'],"uploadedimage/$image");
		}
	}
	else
	{
		echo "error!".mysqli_error($con);
	}
}

?>