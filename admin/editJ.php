<?php 
include "conn.php";
$id = $_GET['id'];

$img= $_POST['img'];
$junkName= $_POST['junkName'];
$junkDesc= $_POST['junkDesc'];

mysqli_query($conn, "UPDATE service SET img='$img', junkName='$junkName', junkDesc='$junkDesc' WHERE serviceID='$id'");
header('Location: tables.php');
?>