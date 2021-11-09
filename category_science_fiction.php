<?php
session_start();
$isLoggedIn = isset($_SESSION['id']) ;
 
  
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Category-science_fiction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="header_logo-box">
        <a href="index.php">
        <img class="header_logo-1" src="img/logo_transparent.png">
        </a>
    </div>
    <?php if($isLoggedIn){?>
            <div class="header_avatar-box">
                <img class="header_avatar" src="avatar.png">
            </div>
            <?php }?>

    <section class="sciencefiction">
        <div id="particles-js"></div>
        
        <div class="sfh u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                science fiction
            </h2>
        </div>
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
    
    
        

        
        <div class="row">
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/a_wrinkle_in_time/17024.jpg"   class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>
                         <div class="overlay_content">Madeleine L'Engle </div>
                        <div class="overlay_content">Written In:1960 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">A Wrinkle in Time </figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/ancestral_night/an.png" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>
                        
                        <div class="overlay_content">Elizabeth bear </div>
                        <div class="overlay_content">Written In:2019 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Ancestral night </figcaption>
                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/brave_new _world/bnw.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Aldous Huxley </div>
                        <div class="overlay_content">Written In:1931 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Brave New World </figcaption>
                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/divergent/divergent.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Veronica Roth </div>
                        <div class="overlay_content">Written In:2011 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Divergent </figcaption>
                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/dune/dune.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Frank Herbert </div>
                        <div class="overlay_content">Written In:1965 </div>

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Dune</figcaption>

                </figure>
            </div>
            
        </div>
        <div class="row">
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/frankenstein/frank.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Mary Shelley </div>
                        <div class="overlay_content">Written In:1818 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Frankenstein</figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/neuromancer/neuro.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">William Gibson </div>
                        <div class="overlay_content">Written In:1984 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Neuromancer</figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/the_girl_with_all_the_gifts/girl.jpeg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">M.R. Carey </div>
                        <div class="overlay_content">Written In:2014 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">The Girl With All the Gifts </figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/the_hunger_games/hunger.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Suzanne Collins </div>
                        <div class="overlay_content">Written In:2008 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">The Hunger Games</figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/the_calculating_stars/calcstars.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Mary Kowal </div>
                        <div class="overlay_content">Written In:2018 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">The Calculating Stars</figcaption>

                </figure>
            </div>
            
        </div>
        <div class="row">
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/children_of_time/children.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Adrian Tchaikovsky </div>
                        <div class="overlay_content">Written In:2015 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Children Of Time</figcaption>
                 </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/the_maze_runner/maze.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content"> James Dashner</div>
                        <div class="overlay_content">Written In:2009 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">The Maze Runner</figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/snow_crash/snow.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content"> Neal Stephenson</div>
                        <div class="overlay_content">Written In:1992 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">Snow Crash</figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/the_time_traveler's_wife/wife.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Audrey Niffenegger </div>
                        <div class="overlay_content">Written In:2003 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">The Time Traveller's Wife</figcaption>

                </figure>
            </div>
            <div class="col-1-of-5">
                <figure class="sfb">
                    <img src="Category-science_fiction/the_martian/moon.jpg" alt="" class="sfbi">
                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content">Andy Weir </div>
                        <div class="overlay_content">Written In:2011 </div>
                        

                    </div>
                    <figcaption class="sfbc u-caption-colorful">The Martian</figcaption>

                </figure>
            </div>
            
        </div>

        <?php
        
            include 'php/connection.php';
 
               $selectquery= "select * from upload where category='0'";//from select tag we select 'romance'

               $query = mysqli_query($connection,$selectquery) or die('couldnt connect');
              
               
               ?>
        
               
            
              
      <div class="row"> 
                 
           

            <?php 
            $col=0;
           while ( $Result = mysqli_fetch_array($query)) {
              
            
           
            ?>  
            
      
       <div class="col-1-of-5">
        <?php  $_SESSION['bname']=$Result['book name'];  ?>
                <figure class="sfb">
                 <a href="page_detail_s_fiction.php?id=<?= $Result['id'] ?>">  <img src="php/uploads/<?php echo $Result['image'];?>" alt="pic" class="sfbi">

                    <div class="overlay">
                        <div class="overlay_content">BY: </div>

                        <div class="overlay_content"><?php echo $Result['author name'];  ?></div>
                        <div class="overlay_content">Written In:2011 </div>
                        

                    </div>
                </a>
                    <figcaption class="sfbc u-caption-colorful"><?php echo $Result['book name'];  ?></figcaption>


                </figure>
            </div>
            
        
        <?php
        $col++;
        
     if($col%5==0) {
        echo '</div><div class="row">';
         }
       }
      
      ?>
       <!--  <script type="text/javascript">

        function Open(){
        header('../upload/page.php');
      }
  </script> -->
       </div>
        


    </section>
        <!-- POPUPS -->

    <div class="popup_bg1">
        <div class="popup_content popup_content_signup">
            <img class="avatar" src="avatar.png">
            <h2 class="login_heading login_heading_signup heading-secondary u-margin-bottom-small u-center-text">Sign-up
            </h2>
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
            <h2 class="login_heading login_heading_login heading-secondary u-margin-bottom-small u-center-text">LOGIN
            </h2>
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