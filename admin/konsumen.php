<?php
include 'header.php';
require 'method.php';


$hasil = query("select id_calon_konsumen, nama_negara, nama_calon_konsumen, emial_calon_konsumen, password
                    from calon_konsumen join negara
                         on (calon_konsumen.id_negara = negara.id_negara) "); //memanggil fungsi query untuk mengambil data jabatan

$negara = query("SELECT * FROM negara "); //memanggil fungsi query untuk mengambil data jenis dokument


?>
<!-- Modal Dokument-->
<div class="modal fade" id="tambahkons" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Calon Konsumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form role="form" class="form-horizontal" action="tambah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Konsumen</label>
                        <input class="form-control" id="email1" placeholder="01" type="text" name="id">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Konsumen</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="text" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Email Konsumen</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="text" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Pass Konsumen</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="text" name="pass">
                    </div>
                </div>
                <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="idnegara" >
                            <option selected>Asal Negara</option>
                            <?php foreach($negara as $neg) : ?>
                            <option value="<?= $neg['id_negara'] ?>"><?= $neg['nama_negara'] ?></option>
                            <?php endforeach; ?>
                            <!-- <option value="2">Two</option>
                            <option value="3">Three</option> -->
                        </select>
								</div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary" name="konsumen">Tambah</button>
        </form>
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
                    <h4 class="card-title">Data Calon Konsumen</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id Konsumen</th>
                                <th>Negara</th>
                                <th>Nama Konsumen</th>
                                <th>Email</th>
                                <th>Tanggal Penawaran </th>
                                <!-- <th>Harga</th> -->
                                <!-- <th>Gender</th> -->
                                <!-- <th>Password</th> -->
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $konsumen) : ?>
                            <tr>
                                <td><?= $konsumen['id_calon_konsumen']?></td>
                                <td><?= $konsumen['nama_negara']?></td>
                                <td><?= $konsumen['nama_calon_konsumen']?></td>
                                <td><?= $konsumen['emial_calon_konsumen']?></td>
                                <td><?= $konsumen['password']?></td>
                                <!-- <td><?= $konsumen['harga_jual']?> </td> -->
                                <!-- <td><?= $konsumen['jk_pegawai']?> </td> -->
                                <!-- <td><?= $konsumen['pass_pegawai']?> </td> -->
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
              <button type="button" data-bs-toggle="modal" data-bs-target="#tambahkons" class="btn btn-success"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
          </div>




<?php include 'footer.php'; ?>