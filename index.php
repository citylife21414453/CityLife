<?php
  
  include('session.php');


  


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

     

      
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>
</div>


      







<section class="page-banner page-banner--layout-4 parallax">
  <div class="container">
    <div class="page-banner__container">
      <div class="page-banner__left animated fadeInDown">
        <div class="page-banner__textcontent t-center">
          <h2 class="page-banner__title c-white">Best Catagories of My City</h2>
         
        </div><!-- .page-banner__textcontent -->

        <div class="locations-container t-center">
          <ul class="min-list inline-list locations locations--layout-2">
            <li class="location">
              <a href="details.php?cate=1" class="c-white"><i class="fa fa-shopping-cart"></i>Shop</a>
            </li>
            <li class="location">
              <a href="details.php?cate=2" class="c-white"><i class="fa fa-cutlery"></i>Restaurant</a>
            </li>

            
             <li class="location">
              <a href="details.php?cate=3" class="c-white"><i class="fa fa-plus"></i>Hospital</a>
            </li>
            <li class="location">
              <a href="details.php?cate=3" class="c-white"><i class="fa fa-glass"></i>Event</a>
            </li>
            <li class="location">
              <a href="details.php?cate=3" class="c-white"><i class="fa fa-heartbeat"></i>Fitness</a>
            </li>
            
            
            <li class="location">
              <a href="details.php?cate=6" class="c-white"><i class="fa fa-hotel"></i>Hotel</a>
            </li>
            <li class="location">
              <a href="details.php?cate=7" class="c-white"><i class="fa fa-wrench"></i>Puncture Repairs </a>
            </li>
            <li class="location">
              <a href="details.php?cate=3" class="c-white"><i class=""><img src="https://img.icons8.com/color/00/000000/shoe-brush1.png" colour="c-white"></i>Mochi</a>
            </li>
            
          </ul>
        </div><!-- .locations-container -->
      </div><!-- .page-banner__left -->

      
      </div><!-- .page-banner__right -->
    </div><!-- .page-banner__container -->
  </div><!-- .container -->
</section><!-- .page-banner -->



