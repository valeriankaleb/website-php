<?php
    require "session.php";
    require "koneksi.php";

    $query = mysqli_query($con, "SELECT * FROM produk");
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
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
          
                      <form class="px-md-2">
          
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" class="form-control" />
                          <label class="form-label">Name</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" class="form-control" />
                            <label class="form-label">Email</label>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 mb-4">     
                            <input type="password" class="form-control" />
                            <label class="form-label">Password</label>
                          </div>
                          <div class="col-md-6 mb-4">
                            <input type="password" class="form-control" />
                            <label class="form-label">Confirm Password</label>
                          </div>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label">
                              I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>
          
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col text-center">
                                    <a href="index.html" type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1">Submit</a>
                                </div>
                            </div>
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.html" class="fw-bold text-body"><u>Login here</u></a></p>
          
                      </form>
          
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
