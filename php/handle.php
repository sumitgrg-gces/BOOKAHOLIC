<?php
session_start() ;
require "connection.php";

$e=$_POST["email"];
$p=$_POST["password"];

$query="SELECT * FROM `signnn-up` WHERE email='$e' && password='$p'";
// echo $query;die();

$handle=mysqli_query($connection,$query);

if(mysqli_num_rows($handle)){
    // print_r(mysqli_fetch_assoc($handle));die();
    $_SESSION['id'] = mysqli_fetch_assoc($handle)['ID'] ;
	header("location: ../index.php");

}else{
	echo "YOU ARE NOT A MEMBER!!";
}
 
/*
<?php
                    if(isset($agree_error)){?>
                    <p><?php echo $agree_error?></p>
                    <?php } 
                     ?>
                    </div> 
                    */