<section class="listing-list page-section bg-wild-sand listing-list--layout-1">
  <div class="container">
    <h2 class="page-section__title t-center">Top  Places In City</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="https://www.mcdonaldsindia.com/" target="_blank">
                <img src="images/uploads/mcd-kWiF--621x414@LiveMint.jpg" alt="April Boutique Coffee">
                <span class="label label--primary">Restaurants</span>
                <span class="favorite c-white">
                  <i class="fa fa-heart-o"></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="https://www.mcdonaldsindia.com/" target="_blank">McDonald's</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Badarpur,  Delhi
              </p>
              <p class="listing__review c-dusty-gray">
                <span class="stars-outer" data-rating="4">
                  <span class="stars-inner"></span>
                </span>
                <span>(4 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-4">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="https://www.cafecoffeeday.com/" target="_blank">
                <img src="images/uploads/ccd.jpg" alt="April Boutique Coffee">
                <span class="label label--primary">Coffee </span>
                <span class="favorite c-white">
                  <i class="fa fa-heart-o"></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="https://www.cafecoffeeday.com/" target="_blank ">Cafe Coffee Day</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Lajpat Nagar, New Dehi
              </p>
              <p class="listing__review c-dusty-gray">
                <span class="stars-outer" data-rating="5">
                  <span class="stars-inner"></span>
                </span>
                <span>(5 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-4">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="https://m.facebook.com/rajinderdadhaba/" target="_blank">
                <img src="images/uploads/Rajinderfeature.jpg" alt="April Boutique Coffee">
                <span class="label label--primary">Restaurant</span>
                <span class="favorite c-white">
                  <i class="fa fa-heart-o"></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
               <h3 class="listing__title">
                <a href="https://m.facebook.com/rajinderdadhaba/" target="_blank">Rajinder Da Dhaba</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                Safdurjung, New  Delhi
              </p>
              <p class="listing__review c-dusty-gray">
                <span class="stars-outer" data-rating="5">
                  <span class="stars-inner"></span>
                </span>
                <span>(5 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-4">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="https://cyanmelon.com/" target="_blank">
                <img src="images/uploads/Capture.jpg" alt="April Boutique Coffee">
                <span class="label label--primary">Music</span>
                <span class="favorite c-white">
                  <i class="fa fa-heart-o"></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="https://cyanmelon.com/" target="_blank">Cyan Melon School Of Music</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                NFC, New Delhi
              </p>
              <p class="listing__review c-dusty-gray">
                <span class="stars-outer" data-rating="5">
                  <span class="stars-inner"></span>
                </span>
                <span>(5 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-4">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="http://barista.co.in/" target="_blank">
                <img src="images/uploads/img_3383.jpg" alt="April Boutique Coffee">
                <span class="label label--primary">Coffee </span>
                <span class="favorite c-white">
                  <i class="fa fa-heart-o"></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="http://barista.co.in/" target="_blank">Cafe Barista</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                New Dehi
              </p>
              <p class="listing__review c-dusty-gray">
                <span class="stars-outer" data-rating="5">
                  <span class="stars-inner"></span>
                </span>
                <span>(5 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->

      <div class="col-md-4">
        <div class="listing hover-effect">
          <div class="listing__wrapper">
            <div class="listing__thumbnail">
              <a href="music.com">
                <img src="images/uploads/listing-4.jpg" alt="April Boutique Coffee">
                <span class="label label--primary">Music</span>
                <span class="favorite c-white">
                  <i class="fa fa-heart-o"></i>
                </span>
              </a>
            </div><!-- .listing__thumbnail -->
            <div class="listing__detail">
              <h3 class="listing__title">
                <a href="starmusic.com" target="_blank">Star Music Club</a>
              </h3>
              <p class="listing__location c-dusty-gray">
                <i class="fa fa-map-marker"></i>
                NFC, New Delhi
              </p>
              <p class="listing__review c-dusty-gray">
                <span class="stars-outer" data-rating="5">
                  <span class="stars-inner"></span>
                </span>
                <span>(5 Reviews)</span>
              </p>
            </div><!-- .listing__detail -->
          </div><!-- .listing__wrapper -->
        </div><!-- .listing -->
      </div><!-- .col -->
    </div><!-- .row -->
   
  </div><!-- .container -->
</section><!-- .listing-list -->


<section class="dream-places page-section bg-wild-sand dream-places--layout-2" style="background: #fff;">
  <div class="container">
    <h2 class="page-section__title t-center">Most Popular Places</h2>
    <p class="page-section__subtitle t-center c-boulder">All the pathos and irony of leaving one's youth behind</p>

    <div class="row">
      <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/Qutb_Minar_tower.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/qutab_minar.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">Qutub Minar</h3>
              <span class="c-white dream-place__number">Mehrauli, New Delhi, Delhi 110030</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->

      <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/delhi-akshardham-temple.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/akshardham_temple.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">Akshardham Temple</h3>
              <span class="c-white dream-place__number">Noida Mor, Pandav Nagar, New Delhi, Delhi 110092</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->

      <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/lotus-temple.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/bahai_temple.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">Lotus Temple</h3>
              <span class="c-white dream-place__number">Lotus Temple Rd, Bahapur, Shambhu Dayal Bagh, Kalkaji, New Delhi, Delhi 110019</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->

      <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/new-delhi-india-gate.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/india_gate.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">India Gate</h3>
              <span class="c-white dream-place__number">Rajpath, India Gate, New Delhi, Delhi 110001</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->


       <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/rashtrapati-bhavan.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/rashtrapathi_bhavan.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">Rashtrapati Bhavan</h3>
              <span class="c-white dream-place__number">Rashtrapati Bhawan, President's Estate, New Delhi, Delhi 110004</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->


       <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/garden-of-five-senses.jpeg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/garden_of_five_senses.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">Garden of Five Senses</h3>
              <span class="c-white dream-place__number">Westend Marg, Saidulajab, Saiyad ul Ajaib, Saket, New Delhi, Delhi 110030</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->



     <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/A-P-J-Abdul-Kalam-Memorial.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/Kalam_memorial.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">A. P. J. Abdul Kalam Memorial</h3>
              <span class="c-white dream-place__number">Dilli Haat, Kidwai Nagar West, Kidwai Nagar, New Delhi, Delhi 110023</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->


       <div class="col-6 col-md-3">
        <div class="dream-place" style="background-image: url('images/uploads/300518_HumayunTomb_04.jpg')">
          <a href="http://delhitourism.gov.in/delhitourism/tourist_place/humayun_tomb.jsp" target="_blank">
            <div class="dream-place__gradient">
            </div>
            <div class="dream-place__content">
              <h3 class="c-white dream-place__title">Humayun's Tomb</h3>
              <span class="c-white dream-place__number">Mathura Road Opposite Dargah, Nizamuddin, New Delhi, Delhi 110013</span>
            </div>
          </a>
        </div><!-- .dream-place -->
      </div><!-- .col -->



    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- .dream-places -->



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
