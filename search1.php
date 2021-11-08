<?php
 include 'php/connection.php';
?>
<html>
	<head>
    <link rel="stylesheet" href="css/style.css">

	</head>
	<body>

  <?php
if(isset($_POST['search'])){

	$searching= $_POST['search'];

   $searching= preg_replace("#[^0-9a-z]#i","",$searching);
   $sql = "select * from upload where `book name` like '%$searching%'";
   $query =mysqli_query($connection,$sql);

?>
 
 
 

 


<div class="row"> 
   


<?php 
$col=0;
while ( $Result = mysqli_fetch_array($query)) {



?>  


<div class="col-1-of-5">

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


</div>
<?php } ?>

<script type="text/javascript" src="particles.js"></script>

<script type="text/javascript" src="app.js"></script>
<script src="javascript/script.js"></script>
<script src="javascript/show-on-scroll.js"></script>


		</body>
		</html>



<!--  
session_start();
if(!empty($_GET['file'])){
	$fileName= basename($_GET['file']);
	$filePath = "php/uploads/".$fileName;
	if(!empty($fileName) && file_exists($filePath)){
		header("Cache-Control:public");
		header("Content-Description:File Transfer");
		header("Content-Disposition: attachment; filename =$fileName");
		header("Content-Type:Application/pdf");
		header("Content-Transfer-Encoding: binary");

           readfile($filePath);
           exit();


		
	}
	else{
		echo "file dont exit";
	}
}
?> -->
  