<?php 
$_SESSION['username']= "";
$_SESSION['password']= "";
$_SESSION['role']="";
$username="";
$password="";
$role="";
session_start();
session_destroy();
header("location:session.php");

?>