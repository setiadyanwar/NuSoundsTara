<?php
    session_start();
    require "../koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Costum css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/nusoundtara.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <section class="vh-100" style="background-color: #f8cb2e;" >
  <div class="container py-5 h-100">
    <div class="row d-flex flex-column justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../images/brandi-redd-aJTiW00qqtI-unsplash.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; " />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black login-box">

                <form action="" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">NuSoundsTara</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-2">
                    <button class="btn custom-btn btn-lg btn-block" type="submit" name="loginbtn">Login</button>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <?php
                          if(isset($_POST['loginbtn'])){
                            $username =htmlspecialchars( $_POST['username'] );
                            $password =htmlspecialchars( $_POST['password'] );

                            $query = mysqli_query($con, "SELECT * FROM users WHERE username ='$username'");

                            $countdata = mysqli_num_rows($query);
                            $data = mysqli_fetch_array($query);
                            
                            if($countdata >0){
                              if(password_verify($password, $data['password'])){
                                $_SESSION['username'] = $username;
                                $_SESSION['login'] = true;
                                header("location:../adminpanel/html/admin.php");
                              }else{
                               ?>
                                <div class="alert alert-warning" role="alert">
                                  Password salah
                                </div>
                                <?php
                              }
                            }else{
                              ?>
                              <div class="alert alert-warning" role="alert">
                                Akun tidak tersedia
                              </div>
                              <?php
                            }
                          }
                        ?>
                      </div>
                    </div>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

</section>
        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/custom.js"></script>
  </body>
</html>