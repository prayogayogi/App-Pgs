<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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

              <h4 class="font-weight-bold">90</h4>
            </div>

            <div class="icon">
              <i class="nav-icon fas fa-user-graduate"></i>
            </div>

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h5>Jumlah Data Siswa</h5>

              <h4 class="font-weight-bold">90</h4>
            </div>

            <div class="icon">
              <i class="nav-icon fas fa-user-tie"></i>
            </div>

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h5>Jumlah Siswa Masuk</h5>

              <h4 class="font-weight-bold">90</h4>
            </div>

            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h5>Jumlah Siswa Pindah</h5>

              <h4 class="font-weight-bold">39</h4>
            </div>

            <div class="icon">
              <i class="nav-icon fas fa-user-tie"></i>
            </div>

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
            <div class="card-header ">
              <h3 class="card-title font-weight-bold">Data penduduk</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nik</th>
                    <th>Ekonomi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <!-- <?php foreach ($penduduk as $data) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['alamat']; ?></td>
                      <td><?= $data['no_nik']; ?></td>
                      <td><?= $data['status']; ?></td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

                        <a type="submit" href="<?= base_url('DataPendudukController/hapusDataPenduduk/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                        <a href="#" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-plus-square"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>