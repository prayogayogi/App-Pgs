<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Siswa</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Table Data Siswa</h3>
							<div class="status mt-5">
								<?= $this->session->flashdata('status'); ?>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header">
											<a href="#" data-toggle="modal" data-target="#exampleModalDataPenduduk" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
										</div>
										<div class="card-body">
											<table id="example1" class="table text-center table-bordered table-striped">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama</th>
														<th>No Nis</th>
														<th>Tempat Lahir</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getSiswa as $data) : ?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $data['nama']; ?></td>
															<td><?= $data['nis']; ?></td>
															<td><?= $data['tempat_lahir']; ?></td>
															<td>
																<a href="#" data-toggle="modal" data-target="#modalUbahDataGuru<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

																<a type="submit" href="<?= base_url('Admin/DataUserSekolahController/destroySiswa/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

																<a href="#" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-plus-square"></i></a>
															</td>
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
</div>
</section>
</div>


<!-- Modal untuk tambah data Siswa -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<?= form_open_multipart('Admin/DataUserSekolahController/storeSiswa'); ?>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="nis">No Nis</label>
									<input type="number" name="nis" class="form-control" autocomplete="off" id="nis" placeholder="Masukan No Nis" autofocus>
								</div>
								<div class="form-group">
									<label for="nisn">No Nisn</label>
									<input type="number" name="nisn" class="form-control" autocomplete="off" id="nisn" placeholder="Masukan No Nisn">
								</div>
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukan Nama">
								</div>
								<div class="form-group">
									<label for="jabatan">Jenis Kelamin</label>
									<select class="form-control" name="jenisKelamin">
										<option value="1">-- Pilih Jenis Kelamin --</option>
										<option value="LAKI-LAKI">Laki-laki</option>
										<option value="PEREMPUAN">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="tempatTgl">Tempat Tanggal Lahir</label>
									<input type="text" name="tempatLahir" class="form-control" id="tempatTgl" placeholder="Masukan Tempat Tanggal Lahir">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label for="tglLahir">Tanggal Lahir</label>
									<input type="date" name="tanggalLahir" class="form-control" id="tglLahir" placeholder="Masukan Tanggal Lahir">
								</div>
								<div class="form-group">
									<label for="namaAyah">Nama Ayah</label>
									<input type="text" name="namaAyah" class="form-control" id="namaAyah" placeholder="Masukan Nama Ayah">
								</div>
								<div class="form-group">
									<label for="namaIbu">Nama Ibu</label>
									<input type="text" name="namaIbu" class="form-control" id="namaIbu" placeholder="Masukan Nama Ibu">
								</div>
								<div class="form-group">
									<label for="agama">Agama</label>
									<input type="text" name="agama" class="form-control" id="agama" placeholder="Masukan Agama">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Untuk ubah data Siswa -->
<?php foreach ($getSiswa as $data) : ?>
	<div class="modal fade" id="modalUbahDataGuru<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('Admin/DataUserSekolahController/updateSiswa/') . $data['id'] ?>" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="nis">No Nis</label>
											<input type="number" name="nis" class="form-control" autocomplete="off" id="nis" value="<?= $data['nis']; ?>">
										</div>
										<div class="form-group">
											<label for="nisn">No Nisn</label>
											<input type="number" name="nisn" class="form-control" autocomplete="off" id="nisn" value="<?= $data['nisn']; ?>">
										</div>
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" value="<?= $data['nama']; ?>">
										</div>
										<div class="form-group">
											<label for="tempatTgl">Tempat Tanggal Lahir</label>
											<input type="text" name="tempatLahir" class="form-control" id="tempatTgl" value="<?= $data['tempat_lahir']; ?>">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="tglLahir">Tanggal Lahir</label>
											<input type="date" name="tanggalLahir" class="form-control" id="tglLahir" value="<?= $data['tanggal_lahir']; ?>">
										</div>
										<div class="form-group">
											<label for="namaAyah">Nama Ayah</label>
											<input type="text" name="namaAyah" class="form-control" id="namaAyah" value="<?= $data['nama_ayah']; ?>">
										</div>
										<div class="form-group">
											<label for="namaIbu">Nama Ibu</label>
											<input type="text" name="namaIbu" class="form-control" id="namaIbu" value="<?= $data['nama_ibu']; ?>">
										</div>
										<div class="form-group">
											<label for="agama">Agama</label>
											<input type="text" name="agama" class="form-control" id="agama" value="<?= $data['agama']; ?>">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mt-2">Simpan</button>
								<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>


<!-- Modal Unutk Detail data Siswa -->
<?php foreach ($getSiswa as $data) : ?>
	<div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Detail Data Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<!-- <div class="row">
              <div class="col text-center mb-4">
                <img src="<?= base_url('/assets/assetGambar/administrator/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
              </div>
            </div> -->
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Nama</dt>
							<dd class="col-sm-6">: <?= $data['nama']; ?></dd>
							<dt class="col-sm-6">Jenis Kelamin</dt>
							<dd class="col-sm-6">: <?= $data['jenis_kelamin']; ?></dd>
							<dt class="col-sm-6">Tempat Tanggal Lahir</dt>
							<dd class="col-sm-6">: <?= $data['tempat_lahir']; ?></dd>
							<dt class="col-sm-6">Tanggal Lahir</dt>
							<dd class="col-sm-6">: <?= $data['tanggal_lahir']; ?></dd>
							<dt class="col-sm-6">Nama Ayah</dt>
							<dd class="col-sm-6">: <?= $data['nama_ayah']; ?></dd>
							<dt class="col-sm-6">Nama Ibu</dt>
							<dd class="col-sm-6">: <?= $data['nama_ibu']; ?></dd>
							<dt class="col-sm-6">Agama</dt>
							<dd class="col-sm-6">: <?= $data['agama']; ?></dd>
						</dl>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
