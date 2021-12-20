<?php
include 'header.php';
require 'method.php';

$pegawai = query("select id_pegawai,nama_jabatan,nama_pegawai,telp_pegawai, email_pegawai,alamat_pegawai,
jk_pegawai from 
pegawai join jabatan
on (pegawai.id_jabatan = jabatan.id_jabatan)"); //memanggil fungsi query untuk mengambil data pegawai



?>
<!-- Modal Dokument-->
<div class="modal fade" id="tambahpeg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Pegawai</label>
                        <input class="form-control" id="email1" placeholder="01" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Pegawai</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>No Telp Pegawai</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Email Pegawai</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Alamat Pegawai</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Gender Pegawai</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Password Pegawai</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="email">
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table Data Pegawai</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    <!-- </p> -->
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Id Pegawai</th>
                            <th>Nama Jabatan</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Email </th>
                            <th>ALamat</th>
                            <!-- <th>Gender</th> -->
                            <!-- <th>Password</th> -->
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($pegawai as $peg) : ?>
                          <tr>
                            <td><?= $peg['id_pegawai']?></td>
                            <td><?= $peg['nama_jabatan']?></td>
                            <td><?= $peg['nama_pegawai']?></td>
                            <td><?= $peg['telp_pegawai']?></td>
                            <td><?= $peg['email_pegawai']?></td>
                            <td><?= $peg['alamat_pegawai']?> </td>
                            <!-- <td><?= $peg['jk_pegawai']?> </td> -->
                            <!-- <td><?= $peg['pass_pegawai']?> </td> -->
                            <td>
                                <button type="button" class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
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
              <button type="button" data-bs-toggle="modal" data-bs-target="#tambahpeg" class="btn btn-success"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
          </div>




<?php include 'footer.php'; ?>