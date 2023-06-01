<?php
include 'conn.php';


$email = $_POST ['email'];
$pass = $_POST ['password'];
    
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        $id = $row['adminID'];
        // $_SESSION['Email'] = $row['uEmail'];
        // $_SESSION['Password'] = $row['uPass'];

        if ($row ['email'] === $email && $row ['password'] === $pass ){
            header("Location: tables.php");
        }

    }else {?>
    
        <script>
        window.alert('User not Found!');
        window.location.href='index.html';
        // unset($_SESSION['Email']);
        // unset($_SESSION['Password']);
        </script>
   <?php }?>

