<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/bg_2.jpg'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span>Profile</span></p>
        <h1 class="mb-3 bread">Profile</h1>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-about align-self-stretch" style="background-image: url(<?= base_url('assets/Tgenius/') ?>images/bg_3.jpg); width: 100%;"></div>
      </div>
      <div class="col-md-6 pl-md-5 ftco-animate">
        <h2 class="mb-4">SMKN 5 Ujan Mas Kabupaten Kepahiang</h2>
        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter bg-light" id="section-counter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <h3>Struktur Organisasi</h3>
              </div>
            </div>
          </div>
          <img src="<?= base_url('assets/assetGambar/struktur/') . $getStrukturOrganisasi['struktur'] ?>" alt="Strutkru" style="width: 950px;">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Visi & Misi</h2>
      </div>
    </div>
    <div class="row">
      <div class="col col-6">
        <div class="item">
          <div class="testimony-wrap">
            <h3 class="text-center">Visi</h3>
            <div class="text mt-4" style="height: 350px;">
              <ol>
                <?php foreach ($getWhereVisi as $data) : ?>
                  <li class="text-justify"><?= $data['isi']; ?></li>
                <?php endforeach; ?>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-6">
        <div class="item">
          <div class="testimony-wrap">
            <h3 class="text-center">Misi</h3>
            <div class="text mt-4" style="height: 350px;">
              <ol>
                <?php foreach ($getWhereMisi as $data) : ?>
                  <li class="text-justify"><?= $data['isi']; ?></li>
                <?php endforeach; ?>
              </ol>

            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>