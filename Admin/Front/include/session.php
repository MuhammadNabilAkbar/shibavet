<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!empty($_SESSION["username"]) || $_SESSION["username"] !== true){
//     header("location: login.php");
//     exit;
// }
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
  header("Location: ../login/login.php");
}
?>