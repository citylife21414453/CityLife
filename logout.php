<?php
session_start();
session_destroy();  //Destroy All Sessions
header("Location:index.html");
exit();
?>