<?php
include "conn.php";
$id = $_GET['id'];

$sql = "SELECT * FROM service WHERE serviceID='$id'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMV Admin</title>

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
      
                  <h3 class="mb-5">Sign in</h3>
                    
                  <form action="editJ.php?id=<?php echo $id?>" method="post">
                    <div class="form-outline mb-4">
                        <label class="form-label-lg">Image File Name</label><br>
                        <input type="text" name="img" class="form-control form-control-lg" value="<?php echo $row['img'];?>"/>
                        <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
                        <!-- <input style="font-size:13pt" type="file" name="my_image"> -->
                      </div>
          
                      <div class="form-outline mb-4">
                        <label class="form-label">Junk Name</label>
                        <input type="text" name="junkName" class="form-control form-control-lg" value="<?php echo $row['junkName'];?>"/>
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label">Junk Description</label>
                        <input type="text" name="junkDesc" class="form-control form-control-lg" value="<?php echo $row['junkDesc'];?>"/>
                      </div>

                      <button type="submit" class="btn btn-success btn-lg">Update</button>
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