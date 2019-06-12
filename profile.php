<?php
include('session.php');
 
 include("config.php");
 
 $result=mysqli_query($con, "SELECT user_name");

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
            <a href="#"><i class="fa fa-user"></i> <?php echo $login_session; ?> </i></a>
            
          </li>
         
         
        </ul><!-- .main-navigation -->

        <div class="user-action">
           
          
          <a href="listing.php"><button class="button button--small button--pill button--primary d-none d-lg-inline-block"> &plus;  Add Listing</button></a>
        </div>
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
        <span class="breadcrumbs__page c-gray">Profile</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>



<div class="container">
    <div class="row">
      <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">              
          
 


 <?php
 $getuser_id= "select user_id from user where user_name='$login_session'";
$runuser_id=mysqli_query($con,$getuser_id);
while($rowuser_id=mysqli_fetch_array($runuser_id))
{
    $user_id=$rowuser_id['user_id'];
}
if(isset($_POST['Submit1']))
{ 
  

$pic_name = $_FILES['file']['name'];
$pic_name_temp = $_FILES['file']['tmp_name'];

$path = "profile/$pic_name";
 
if(move_uploaded_file($pic_name_temp, "$path")) 
{
echo "<img src=".$path." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}

$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'citylife';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        
        //Insert image content into database
        
   $insert = "INSERT into picture (user_id, path) values ('$user_id','$pic_name')";
     $insert_run = mysqli_query($con,$insert);
} 
  
?>


        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            
            <?php echo $login_session; 

            $profile_pic = "select * from picture where user_id = '$user_id'";
            $query_pic = mysqli_query($con, $profile_pic);

            while($row_pic = mysqli_fetch_array($query_pic))
            {
              $profile_path = $row_pic['path'];
              echo "<img src='profile/$profile_path'>";

            }



            ?>


            
              
          </div>
          
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">
            
              
                <a href="logout.php">Logout</a>
              </button>
          <button type="submit" class="btn btn-danger btn-sm">
              <a href="message.php">Message</a></button>
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <html>
<body>
        <form action="profile.php" enctype="multipart/form-data" method="post">
Select image :

<input type="file" name="file"><br/>
<div class="profile-userbuttons">
<button type="submit" class="btn btn-danger btn-sm">
<input type="submit" value="Upload"  name="Submit1"> 
</button></div><br/>

 
 
</form>

 
</body>
</html>
        <div class="profile-usermenu">
          
          <ul class="nav">
            
              

    


            

            
            <li>
              <a href="#" target="_blank">
              <i class="fa fa-check"></i>
              Tasks </a>
            </li>
            <li>
              <a href="contact-us.php">
              <i class="fa fa-check"></i>
              Help </a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
    </div>
    
  </div>
</div>


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
