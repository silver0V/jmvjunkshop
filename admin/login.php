<?php
include 'conn.php';


$email = $_POST ['email'];
$pass = $_POST ['password'];

// if(isset($_SESSION['email'])){
//     header("location:tables.php");
//   }

session_start();
    
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        $id = $row['adminID'];
        // $_SESSION['email'] = $row['email'];
        // $_SESSION['password'] = $row['password'];

        if ($row ['email'] === $email && $row ['password'] === $pass ){
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            // define('loggedin', true);
            header("Location: tables.php");
        }

    }else { ?>
    
        <script>
        window.alert('Invalid credentials!');
        window.location.href='index.php';
        // unset($_SESSION['Email']);
        // unset($_SESSION['Password']);
        </script>
<?php    } ?>




// if(isset($_POST['login'])){
//     $email = $_POST['email'];
//     $pass = $_POST['password'];

//     $select = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'");
//     $row = mysqli_fetch_array($select);

//     if(is_array(($row))){
//         if ($row ['email'] === $email && $row ['password'] === $pass ){
//             $_SESSION['email'] = $row['email'];
//             $_SESSION['password'] = $row['password'];
//         }
//     }else{ 
//         <!-- echo '<script type = "text/javascript">';
//         echo 'window.alert("Invalid credentials")';
//         echo 'window.location.href = "index.php"';
//         echo '</script>'; -->

//     }
// }

// if(isset($_SESSION['email'])){
//     header("Location:tables.php");
// }


