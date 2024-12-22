<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cart</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-purple">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">RONDE 168</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    </ul>
                    <form class="d-flex">
                        <a href="../index.php" class="btn btn-outline-dark" type="submit">
                            Back
                        </a>
                    </form>
                </div>
            </div>
        </nav>

        <section class="h-100 gradient-custom">
            <div class="container py-5">
              <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                  <div class="card mb-4">
                    <div class="card-header py-3">
                      <h5 class="mb-0">Cart - 2 items</h5>
                    </div>
                    <div class="card-body">
                      <!-- Single item -->
                      <div class="row">
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                          <!-- Image -->
                          <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                            <img src="https://dummyimage.com/237x275/dee2e6/6c757d.jpg"
                              class="w-100" alt="Blue Jeans Jacket" />
                            <a href="#!">
                              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                          </div>
                          <!-- Image -->
                        </div>
          
                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                          <!-- Data -->
                          <p><strong>Nama Makanan</strong></p>
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-dark btn-sm me-1 mb-2" data-mdb-tooltip-init
                            title="Remove item">
                            Modifikasi
                            <i class="fas fa-trash"></i>
                          </button>
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm me-1 mb-2" data-mdb-tooltip-init
                            title="Remove item">
                            Remove
                            <i class="fas fa-trash"></i>
                          </button>
                          <!-- Data -->
                        </div>
          
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                          <!-- Quantity -->
                          <div class="d-flex mb-4" style="max-width: 300px">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              -
                              <i class="fas fa-minus"></i>
                            </button>
          
                            <div data-mdb-input-init class="form-outline">
                              <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                              <label class="form-label" for="form1">Jumlah</label>
                            </div>
          
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              +
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <!-- Quantity -->
          
                          <!-- Price -->
                          <p class="text-start text-md-center">
                            <strong>Rp.9000</strong>
                          </p>
                          <!-- Price -->
                        </div>
                      </div>
                      <!-- Single item -->
          
                      <hr class="my-4" />
          
                      <!-- Single item -->
                      <div class="row">
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                          <!-- Image -->
                          <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                            <img src="https://dummyimage.com/237x275/dee2e6/6c757d.jpg"
                              class="w-100" alt="Blue Jeans Jacket" />
                            <a href="#!">
                              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                          </div>
                          <!-- Image -->
                        </div>
          
                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                          <!-- Data -->
                          <p><strong>Nama Makanan</strong></p>
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-dark btn-sm me-1 mb-2" data-mdb-tooltip-init
                            title="Remove item">
                            Modifikasi
                            <i class="fas fa-trash"></i>
                          </button>
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm me-1 mb-2" data-mdb-tooltip-init
                            title="Remove item">
                            Remove
                            <i class="fas fa-trash"></i>
                          </button>
                          <!-- Data -->
                        </div>
          
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                          <!-- Quantity -->
                          <div class="d-flex mb-4" style="max-width: 300px">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              -
                              <i class="fas fa-minus"></i>
                            </button>
          
                            <div data-mdb-input-init class="form-outline">
                              <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                              <label class="form-label" for="form1">Jumlah</label>
                            </div>
          
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              +
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <!-- Quantity -->
          
                          <!-- Price -->
                          <p class="text-start text-md-center">
                            <strong>Rp.9000</strong>
                          </p>
                          <!-- Price -->
                        </div>
                      </div>
                      <!-- Single item -->
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <p><strong>Alamat untuk diantar</strong></p>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <p><strong>Expected shipping delivery</strong></p>
                      <p class="mb-0">13.11.2024 - 15.11.2024</p>
                    </div>
                  </div>
                  <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                      <p><strong>We accept</strong></p>
                      <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                        alt="Visa" />
                      <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                        alt="American Express" />
                      <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                        alt="Mastercard" />
                      <img class="me-2" width="45px"
                        src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg"
                        alt="PayPal acceptance mark" />
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-header py-3">
                      <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                          Products
                          <span>Rp.18000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                          Shipping
                          <span>Gratis</span>
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                          <div>
                            <strong>Total amount</strong>
                            <strong>
                              <p class="mb-0">(including VAT)</p>
                            </strong>
                          </div>
                          <span><strong>Rp.18000</strong></span>
                        </li>
                      </ul>
          
                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
                        Go to checkout
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Ronde168 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
