<!-- // database name is bookaholic and table is signnn-up. -->
<?php
$connection=mysqli_connect('localhost','root','','bookaholic');


// echo "<pre>"var_dump($connection);
// echo "</pre>";




		if($connection){
		// echo" <h1> <center> Your inputed Data has been received </center> </h1>";
			}
else{
	die("connection failed!");
}
  