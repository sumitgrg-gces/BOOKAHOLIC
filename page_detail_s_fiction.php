<?php
session_start();
$isLoggedIn = isset($_SESSION['id']) ;
 

?>
<html>
<head>
<title>BOOKAHOLIC</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.desc{
  margin-top: 10px;
  padding: 10px;
  font-style: italic; 
  font-size: 20px;
  text-indent: 30px;
}
    </style>



</head>
<body> 
      <div class="header_logo-box">
        <a href="index.php">
        <img class="header_logo-1" src="img/logo_transparent.png">
        </a>
    </div>
    <section class="sciencefiction">
        <div id="particles-js"></div>
  <nav class="navigation_bar">
        <div class="navigation_icon">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>


        </div>
        <?php if($isLoggedIn){?>
            <div class="header_avatar-box">
            <img class="header_avatar" src="avatar.png">
        </div>
        <?php }?>
        <ul class="navigation_list">
            <?php if(!$isLoggedIn) { ?>
                <li class="navigation_item"><a href="#" class="navigation_link" id="popup-signup">sign up</a></li>
                
                <li class="navigation_item"><a href="#" class="navigation_link" id="popup-login">log-in</a></li>
                <?php } ?>
                <li class="navigation_item"><a href="#" class="navigation_link">about us</a></li>
                <li class="navigation_item"><a href="#" class="navigation_link">help</a></li>
                <li class="navigation_item"><a href="#" class="navigation_link">home</a></li>
                
                <?php if($isLoggedIn) { ?>
                    <li class="navigation_item"><a href="#" class="navigation_link" id="popup-upload">upload</a></li>
                
                <li class="navigation_item"><a href="php/logout.php" class="navigation_link" id="popup-logout">log-out</a></li>
            <?php } ?>
        </ul>
    
    </nav>
    <?php


    include 'php/connection.php';

    $name= $_SESSION['bookname'];

  

               $selectquery="select * from upload where `book name` ='$name'";
               // id in(select max(id) from upload where category='0')";//from select tag we select 'romance'

               $query = mysqli_query($connection,$selectquery) or die('couldnt connect');

              if( $Result = mysqli_fetch_array($query)) {

                ?>
    

<div class="row">
  <div class="side">
   <!--  <div class="book-view">
        
  </div> -->
  
  <div class="main">
    <img src="php/uploads/<?php echo $Result['image'];?>" alt="image" width="180" height="180">

    <br/>
    <br/>
    <h1><?php echo $Result['book name'];?></h1>
    <h5>by <?php echo $Result['author name'];?></h5>
    <br 
    <input type="radio" id="book" checked>
        <label for="book" >Available in Hardcopy</label><br><br><br>
     
     <div> 
                
                <a href="search1.php?file=lab.pdf"> free Download</a>
                <?php echo $Result['pdf'];?>

                <!-- <a href="#" class="button">Read online</a> -->
        
</div> 

      <div class="desc"> 
        <label>Description:</label><br/>

     <span><?php echo $Result['description'];?></span>


    
  </div>
</div>

<?php }?>
<div class="popup_bg3">
        <div class="popup_content popup_content_upload">
            <img class="avatar" src="avatar.png">
            <h2 class="login_heading login_heading_signup heading-secondary u-margin-bottom-small u-center-text">Upload</h2>
            <div class="popup_close3">+</div>
            
            <form class="form form_signup" action="" method="POST" enctype="multipart/form-data">
                <input type="Text" class="input" name="bname" placeholder=" Book Name" required>
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                    </div>
                    <input type="Text" class="input" name="aname" placeholder="Author Name">
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                    </div>
                    <!-- <input type="Text" class="input" name="cname" placeholder="category"> -->
                    <select class="input" name="cname" placevalue="category">
                           <option value="0">Science Fiction</option>
                            <option value="1">Romance</option>
                            <option value="2">Horror</option>
                            <option value="3">Fantasy</option>
                            <option value="4">Mystery</option>
                            <option value="5">History</option>
                            <option value="5">Student</option>

                        </select>
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                    </div>
                    <input type="Text" class="input" name="dname" placeholder="Description">
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                    </div>

                    <input type="file" class="input" name="pdf" placeholder="Pdfs">

                    <!-- <label for="files" class="input">Select Book's pdf</label>
                    <input id="files" style="visibility:hidden;" type="file"> -->

                    <input type="file" class="input" name="image" placeholder="images">


                    <input type="Submit" name="upload" value="UPLOAD">

                

            </form>
            <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;
                        
                    }
                     
                     ?>
                    </div>
        </div>
    </div>



    
    <script type="text/javascript" src="particles.js"></script>

    <script type="text/javascript" src="app.js"></script>
    <script src="javascript/script.js"></script>
<script src="javascript/show-on-scroll.js"></script>

</body>

</html>

<?php
include 'php/connection.php';
// 
if(isset($_POST['upload'])){
       
       $errorer= array();
      $book_name = $_POST['bname'];

      $author_name = $_POST['aname'];
      $category = $_POST['cname'];
      $description = $_POST['dname'];

      $filepdf= $_FILES['pdf']['name'];

      $fileimage = $_FILES['image']['name'];





      
      $file_size1 =$_FILES['image']['size'];
      $file_tmp1 =$_FILES['image']['tmp_name'];
      $file_type1=$_FILES['image']['type'];
      $file_size2 =$_FILES['pdf']['size'];
      $file_tmp2 =$_FILES['pdf']['tmp_name'];
      $file_type2=$_FILES['pdf']['type'];

      $file_explode1=explode('.',$fileimage);
      

      $file_explode2=explode('.',$filepdf); 

      $file_ext1=strtolower(end($file_explode1));
      
      $file_ext2=strtolower(end($file_explode2));

      
      $expensions1= array("jpeg","jpg","png");
      $expensions2= array("pdf");

      
      if(in_array($file_ext1,$expensions1)=== false){
         $errorer[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if(in_array($file_ext2,$expensions2)=== false){
         $errorer[]="invalid format! only pdf";
      }
      
      if($file_size1 && $file_size2> 2097152000){
         $errorer[]='File size bigger';
      }
      
      if(empty($errorer)==true){

        $sql = "INSERT INTO upload (`book name`,`author name`, category, description, pdf, image)
         values('$book_name','$author_name','$category','$description','$filepdf','$fileimage')";

        $result = mysqli_query($connection,$sql);
        if ($result) {
            
        move_uploaded_file($file_tmp1,"php/uploads/".$fileimage);
          move_uploaded_file($file_tmp2,"php/uploads/".$filepdf);
          
             echo "<script>alert('uploaded!')</script>";
                
             } 
         

             else{
                echo "<script>alert('sorry!')</script>";

                 }

         //echo "Success";
      
        //    }  
     //    if (mysqli_query($connection, $sql)) {
     //    echo "New record created successfully !";
     // } else {
     //    echo "Error: " . $sql . "" . mysqli_error($connection);
     // }
     
  
          
          }  else{
         print_r($errorer);
      }
  }
?>
