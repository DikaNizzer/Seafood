<?php
require '../public/method.php';

$negara = query("SELECT * FROM negara ");

?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Seafood</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary py-2 d-none d-sm-block">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-auto d-none d-lg-block">
              <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>1600 Amphitheatre Parkway, CA 94043 </span></p>
            </div>
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
              </ul>
            </div>
            <div class="col-auto">
              <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/gallery/logo-n.png" height="45" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="index.html">Beranda</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="pricing.html">Produk</a></li>
              <!-- <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="web-development.html">Web Development</a></li> -->
              <!-- <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">Registrasi</a></li> -->
            </ul><a class="btn btn-primary order-1 order-lg-0" href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a>
			<!-- <li></li> --><br><br>
			</ul><a class="btn btn-info order-1 order-lg-0" href="#" data-bs-toggle="modal" data-bs-target="#regis">Buat Akun</a>
            <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="dropdown d-none d-lg-block">
              <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <section class="pt-6 bg-600" id="home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="../public/images/seafood.png" width="470" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <!-- <h4 class="fw-bold font-sans-serif">Become Master</h4> -->
              <h1 class="fs-6 fs-xl-7 mb-5">Pesan Seafood Secara Online di Sini</h1><a class="btn btn-primary me-2" href="#!" role="button">Lihat Produk Kami</a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" style="margin-top:-5.8rem">

        <div class="container">
          <div class="row">
            <div class="card card-span bg-secondary">
              <div class="card-body">
                <div class="row flex-center gx-0">
                  <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="assets/img/gallery/funfacts.png" width="170" alt="..." /></div>
                  <div class="col-lg-8 col-xl-4">
                    <h1 class="text-light fs-lg-4 fs-xl-5">Flash Sale <span class="text-primary"> Spesial 12 12 </span>Dapatkan Diskonnya!</h1>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <h1 class="display-1 text-light text-center text-xl-end">Up To 90%</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

<!-- MODAL LOGIN -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
		<form role="form" class="form-horizontal" action="regis.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@gmail.com" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-danger" name="login">Login</button>
		</form>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL REGISTRASI -->
<div class="modal fade" id="regis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buat Akun Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
		<form role="form" class="form-horizontal" action="regis.php" method="POST" enctype="multipart/form-data">
            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id Konsumen</label>
				<input class="form-control" id="email1" placeholder="01" type="text" name="id">
            </div> -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama Konsumen</label>
				<input class="form-control" id="exampleInputPassword1" placeholder="Andi..." type="text" name="nama">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email Konsumen</label>
				<input class="form-control" id="exampleInputPassword1" placeholder="@gmail.com" type="text" name="email">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password Konsumen</label>
				<input class="form-control" id="exampleInputPassword1" placeholder="****" type="text" name="pass">
            </div>
			<div class="form-group">
			<label for="exampleFormControlTextarea1" class="form-label">Asal Negara</label>
                        <select class="form-select" aria-label="Default select example" name="idnegara" >
                            <option selected>Pilih Negara</option>
                            <?php foreach($negara as $neg) : ?>
                            <option value="<?= $neg['id_negara'] ?>"><?= $neg['nama_negara'] ?></option>
                            <?php endforeach; ?>

                        </select>
								</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-danger" name="konsumen">Buat Akun</button>
		  </form>
        </div>
      </div>
    </div>
  </div>

<!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
	
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">	