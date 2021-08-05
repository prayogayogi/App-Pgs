<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Sosial Media</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Sosial Media</li>
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
							<h3 class="card-title">Table Data Sosial Media</h3>
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
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center">No</th>
														<th>Email</th>
														<th>Facebook</th>
														<th>Instagram</th>
														<th>Twitter</th>
														<th>Tik-tok</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getSosialMedia as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++ ?></td>
															<td><?= $data['email']; ?></td>
															<td><?= $data['facebook']; ?></td>
															<td><?= $data['instagram']; ?></td>
															<td><?= $data['twitter']; ?></td>
															<td><?= $data['tik-tok']; ?></td>
															<td class="text-center">
																<a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

																<a type="submit" href="<?= base_url('Admin/AssetSekolahController/destroyInformasi/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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


<!-- Modal untuk tambah data admin -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Sosial Media</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('Admin/AssetSekolahController/storeSosialMedia') ?>" method="post">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" name="email" class="form-control" autocomplete="off" id="email" placeholder="Masukan email">
									</div>
									<div class="form-group">
										<label for="facebook">Facebook</label>
										<input type="text" name="facebook" id="facebook" class="form-control" placeholder="Masukan Facebook">
									</div>
									<div class="form-group">
										<label for="instagram">Instagram</label>
										<input type="text" name="instagram" id="instagram" class="form-control" placeholder="Masukan instagram">
									</div>
									<div class="form-group">
										<label for="twitter">twitter</label>
										<input type="text" name="twitter" id="twitter" class="form-control" placeholder="Masukan twitter">
									</div>
									<div class="form-group">
										<label for="tik-tok">Tik-tok</label>
										<input type="text" name="tik-tok" id="tik-tok" class="form-control" placeholder="Masukan tik-tok">
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

<!-- Modal Untuk Untuk Update Data Informasi -->
<?php foreach ($getSosialMedia as $data) : ?>
	<div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Sosial Media</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('Admin/AssetSekolahController/updateSosialMedia/') . $data['id'] ?>" method="post">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="email" class="form-control" autocomplete="off" id="email" value="<?= $data['email']; ?>">
										</div>
										<div class="form-group">
											<label for="facebook">Facebook</label>
											<input type="text" name="facebook" id="facebook" class="form-control" value="<?= $data['facebook']; ?>">
										</div>
										<div class="form-group">
											<label for="instagram">Instagram</label>
											<input type="text" name="instagram" id="instagram" class="form-control" value="<?= $data['instagram']; ?>">
										</div>
										<div class="form-group">
											<label for="twitter">twitter</label>
											<input type="text" name="twitter" id="twitter" class="form-control" value="<?= $data['twitter']; ?>">
										</div>
										<div class="form-group">
											<label for="tik-tok">Tik-tok</label>
											<input type="text" name="tik-tok" id="tik-tok" class="form-control" value="<?= $data['tik-tok']; ?>">
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
