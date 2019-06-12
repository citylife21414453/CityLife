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



<div class="col-md-6">
        
        <form action="" method="post">
          <div class="row">
            
            <div class="col-md-12">
              <div class="form-group">
                <label for="message">Your message</label>
                <textarea
                  name="user_message"
                  id="user_message"
                  rows="10"
                  class="form-input form-input--large form-input--border-c-alto"
                  placeholder="Your comment"></textarea>
              </div><!-- .form-group -->
            </div><!-- .col -->

            <div class="col-md-12">
              <div class="form-group--submit">
                <button name="submit" class="button button--large button--square button--primary" type="submit">Send Message</button>
              </div>
            </div><!-- .col -->
          </div><!-- .row -->
        </form>
      </div><!-- .col -->
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
        <p class="site-footer__copyright">&copy; 2018
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
<?php
$conn = mysqli_connect("localhost", "root", "","citylife"); 

  if(isset($_POST['submit']))
  {
    $user_email = $_POST['user_email'];
    $user_name = $_POST['user_name'];
    $user_message = $_POST['user_message'];
   
    
    $insert_user = "insert into feedback (user_name,user_email,user_message) values ('$user_name','$user_email','$user_message')";

    $insert_run = mysqli_query($conn, $insert_user);

    if($insert_run)
    {
      echo "<script>alert('Thank you for Your valuable Feedback')</script>";
    }

    else
    {
      echo "<script>alert('Error in Requesting Feedback';)</script>";

    }
  }
?>