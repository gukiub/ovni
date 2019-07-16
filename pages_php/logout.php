<?php 
session_destroy();
$_SESSION['*']=false;
header('location: ../index.php');
  
?>