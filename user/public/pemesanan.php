<?php
include 'header.php';
require 'method.php';

$id = $_SESSION["user"]["id_calon_konsumen"];
$hasil = query("call pembelian('cal007')"); //memanggil fungsi query untuk mengambil data Baranng

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "<pre>";

?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">

        <div class="card border-success">
            <div class="card-body">
            <h4 class="card-title text-center text-info">Bukti Pemesanan</h4>

            <hr>
              <ul class="list-arrow">
                <li>Nama Konsumen : <?=  $_SESSION["user"]["nama_calon_konsumen"] ?></li>
                <li>Email Konsumen : <?=  $_SESSION["user"]["emial_calon_konsumen"] ?></li>
              </ul>
            <hr>

            <?php $no=1; ?>
            <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Berat </th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Subharga</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($hasil as $pemesanan) : ?>
                    <tr>
                      <td>
                        <?= $no; ?>
                      </td>
                      <td><?= $pemesanan['nama_barang']?></td>
                      <td>
                          <?= $pemesanan['berat_barang']?>
                      </td>
                      <td> <?= $pemesanan['total_harga']?></td>
                      <td> <?= $pemesanan['berat_barang']?></td>
                      <td> <?= $pemesanan['berat_barang']?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
            <br>
            <br>
            <div class="alert alert-info" role="alert">
              Mohon lakuka pembayaran melalui <a href="#" class="alert-link">Bank Mandiri An</a>.Andika Surya
            </div>
            <br>
            <button type="submit" name="pesan" class="btn btn-danger mt-15"> Konfirmasi Pembayaran </button>


            </div>
        </div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>