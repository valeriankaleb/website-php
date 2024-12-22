<?php
    require "session.php";
    require "koneksi.php";

    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
?>

<?php require "header.php"; ?>
    <body>
        <!-- Navigation-->
        <?php require "navbar.php"; ?>
        <!-- Header-->
        <header class="bg-pink py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Warung Ronde 168</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Nikmati hangatnya wedangan malam hari</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php while($produk = mysqli_fetch_array($queryProduk)){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/Makanan/<?php echo $produk['foto']?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $produk['nama']?></h5>
                                    <!-- Product price-->
                                    Rp.<?php echo $produk['harga']?>
                                    <h6 class="fw-bolder"><?php echo $produk['stok']?></h6>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" 
                                href="User/item.php?nama=<?php echo $produk['nama']; ?>">View detail</a></div>
                                <div class="text-center"><a class="btn btn-outline-dark mt-2" href="#">Add to Cart</a></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- Footer -->
<?php require "footer.php"; ?>
