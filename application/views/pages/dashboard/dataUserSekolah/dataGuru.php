<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Guru</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Guru</li>
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
              <h3 class="card-title">Table Data Guru</h3>
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
                            <th>Mengajar</th>
                            <th>Foto</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($getGuru as $data) : ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $data['nama']; ?></td>
                              <td><?= $data['mengajar']; ?></td>
                              <td>
                                <img src="<?= base_url('/assets/assetGambar/guru/') . $data['foto'] ?>" alt="administrator" width="40px">
                              </td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

                                <a type="submit" href="<?= base_url('Admin/DataUserSekolahController/destroy/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

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


<!-- Modal untuk tambah data admin -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <?= form_open_multipart('Admin/DataUserSekolahController/storeGuru'); ?>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukan Nama" autofocus>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select class="form-control" name="jabatan">
                    <option value="1">-- Pilih Posisi Jabatan --</option>
                    <option value="KEPALA SEKOLAH">Kepala Sekolah</option>
                    <option value="WAKIL KEPALA SEKOLAH">Wakil Kepala Sekolah</option>
                    <option value="GURU">Guru</option>
                    <option value="KARYAWAN SEKOLAH">Karyawan Sekolah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Mengajar">Mengajar</label>
                  <input type="text" name="mengajar" class="form-control" id="Mengajar" placeholder="Masukan Mengajar">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskripsi" id="deskripsi"></textarea>
                </div>
                <div class="form-group">
                  <label for="foto">Photo</label>
                  <input type="file" name="foto" class="form-control" id="foto">
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

<!-- Modal Untuk ubah data penduduk -->
<?php foreach ($getGuru as $data) : ?>
  <div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <form action="<?= base_url('DataPendudukController/ubahDataPenduduk/') . $data['id'] ?>" method="POST">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nama" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="jabatan">Jabatan</label>
                      <select class="form-control" name="jabatan">
                        <option value="<?= $data['jabatan'] ?>"><?= $data['jabatan']; ?></option>
                        <option value="KEPALA SEKOLAH">Kepala Sekolah</option>
                        <option value="WAKIL KEPALA SEKOLAH">Wakil Kepala Sekolah</option>
                        <option value="GURU">Guru</option>
                        <option value="KARYAWAN SEKOLAH">Karyawan Sekolah</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="Mengajar">Mengajar</label>
                      <input type="text" name="mengajar" class="form-control" id="Mengajar" value="<?= $data['mengajar'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control" id="deskripsi"><?= $data['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="foto">Photo</label>
                      <input type="file" name="foto" class="form-control" id="foto" value="<?= $data['nama'] ?>">
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


<!-- Modal Unutk Detail data Penduduk -->
<?php foreach ($getGuru as $data) : ?>
  <div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Detail Data Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col text-center mb-4">
                <img src="<?= base_url('/assets/assetGambar/guru/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
              </div>
            </div>
            <dl class="row justify-content-center">
              <dt class="col-sm-6">Nama</dt>
              <dd class="col-sm-6">: <?= $data['nama']; ?></dd>
              <dt class="col-sm-6">Jabatan</dt>
              <dd class="col-sm-6">: <?= $data['jabatan']; ?></dd>
              <dt class="col-sm-6">Mengajar</dt>
              <dd class="col-sm-6">: <?= $data['mengajar']; ?></dd>
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