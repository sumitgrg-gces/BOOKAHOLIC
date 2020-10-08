<?php 

require "connection.php";


if(isset($_POST['submit'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $password=$_POST['password'];
    $l=$_POST['location'];
	$p = $_POST['phone'];
	
	
	


$sql="INSERT INTO `sign-up`(name,email,password,location,phone) values('$n','$e' ,$password,'$l','$p')";
mysqli_query($connection,$sql);

print_r(mysqli_error_list($connection));
echo" <h1> <center> Your inputed Data has been received</center> </h1>";
echo "<br>";
echo" <h1> <center> These data are highely secured and will be used to inform you on any circumstances... </center> </h1>";
echo "<br>";
echo "<br>";
echo" <h1> <center> Thank you </center> </h1>";
echo "<br>";
echo "<hr>";

}
