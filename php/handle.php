<?php
require "connection.php";

$e=$_POST["email"];
$p=$_POST["password"];

$query="SELECT *FROM `wt-team` WHERE email='$e' && password='$p' ";

$handle=mysqli_query($connection,$query);

if(mysqli_num_rows($handle)){
	header("location: ../index.html ");

}else{
	echo "YOU ARE NOT A MEMBER!!";
}
