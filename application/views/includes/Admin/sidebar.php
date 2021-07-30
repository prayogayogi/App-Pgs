<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('/assets/assetGambar/administrator/') . $userLogin['foto'] ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block text-uppercase"><?= $userLogin['nama']; ?></a>
				<?php if ($userLogin['roles'] == 1) { ?>
					<a class="text-primary">Admin</a>
				<?php } else if ($userLogin['roles'] == 2) { ?>
					<a class="text-primary">Camat</a>
				<?php } else if ($userLogin['roles'] == 3) { ?>
					<a class="text-primary">Petugas</a>
				<?php } ?>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview" style="margin-bottom: -10px;">
					<a href="<?= base_url('DashboardController') ?>" class="nav-link <?= (current_url() == base_url('DashboardController')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<li class="nav-header">Asset Sekolah</li>
				<li class="nav-item">
					<a href="<?= base_url('Admin/AssetSekolahController/struktur') ?>" class="nav-link <?= (current_url() == base_url('Admin/AssetSekolahController/struktur')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-sitemap"></i>
						<p>
							Struktur Organisasi
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview ">
					<a href="<?= base_url('Admin/AssetSekolahController/visiMisi') ?>" class="nav-link <?= (current_url() == base_url('Admin/AssetSekolahController/visiMisi')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-campground"></i>
						<p>
							Visi & Misi
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="<?= base_url('Admin/AssetSekolahController/dataInformasi') ?>" class="nav-link <?= (current_url() == base_url('Admin/AssetSekolahController/dataInformasi')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-info-circle"></i>
						<p>
							Data Informasi
						</p>
					</a>
				</li>
				<li class="nav-item" style="margin-bottom: -10px;">
					<a href="<?= base_url('Admin/AssetSekolahController/sosialMedia') ?>" class="nav-link <?= (current_url() == base_url('Admin/AssetSekolahController/sosialMedia')) ? 'active' : '' ?>">
						<i class="nav-icon far fa-chart-bar"></i>
						<p>
							Sosial Media
						</p>
					</a>
				</li>
				<li class="nav-header">Data User Sekolah</li>
				<li class="nav-item">
					<a href="<?= base_url('Admin/DataUserSekolahController/dataGuru') ?>" class="nav-link <?= (current_url() == base_url('Admin/DataUserSekolahController/dataGuru')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-user-graduate"></i>
						<p>
							Data Guru
						</p>
					</a>
				</li>
				<li class="nav-item" style="margin-bottom: -10px;">
					<a href="<?= base_url('Admin/DataUserSekolahController/dataSiswa') ?>" class="nav-link <?= (current_url() == base_url('Admin/DataUserSekolahController/dataSiswa')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-user-tie"></i>
						<p>
							Data Siswa
						</p>
					</a>
				</li>

				<li class="nav-header">Administrator</li>
				<li class="nav-item" style="margin-bottom: -10px;">
					<a href="<?= base_url('AdministratorController') ?>" class="nav-link <?= (current_url() == base_url('AdministratorController')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-user-cog"></i>
						<p>
							Administrator
						</p>
					</a>
				</li>

				<li class="nav-header">Action</li>
				<li class="nav-item">
					<a href="#" class="nav-link" data-toggle="modal" data-target="#ubahPassword">
						<i class="nav-icon fas fa-unlock-alt"></i>
						<p>
							Ubah Password
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('AuthController/logout') ?>" onclick="return confirm('Apakah Anda Inggin Keluar.??')" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Log Out
						</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>



<!-- Modal Ubah Password -->
<div class="modal fade" id="ubahPassword" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('AuthController/ubahPassword/') . $userLogin['id'] ?>" method="post">
					<div class="row mb-3">
						<div class="col">
							<div class="form-group">
								<label for="nama">Password Lama</label>
								<input type="password" name="passwordLama" class="form-control" autocomplete="off" id="password" placeholder="Masukan Password Lama" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="nama">Password Baru</label>
								<input type="password" name="passwordBaru" class="form-control" autocomplete="off" id="password" placeholder="Masukan Password Baru" autocomplete="off">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="resset" class="btn btn-dark px-4 ml-2" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- akhir modal ubah password -->
