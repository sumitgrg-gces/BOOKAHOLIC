<?php
require "connection.php";

$e=$_POST["email"];
$p=$_POST["password"];

$query="SELECT * FROM `sign-up` WHERE email='$e' && password='$p' ";

$handle=mysqli_query($connection,$query);

if(mysqli_num_rows($handle)){
	header("location: ../category-science_fiction/category-science_fiction.html ");

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