<?php
include 'header.php';
require 'method.php';


$hasil = query("SELECT
pengiriman.no_resi,
pegawai.nama_pegawai,
pembayaran.tgl_pembayaran,
pembayaran.jenis_pembayaran,
status_pengiriman,
tgl_pengiriman
FROM pengiriman
JOIN pegawai
ON pengiriman.id_pegawai= pegawai.id_pegawai
JOIN pembayaran
ON pembayaran.id_pembayaran= pengiriman.id_pembayaran"); //memanggil fungsi query untuk mengambil data pembayaran



?>
<!-- Modal Dokument-->
<div class="modal fade" id="tambahkons" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data penawaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Dokumen</label>
                        <input class="form-control" id="email1" placeholder="01" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Dokumen</label>
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
                    <h4 class="card-title">Data Pengiriman</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No Resi</th>
                                <th>Nama Pegawai</th>
                                <th>Tgl Bayar</th>
                                <th>Metode </th>
                                <th>Status </th>
                                <th>Tgl Kirim </th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $pengiriman) : ?>
                            <tr>
                                <td><?= $pengiriman['no_resi']?></td>
                                <td><?= $pengiriman['nama_pegawai']?></td>
                                <td><?= $pengiriman['tgl_pembayaran']?></td>
                                <td><?= $pengiriman['jenis_pembayaran']?></td>
                                <td><?= $pengiriman['status_pengiriman']?> </td>
                                <td><?= $pengiriman['tgl_pengiriman']?> </td>
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