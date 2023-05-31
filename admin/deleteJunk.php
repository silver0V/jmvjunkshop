<?php 
include "conn.php";
$id = $_GET['id'];


mysqli_query($conn, "UPDATE service SET status='1'WHERE serviceID='$id'");
header('Location: tables.php');
?>