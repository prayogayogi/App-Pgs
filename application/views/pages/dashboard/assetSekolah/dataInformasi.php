<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Informasi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Informasi</li>
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
              <h3 class="card-title">Table Data Informasi</h3>
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
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($getInformasi as $data) : ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $data['judul']; ?></td>
                              <td>
                                <img src="<?= base_url('/assets/assetGambar/informasi/') . $data['foto'] ?>" alt="administrator" width="40px">
                              </td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

                                <a type="submit" href="<?= base_url('Admin/AssetSekolahController/destroyInformasi/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <?= form_open_multipart('Admin/AssetSekolahController/storeInformasi'); ?>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="judul">Judul Informasi</label>
                  <input type="text" name="judul" class="form-control" autocomplete="off" id="judul" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                  <label for="isi">Isi Informasi</label>
                  <textarea name="isi" id="isi" class="form-control" placeholder="Masukan Isi Informasi"></textarea>
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

<!-- Modal Untuk Untuk Update Data Informasi -->
<?php foreach ($getInformasi as $data) : ?>
  <div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Penduduk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <?= form_open_multipart('Admin/AssetSekolahController/updateInformasi'); ?>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul Informasi</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="<?= $data['judul'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Informasi</label>
                    <textarea name="isi" id="isi" class="form-control" cols="20" rows="5" value="<?= $data['isi'] ?>"><?= $data['isi'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="foto">Photo</label>
                    <div class="row">
                      <div class="col mb-2">
                        <img src="<?= base_url('/assets/assetGambar/informasi/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
                      </div>
                    </div>
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
<?php endforeach; ?>


<!-- Modal Unutk Detail Data Informasi -->
<?php foreach ($getInformasi as $data) : ?>
  <div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Detail Data Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col text-center mb-4">
                <img src="<?= base_url('/assets/assetGambar/informasi/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
              </div>
            </div>
            <dl class="row justify-content-center">
              <dt class="col-sm-6">Judul Informasi</dt>
              <dd class="col-sm-6">: <?= $data['judul']; ?></dd>
              <dt class="col-sm-6">Isi Informasi</dt>
              <dd class="col-sm-6">:</dd>
              <textarea name="isi" id="" class="form-control" cols="20" rows="7"> <?= $data['isi']; ?></textarea>
              <dt class="col-sm-6 mt-3">Tanggal Post</dt>
              <dd class="col-sm-6 mt-3">: <?= date("d/ m/ Y", $data['created_at'],); ?></dd>
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