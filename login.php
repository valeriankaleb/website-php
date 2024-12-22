<?php
    session_start();
    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SignUp</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <section class="h-100 gradient-custom" style="background-color: #8fc4b7;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card rounded-3">
                    <img src="assets/img/img_1.jpg"
                      class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                      alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Login Info</h3>
          
                      <form class="px-md-2" method="post">

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" class="form-control" name="username" id="username"/>
                            <label class="form-label">Email/Username</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" class="form-control" name="password" id="password"/>
                            <label class="form-label">Password</label>
                        </div>

                        <div class="container mt-5">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" name="loginbtn" 
                                    class="btn btn-primary btn-lg mb-1">Masuk</button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                          <p>Not a member? <a href="../signup.php">Register</a></p>
                        </div>
          
                      </form>
                    </div>

                    <div class="mt-3">
                      <?php
                          if(isset($_POST['loginbtn'])){
                            $username = htmlspecialchars($_POST['username']);
                            $password = htmlspecialchars($_POST['password']);

                            $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                            $countdata = mysqli_num_rows($query);
                            $data = mysqli_fetch_array($query);

                            if($countdata>0){
                              if (password_verify($password, $data['password'])) {
                                  $_SESSION['username'] = $data['username'];
                                  $_SESSION['login'] = true;
                                  header('location: /Warung');
                              }
                              else {
                                echo '<div class="alert alert-danger" role="alert">
                                        Incorrect password. Please try again.
                                      </div>';
                              }
                            }
                            else {
                              echo '<div class="alert alert-warning" role="alert">
                                        This username does not exist. Please check it out!
                                    </div>';
                            }
                          }
                      ?>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
