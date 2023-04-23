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
	<title>IELTS &amp; TOEFL</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="products.php">All Products</a></li>
  <li><a href="porder.php">Place order</a></li>
  <li><a href="chngpass.php">Change password</a></li>
  <li><a href="myprofile.php">My profile</a></li>
  <li><a href="?sign=out">Logout</a></li>
</ul><br>

<div class="container-fluid mycontent">
    	    <link rel="stylesheet" type="text/css" href="https://eboighar.com/frontend/assets/css/twelve_pages.css">

    <div class="row px-0 px-lg-3 my-2">
        <div class="col-12 d-flex py-2 bg-white">
            <img class="rounded-circle mr-3" style="height: 64px!important;width: auto;" src="https://static1.eboighar.com/thumbimages/category/cat_54492020-09-30_1601450491.png" onerror="this.onerror=null; this.src='https://eboighar.com/frontend/assets/images/category.png';this.className='rounded-circle my-auto mr-3'">
                            <h1 class="my-auto p-0">IELTS &amp; TOEFL</h1>
            
        </div>
        <script>
            function cat_details() {
                $('#modalCatDetails').modal({backdrop: true, keyboard: true});
            }
        </script>
    </div>
    
    <div class="row px-0 px-lg-3 mt-2">
        <div class="col-12 col-lg-6 bg-white py-2">
            <form name="frmsearch1" id="frmsearch1" action="https://eboighar.com/subcategories/4/254/IELTS%2C-TOEFL-%26-OET/_" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search within list..." name="search" value="" id="search">
                    <span class="input-group-btn">
                        <button class="btn btn-success ml-2 h-100" type="button" id="btnSearch" onclick="searchvalidation()" title="Search books">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <div class="row px-0 px-lg-3">
                <div class="col-12 bg-white">
            <ul class="list-unstyled row catlist">
                                    <li class="list-item2 text-center col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
                        <a class="catlinks" href="https://eboighar.com/category/4/254/2014/IELTS%2C-TOEFL-%26-OET/IELTS">
                                                        <img class="rounded-circle img-fluid" src="https://static1.eboighar.com/thumbimages/sub_category/subcat_69912020-09-30_1601450555.png">
                                                        <div class="text-center mt-1">IELTS</div>
                        </a>
                    </li>
                                    
                                    <li class="list-item2 text-center col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 mb-3">
                        <a class="catlinks" href="https://eboighar.com/category/4/254/2015/IELTS%2C-TOEFL-%26-OET/TOEFL">
                                                        <img class="rounded-circle img-fluid" src="https://static1.eboighar.com/thumbimages/sub_category/subcat_3752020-08-31_1598847531.png">
                                                        <div class="text-center mt-1">TOEFL</div>
                        </a>
                    </li>
                            </ul>
        </div>
                <div class="paging col-12 bg-white"></div>
    </div>
</body>
</body>
</html>