<?php 
session_start();

session_destroy();
// echo "hello";
header("location: ../index.php");
?>
