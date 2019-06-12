<?php
  include('config.php');

?>
<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>City Life</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
  

</head>

<body>
  

<header id="masthead" class="site-header site-header--layout-2">
  <div class="container">
    <div class="d-lg-flex justify-content-lg-between align-items-lg-center site-header__container">
      <div class="site-header__logo">
        <a href="index.php">
          <h1 class="screen-reader-text">City Life</h1>
          <img src="images/logo.png" alt="City Life">
        </a>
      </div>

      
      <!-- .site-header__logo -->
      <div class="d-lg-flex align-items-lg-center">
        <ul class="min-list main-navigation">
          <li>
            <a href="index.php">Home</a>
           
          </li>

          <li>
            <a href="about-us.php">About-Us</a>
           
          </li>


         
          <li>
            <a href="#">Catagories <i class="fa fa-angle-down"></i></a>
            <ul class="min-list mymin-list"> 
              <?php
                include('config.php');
                $query="select * from categories";
                $query_run=mysqli_query($con,$query);

                while($row_category = mysqli_fetch_array($query_run))
                {
                  $category_id = $row_category['category_id'];
                  $category_name = $row_category['category_name'];

                  echo "<li><a href = 'details.php?cate=$category_id'>$category_name</a></li>";

                }
              ?>


            </ul>
          </li>


          <li>
            <a href="contact-us.php">Contact Us</a>
           
          </li>
         
         
        <li>
            <a href="#"><i class="fa fa-user"></i> My Account <i class="fa fa-angle-down"></i></a>
            <ul class="min-list mymin-list">
              <li>
                <a href="login.php">Log In / Sign Up</a>
              </li>
              <li>
                <a href="profile.php">Profile</a>
              </li>
              
            </ul>
          </li>
         
         
        </ul><!-- .main-navigation -->

        
      </div>

      <div class="d-lg-none nav-mobile">
        <a href="#" class="nav-toggle js-nav-toggle nav-toggle--dove-gray">
          <span></span>
        </a>
        <!-- .nav-toggle -->
      </div>
      <!-- .nav-mobile -->

    </div>
    <!-- .site-header__container -->

  </div>
  <!-- .container -->
</header>
<!-- #masthead -->




<div class="page-content1">
  <div class="breadcrumbs-container">
  <div class="container">
    <ul class="breadcrumbs min-list inline-list">
      <li class="breadcrumbs__item">
        <a href="index.php" class="breadcrumbs__link">
          <span class="breadcrumbs__title">Home</span>
        </a>
      </li>

     

      <li class="breadcrumbs__item">
        <span class="breadcrumbs__page c-gray"> </span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
</div>


<section class="listing-list listing-list--layout-1 first">
  <div class="container">
    
    <div class="row">

      <?php
        if(isset($_GET['cate'])){
        $category_id = $_GET['cate']; 
      global $con;
      $get_cat_pro = "select * from product where product_category='$category_id'";
      
      $run_cat_pro = mysqli_query($con, $get_cat_pro);
      
      while($row_cat_pro=mysqli_fetch_array($run_cat_pro))
      {
        $product_id = $row_cat_pro['product_id'];
        $product_title = $row_cat_pro['product_title'];
        $product_location = $row_cat_pro['product_location'];
        $product_image = $row_cat_pro['product_image'];
        $product_category = $row_cat_pro['product_category'];
        $product_mobile = $row_cat_pro['product_mobile'];

        $query="select * from categories";
        $query_run=mysqli_query($con,$query);

        
        
        echo 

        "

            <div class='col-md-4'>
        <div class='listing hover-effect'>
          <div class='listing__wrapper'>
            <div class='listing__thumbnail'>
              <a href='single-listing-1.html'>
                <img src='uploaded-images/$product_image' alt='April Boutique Coffee'>
                <span class='label label--primary'>$product_category</span>
                <span class='favorite c-white'>
                  <i class='fa fa-heart-o'></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class='listing__detail'>
              <h3 class='listing__title'>
                <a href='single-listing-1.html'>$product_title</a><br>
                <h5 class='listing__title'>$product_mobile</h5>
                
              </h3>
              <p class='listing__location c-dusty-gray'>
                <i class='fa fa-map-marker'></i>
                $product_location
              </p>
              <p class='listing__review c-dusty-gray'>
                <span class='stars-outer' data-rating='5'>
                  <span class='stars-inner'></span>
                </span>
                <span>(5 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->
        
        ";
        
      }
      }
      ?>
   
  </div><!-- .container -->
</section><!-- .listing-list -->


<footer id="colophone" class="site-footer">
  <div class="t-center site-footer__primary">
    <div class="container">
      <div class="site-footer__logo">
        <a href="index.php">
          
          <img src="images/logo.png" alt="Listiry">
        </a>
      </div>
      <p class="t-small">City Life is making finding destination faster, easier, and customized for you.</p>
      <ul class="min-list inline-list site-footer__links site-footer__social ftsocial">
        <li>
          <a href="#">
            <i class="fa fa-facebook-f"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-pinterest"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-google-plus"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- .site-footer__primary -->

  <div class="site-footer__secondary">
    <div class="container">
      <div class="site-footer__secondary-wrapper">
        <p class="site-footer__copyright">&copy; 2019
          <span class="c-secondary">City Life</span> . All Rights Reserved.</p>
        <ul class="min-list inline-list site-footer__links site-footer__details">
          <li>
            <a href="tel:+0987654321">Tel: +91 88 60 32 4016</a>
          </li>
         
         <li>
            <a href="about-us.php">About Us</a>
          </li>
          <li>
            <a href="contact-us.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- .site-footer__secondary -->
</footer><!-- #colophone -->

<script src="scripts/app.js"></script>
</body>


</html>
