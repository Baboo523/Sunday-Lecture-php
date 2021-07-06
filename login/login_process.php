<?php
session_start();
$db_username = 'suleman';
$db_pass = '123';
$uname = $_POST['uname'];
$pass = $_POST['pass'];
if($uname==$db_username && $pass==$db_pass){
$_SESSION['user']=$uname;
header('location:welcome.php');
}
else{
header('location:login.php');
}
?>