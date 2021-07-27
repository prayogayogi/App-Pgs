<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h5>Jumlah Data Guru</h5>

							<h4 class="font-weight-bold"><?= $numGuru; ?></h4>
						</div>

						<div class="icon">
							<i class="nav-icon fas fa-user-graduate"></i>
						</div>

						<a href="<?= base_url('Admin/DataUserSekolahController/dataGuru') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h5>Jumlah Data Siswa</h5>

							<h4 class="font-weight-bold"><?= $numSiswa; ?></h4>
						</div>

						<div class="icon">
							<i class="nav-icon fas fa-user-tie"></i>
						</div>

						<a href="<?= base_url('Admin/DataUserSekolahController/dataSiswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h5>Jumlah Data Admin</h5>

							<h4 class="font-weight-bold"><?= $numAdmin; ?></h4>
						</div>

						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>

						<a href="<?= base_url('AdministratorController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h5>Jumlah User App</h5>

							<h4 class="font-weight-bold"><?= $numGuru + $numAdmin; ?></h4>
						</div>

						<div class="icon">
							<i class="nav-icon fas fa-user-tie"></i>
						</div>

						<a href="<?= base_url('AdministratorController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Data Siswa</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-body">
											<table id="example1" class="table text-center table-bordered table-striped">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama</th>
														<th>No Nis</th>
														<th>No Nisn</th>
														<th>Tempat Lahir</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getSiswa as $data) : ?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $data['nama']; ?></td>
															<td><?= $data['nis']; ?></td>
															<td><?= $data['nisn']; ?></td>
															<td><?= $data['tempat_lahir']; ?></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
