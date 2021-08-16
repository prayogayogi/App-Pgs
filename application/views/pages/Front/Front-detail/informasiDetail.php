<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/FrontAssets/') ?>images/atas.jpg'); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('FrontController') ?>">Home</a></span> <span class="mr-2"><a href="<?= base_url('FrontController/informasi') ?>">Informasi</a></span> <span>Detail Informasi</span></p>
				<h1 class="mb-3 bread">Detail Informasi</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ftco-animate">
				<h2 class="mb-3"><?= $getDetailInformasi['judul']; ?></h2>
				<p class="text-justify"><?= $getDetailInformasi['isi']; ?></p>
				<p>
					<img src="<?= base_url('assets/assetGambar/informasi/') . $getDetailInformasi['foto'] ?>" alt="" class="img-fluid">
				</p>
				<div class="about-author d-flex p-5 bg-light">
					<div class="bio align-self-md-center mr-5">
						<img src="<?= base_url('assets/assetGambar/administrator/') . $fotoOunerPost['foto'] ?>" alt="Image placeholder" class="img-fluid mb-4">
					</div>
					<div class="desc align-self-md-center">
						<small>Post By</small>
						<h3><?= $getDetailInformasi['ouner_post']; ?></h3>
						<p class="text-justify"><?= $fotoOunerPost['deskripsi']; ?></p>
					</div>
				</div>
			</div> <!-- .col-md-8 -->

			<div class="col-md-4 sidebar ftco-animate">
				<div class="sidebar-box">
				</div>

				<div class="sidebar-box ftco-animate">
					<h3>Informasi Terbaru</h3>
					<?php foreach ($getInformasi as $data) : ?>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url(<?= base_url('assets/assetGambar/informasi/') . $data['foto'] ?>);"></a>
							<div class="text">
								<h3 class="heading"><a href="<?= base_url('FrontDetailController/getDetaiInformasi/') . $data['slug_judul'] ?>"><?= $data['judul']; ?></a></h3>
								<div class="meta">
									<div><a href="#"><span class="icon-calendar"></span> <?= date("d/ M/ Y", $data['created_at'],); ?></a></div>
									<div><a href="#"><span class="icon-person"></span> <?= $data['ouner_post']; ?></a></div>
									<div><a href="#"><span class="icon-chat"></span> Berita Terbaru</a></div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
