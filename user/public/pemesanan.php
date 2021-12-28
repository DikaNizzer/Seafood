<?php
include 'header.php';
require 'method.php';

$idkonsumen = $_SESSION["user"]["id_calon_konsumen"];
$hasil2 = query("call pemesanan('$idkonsumen')"); 
if($hasil2 == null){
  echo "<script> 
          alert('Masih Belum Ada Barang Yang Dipesan, Silahkan Pesan Barang');
          document.location.href = 'barang.php';
          </script>";
}

foreach($hasil2 as $id){

}



?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">



        <div class="card border-success">
            <div class="card-body">
            <h4 class="card-title text-center text-info">Bukti Pemesanan</h4>

            <div class="card border-danger">
            <div class="card-body">


            <blockquote class="blockquote blockquote-primary">
              <ul class="list-arrow">
                <li>Nama Konsumen : <?=  $_SESSION["user"]["nama_calon_konsumen"] ?></li>
                <li>Email Konsumen : <?=  $_SESSION["user"]["emial_calon_konsumen"] ?></li>
              </ul>
              <footer class="blockquote-footer"> Id Pemesanan : <cite title="Source Title"><?= $id['id_pemesanan'] ?></cite>
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

                  
                  <?php foreach($hasil2 as $pemesanan) : ?>
                    <tr>
                      <td>
                        <?= $no; ?>
                      </td>
                      <td><?= $pemesanan['nama_barang']?></td>
                      <td>
                          <?= $pemesanan['berat_barang']?>
                      </td>
                      <!-- <td> <?= $pemesanan['total_harga']?></td> -->
                      <td> <?= $pemesanan['berat_barang']?></td>
                      <td> <?= number_format($pemesanan['sub_total'])?></td>
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
                        Rp <?= number_format($pemesanan['total_harga'])?>
                      </th>
                    </tr>
                  </tfoot>
                </table>
            </div>
            <br>
            <br>
            <div class="alert alert-info" role="alert">
              Mohon lakuka pembayaran melalui <a href="#" class="alert-link">Bank Mandiri An</a>.Andika Surya
            </div>
            <br>
            <button type="submit" name="pembayaran" data-bs-toggle="modal" data-bs-target="#bayar" class="btn btn-danger mt-15"> Konfirmasi Pembayaran </button>


                  </div>
                  </div>
                  <hr>
                  


            </div>
        </div>



</div>
</div>
</div>

<!-- Modal Bukti-->
<div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" action="method.php" enctype="multipart/form-data">
              <div class="form-group">
                    <div class="col-sm-12">
                    <label>ID Pemesanan : </label>
                        <input class="form-control" id="exampleInputPassword1" value="<?= $id['id_pemesanan'] ?>" type="text" name="id" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Pelanggan : </label>
                        <input class="form-control" id="exampleInputPassword1" value="<?=  $_SESSION["user"]["nama_calon_konsumen"]; ?>" type="text" name="nama" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Total Harga  : </label>
                        <input class="form-control" id="exampleInputPassword1" value="<?= number_format($pemesanan['total_harga'])?>" type="text" name="total" readonly>
                    </div>
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Metode Pembayaran</label>
                        <select class="form-select" aria-label="Default select example" name="metode" >
                            <option selected>Pilih Opsi</option>
                            <option value="tranfer">Tranfer</option>
                            <option value="ovo">Ovo</option>
                            <option value="gopay">Go - Pay</option>
                            <option value="dana">Dana</option>

                        </select>
                  </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Upload bukti pembayaran : </label>
                        <input class="form-control" id="exampleInputPassword1" type="file" name="bukti" required>
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="konfirmasi" class="btn btn-primary">Konfirmasi</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Untuk Input Data Ke Table Pembayaran -->
<?php 
    
?>

<?php include 'footer.php'; ?>