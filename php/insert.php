<?php 
session_start();
require "connection.php";

$isvalid=true;

//validation/////////////////////////////////////////////////////////////////////////////////////

echo "yes";
// define variables to empty values  
$name_error = $email_error = $password_error = $cpassword_error = $phone_error = $agree_error = "";  
$name = $email = $password = $cpassword = $phone = $agree = "";  
$_SESSION["name_error"]=""; 
//Input fields validation  
if (isset($_POST['submit'])) {
      
//String Validation  
    if (empty($_POST["name"])) {  
        $_SESSION["name_error"] = "Field Empty"; 
         $isvalid=false; 
         
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $_SESSION['name_error'] = "Only alphabets and white space are allowed"; 
                $isvalid=false;  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {
        $_SESSION["email_error"] = "You Forgot to Enter Your Email!";
        $isvalid=false; 
    } else {
        $email = $_POST["email"];
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $_SESSION['email_error'] = "You Entered An Invalid Email Format"; 
            $isvalid=false; 
        } 
    }
    
   // print_r($_POST);
    //Validates password & confirm passwords.
    if(!empty($_POST["password"])){
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        if (strlen($_POST["password"]) <= '6') {
            $_SESSION['password_error'] = "Your Password Must Contain At Least 6 Characters!";
            $isvalid=false; 
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $_SESSION['password_error'] = "Include at least one number!";
            $isvalid=false; 
        }
       // elseif(!preg_match("#[A-Z]+#",$password)) {
         //   $password_error = "Your Password Must Contain At Least 1 Capital Letter!";
        
        // elseif(!preg_match("#[a-z]+#",$password)) {
        //     $password_error = "Your Password Must Contain At Least 1 Lowercase Letter!";
      
            
            // $cpassword_error = "Please Check You've Entered Or Confirmed Your Password!";
        if($password != $cpassword){
            $_SESSION['cpassword_error']="password didnt match";
                  $isvalid=false; 

            }
    }  


    //Number Validation  
    if (empty($_POST["phone"])) {  
        $_SESSION['phone_error'] = "Mobile no is required";  
            $isvalid=false; 
    } else {  
            $phone = input_data($_POST["phone"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $phone) ) {  
                $_SESSION['phone_error']= "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($phone) != 10) {  
            $_SESSION['phone_error'] = "Mobile no must contain 10 digits.";  
            }  
    }  
       
     
      
    
  
    //Checkbox Validation  
    if (!isset($_POST['agree'])){  
        $_SESSION['agree_error'] = "Accept terms of services before submit.";  
    } else {  
            $agree = input_data($_POST["agree"]);  
    }  
}  
   function input_data($data) {  
     $data = trim($data);  
     $data = stripslashes($data);  
     $data = htmlspecialchars($data);  
      return $data;  
    }
 
///////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['submit'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $password=  md5($_POST['password'],TRUE);

    $l=$_POST['location'];
	$p = $_POST['phone'];
	
	
	

if($isvalid ){
    $sql="INSERT INTO `signnn-up`(name,email,password,location,phone) values('$n','$e' ,'$password','$l','$p')";
    mysqli_query($connection,$sql); 
    header("location: ../index.php ");
}
else{
    header("location: ../index.php");
    echo"invalid data";
}

print_r(mysqli_error_list($connection));


 }
