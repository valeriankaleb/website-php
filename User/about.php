<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
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
                        <a href="cart.php" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
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

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../assets/img/img_1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../assets/img/img_2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../assets/img/img_3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>
        <section id="about" class="about section">

            <div class="container">
              <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <img src="../assets/img/img_4.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 order-lg-1">
                  <span class="section-subtitle" data-aos="fade-up">Welcome</span>
                  <h1 class="mb-4" data-aos="fade-up">
                    Perkenalan
                  </h1>
                  <p data-aos="fade-up">
                    Warung Ronde 168 adalah sebuah wirausaha pribadi milik keluarga
                    Bpk.Musa Setiawirawan yang buka pada bulan Maret tahun 2023
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="stats" class="stats section light-background mt-5 bg-grey">

            <div class="container">
      
              <div class="row gy-4 justify-content-center">
      
                <div class="col-lg-5">
                  <div class="images-overlap">
                    <img src="../assets/img/img_5.png" alt="student" class="img-fluid img-1" data-aos="fade-up">
                  </div>
                </div>
      
                <div class="col-lg-4 ps-lg-5">
                  <span class="content-subtitle">Letak Kami</span>
                  <h2 class="content-title">Lokasi Alamat</h2>
                  <p class="lead">
                    Warung Ronde 168 terletak pada alamat Jl. Tidar No.46, Kemirirejo, 
                    Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122
                  </p>
                  <p class="mb-5">
                    Kami buka setiap hari (Kecuali ketika sedang libur)
                    Warung kami mulai buka pada jam 17:00 hingga 21:00 Malam
                  </p>
                </div>
      
              </div>
      
            </div>
        </section>
        <section id="blog-posts" class="blog-posts section mt-2">
            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
              <p>Staff</p>
              <h2>Karyawan Kami</h2>
            </div><!-- End Section Title -->
            <div class="container">
      
              <div class="row gy-4">
                <div class="col-md-6 col-lg-4">
                  <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Image" class="img-fluid rounded">
      
                    <div class="post-content">
                      <h3 class="text-center">Koki</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quae iste porro tempora eaque natus qui ullam nulla. 
                        Veritatis ducimus natus alias voluptas laboriosam, 
                        quidem adipisci, id nulla perspiciatis quam et!
                      </p>
                    </div>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-4">
                  <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Image" class="img-fluid rounded">
      
                    <div class="post-content">
                      <h3 class="text-center">Kasir</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quae iste porro tempora eaque natus qui ullam nulla. 
                        Veritatis ducimus natus alias voluptas laboriosam, 
                        quidem adipisci, id nulla perspiciatis quam et!
                      </p>
                    </div>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-4">
                  <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Image" class="img-fluid rounded">
      
                    <div class="post-content">
                      <h3 class="text-center">Asisten Tambahan</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quae iste porro tempora eaque natus qui ullam nulla. 
                        Veritatis ducimus natus alias voluptas laboriosam, 
                        quidem adipisci, id nulla perspiciatis quam et!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- Footer -->
<?php require "../footer.php"; ?>