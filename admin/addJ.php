<?php
include "conn.php";

$img= $_POST['img'];
$junkName= $_POST['junkName'];
$junkDesc= $_POST['junkDesc'];


mysqli_query($conn, "INSERT INTO service (img, junkName, junkDesc, status) values('$img','$junkName','$junkDesc','0')");
header("Location: tables.php");
?>