<?php
session_start();
$isLoggedIn = isset($_SESSION['id']) ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">

        <!-- <?php if($isLoggedIn){?> 
        
            <h2>logged in id =  <?= $_SESSION['id'] ?></h2>
        <?php } ?> -->

    <title>Bookholic <?php if($isLoggedIn) echo "login"; ?></title>
</head>

<body>


    <nav class="navigation_bar">
        <div class="navigation_icon">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>


        </div>
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
    <header class="header">
        <!-- <div class="particles-js-1"></div> -->

        <div class="header_logo-box">
            <img class="header_logo" src="img/logo_transparent.png">
        </div>
        <?php if($isLoggedIn){?>
            <div class="header_avatar-box">
            <img class="header_avatar" src="avatar.png">
        </div>
        <?php }?>
        <div class="header_text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">BOOKAHOLIC</span>
                <span class="heading-primary-secondary">have a libary at home</span>
            </h1>
            <form id="search_form" action="search1.php" method="POST">
                <input type="text" class="search" placeholder="search books" name="search">
            </form>
            <!-- <a class="btn btn-search" href="#">search books</a> -->
        </div>

    </header>
    <main>

        <section class="section-features">
            <!-- <div id="particles-js-1"></div> -->
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/video.mp4" type="video/mp4">
                    <source src="img/video.webm" type="video/webm">
                    Your browser is not supported!
                </video>
            </div>

            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    OUR FEATURES
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <div class="features show-on-scroll">

                        <div class="features_text">
                            <h3 class="heading-tertiary u-margin-bottom-small u-caption-colorful">search,read and download for free</h3>
                            <p>
                                Your favorite book is just one search away, with over hundreds of ebooks to choose form our dynamic database.
                                You can choose either to read online or download any content you want to go through them later at your convenience.


                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="col-1-of-2">
                    <div class="features show-on-scroll">

                        <div class="features_text">
                            <h3 class="heading-tertiary u-margin-bottom-small u-caption-colorful">handy for students</h3>
                            <p>
                            students can easily find the text books they want on 'student'category section. Instead of carrying a bag full of books, it is easier to carry a mobile device that supports eBooks, this allows students to refer to their notes and course materials anytime they want.
                             
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="features show-on-scroll">

                        <div class="features_text">
                            <h3 class="heading-tertiary u-margin-bottom-small u-caption-colorful">User Friendly</h3>
                            <p>
                            Interface of the web-app is well customized and easy to understand for the targeted group. With great work on UI of this site, and carefully understanding the health problems, students do not need to worry about eyes strains and can keep studying our books for a long time.

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-2">
                    <div class="features show-on-scroll">

                        <div class="features_text">
                            <h3 class="heading-tertiary u-margin-bottom-small u-caption-colorful">register and upload </h3>
                            <p>
                                Registered users have ability to upload and publish their content for sharing. Unlike, Anyother E-books sites Here users can upload any
                                ebooks on their disposal after validation with no worries unless its against law.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </section>
       
            
        
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                 
    

        <section class="section-category">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    CATEGORIES
                </h2>

            </div>
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--1">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        Science Fiction
                                    </span>

                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">Science fiction (sometimes shortened to sci-fi or SF) is a genre of speculative fiction that typically deals with imaginative and futuristic concepts such as advanced science and technology, space exploration, time travel, parallel universes, and extraterrestrial life</p>
                                </div>
                                <a href="category_science_fiction.php" class="btn btn-search">BOOKS</a>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--2">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        Romance
                                    </span>

                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">A romance novel or romantic novel is a type of novel and genre fiction which places its primary focus on the relationship and romantic love between two people, and usually has an "emotionally satisfying and optimistic ending."</p>
                                </div>
                                <a href="category_romance.php" class="btn btn-search">BOOKS</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--3">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        HORROR
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">Horror is a genre of speculative fiction which is intended to frighten, scare, or disgust. Literary historian J. A. Cuddon defined the horror story as "a piece of fiction in prose of variable length... which shocks, or even frightens the reader, or perhaps induces a feeling of repulsion or loathing".</p>
                                </div>
                                <a href="#" class="btn btn-search">BOOKS</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--4">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        Fantasy
                                    </span>

                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">Make-believe is what this genre is all about. Another description is any book that contains unrealistic settings,magic,often set in a medieval universe, or possibly involving supernatural forms as a primary element of the plot or setting</p>
                                </div>
                                <a href="#" class="btn btn-search">BOOKS</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--5">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        mystery
                                    </span>

                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">The mystery fiction genre is literature that focuses on solving a crime or crime-related puzzle. The story usually follows a protagonist, or detective, who tries to solve the crime and reveal the culprit, or villain</p>
                                </div>
                                <a href="#" class="btn btn-search">BOOKS</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--6">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        History
                                    </span>

                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">History. Nonfiction history books include any books that lay out the known facts about a particular, time, culture, or event in history.</p>
                                </div>
                                <a href="#" class="btn btn-search">BOOKS</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row" style="position: relative;">
                <div class="col-1-of-3" style="position: absolute; left: 35.2%;">
                    <div class="card show-on-scroll">
                        <div class="card_side card_side--front">
                            <div class="card_picture--7">

                                <h4 class="card_heading">
                                    <span class="card_heading-span ">
                                        students
                                    </span>

                                </h4>
                            </div>
                        </div>
                        <div class="card_side card_side--back card_side--back-1">
                            <div class="card_cta">
                                <div class="card_textbox">
                                    <p class="card_text">eBooks ensure that students are proactively interacting with the learning material. Digital books provide students with a completely enriched learning experience and help them improve their academic performance.</p>
                                </div>
                                <a href="category_student.php" class="btn btn-search">BOOKS</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

           

        </section>
    </main>
    <footer class="footer">
        <div class="u-center-text u-margin-bottom-small">
            <h2 class="heading-secondary">DEVELOPERS:</h2>
        </div>
        <!-- <div style="margin: 0 auto;"> -->
        <div class="row" style="margin-left: 333px;">
            <div class="col-1-of-3">
                <figure class="developer show-on-scroll">
                    <img src="img/suman.jpg" alt="s" class="developer_img">
                    <div class="d_overlay">
                        <div class="overlay_content">NAME: </div>
                        <div class="overlay_content">Suman darji </div>
                        <div class="overlay_content">Role:Fullstack </div>


                    </div>

                </figure>
            </div>
            <div class="col-1-of-3">
                <figure class="developer show-on-scroll">
                    <img src="img/sumit.jpeg" alt=" s" class="developer_img">
                    <div class="d_overlay">
                        <div class="overlay_content">NAME: </div>
                        <div class="overlay_content">Sumit Gurung </div>
                        <div class="overlay_content">Role:Fullstack </div>


                    </div>
                </figure>
            </div>
            <div class="col-1-of-3">
                <figure class="developer show-on-scroll">
                    <img src="img/sishir.jpeg" alt=" s" class="developer_img">
                    <div class="d_overlay">
                        <div class="overlay_content">NAME: </div>
                        <div class="overlay_content">Sishir Chhetri </div>
                        <div class="overlay_content">Role:Fullstack </div>


                    </div>
                </figure>
            </div>
        </div>

        <div class="footer_navigation">
            <ul class="footer_list">
                <li class="footer_item"><a class="footer_link" href="#">about us</a></li>
                <li class="footer_item"><a class="footer_link" href="#">terms</a></li>
                <li class="footer_item"><a class="footer_link" href="mailto:be2018se612@gces.edu.np?cc=be2018se614@gces.edu.np&bcc=be2018se621@gces.edu.np&subject=The%20subject%20of%20the%20email&body=The%20bodmailto:be2018se612@gces.edu.np?cc=be2018se614@gces.edu.np&bcc=be2018se621@gces.edu.np&subject=The%20subject%20of%20the%20email&body=The%20body%20of%20the%20email">contact us</a></li>
                <li class="footer_item"><a class="footer_link" href="#">FAQ</a></li>
                <li class="footer_item"><a class="footer_link" href="mailto:be2018se612@gces.edu.np?cc=be2018se614@gces.edu.np&bcc=be2018se621@gces.edu.np&subject=The%20subject%20of%20the%20email&body=The%20body%20of%20the%20email">report bug</a></li>



            </ul>
        </div>

        <div class="footer_copyright">Copyright © 2020 by Team Bookaholic
            All rights reserved. This site or any portion thereof
            may not be reproduced or used in any manner whatsoever
            without the express written permission of the publisher
            except for the use of brief quotations.</div>


    </footer>

    <div class="popup_bg1">
        <div class="popup_content popup_content_signup">
            <img class="avatar" src="avatar.png">
            <h2 class="login_heading login_heading_signup heading-secondary u-margin-bottom-small u-center-text">Sign-up</h2>
            <div class="popup_close1">+</div>
            <form class="form form_signup" action="php/insert.php" method="POST">
                <input type="Text" class="input" name="name" placeholder=" Your Name">
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                    </div>

                <input type="Text" class="input" name="email" placeholder=" Your Email">
                <div class="error">
                    <?php
                    if(isset($_SESSION['email_error'])){
                    echo $_SESSION["email_error"] ;
                    }
                     ?>
                    </div>

                <input type="Password" class="input" name="password" placeholder="Enter password">
                <div class="error">
                    <?php
                    if(isset($_SESSION['password_error'])){
                    echo $_SESSION['password_error'] ; 
                    } ?>
                    </div>

                <input type="Password" class="input" name="cpassword" placeholder="confirm password">
                <div class="error">
                    <?php
                     if(isset($_SESSION['capassword_error'])){
                    echo $_SESSION['cpassword_error'] ; 
                      } ?>
                    </div>

                <input type="Text" class="input" name="location" placeholder=" Your location" required>
                <div class="error"></div>
                
                <input type="number" class="input" name="phone" placeholder=" Your phone number">
                <div class="error">
                    <?php
                    if(isset($_SESSION['phone_error'])){
                    echo $_SESSION['phone_error'] ; 
                    } ?>
                    </div>
                <hr class="h-line">

                <p><span><input type="checkbox" name="agree">&nbsp I agree to the terms of services</span></p>
                <div class="error">
                    <?php
                    if(isset($_SESSION['agree_error'])){
                    echo $_SESSION['agree_error'] ;  
                    }?>
                    </div>

                <input type="Submit" name="submit" value="sign-up">

                <?php 
                
                // document.getElementById("popup-signup").dispatchEvent( new Event("click"))
                $hasError = false ;


                $errKeys = [
                    'agree_error',
'name_error',
'email_error',
'password_error',
'cpassword_error',
'phone_error'
                ];

                foreach($errKeys as $ekey){
                    if(!empty($_SESSION[$ekey])){
                        $hasError = true ;
                    }
                }

                if($hasError){
                    echo "<script> 
                    window.addEventListener('load', function(){
                    document.getElementById('popup-signup').dispatchEvent( new Event('click'));}) ;
                    </script>" ;
                }
                
                ?>
               
                <?php 
                
                unset($_SESSION['agree_error']) ;
                unset($_SESSION['name_error']) ;
                unset($_SESSION['email_error']) ;
                unset($_SESSION['password_error']) ;
                unset($_SESSION['cpassword_error']) ;
                unset($_SESSION['phone_error']) ;

                
                ?>

            </form>
        </div>
    </div>

    <div class="popup_bg2">
        <div class="popup_content popup_content_login">



            <img class="avatar" src="avatar.png">
            <h2 class="login_heading login_heading_login heading-secondary u-margin-bottom-small u-center-text">LOGIN</h2>
            <div class="popup_close2">+</div>
            <form class="form form_login" action="php/handle.php" method="POST">

                <input type="Text" class="input input_login" name="email" placeholder=" Your Email">
                <input type="Password" class="input input_login" name="password" placeholder="Enter password">
                <input type="Submit" name="login" value="Login">

            </form>
        </div>

    </div>

    <div class="popup_bg3">
        <div class="popup_content popup_content_upload">
            <img class="avatar" src="avatar.png">
            <h2 class="login_heading login_heading_signup heading-secondary u-margin-bottom-small u-center-text">Upload
            </h2>
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
                <select class="input" name="cname" placevalue="category" style="color:#6d6262;">
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
                <!-- <input type="Text" class="input" name="dname" placeholder="Description"> -->

                <textarea name="dname" id="" cols="1" rows="2.5" class="input" placeholder="Description"></textarea>
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                </div>

                <input type="file" class="input" name="pdf" id='fileInput1' style='display: none;'>
                <label for='fileInput1' class='input' style='display: block; padding:7.5px; color:#6d6262; '>Choose
                    File(pdf) &nbsp; <img src="upload_click.png" alt="img" style="height:15px; width:15px;"></label>
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                </div>

                <!-- <label for="files" class="input">Select Book's pdf</label>
                    <input id="files" style="visibility:hidden;" type="file"> -->

                <input type="file" class="input" id='fileInput2' name="image" style="display:none;">
                <label for='fileInput2' class='input' style='display: block; padding:7.5px; color:#6d6262; '>Choose
                    photo &nbsp; <img src="upload_icon.png" alt="img" style="height:15px; width:15px;"></label>
                <div class="error">
                    <?php
                    if(isset($_SESSION['name_error'])){
                        echo $_SESSION["name_error"] ;

                    }
                     
                     ?>
                </div>


                <input type="Submit" name="upload" value="UPLOAD">



            </form>

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
