<?php
  include("connection.php");

  if(isset($POST['submit'])){
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
  }
  
?>