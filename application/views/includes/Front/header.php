<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/animate.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/aos.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/jquery.timepicker.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/icomoon.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/style.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <!-- <i class="flaticon-university"></i> -->
      <a class="navbar-brand" href="<?= base_url('FrontController') ?>">SMK 05 Ujan Mas<br><small>Kepahiang</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?= (current_url() == base_url('FrontController')) || (current_url() == base_url('/')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController') ?>" class="nav-link">Beranda</a></li>

          <li class="nav-item <?= (current_url() == base_url('FrontController/profile')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/profile') ?>" class="nav-link">Profile</a></li>

          <li class="nav-item <?= (current_url() == base_url('FrontController/guru')) || (current_url() == base_url('FrontController/guru/') . $start) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/guru') ?>" class="nav-link">Guru</a></li>

          <li class="nav-item <?= (current_url() == base_url('FrontController/siswa')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/siswa') ?>" class="nav-link">Siswa</a></li>

          <!-- <li class="nav-item <?= (current_url() == base_url('FrontController/ekskul')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/ekskul') ?>" class="nav-link">Ekskul</a></li> -->

          <li class="nav-item <?= (current_url() == base_url('FrontController/informasi')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/informasi') ?>" class="nav-link">Informasi</a></li>

          <li class="nav-item cta"><a href="<?= base_url('AuthController') ?>" class="nav-link"><span class="mx-3">Log In</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->