


<?php 
include 'config.php';
// sql to delete a record
  // 1. get the ID of Admin to be deleted
  $id = $_GET['id'];

   //2. Create SQL Query to Delete Admin
   $sql = "DELETE FROM comments WHERE id=$id";
   $res = mysqli_query($conn, $sql);






?>