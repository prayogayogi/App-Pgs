<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Struktur Organisasi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Struktur Organisasi</li>
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
              <h3 class="card-title">Table Data Struktur Organisasi</h3>
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
                            <th>Foto</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($getOrganisasi as $data) : ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $data['struktur']; ?></td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#exampleOrganisasi"><img src="<?= base_url('/assets/assetGambar/struktur/') . $data['struktur'] ?>" alt="administrator" width="60px"></a>
                              </td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>
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


<!-- Modal untuk tambah data Struktur Organisasi -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Struktur Organisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <?= form_open_multipart('Admin/AssetSekolahController/storeOrganisasi'); ?>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="foto">Struktur Organisasi</label>
                  <input type="file" name="struktur" class="form-control" id="foto">
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
<?php foreach ($getOrganisasi as $data) : ?>
  <div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Struktur Organisasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <?= form_open_multipart('Admin/AssetSekolahController/update'); ?>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input type="hidden" name="struktur" value="<?= $data['struktur'] ?>">
                    <label for="foto">Struktur Organisasi</label>
                    <input type="file" name="struktur" class="form-control" id="foto">
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


<!--  Modal Detail Struktur Organisasi -->
<?php foreach ($getOrganisasi as $data) : ?>
  <div class="modal fade" id="exampleOrganisasi" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Struktur Organisasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <img src="<?= base_url('/assets/assetGambar/struktur/') . $data['struktur'] ?>" alt="administrator" width="750px" class="text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>