 <?php

  session_start(); // Starting Session
  $error=''; // Variable To Store Error Message
  if (isset($_POST['login'])) {


  // Define $username and $password
  $user_email=$_POST['user_email'];
  $user_password=$_POST['user_password'];
  // Establishing Connection with Server by passing server_name, user_id and password as a parameter
  $connection = mysqli_connect("localhost", "root", "","citylife");
  $query = "select * from user where user_password='$user_password' AND user_email='$user_email'";
  $run_query=mysqli_query($connection, $query);
  $rows = mysqli_num_rows($run_query);
  if ($rows == 1) {
  $_SESSION['login_user']=$user_email; // Initializing Session
  header("location: profile.php"); // Redirecting To Other Page
  } else {
  echo '<script type="text/javascript">alert("Invalid Credential")</script>';
  }
  mysqli_close($connection); // Closing Connection
  }
?>