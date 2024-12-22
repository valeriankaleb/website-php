<?php
    require "../session.php";
    require "../koneksi.php";

    $id = $_GET['p'];

    $query = mysqli_query($con, "SELECT * FROM produk WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characterslength = strlen($characters);
        $randomstring = '';
        for ($i = 0; $i < $length; $i++) {
            $randomstring .= $characters[rand(0, $characterslength - 1)];
        }
        return $randomstring;
    }
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
                    <form class="d-flex p-2">
                        <a href="logout.php" class="btn btn-custom" type="submit">
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </nav>
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

                <!--Tambah Produk-->
                <div class="my-5 col-12 col-md-12">
                    <h3>Detail Produk</h3>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="row col-md-6">
                                <div class="col-md-6">     
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" 
                                    class="form-control" autocompete="off" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="harga">Harga</label>
                                    <input type="number" id="harga" name="harga" value="<?php echo $data['harga']; ?>"
                                    class="form-control" autocompete="off" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="foto">Foto Lama</label>
                                    <img src="../assets/img/Makanan/<?php echo $data['foto'] ?>" alt="" width="300px">
                                </div>
                                <div class="col-md-6">
                                    <label for="foto">Foto</label>
                                    <input type="file" id="foto" name="foto" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="stok">Ketersediaan Stok</label>
                                    <select name="stok" id="stok" class="form-control">
                                        <option value="<?php echo $data['stok']?>">
                                        <?php echo $data['stok']?></option>
                                        <?php
                                            if($data['stok']=='tersedia'){
                                        ?>
                                            <option value="habis">habis</option>
                                        <?php
                                            }
                                            else{
                                        ?>
                                            <option value="tersedia">tersedia</option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-md-6">
                                <div>
                                    <label for="detail">detail</label>
                                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control">
                                        <?php echo $data['detail']?>
                                    </textarea>
                                </div>
                                <div class="d-grid gap-2 text-center mt-2">
                                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                    <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php
                        if(isset($_POST['simpan'])){
                            $nama = htmlspecialchars($_POST['nama']);
                            $harga = htmlspecialchars($_POST['harga']);
                            $detail = htmlspecialchars($_POST['detail']);
                            $stok = htmlspecialchars($_POST['stok']);

                            $target_dir = "../assets/img/Makanan/";
                            $namafile = basename($_FILES["foto"]["name"]);
                            $target_file = $target_dir . $namafile;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            $imagesize = $_FILES["foto"]["size"];
                            $randomname = generateRandomString(20);
                            $newname = $randomname . "." . $imageFileType;

                            if($nama=='' || $harga==''){
                    ?>
                                <div class="alert alert-danger" role="alert">
                                    KOK KOSONG!?
                                </div>
                    <?php
                            }
                            else{
                                $queryUpdate = mysqli_query($con, "UPDATE produk SET nama='$nama', harga='$harga', detail='$detail', stok='$stok' WHERE id='$id'");

                                if($namafile!=''){
                                    if($imagesize > 500000){
                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            File tidak boleh lebih dari 500 kb
                                        </div>
                    <?php
                                    }
                                    else{
                                        if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif' ){
                    ?>
                                            <div class="alert alert-danger" role="alert">
                                                File wajib bertipe, jpg, png, atau gif
                                            </div>
                    <?php
                                        }
                                        else{
                                            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $newname);

                                            $queryUpdate = mysqli_query($con, "UPDATE produk SET foto='$newname' WHERE id='$id'");

                                            if($queryUpdate){
                    ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Berhasil di update
                                                </div>

                                                <meta http-equiv="refresh" content="2; url=produk.php">
                    <?php
                                            }
                                        } 
                                    }
                                }
                            }
                        }

                        if(isset($_POST['hapus'])){
                            $queryHapus = mysqli_query($con, "DELETE FROM produk WHERE id='$id'");

                            if($queryHapus){
                    ?>
                                <div class="alert alert-danger" role="alert">
                                    Berhasil di hapus
                                </div>

                                <meta http-equiv="refresh" content="2; url=produk.php">
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer -->
        
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