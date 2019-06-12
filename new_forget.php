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

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$connection = new mysqli("localhost", "root", "", "citylife");
if($_POST)
{
	$email = $_POST['email'];
	$selectquery = mysqli_query($connection, "select * from user where user_email='{$email}'") or die(mysqli_error($connection));
	$count = mysqli_num_rows($selectquery);
	$row = mysqli_fetch_array($selectquery);
	if($count>0)
	{
		
		


		require './vendor/autoload.php';
		$mail = new PHPMailer(true);
		try{
			$mail -> SMTPDebug = 0;
			$mail -> isSMTP();
			$mail -> Host = 'smtp.gmail.com';
			$mail -> SMTPAuth = true;
			$mail -> Username = 'clife2242@gmail.com';
			$mail -> Password = 'CityLife@123';
			$mail -> SMTPSecure = 'tls';
			$mail -> Port = 587;
			$mail -> setFrom ('clife2242@gmail.com', 'citylife');
			$mail -> addAddress ($email, $email);
			$mail -> isHTML(true);
			$mail -> Subject = 'Forget Password';
			$mail -> Body = "Hi, $email your password is {$row['user_password']}";
			$mail -> AltBody = "Hi, $email your password is {$row['user_password']}";
			$mail -> send();
			echo "<script>alert('Email has been sent');</script>";
		} catch(Exception $e) {
			echo 'Email could not be sent';
			echo 'Mailer Error: '.$mail->ErrorInfo;
		}
	}
	else
	{
		echo "<script>alert('email not found');</script>";
	}
}
?>
<html>
<body>
	
  
    
	<form action="" method="post">
		<div class="form-container">
      <div class="form-group">
        <a href="#reset" class="c-gray js-block-trigger">
          <label for="reset-password">Email</label>
          <input type="email" name="email"
          id="reset-password"
          class="form-input form-input--pill form-input--border-c-gallery"
          placeholder="johndoe@gmail.com"
          required
          ></a>
          <div>
            <div class="form-group--submit">
              <button
                class="button button--primary button--pill button--large button--block button--submit"
                type="submit"
              >
                Reset Password
              </button>
            </div>
            <div class="form-group--footer">
              <a href="login.php" class="c-secondary t-underline js-block-trigger">Back to Sign in</a>
            </div>
          </div>
		
	</form>
	
	

</body>
</html>
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