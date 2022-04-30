<?php  

include "db_conn.php";

$sql = "SELECT * FROM users2 ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>