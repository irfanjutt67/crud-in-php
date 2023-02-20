<?php

   include "connection.php";
   
   if(isset($_GET['data_id'])){
     
      $id=  $_GET['data_id'];
      $sql = "DELETE FROM firsttest WHERE data_id = $id";
      $query= mysqli_query($con,$sql);
      
      header("Location: http://localhost/test/form.php"); 
   }
 
?>