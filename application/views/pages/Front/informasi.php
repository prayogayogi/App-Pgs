<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/bg_2.jpg'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span>Informasi</span></p>
        <h1 class="mb-3 bread">Informasi</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <?php foreach ($getInformasi as $data) : ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="<?= base_url('FrontDetailController/getDetaiInformasi/') . $data['id'] ?>" class="block-20" style="background-image: url('<?= base_url('/assets/assetGambar/informasi/') . $data['foto'] ?>');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#"><?= date("d/ M/ Y", $data['created_at'],); ?></a></div>
                <div><a href="#"><?= $data['ouner_post']; ?></a></div>
                <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
              </div>
              <h3 class="heading mt-3"><a href="<?= base_url('FrontDetailController/getDetaiInformasi/') . $data['id'] ?>"><?= $data['judul']; ?></a></h3>
              <p><?= $data['isi']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div> -->
  </div>
</section>