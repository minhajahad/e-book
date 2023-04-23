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
	<title>Medical books</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="products.php">All Products</a></li>
  <li><a href="porder.php">Place order</a></li>
  <li><a href="chngpass.php">Change password</a></li>
  <li><a href="Logout.php">Logout</a></li>
</ul><br>

<div class="container-fluid mycontent">
    	
    <div class="row px-0 px-lg-3 my-2">
        <div class="col-12 d-flex py-2 bg-white">
            
                            <h1 class="my-auto p-0">Medical Exams Preparation</h1>
            
        </div>
        <script>
            function subcat_details() {
                $('#modalSubCatDetails').modal({backdrop: true, keyboard: true});
            }
        </script>
        
    </div>

    <div class="row px-0 px-lg-3 mt-2">
        <div class="col-12 col-lg-6 bg-white py-2">
            <form class="" action="#">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search within list..." name="search" value="" id="search">
                    <span class="input-group-btn">
                        <button class="btn btn-success ml-2 h-100" type="button" onclick="searchvalidation()" title="Search books">Search</button>
                    </span>
                </div><!-- /input-group -->
            </form>
        </div>
        
    </div>

    <div class="row mx-lg-0 mb-2 bg-white px-2" id="books_table">
        
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_89372022-02-08_1644326446.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_89372022-02-08_1644326446.jpg" alt="Genesis Last Hour Crystal Edition" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_89372022-02-08_1644326446.jpg" alt="Genesis Last Hour Crystal Edition" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                                                    <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Last Hour Crystal Edition</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 890</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" src="https://eboighar.com/frontend/assets/images/default/140/no-image.png" alt="Genesis Mock Test &amp; Model Test Exam Written Gynae &amp; Obs" class="card-img-top border list-item-img mb-1 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" alt="Genesis Mock Test &amp; Model Test Exam Written Gynae &amp; Obs" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                                                    <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Mock Test &amp; Model Test Exam Written Gynae &amp; Obs</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 350</h5>
                    <!-- </div> -->
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" src="https://eboighar.com/frontend/assets/images/default/140/no-image.png" alt="BCPS Syllabus For FCPS Part-1 Physical Medicine and Rehabilitation" class="card-img-top border list-item-img mb-1 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" alt="BCPS Syllabus For FCPS Part-1 Physical Medicine and Rehabilitation" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                                                    <h2 class="list-item-title title-container border-bottom" style="height: 38px;">BCPS Syllabus For FCPS Part-1 Physical Medicine and Rehabilitation</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 30</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_93332022-01-19_1642584390.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_93332022-01-19_1642584390.jpg" alt="FCPS PART-2 (Obs &amp; Gynae) (Obs) Vol-2 (eco)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_93332022-01-19_1642584390.jpg" alt="FCPS PART-2 (Obs &amp; Gynae) (Obs) Vol-2 (eco)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">FCPS PART-2 (Obs &amp; Gynae) (Obs) Vol-2 (eco)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 2,600</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" src="https://eboighar.com/frontend/assets/images/default/140/no-image.png" alt="Dr. Sharmin Sultana Long Case Preparation (B&amp;W)" class="card-img-top border list-item-img mb-1 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" alt="Dr. Sharmin Sultana Long Case Preparation (B&amp;W)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Dr. Sharmin Sultana Long Case Preparation (B&amp;W)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 180</h5>
            </div>
			
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" src="https://eboighar.com/frontend/assets/images/default/140/no-image.png" alt="Dr. Farah Momtaz Medicine Long Cases (Sheet)" class="card-img-top border list-item-img mb-1 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" alt="Dr. Farah Momtaz Medicine Long Cases (Sheet)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Dr. Farah Momtaz Medicine Long Cases (Sheet)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 200</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_7352021-11-03_1635937494.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_7352021-11-03_1635937494.jpg" alt="DCA FCPS Part-II (Obs &amp; Gynae) Sheet" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_7352021-11-03_1635937494.jpg" alt="DCA FCPS Part-II (Obs &amp; Gynae) Sheet" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                                                    <h2 class="list-item-title title-container border-bottom" style="height: 38px;">DCA FCPS Part-II (Obs &amp; Gynae) Sheet</h2>
                                            <!-- <div> -->
                        <h5 class="list-item-price d-inline-block">
                                                                                        Tk. 2,000
                            
                        </h5>
                    <!-- </div> -->
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_20752021-11-03_1635915647.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_20752021-11-03_1635915647.jpg" alt="Genesis Exclusive Fcps Part-2 Obs &amp; Gynae (Last Year Bcps Ioe &amp; Ospe Solve)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_20752021-11-03_1635915647.jpg" alt="Genesis Exclusive Fcps Part-2 Obs &amp; Gynae (Last Year Bcps Ioe &amp; Ospe Solve)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Exclusive Fcps Part-2 Obs &amp; Gynae (Last Year Bcps Ioe &amp; Ospe Solve)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 100</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_16742022-01-19_1642584383.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_16742022-01-19_1642584383.jpg" alt="FCPS PART-2 (Obs &amp; Gynae) (Gynae) Vol-1 (eco)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_16742022-01-19_1642584383.jpg" alt="FCPS PART-2 (Obs &amp; Gynae) (Gynae) Vol-1 (eco)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">FCPS PART-2 (Obs &amp; Gynae) (Gynae) Vol-1 (eco)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 2,600</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_62222021-10-23_1634969740.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_62222021-10-23_1634969740.png" alt="The Infertility Manual" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_62222021-10-23_1634969740.png" alt="The Infertility Manual" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">The Infertility Manual</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 4,200</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_18362021-10-21_1634809892.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_18362021-10-21_1634809892.jpg" alt="Synapse SBA Master Book Paediatrics" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_18362021-10-21_1634809892.jpg" alt="Synapse SBA Master Book Paediatrics" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse SBA Master Book Paediatrics</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 480</s>&nbsp;Tk. 350</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_1622021-10-20_1634731206.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_1622021-10-20_1634731206.jpg" alt="Dr. Shamol Lecture Note Handbook of Long Case in Medicine" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_1622021-10-20_1634731206.jpg" alt="Dr. Shamol Lecture Note Handbook of Long Case in Medicine" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Dr. Shamol Lecture Note Handbook of Long Case in Medicine</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 250</h5>
            </div>
 
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_71802021-10-13_1634129459.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_71802021-10-13_1634129459.jpg" alt="Genesis Surgeon's Book" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_71802021-10-13_1634129459.jpg" alt="Genesis Surgeon&#039;s Book" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Surgeon's Book</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 500</h5>
            </div>
 
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_61532021-10-08_1633684343.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_61532021-10-08_1633684343.jpg" alt="Synapse Bailey &amp; Loves Essentials" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_61532021-10-08_1633684343.jpg" alt="Synapse Bailey &amp; Loves Essentials" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse Bailey &amp; Loves Essentials</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 500</h5>
            </div>
 
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_47362021-10-06_1633508553.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_47362021-10-06_1633508553.jpg" alt="Genesis Conquer Question Bank For BMDC Licensing Exam" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_47362021-10-06_1633508553.jpg" alt="Genesis Conquer Question Bank For BMDC Licensing Exam" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Conquer Question Bank For BMDC Licensing Exam</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 370</h5>
            </div>
 
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_8312021-10-02_1633150916.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_8312021-10-02_1633150916.jpg" alt="Matrix Keynote Clinical Part" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_8312021-10-02_1633150916.jpg" alt="Matrix Keynote Clinical Part" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Matrix Keynote Clinical Part</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 400</h5>
            </div>
 
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_40852021-10-02_1633150834.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_40852021-10-02_1633150834.jpg" alt="Matrix Keynote Fundamental Part" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_40852021-10-02_1633150834.jpg" alt="Matrix Keynote Fundamental Part" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Matrix Keynote Fundamental Part</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 500</h5>
            </div>
 
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_56862021-09-25_1632548158.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_56862021-09-25_1632548158.jpg" alt="Genesis SBA Pearl For Paediatrics Volume 1-2" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_56862021-09-25_1632548158.jpg" alt="Genesis SBA Pearl For Paediatrics Volume 1-2" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis SBA Pearl For Paediatrics Volume 1-2</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 580</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_1112021-09-23_1632393114.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_1112021-09-23_1632393114.jpg" alt="500+ High Yield Topices For Residency, Mphil, Diploma" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_1112021-09-23_1632393114.jpg" alt="500+ High Yield Topices For Residency, Mphil, Diploma" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">500+ High Yield Topices For Residency, Mphil, Diploma</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 700</s>&nbsp;Tk. 490</h5>
            </div>
   
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_832021-09-15_1631704139.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_832021-09-15_1631704139.jpg" alt="Dr Manik FCPS Part 2 Surgery OSPE" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_832021-09-15_1631704139.jpg" alt="Dr Manik FCPS Part 2 Surgery OSPE" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Dr Manik FCPS Part 2 Surgery OSPE</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 300</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41702021-09-06_1630932015.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41702021-09-06_1630932015.jpg" alt="Synapse SBA Master Book Surgery" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41702021-09-06_1630932015.jpg" alt="Synapse SBA Master Book Surgery" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse SBA Master Book Surgery</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 655</s>&nbsp;Tk. 430</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_8522021-09-06_1630931730.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_8522021-09-06_1630931730.jpg" alt="Synapse SBA Master Book Obs &amp; Gynae" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_8522021-09-06_1630931730.jpg" alt="Synapse SBA Master Book Obs &amp; Gynae" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse SBA Master Book Obs &amp; Gynae</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 490</s>&nbsp;Tk. 380</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_83692021-09-05_1630825199.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_83692021-09-05_1630825199.jpg" alt="Step Up to Medicine (Color)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_83692021-09-05_1630825199.jpg" alt="Step Up to Medicine (Color)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Step Up to Medicine (Color)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 1,500</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41402021-08-19_1629363181.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41402021-08-19_1629363181.jpg" alt="Handbook of ABG" class="border card-img-top list-item-img mb-1 p-2 ls-is-cached lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41402021-08-19_1629363181.jpg" alt="Handbook of ABG" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Handbook of ABG</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 250</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_64932021-08-16_1629116504.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_64932021-08-16_1629116504.jpg" alt="Plabable Note" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_64932021-08-16_1629116504.jpg" alt="Plabable Note" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Plabable Note</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 2,000</h5>
            </div>

            
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" src="https://eboighar.com/frontend/assets/images/default/140/no-image.png" alt="BCPS Syllabus For FCPS Part-1 Radiology Imaging" class="card-img-top border list-item-img mb-1 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/" alt="BCPS Syllabus For FCPS Part-1 Radiology Imaging" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">BCPS Syllabus For FCPS Part-1 Radiology Imaging</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 30</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_5332021-06-28_1624879907.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_5332021-06-28_1624879907.jpg" alt="Synapse Lecture Sheet Basic Subject (27 Lecture Sheet)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_5332021-06-28_1624879907.jpg" alt="Synapse Lecture Sheet Basic Subject (27 Lecture Sheet)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse Lecture Sheet Basic Subject (27 Lecture Sheet)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 2,500</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_60442021-06-21_1624278330.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_60442021-06-21_1624278330.jpg" alt="Genesis Lecture On OGSB Live Seminar For Fcps Part- 2 (Obs &amp; Gynae) Volume 1&amp;2" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_60442021-06-21_1624278330.jpg" alt="Genesis Lecture On OGSB Live Seminar For Fcps Part- 2 (Obs &amp; Gynae) Volume 1&amp;2" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Lecture On OGSB Live Seminar For Fcps Part- 2 (Obs &amp; Gynae) Volume 1&amp;2</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 750</h5>
            </div>
  
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_14742021-06-21_1624278520.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_14742021-06-21_1624278520.jpg" alt="Genesis Exclusive Exam Batch For FCPS P-2 (Obs &amp; Gynae)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_14742021-06-21_1624278520.jpg" alt="Genesis Exclusive Exam Batch For FCPS P-2 (Obs &amp; Gynae)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Exclusive Exam Batch For FCPS P-2 (Obs &amp; Gynae)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 120</h5>
            </div>
            
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_68252021-06-18_1624020418.jpeg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_68252021-06-18_1624020418.jpeg" alt="Gynae Case (B&amp;W)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_68252021-06-18_1624020418.jpeg" alt="Gynae Case (B&amp;W)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Gynae Case (B&amp;W)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 1,100</h5>
            </div>
   
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_34932021-06-12_1623510831.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_34932021-06-12_1623510831.jpg" alt="Genesis SBA Pearl for Obstetrics &amp; Gynaecology Volume 1-2" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_34932021-06-12_1623510831.jpg" alt="Genesis SBA Pearl for Obstetrics &amp; Gynaecology Volume 1-2" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis SBA Pearl for Obstetrics &amp; Gynaecology Volume 1-2</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 580</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_82892021-06-04_1622798659.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_82892021-06-04_1622798659.jpg" alt="Synapse Residency Q World" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_82892021-06-04_1622798659.jpg" alt="Synapse Residency Q World" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse Residency Q World</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 650</s>&nbsp;Tk. 500</h5>
            </div>
            
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_95422021-06-04_1622798510.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_95422021-06-04_1622798510.jpg" alt="Synapse Residency Last 10 Years Question Solve" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_95422021-06-04_1622798510.jpg" alt="Synapse Residency Last 10 Years Question Solve" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Synapse Residency Last 10 Years Question Solve</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 360</s>&nbsp;Tk. 300</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49142021-06-04_1622805082.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49142021-06-04_1622805082.jpg" alt="Genesis Residency Pearl Volume-3 (Paediatrics Faculty)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49142021-06-04_1622805082.jpg" alt="Genesis Residency Pearl Volume-3 (Paediatrics Faculty)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Residency Pearl Volume-3 (Paediatrics Faculty)</h2>
                        <h5 class="list-item-price d-inline-block"> Tk. 350</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_65392021-12-08_1638960602.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_65392021-12-08_1638960602.jpg" alt="Genesis Obs Clinical Care" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_65392021-12-08_1638960602.jpg" alt="Genesis Obs Clinical Care" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Genesis Obs Clinical Care</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 350</h5>
			
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_87782021-05-04_1620125286.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_87782021-05-04_1620125286.jpg" alt="Matrix FCPS Part 1 Medicine (Paper 1-3)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_87782021-05-04_1620125286.jpg" alt="Matrix FCPS Part 1 Medicine (Paper 1-3)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Matrix FCPS Part 1 Medicine (Paper 1-3)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 1,600</h5>
            </div>
    </div>


    <script type="text/javascript">
        function searchbyauthorpublisher(pageNumber = null) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var page = '';
            if (pageNumber != null) {
                page = pageNumber;
            } else {
                page = 1;
            }


            $("#books_table_placeholder").show();
            $("#books_table").hide();


            var sortby = $('input[name=sortbytype]:checked').val();
            var search = $("#search").val();

            var publisher = '';
            $('.searchpubliser').each(function () {
                if ($(this).prop("checked")) {
                    publisher += $(this).val() + "###";
                }
            });

            var lastChar = publisher.slice(-3);
            if (lastChar == '###') {
                publisher = publisher.slice(0, -3);
            }

            var author = '';
            $('.searchauthor').each(function () {
                if ($(this).prop("checked") == true) {
                    author += $(this).val() + "###";
                }
            });

            var lastChar2 = author.slice(-3);

            if (lastChar2 == '###') {
                author = author.slice(0, -3);
            }

            var SubCatId = '1532';
            var url = "https://eboighar.com/author-publisher-by-subcategory";

            $.ajax({
                url: updateQueryStringParameter2(url, 'page', page),
                type: "POST",
                asnc: false,
                data: {
                    "author": author,
                    "publisher": publisher,
                    "sortby": sortby,
                    "search": search,
                    "SubCatId": SubCatId
                },
                dataType: 'html',
                success: function (response) {
                    $("#books_table").html('').html(response).show();


                    setTimeout(function () {
                        $("#books_table_placeholder").hide();
                    }, 100);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    setTimeout(function () {
                        $("#books_table_placeholder").hide();
                    }, 100);
                }
            });
        }

        function searchvalidation() {
            if ($("#search").val() == "") {
                MessageModal.show("Please enter text and then search.");
                return false;
            }
            searchbyauthorpublisher();
        }

        $(document).ready(function () {

            $('.sidebarCollapse3').on('click', function () {
                $('#sidebar2').modal('toggle');
            });

            //searchbyauthorpublisher('1');
            $(document).on("click", ".pagination-ajax a", function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];

                searchbyauthorpublisher(page);
            });

        });


        function resetall(value) {
            if (value == '1') {
                $('.searchsortby').each(function () {
                    if ($(this).prop("checked") == true) {
                        $(this).prop("checked", false);
                    }
                });
            }

            if (value == '2') {
                $('.searchpubliser').each(function () {
                    if ($(this).prop("checked") == true) {
                        $(this).prop("checked", false);
                    }
                });
            }

            if (value == '3') {
                $('.searchauthor').each(function () {
                    if ($(this).prop("checked") == true) {
                        $(this).prop("checked", false);
                    }
                });
            }
            searchbyauthorpublisher();
        }


    </script>
    </div>
</body>
</html>