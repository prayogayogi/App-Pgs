<footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(<?= base_url('assets/FrontAssets/') ?>images/atas.jpg); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-3">
				<div class="ftco-footer-widget mb-4">
					<h2><a class="navbar-brand" href="<?= base_url('FrontController') ?>">SMK N 5 Ujan Mas <br><small>Kepahiang</small></a></h2>
					<p>Smk N 5 Ujan Mas Kabupaten Kepahiang Merupakan Smk Yang Sanggat Mementingkan Kualitas dan Menghasilkan Lulusan Terbaik.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="<?= $getSosialMedia['twitter'] ?>" target="blank"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="<?= $getSosialMedia['facebook'] ?>" target="blank"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="<?= $getSosialMedia['instagram'] ?>" target="blank"><span class="icon-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Berita Terbaru</h2>
					<?php foreach ($getNewFooterInformasi as $data) : ?>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
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
			<div class="col-md-2">
				<div class="ftco-footer-widget mb-4 ml-md-4">
					<h2 class="ftco-heading-2">Tautan Situs</h2>
					<ul class="list-unstyled">
						<li><a href="<?= $getSosialMedia['facebook'] ?>" target="blank" class="py-2 d-block">Facebook</a></li>
						<li><a href="<?= $getSosialMedia['instagram'] ?>" target="blank" class="py-2 d-block">Instagram</a></li>
						<li><a href="<?= $getSosialMedia['twitter'] ?>" target="blank" class="py-2 d-block">Twitter</a></li>
						<li><a href="<?= $getSosialMedia['tik-tok'] ?>" target="blank" class="py-2 d-block">Tik-Tok</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text">JL. RAYA KEPAHIANG-CURUP, Pekalongan, Kec. Ujan Mas, Kab. Kepahiang Prov. Bengkulu</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span class="text">073222668</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span class="text">smknvkph@gmail.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Smk N 5 Ujan Mas</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>


<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/aos.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/jquery.timepicker.min.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/google-map.js"></script>
<script src="<?= base_url('assets/') ?>FrontAssets/js/main.js"></script>
<!-- Data Table -->
<script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<!-- <script src="<?= base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>

</body>

</html>
