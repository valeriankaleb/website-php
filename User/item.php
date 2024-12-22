<?php
    require "../koneksi.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama='$nama'");
    $produk = mysqli_fetch_array($queryProduk);

    $queryProdukTerkait = mysqli_query($con, "SELECT * FROM produk WHERE id != '{$produk['id']}' LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Homepage</title>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    </ul>
                    <form class="d-flex">
                        <a href="cart.html" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                    </form>
                    <form class="d-flex">
                        <a href="../index.php" class="btn btn-outline-dark" type="submit">
                            Back
                        </a>
                    </form>
                    <form class="d-flex p-2">
                        <a href="../logout.php" class="btn btn-custom" type="submit">
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" 
                    src="../assets/img/Makanan/<?php echo $produk['foto']?>" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="fw-bolder"><?php echo $produk['nama']?></h1>
                        <h5 class="fw-bolder"><?php echo $produk['harga']?></h5>
                        <p class="lead"><?php echo $produk['detail']?></p>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <label for="modif">Modifikasi</label>
                            <textarea id="modif" name="modif" class="form-control" autocompete=off 
                            placeholder="Modif Makanan" cols="30" rows="10"></textarea>
                        </div>
                        <p class="fs-5">Status Ketersediaan: <?php echo $produk['stok']?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php while($data=mysqli_fetch_array($queryProdukTerkait)){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../assets/img/Makanan/<?php echo $data['foto']?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $data['nama']?></h5>
                                    <!-- Product price-->
                                    Rp.<?php echo $data['harga']?>
                                    <h6 class="fw-bolder"><?php echo $data['stok']?></h6>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" 
                                href="item.php?nama=<?php echo $data['nama']; ?>">View detail</a></div>
                                <div class="text-center"><a class="btn btn-outline-dark mt-2" href="#">Add to Cart</a></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-dark text-light text-center p-3 mt-5">
            <p>© 2024 Ronde168. All rights reserved. | <a href="#" class="text-light">Privacy Policy</a></p>
            <div>
                <a href="#" class="text-light mx-2">Facebook</a>
                <a href="#" class="text-light mx-2">Twitter</a>
                <a href="#" class="text-light mx-2">Instagram</a>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>