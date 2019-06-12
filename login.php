<?php
  include('config.php');
  include('signin.php');
?>
<?php

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
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
            <a href="index.html">Home</a>
           
          </li>

          <li>
            <a href="about-us.html">About Us</a>
           
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




<div class="page-content">
  <div class="breadcrumbs-container">
  <div class="container">
    <ul class="breadcrumbs min-list inline-list">
      <li class="breadcrumbs__item">
        <a href="index.php" class="breadcrumbs__link">
          <span class="breadcrumbs__title">Home</span>
        </a>
      </li>

     

      <li class="breadcrumbs__item">
        <span class="breadcrumbs__page c-gray">Login/Signup</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>




  <div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="form-login js-login-form">
        <div class="form-login__block js-form-block is-selected" id="signin">
          <form action="#" method="post">
            <div class="form-container">
              <h3 class="form-title t-center">Sign In</h3>
              <div class="form-social">
                <div class="form-group">
                  <div class="form-group__wrapper">
                    <button
                      class="button button--social button--twitter button--pill button--large button--block"
                      type="button"
                    >
                      Connect to Twitter
                    </button>
                    <span class="form-group__icon form-group__icon--social">
                  <i class="fa fa-twitter c-white"></i>
                </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class="form-group">
                  <div class="form-group__wrapper">
                    <button
                      class="button button--social button--facebook button--pill button--large button--block"
                      type="button"
                    >
                      Connect to Facebook
                    </button>
                    <span class="form-group__icon form-group__icon--social">
                  <i class="fa fa-facebook-f c-white"></i>
                </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->
              <div class="form-group">
                <label for="login-user">Username or Email</label>
                <input
                  type="text"
                  name="user_email"
                  id="login-user"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="johndoe"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <label for="login-password">Password</label>
                <input
                  type="password"
                  name="user_password"
                  id="login-password"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="******"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <div class="form-group__container">
                  <label for="remember-me" class="icheck_label">
                    <input type="checkbox" id="remember-me" name="iCheck">
                    Remember Me
                  </label>
                  
  
        <a href="new_forget.php" class="breadcrumbs__link">
          <span class="breadcrumbs__title">Forgot Password?</span>
        </a>
      
                  

                </div><!-- .form-group__container -->
              </div><!-- .form-group -->

              <div class="form-group--submit">
                <button
                  class="button button--primary button--pill button--large button--block button--submit"
                  type="submit" name = "login"
                >
                  Log In
                </button>
              </div>

              <div class="form-group--footer">
            <span class="c-gray">
              Don't have an account? <a href="#signup" class="c-secondary t-underline js-block-trigger">Register</a>
            </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signin -->
        </div><!-- .form-login__block -->

        <div class="form-login__block js-form-block" id="signup">
          <form action="" method="post">
            <div class="form-container">
              <h3 class="form-title t-center">Sign Up</h3>
              <div class="form-social">
                <div class="form-group">
                  <div class="form-group__wrapper">
                    <button
                      class="button button--social button--twitter button--pill button--large button--block"
                      type="button"
                    >
                      Connect to Twitter
                    </button>
                    <span class="form-group__icon form-group__icon--social">
                    <i class="fa fa-twitter c-white"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->

                <div class="form-group">
                  <div class="form-group__wrapper">
                    <button
                      class="button button--social button--facebook button--pill button--large button--block"
                      type="button"
                    >
                      Connect to Facebook
                    </button>
                    <span class="form-group__icon form-group__icon--social">
                    <i class="fa fa-facebook-f c-white"></i>
                  </span>
                  </div><!-- .form-group__wrapper -->
                </div><!-- .form-group -->
              </div><!-- .form-social -->
              <div class="form-group">
                <label for="signup-email">Email *</label>
                <input
                  type="email"
                  name="signup-email"
                  id="signup-email"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="johndoe@gmail.com"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <label for="signup-name">Name *</label>
                <input
                  type="text"
                  name="signup-name"
                  id="signup-name"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="John Doe"
                >
              </div><!-- .form-group -->

              <div class="form-group">
                <label for="signup-password">Password *</label>
                <input
                  type="password"
                  name="signup-password"
                  id="signup-password"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  required
                  placeholder="******"
                >
              </div><!-- .form-group -->

              <div class="form-group">
              <span class="c-gray">
                By creating an account your agree to our <a href="#" class="t-underline">Terms and Conditions</a>
                and our <a href="#" class="t-underline">Privacy Policy</a>
              </span>
              </div><!-- .form-group -->

              <div class="form-group--submit">
                <button
                  class="button button--primary button--pill button--large button--block button--submit"
                  type="submit" name = "signup"
                >   Sign Up
                  <a href="register.php" class="c-secondary t-underline js-block-trigger">Sign Up</a>
                </button>
              </div>

                
                  
              <div class="form-group--footer">
              <span class="c-gray">
                Already have an account?
                <a href="#signin" class="c-secondary t-underline js-block-trigger">Sign in</a>
              </span>
              </div>
            </div><!-- .form-container -->
          </form><!-- .signup -->
        </div><!-- .form-login__block -->

        <div class="form-login__block js-form-block" id="reset">
          <form action="http://haintheme.com/" method="post">
            <div class="form-container">
              <div class="form-group">
                <label for="reset-password">Email</label>
                <input
                  type="email"
                  name="reset-password"
                  id="reset-password"
                  class="form-input form-input--pill form-input--border-c-gallery"
                  placeholder="johndoe@gmail.com"
                  required
                >
              </div><!-- .form-group -->

              <div class="form-group--submit">
                <button
                  class="button button--primary button--pill button--large button--block button--submit"
                  type="submit"
                >
                  Reset Password
                </button>
              </div>

              <div class="form-group--footer">
                <a href="#signin" class="c-secondary t-underline js-block-trigger">Back to Sign in</a>
              </div>
            </div><!-- .form-container -->
          </form><!-- .reset -->
        </div><!-- .form-login__block -->
      </div><!-- .form-login -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container -->
</div><!-- .page-content -->

<footer id="colophone" class="site-footer">
  <div class="t-center site-footer__primary">
    <div class="container">
      <div class="site-footer__logo">
        <a href="index.php">
          <h1 class="screen-reader-text">Listiry</h1>
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
            <a href="about-us.html">About Us</a>
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

  if(isset($_POST['signup']))
  {
    $user_email = $_POST['signup-email'];
    $user_name = $_POST['signup-name'];
    $user_password = $_POST['signup-password'];

    $insert_user = "insert into user (user_email,user_name,user_password) values ('$user_email','$user_name','$user_password')";

    $insert_run = mysqli_query($con, $insert_user);


    if($insert_run)
    {
      include ('register.php');

      echo "<script>alert('Registration has been accomplished!')</script>";
    }

    else
    {
      echo "<script>alert('DataBase Error!';)</script>";

    }
  }
?>




