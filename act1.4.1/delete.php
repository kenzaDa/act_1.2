<?php   
 include 'db.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM articles WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:index.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>