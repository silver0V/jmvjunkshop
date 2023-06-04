<?php
session_start();
include('conn.php');
if(isset($_REQUEST['submit'])){
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $select_query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password'");
  $res = mysqli_num_rows($select_query);
  if($res>0){
    $data = mysqli_fetch_array($select_query);
    $id = $data['adminID'];
    $_SESSION['adminID'] = $id;
    header('location:tables.php');
  }else{ ?>
    <script>
        window.alert('Invalid credentials!');
        window.location.href='index.php';
        // unset($_SESSION['Email']);
        // unset($_SESSION['Password']);
        </script>
<?php  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMV Admin</title>
    <link href="../assets/img/jmvlogotrans.png" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
</head>
<body>
    <section class="vh-100" style="background-color: #013172;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Log in</h3>
                    
                  <form action="index.php" method="post">
                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required/>
                        <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
                      </div>
          
                      <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required/>
                        <!-- <label class="form-label" for="typePasswordX-2">Password</label> -->
                      </div>
                      <button type="submit" name="submit" class="btn btn-success btn-lg">Login</button>
                      <!-- <button class="btn btn-primary btn-lg btn-block" type="submit" style="background: #03990f;">Login</button> -->
                  </form>

                  <!-- <div class="form-outline mb-4">
                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email"/>
                    <label class="form-label" for="typeEmailX-2">Email</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password"/>
                    <label class="form-label" for="typePasswordX-2">Password</label>
                  </div> -->
      
                  <!-- Checkbox -->
                  <!-- <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                  </div> -->
      
                  <!-- <button class="btn btn-primary btn-lg btn-block" type="submit" style="background: #03990f;">Login</button> -->
      
                  <!-- <hr class="my-4"> -->
      
                  <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                    type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                  <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>