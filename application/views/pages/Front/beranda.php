<div class="hero-wrap" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/bg_1.jpg'); background-attachment:fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center">
        <h1 class="mb-4">TIDAK ADA BANGSA YANG BISA MAKMUR DALAM HIDUP TANPA PENDIDIKAN</h1>
        <p><a href="#" class="btn btn-primary px-4 py-3">Apply Now</a> <a href="#" class="btn btn-secondary px-4 py-3">View Courses</a></p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Pimpinan Sekolah</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(<?= base_url('assets/Tgenius/') ?>images/person_1.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html"><?= $getKepsek['nama']; ?></a></h3>
              <span class="position"><?= $getKepsek['jabatan']; ?></span>
              <p class="ftco-social d-flex">
                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
              </p>
            </div>
          </div>
          <div class="text">
            <p><?= $getKepsek['deskripsi']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(<?= base_url('assets/Tgenius/') ?>images/person_2.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html"><?= $getWakilKepsek['nama']; ?></a></h3>
              <span class="position"><?= $getWakilKepsek['jabatan']; ?></span>
              <p class="ftco-social d-flex">
                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
              </p>
            </div>
          </div>
          <div class="text">
            <p><?= $getWakilKepsek['deskripsi']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section-3 img" style="background-image: url(<?= base_url('assets/Tgenius/') ?>images/bg_3.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-center">
      <div class="col-md-9 about-video text-center">
        <h2 class="ftco-animate">SMA NEGRI 5 UJAN MAS ADALAH SEKOLAH TERAKREDITASI (A) DI KABUPATEN KEPAHIANG</h2>
        <div class="video d-flex justify-content-center">
          <a href="https://vimeo.com/45830194" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-counter bg-light" id="section-counter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="<?= $getJumlahSiswa; ?>">0</strong>
                <span>Jumlah Siwa</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="<?= $getJumlahGuru; ?>">0</strong>
                <span>Jumlah Guru</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="400">0</strong>
                <span>Jumlah Karyawan</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="200">0</strong>
                <span>Jumlah Tenaga Pendidikan</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Guru-Guru Kami</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="carousel-testimony owl-carousel">
          <?php foreach ($getGuru as $data) : ?>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/assetGambar/guru/') . $data['foto'] ?>)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5"><?= $data['deskripsi']; ?></p>
                  <p class="name"><?= $data['nama']; ?></p>
                  <span class="position"><?= $data['mengajar']; ?></span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Berita Terbaru</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/image_1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">August 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/image_2.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">August 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/image_3.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">August 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Ekstrakulikuler</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/event-1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry d-flex align-self-stretch flex-column-reverse">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/event-2.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('assets/Tgenius/') ?>images/event-3.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->