<?php
include ('session.php');
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
            <a href="#"><i class="fa fa-user"></i> <?php echo $login_session; ?> <i class="fa fa-angle-down"></i></a>
            <ul class="min-list mymin-list">
              <li>
            
                <a href="logout.php">Logout</a>
              
                <a href="profile.php">Profile</a>
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
        <span class="breadcrumbs__page c-gray">Listing</span>
      </li>
    </ul><!-- .breadcrumbs -->
  </div><!-- .container -->
</div>

<section class="create-listing">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="create-listing__wrapper bg-white">
         
          <form action="listing.php" method="POST" class="create-listing__form" enctype="multipart/form-data">

            <div class="listing-group">
              <h3 class="listing-group__title">Listing Detail</h3>
              <div class="row">

                 <div class="col-md-12">
                  <div class="form-group">

                    <label for="address">Upload Image *</label>
                    File:

                <input type="file" name="product_image" accept=".jpg,.jpeg,.png,.gif" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" aria-required="true" aria-invalid="false" >

                 </div><!-- .form-group -->
                </div><!-- .col -->


                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title">Listing Title *</label>
                    <input
                      type="text"
                      name="product_title"
                      required
                      class="form-input form-input--large form-input--border-c-alto"
                      id="title"
                    >
                  </div><!-- .form-group -->
                </div><!-- .col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="location">Location *</label>
                    <input
                      type="text"
                      name="product_location"
                      required
                      class="form-input form-input--large form-input--border-c-alto"
                      id="location"
                    >
                  </div><!-- .form-group -->
                </div><!-- .col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="categories">Listing Categories *</label>
                    <select
                      required
                      class="chosen-select"
                      name="product_category"
                      id="categories"
                      data-placeholder="Choose a category..."
                    >
                      <option value="" label="Whatever"></option>
                        <?php
                        include('config.php');
                        $query="select * from categories";
                        $query_run=mysqli_query($con,$query);

                        while($row_category = mysqli_fetch_array($query_run))
                        {
                          $category_name = $row_category['category_name'];

                          echo "<option> $category_name </option>";

                        }

                         ?>
                    </select>
                  </div><!-- .form-group -->
                </div><!-- .col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tagline">Mobile No *</label>
                    <input
                      type="text"
                      pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"
                      maxlength="10"
                      name="product_mobile"
                      id="tagline"
                      required
                      class="form-input form-input--large form-input--border-c-alto"
                    >
                  </div><!-- .form-group -->
                </div><!-- .col -->



               

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="address">Listing Address *</label>
                    <input
                      type="text"
                      id="address"
                      name = "product_add"
                      required
                      class="form-input form-input--large form-input--border-c-alto"
                    >
                  </div><!-- .form-group -->
                </div><!-- .col -->
              </div><!-- .row -->
            </div><!-- .listing-group -->

     

              
          

            <div class="form-group--submit"  value="Upload">
              <!--Product insertion -->
             

              <button name="submit" class="button button--large button--primary button--block">Submit</button>
            </div>
          </form><!-- .create-listing__form -->
        </div><!-- .create-listing__wrapper -->
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .container -->
</section><!-- .create-listing -->

</div>




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


<?php
include('config.php');
$getuser_id= "select user_id from user where user_name='$login_session'";
$runuser_id=mysqli_query($con,$getuser_id);
while($rowuser_id=mysqli_fetch_array($runuser_id))
{
    $user_id=$rowuser_id['user_id'];
}
if(isset($_POST['submit']))
{


  $product_title = $_POST['product_title'];
  $product_location = $_POST['product_location'];
  $product_category = $_POST['product_category'];
  $product_mobile = $_POST['product_mobile'];
  $product_add = $_POST['product_add'];


  //getting image from the field
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp = $_FILES['product_image']['tmp_name'];

  $get_cat_id = "select category_id from categories where category_name = '$product_category'";
  $run_get_id = mysqli_query($con, $get_cat_id);
  while($row_cat_id = mysqli_fetch_array($run_get_id))
  {
    $cat_id = $row_cat_id['category_id'];
  }

  $path = "uploaded-images/$product_image";

  move_uploaded_file($product_image_tmp, "$path");
  $insert = "insert into product (user_id,product_title,product_location,product_category,product_mobile,product_add,product_image) values ('$user_id','$product_title','$product_location','$cat_id','$product_mobile','$product_add','$product_image')";

  $insert_run = mysqli_query($con,$insert);

  if($insert_run)
  
    echo "<script>alert('Your data has been uploaded!');</script>";
  
       else{
        echo " <script>alert('Your Data is Not Uploaded!');</script> ";
       }          
  }

?>



