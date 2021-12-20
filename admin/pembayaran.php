<?php
include 'header.php';
require 'method.php';


$hasil = query("SELECT
pembayaran.id_pembayaran,
pegawai.nama_pegawai,
pemesanan.total_harga,
pembayaran.tgl_pembayaran,
pembayaran.jenis_pembayaran,
pembayaran.status_pembayaran,
pembayaran.total_pembayaran
FROM pembayaran
JOIN pegawai
ON pembayaran.id_pegawai= pegawai.id_pegawai
JOIN pemesanan
ON pembayaran.id_pemesanan= pemesanan.id_pemesanan"); //memanggil fungsi query untuk mengambil data pembayaran



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
                    <h4 class="card-title">Data Pembayaran</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id Pembayaran</th>
                                <th>Nama Pegawai</th>
                                <th>Total Harga</th>
                                <th>Tgl Bayar </th>
                                <th>Metode </th>
                                <th>Status </th>
                                <th>Total Bayar </th>
                                <th>Bukti </th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $pembayaran) : ?>
                            <tr>
                                <td><?= $pembayaran['id_pembayaran']?></td>
                                <td><?= $pembayaran['nama_pegawai']?></td>
                                <td><?= $pembayaran['total_harga']?></td>
                                <td><?= $pembayaran['tgl_pembayaran']?></td>
                                <td><?= $pembayaran['jenis_pembayaran']?> </td>
                                <td><?= $pembayaran['status_pembayaran']?> </td>
                                <td><?= $pembayaran['total_pembayaran']?> </td>
                                <td>
                                        <button type="button" class="btn btn-primary btn-icon-text">
                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> File Katalog 
                                        </button></td>
                                </td>
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