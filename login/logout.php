<?php
//start session
session_start();
// destroy session
session_destroy();
//Redirect to main page(login.php)
header("location:login.php");
?>