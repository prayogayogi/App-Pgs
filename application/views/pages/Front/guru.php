<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/bg_2.jpg'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span>Guru</span></p>
        <h1 class="mb-3 bread">Guru</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Guru-Guru Kami</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($getGuru as $data) : ?>
        <div class="col-lg-4 mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(<?= base_url('assets/assetGambar/guru/') . $data['foto'] ?>);"></div>
              <div class="info ml-4">
                <h3><a href="<?= base_url('FrontDetailController/getDetailGuru/') . $data['id'] ?>"><?= $data['nama']; ?></a></h3>
                <span class="position"><?= $data['mengajar']; ?></span>
                <p class="ftco-social d-flex">
                  <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                  <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                  <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                </p>
              </div>
            </div>
            <div class="text">
              <p><?= $data['deskripsi']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?= $this->pagination->create_links(); ?>
  </div>
</section>