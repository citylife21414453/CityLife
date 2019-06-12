<?php
  
   include_once('session.php');


  


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
          <?php

            if(isset($_SESSION['login_user'])):

          ?>

          <li>
            <a href="index.php">Home</a>
           
          </li>

          <li>
            <a href="about-us.php">About Us</a>
           
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
            <a href="#"><i class="fa fa-user"></i> <?php echo $login_session; ?> <i class="fa fa-angle-down"></i></a>
            <ul class="min-list mymin-list">
              <li>
                <a href="profile.php">Profile</a>
              </li>
              <li>
                <a href="logout.php">Logout</a>
              </li>
              
            </ul>
          </li>
            </ul><!-- .main-navigation -->
            <div class="user-action">
           
          
          <a href="listing.php"><button class="button button--small button--pill button--primary d-none d-lg-inline-block"> &plus;  Add Listing</button></a>
        </div>
      </div>

          <?php else : ?>

          <li>
            <a href="index.php">Home</a>
           
          </li>

          <li>
            <a href="about-us.php">About Us</a>
           
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

                


            </ul>
          </li>


          

          <li>
            <a href="#"> Account <i class="fa fa-angle-down"></i></a>
            <ul class="min-list mymin-list">
              <li>
                <a href="login.php">Log In / Sign Up</a>
              </li>
              
            </ul>
          </li>
            </ul><!-- .main-navigation -->

        <?php endif ?>

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
        <span class="breadcrumbs__page c-gray"> About Us</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
</div>





<section class="listing-list listing-list--layout-1 first myabout">
  <div class="container">
  <h4 style="line-height: 0;">About Our project</h4>
  <p>The City Life is a Search Website that help in Finding &amp; Exploring the places like
Restaurants, Travels, Hotels, Repairs, active A.T.Ms, Spa &amp; Gym. The Website
helps you in Huge &amp; Crowded Places like Lajpat Nagar, Cannaught Place, Hauz
Khas, Nehru Place &amp; Chandi Chowk.</p>
<p>
The Objective for Creating this Website is that the User can Search about the
above mentioned places without wasting time on the different websites . We
have provided all essential place’s information of a particular city in one single
website keeping in mind the user ease.</p>
<p>
City life had the ability to get access to the Internet when away from home at the price of a local call or at a charge considerably less than the regular long-distance charges. For example, if you normally get access to the Internet from an access provider in all over Delhi,  you can call a designated access provider in like Chandni chowk. Instead of paying long distance charges to your local provider in Chandni chowk, you pay the local phone connection charge(Internet) on that place .</p>
<p>
City life service is made possible through Internet service providers (ISPs) who have cooperative agreements to grant each others' customers local access to the Internet. Special software allows cooperating ISPs to keep track of and calculate prearranged payments for usage differences. Here's how it works for the user:
</p>


<p>
1.  The Internet user must already subscribe to an ISP that offers roaming service arrangements.</p>
<p>
2.  Assuming the ISP does, the user can determine a cooperating ISP in a city to which the user is travelling.</p>
<p>
3.  In the travel location, the user can call the local ISP's designated phone number through the computer modem, entering information during login that will identify the user's home ISP.</p>
<p>
4.  The "foreign" ISP will contact the ISP and determine that the user is a valid user.</p>
<p>
5.  The "foreign" ISP will grant the user access to the Internet. The user will be able to access e-mail from the home mail server.</p>
<p>
  6.  The user will be charged at local phone rates. In addition, depending on the particular service arrangement, the home ISP may levy an additional hourly usage charge of several dollars an hour or a monthly charge in case the service is used during that month.</p>

    
   
  </div><!-- .container -->
</section><!-- .listing-list -->


<section class="listing-list listing-list--layout-1 first">
  <div class="container">
  <h4 style="line-height: 0;">Project Team</h4>
    
    <div class="row">

      <div class="col-md-3">
        <div class="listing hover-effect">

          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="#">
                <img src="images/t21.jpg" alt="April Boutique Coffee">
                
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="#">Mohd Yasir</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Okhla,  New Delhi
              </p>
             
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

     

     

      <div class="col-md-3">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="#">
                <img src="images/t2.jpg" alt="April Boutique Coffee">
                
              </a>
            </div><!-- .listing__thumbnail -->
           <div class="listing__detail">
              <h3 class="listing__title">
                <a href="#">Monika Bhasker</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Rajiv Chowk,  Delhi
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-3">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="#">
                <img src="images/t3.jpg" alt="April Boutique Coffee">
                
              </a>
            </div><!-- .listing__thumbnail -->
           <div class="listing__detail">
              <h3 class="listing__title">
                <a href="#">Rahul Kumar Mallik</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Okhla,  New Delhi
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->



      <div class="col-md-3">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="#">
                <img src="images/t44.jpg" alt="April Boutique Coffee">
                
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="#">Harshita Pojaary</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Lajpat Nagar,  New Delhi
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->
    </div><!-- .row -->
   
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
