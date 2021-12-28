<?php
include 'header.php';
require 'method.php';

$hasil = query("SELECT * from pembayaran join pemesanan
ON (pembayaran.id_pemesanan = pemesanan.id_pemesanan)
join detail_pemesanan
on (pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan)
join barang
on (detail_pemesanan.id_barang = barang.id_barang) ");

if($hasil == null){
    echo "<script> 
            alert('Masih Belum Riwayat Pembayaran, Silahkan lakukan pemesanan terlebih dahulu');
            document.location.href = 'barang.php';
            </script>";
  }

foreach($hasil as $data){

}

?>



<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">



        <div class="card border-success">
            <div class="card-body">
            <h4 class="card-title text-center text-info">Riwayat Pembayaran</h4>

            <div class="card border-danger">
            <div class="card-body">


            <blockquote class="blockquote blockquote-primary">
              <ul class="list-arrow">
                <li>Nama Konsumen : <?=  $_SESSION["user"]["nama_calon_konsumen"] ?></li>
                <li>Email Konsumen : <?=  $_SESSION["user"]["emial_calon_konsumen"] ?></li>
              </ul>
              <footer class="blockquote-footer"> Id Pemesanan : <cite title="Source Title"><?= $data['id_pemesanan']?></cite>
              </footer>
              <footer class="blockquote-footer"> Id Pembayaran : <cite title="Source Title"><?= $data['id_pembayaran']?></cite>
              </footer>
            </blockquote>
            <?php $no=1; ?>
            <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Berat </th>
                      <th>Jumlah</th>
                      <th>Subharga</th>
                    </tr>
                  </thead>
                  <tbody>

                  
                  <?php foreach($hasil as $pembayaran) : ?>
                    <tr>
                      <td>
                        <?= $no; ?>
                      </td>
                      <td><?= $pembayaran['nama_barang']?></td>
                      <td>
                          <?= $pembayaran['berat_barang']?>
                      </td>
                      <td> <?= $pembayaran['berat_barang']?></td>
                      <td> <?= number_format($pembayaran['sub_total'])?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="4">
                        Total Harga
                      </th>
                      <th>
                        Rp <?= number_format($pembayaran['total_harga'])?>
                      </th>
                    </tr>
                  </tfoot>
                </table>
            </div>
            <br>
            <br>
            <div class="alert alert-danger" role="alert">
              Pembayaran <a href="#" class="alert-link">Telah Dilakukan</a> Pada <?= $data['tgl_pembayaran']?>
            </div>
            <br>
            <button type="submit" name="pembayaran" data-bs-toggle="modal" data-bs-target="#bayar" class="btn btn-danger mt-15"> Silahkan lakukan pemesanan barang kembali </button>


                  </div>
                  </div>
                  <hr>
                  


            </div>
        </div>



</div>
</div>
</div>

<?php include 'footer.php'; ?>