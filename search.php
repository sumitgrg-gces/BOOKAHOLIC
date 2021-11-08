<?php 
session_start();

include 'php/connection.php'; 
?>

<form method="post" action="#">

  <input type="search" name="search" placeholder="Search book's" class="search">
  <input type="Submit" name="ssubmit" value="Search">
</form>

 <!-- <?php
          
         if(isset($_POST['search'])){
               $searching= $_POST['search'];
               
              $searching= preg_replace("#[^0-9a-z]#i","",$searching);
              $sql = "select * from upload where `book name` like '%$searching%'";
              $query =mysqli_query($connection,$sql);
         ?>

<table>
  <tr>
    <th> Author Name</th>
    <th>Book Name</th>

  </tr>
  <?php while($Result=mysqli_fetch_array($query)){?>
  <tr>
    <td><?php echo $Result['author name'];?></td>
   

    <td> <a href="page_detail_s_fiction.php?id=<?= $Result['id'] ?>"><?php echo $Result['book name'];?></a></td>
    
  </tr>
  <?php } ?>
  
</table>

<?php }
}
?>