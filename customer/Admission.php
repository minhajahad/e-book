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
	<title>University Admission Guide</title>
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
    	
    <div class="row px-0 px-lg-3 my-3">
        

    <div class="row px-0 px-lg-3 my-2">
        <div class="col-12 d-flex py-2 bg-white">
            <img class="rounded-circle mr-3" style="height: 64px!important;width: auto;" src="https://static1.eboighar.com/thumbimages/sub_category/subcat_12812020-08-30_1598770274.png" onerror="this.onerror=null; this.src='https://eboighar.com/frontend/assets/images/sub-category.png';this.className='rounded-circle my-auto mr-3'">
                            <h1 class="my-auto p-0">বিশ্ববিদ্যালয় ভর্তি গাইড  University Admission Guide</h1>
            
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
                </div><br>
            </form>
        </div>
        
    </div>

    <div class="row mx-lg-0 mb-2 bg-white px-2" id="books_table">

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_74872022-02-23_1645606935.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_74872022-02-23_1645606935.jpg" alt="ধ্রুব বাংলা ব্যাকরণ মডেল টেস্ট" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_74872022-02-23_1645606935.jpg" alt="ধ্রুব বাংলা ব্যাকরণ মডেল টেস্ট" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">ধ্রুব বাংলা ব্যাকরণ মডেল টেস্ট</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 150</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_97392022-02-16_1644998727.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_97392022-02-16_1644998727.jpg" alt="IQ Factors" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_97392022-02-16_1644998727.jpg" alt="IQ Factors" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                                                    <h2 class="list-item-title title-container border-bottom" style="height: 38px;">IQ Factors</h2>
                                            <!-- <div> -->
                        <h5 class="list-item-price d-inline-block">
                                                            <s>Tk. 140</s>&nbsp;
                                                                                        Tk. 120
                            
                        </h5>
                    <!-- </div> -->
            </div>
			
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_40322022-02-08_1644304868.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_40322022-02-08_1644304868.jpg" alt="Analogy Magic" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_40322022-02-08_1644304868.jpg" alt="Analogy Magic" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Analogy Magic</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 130</s>&nbsp;Tk. 110</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_62712022-02-06_1644156320.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_62712022-02-06_1644156320.jpg" alt="এক্সসেপ্&zwnj;শন নটর ডেম কলেজ ভর্তি গাইড : প্লাস সেন্ট যোসেফ ও হলি ক্রস কলেজ - বিজ্ঞান বিভাগ" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_62712022-02-06_1644156320.jpg" alt="এক্সসেপ্&zwnj;শন নটর ডেম কলেজ ভর্তি গাইড : প্লাস সেন্ট যোসেফ ও হলি ক্রস কলেজ - বিজ্ঞান বিভাগ" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">এক্সসেপ্&zwnj;শন নটর ডেম কলেজ ভর্তি গাইড : প্লাস সেন্ট যোসেফ ও হলি ক্রস কলেজ - বিজ্ঞান বিভাগ</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 200</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_36392022-02-07_1644232610.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_36392022-02-07_1644232610.jpg" alt="জয়কলি গুচ্ছ এইড (মানবিক শাখা)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_36392022-02-07_1644232610.jpg" alt="জয়কলি গুচ্ছ এইড (মানবিক শাখা)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জয়কলি গুচ্ছ এইড (মানবিক শাখা)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 300</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_37682022-01-08_1641639370.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_37682022-01-08_1641639370.jpg" alt="জয়কলি প্রশ্ন ব্যাংক ঢাকা বিশ্ববিদ্যালয় (মানবিক)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_37682022-01-08_1641639370.jpg" alt="জয়কলি প্রশ্ন ব্যাংক ঢাকা বিশ্ববিদ্যালয় (মানবিক)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জয়কলি প্রশ্ন ব্যাংক ঢাকা বিশ্ববিদ্যালয় (মানবিক)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 180</h5>
            </div>
  
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_89182022-01-08_1641620758.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_89182022-01-08_1641620758.jpg" alt="Text Hacks" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_89182022-01-08_1641620758.jpg" alt="Text Hacks" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Text Hacks</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 280</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_7672022-01-18_1642494617.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_7672022-01-18_1642494617.png" alt="জয়কলি কৃষি বিশ্ববিদ্যালয় প্রশ্নব্যাংক, সাজেশন ও মডেল টেস্ট" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_7672022-01-18_1642494617.png" alt="জয়কলি কৃষি বিশ্ববিদ্যালয় প্রশ্নব্যাংক, সাজেশন ও মডেল টেস্ট" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জয়কলি কৃষি বিশ্ববিদ্যালয় প্রশ্নব্যাংক, সাজেশন ও মডেল টেস্ট</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 500</s>&nbsp;Tk. 250</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49902021-10-12_1634020613.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49902021-10-12_1634020613.jpg" alt="জাহাঙ্গীরনগর বিশবিদ্যালয় প্রশ্নব্যাংক ও ভর্তি সহায়িকা (ইউনিট-A)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49902021-10-12_1634020613.jpg" alt="জাহাঙ্গীরনগর বিশবিদ্যালয় প্রশ্নব্যাংক ও ভর্তি সহায়িকা (ইউনিট-A)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জাহাঙ্গীরনগর বিশবিদ্যালয় প্রশ্নব্যাংক ও ভর্তি সহায়িকা (ইউনিট-A)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 180</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_34002021-10-12_1634019295.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_34002021-10-12_1634019295.jpg" alt="চট্টগ্রম বিশবিদ্যালয় প্রশ্নব্যাংক ও ভর্তি সহায়িকা (ডি ইউনিট)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_34002021-10-12_1634019295.jpg" alt="চট্টগ্রম বিশবিদ্যালয় প্রশ্নব্যাংক ও ভর্তি সহায়িকা (ডি ইউনিট)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">চট্টগ্রম বিশবিদ্যালয় প্রশ্নব্যাংক ও ভর্তি সহায়িকা (ডি ইউনিট)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 180</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_75352021-10-12_1634018254.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_75352021-10-12_1634018254.jpg" alt="গুচ্ছ এইড ভর্তি সহায়িকা (ব্যবসায় শিক্ষা অনুষদ)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_75352021-10-12_1634018254.jpg" alt="গুচ্ছ এইড ভর্তি সহায়িকা (ব্যবসায় শিক্ষা অনুষদ)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">গুচ্ছ এইড ভর্তি সহায়িকা (ব্যবসায় শিক্ষা অনুষদ)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 260</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_98992021-10-10_1633866383.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_98992021-10-10_1633866383.jpg" alt="জয়কলি প্রশ্নব্যাংক  জবি [ ক-ইউনিট ] বিজ্ঞান" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_98992021-10-10_1633866383.jpg" alt="জয়কলি প্রশ্নব্যাংক  জবি [ ক-ইউনিট ] বিজ্ঞান" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জয়কলি প্রশ্নব্যাংক  জবি [ ক-ইউনিট ] বিজ্ঞান</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 170</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_96252021-10-05_1633434598.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_96252021-10-05_1633434598.jpg" alt="বিজয় গুচ্ছ স্পেশাল বিজ্ঞান বিভাগ" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_96252021-10-05_1633434598.jpg" alt="বিজয় গুচ্ছ স্পেশাল বিজ্ঞান বিভাগ" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">বিজয় গুচ্ছ স্পেশাল বিজ্ঞান বিভাগ</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 300</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_18272021-07-15_1626350779.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_18272021-07-15_1626350779.jpg" alt="UCC প্রকাশিত প্রশ্ন ব্যাংক Orbit (ক ইউনিট)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_18272021-07-15_1626350779.jpg" alt="UCC প্রকাশিত প্রশ্ন ব্যাংক Orbit (ক ইউনিট)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">UCC প্রকাশিত প্রশ্ন ব্যাংক Orbit (ক ইউনিট)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 220</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_86512021-06-02_1622611448.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_86512021-06-02_1622611448.png" alt="ভার্সিটি ক প্রশ্নব্যাংক উদ্ভাস- উন্মেষ" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_86512021-06-02_1622611448.png" alt="ভার্সিটি ক প্রশ্নব্যাংক উদ্ভাস- উন্মেষ" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">ভার্সিটি ক প্রশ্নব্যাংক উদ্ভাস- উন্মেষ</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 280</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_65722021-06-08_1623154845.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_65722021-06-08_1623154845.jpg" alt="Aspect Physics" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_65722021-06-08_1623154845.jpg" alt="Aspect Physics" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Aspect Physics</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 400</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_3482021-03-06_1615014991.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_3482021-03-06_1615014991.jpg" alt="গুচ্ছ এনালাইসিস (বাণিজ্য)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_3482021-03-06_1615014991.jpg" alt="গুচ্ছ এনালাইসিস (বাণিজ্য)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">গুচ্ছ এনালাইসিস (বাণিজ্য)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 295</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_66172021-03-06_1615014637.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_66172021-03-06_1615014637.jpg" alt="Nexus Varsity Written Analysis (বিসনেস স্টাডিস)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_66172021-03-06_1615014637.jpg" alt="Nexus Varsity Written Analysis (বিসনেস স্টাডিস)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Nexus Varsity Written Analysis (বিসনেস স্টাডিস)</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 500</s>&nbsp;Tk. 295</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_9412021-03-06_1615014509.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_9412021-03-06_1615014509.jpg" alt="Varsity Written Analysis (Humanities)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_9412021-03-06_1615014509.jpg" alt="Varsity Written Analysis (Humanities)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Varsity Written Analysis (Humanities)</h2>
                        <h5 class="list-item-price d-inline-block"> Tk. 295</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_5372021-03-06_1615014253.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_5372021-03-06_1615014253.jpg" alt="Varsity Written Analysis (Science)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_5372021-03-06_1615014253.jpg" alt="Varsity Written Analysis (Science)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Varsity Written Analysis (Science)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 295</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_57722021-03-06_1615014028.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_57722021-03-06_1615014028.jpg" alt="NEXUS English Q Bank" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_57722021-03-06_1615014028.jpg" alt="NEXUS English Q Bank" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">NEXUS English Q Bank</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 320</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_76862021-03-06_1615012315.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_76862021-03-06_1615012315.jpg" alt="নেক্সাস বাংলা বিরচন" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_76862021-03-06_1615012315.jpg" alt="নেক্সাস বাংলা বিরচন" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">নেক্সাস বাংলা বিরচন</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 100</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_67642021-03-06_1615012104.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_67642021-03-06_1615012104.jpg" alt="একুশে বাংলা ১ম পত্র" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_67642021-03-06_1615012104.jpg" alt="একুশে বাংলা ১ম পত্র" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">একুশে বাংলা ১ম পত্র</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 380</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_28472021-10-17_1634474146.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_28472021-10-17_1634474146.jpg" alt="Udvash  Engineering Concept Book" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_28472021-10-17_1634474146.jpg" alt="Udvash  Engineering Concept Book" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Udvash  Engineering Concept Book</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 1,000</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_16142022-01-04_1641292275.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_16142022-01-04_1641292275.jpg" alt="রেটিনা প্রশ্নব্যাংক" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_16142022-01-04_1641292275.jpg" alt="রেটিনা প্রশ্নব্যাংক" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">রেটিনা প্রশ্নব্যাংক</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 430</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_57392021-10-13_1634117561.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_57392021-10-13_1634117561.png" alt="ছায়ামঞ্চ English MCQ+Written" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_57392021-10-13_1634117561.png" alt="ছায়ামঞ্চ English MCQ+Written" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">ছায়ামঞ্চ English MCQ+Written</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 350</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49702021-10-13_1634117713.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49702021-10-13_1634117713.png" alt="ছায়ামঞ্চ বাংলা পার্বণ এম.সি. কিউ+লিখিত" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_49702021-10-13_1634117713.png" alt="ছায়ামঞ্চ বাংলা পার্বণ এম.সি. কিউ+লিখিত" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">ছায়ামঞ্চ বাংলা পার্বণ এম.সি. কিউ+লিখিত</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 350</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_92262021-02-10_1612944916.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_92262021-02-10_1612944916.png" alt="ICT Summit" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_92262021-02-10_1612944916.png" alt="ICT Summit" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">ICT Summit</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 120</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_21622021-02-10_1612944818.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_21622021-02-10_1612944818.png" alt="ছায়ামঞ্চ রিটেন সামিট বিজ্ঞান বিভাগ" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_21622021-02-10_1612944818.png" alt="ছায়ামঞ্চ রিটেন সামিট বিজ্ঞান বিভাগ" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">ছায়ামঞ্চ রিটেন সামিট বিজ্ঞান বিভাগ</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 310</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_64612022-01-18_1642495456.png" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_64612022-01-18_1642495456.png" alt="জয়কলি ICT Suggesiton" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_64612022-01-18_1642495456.png" alt="জয়কলি ICT Suggesiton" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জয়কলি ICT Suggesiton</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 300</s>&nbsp;Tk. 200</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_96042021-01-26_1611662833.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_96042021-01-26_1611662833.jpg" alt="পানকৌড়ি ঢাকা বিশ্ববিদ্যালয় ভর্তি গাইড-A Unit" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_96042021-01-26_1611662833.jpg" alt="পানকৌড়ি ঢাকা বিশ্ববিদ্যালয় ভর্তি গাইড-A Unit" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">পানকৌড়ি ঢাকা বিশ্ববিদ্যালয় ভর্তি গাইড-A Unit</h2>
                        <h5 class="list-item-price d-inline-block"><s>Tk. 450</s>&nbsp;Tk. 300</h5>
            </div>
    
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_55852020-11-25_1606302473.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_55852020-11-25_1606302473.jpg" alt="Leader (Varsity Written English)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_55852020-11-25_1606302473.jpg" alt="Leader (Varsity Written English)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Leader (Varsity Written English)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 130</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_58722020-11-15_1605434813.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_58722020-11-15_1605434813.jpg" alt="জয়কলি ঢাকা বিশ্ববিদ্যালয় প্রশ্ন ব্যাংক  ও ভর্তি সহায়িকা (মানবিক বিভাগ)" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_58722020-11-15_1605434813.jpg" alt="জয়কলি ঢাকা বিশ্ববিদ্যালয় প্রশ্ন ব্যাংক  ও ভর্তি সহায়িকা (মানবিক বিভাগ)" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">জয়কলি ঢাকা বিশ্ববিদ্যালয় প্রশ্ন ব্যাংক  ও ভর্তি সহায়িকা (মানবিক বিভাগ)</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 130</h5>
            </div>
            
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41102020-11-12_1605176014.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41102020-11-12_1605176014.jpg" alt="Comprehension Trump Card" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_41102020-11-12_1605176014.jpg" alt="Comprehension Trump Card" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
            <h2 class="list-item-title title-container border-bottom" style="height: 38px;">Comprehension Trump Card</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 130</h5>
            </div>
            
            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_67252020-11-11_1605087358.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_67252020-11-11_1605087358.jpg" alt="উন্মেষ মেডিক্ট্ৰিক্স প্রাণিবিজ্ঞান" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_67252020-11-11_1605087358.jpg" alt="উন্মেষ মেডিক্ট্ৰিক্স প্রাণিবিজ্ঞান" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">উন্মেষ মেডিক্ট্ৰিক্স প্রাণিবিজ্ঞান</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 190</h5>
            </div>

            <img data-src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_52912020-11-11_1605087399.jpg" src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_52912020-11-11_1605087399.jpg" alt="উন্মেষ মেডিক্ট্ৰিক্স উদ্ভিদবিজ্ঞান" class="border card-img-top list-item-img mb-1 p-2 lazyloaded" onerror="this.onerror=null;this.src='https://eboighar.com/frontend/assets/images/default/140/no-image.png';this.className='card-img-top border list-item-img mb-1';">
            <noscript>
                <img src="https://static1.eboighar.com/thumbimages/mid_thumb_books/book_52912020-11-11_1605087399.jpg" alt="উন্মেষ মেডিক্ট্ৰিক্স উদ্ভিদবিজ্ঞান" class="card-img-top list-item-img mb-1 p-2" style="position:absolute;top:1.5em;left:0;right:0;margin-left:auto;margin-right:auto;"/>
            </noscript>
            <div class="title-container-wrapper w-100 px-1 d-flex flex-column align-items-center">
                        <h2 class="list-item-title title-container border-bottom" style="height: 38px;">উন্মেষ মেডিক্ট্ৰিক্স উদ্ভিদবিজ্ঞান</h2>
                        <h5 class="list-item-price d-inline-block">Tk. 190</h5>
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

            var SubCatId = '2026';
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