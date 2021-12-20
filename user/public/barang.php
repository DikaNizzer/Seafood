<?php
include 'header.php';
require 'method.php';


$hasil = query("SELECT * FROM barTersedia"); //memanggil fungsi query untuk mengambil data Baranng

//mencari data kategory
if (isset ($_POST["cari"])){
  $hasil = cari($_POST["data"]);
}

//menampilkan Semua Data Data
if( isset($_POST["semua"])){
  $hasil = query("SELECT * FROM barTersedia ");
}



function cari($data){
  $query = "SELECT * FROM barTersedia WHERE
              nama_jenis LIKE '%$data%' OR 
              nama_barang LIKE '%$data%'";

  return query ($query);
}

?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Barang Tersedia</h4>
                    
                        <form  method="post" action="">
                            <label id="pencarian">Cari Barang :</label>
                            <input type="text" name="data" for="pencarian" autocomplete="off"><br>
                            <!-- <button class="mdi mdi-account-search btn-icon-prepend" type="submit" name="cari">Cari</button> -->
                            <button type="submit" name="cari" type="button" class="btn btn-primary btn-icon-text mb-15">
                              <i class="mdi mdi-account-search btn-icon-prepend"></i> Cari
                            </button>
                        </form>


                    <div class="table-responsive mb-7">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id Barang</th>
                                <th>Nama Jenis</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Berat </th>
                                <th>Harga</th>
                                <!-- <th>Gender</th> -->
                                <!-- <th>Password</th> -->
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $barang) : ?>
                            <tr>
                                <td><?= $barang['id_barang']?></td>
                                <td><?= $barang['nama_jenis']?></td>
                                <td><?= $barang['nama_barang']?></td>
                                <td><?= $barang['stok_barang']?> Pcs</td>
                                <td><?= $barang['berat_barang']?></td>
                                <td>Rp. <?= $barang['harga_jual']?> </td>
                                <!-- <td><?= $barang['jk_pegawai']?> </td> -->
                                <!-- <td><?= $barang['pass_pegawai']?> </td> -->
                                <td>
                                    <button type="button" class="btn btn-danger"> <i class="mdi mdi-cart-plus"></i> Masukkan Keranjang </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                      <form action="" method="POST">
                          <!-- <button type="submit" name="semua" style="margin-top:15px"> Tampilkan Semua Data</button> -->
                          <button type="submit" name="semua" type="button" class="btn btn-success btn-icon-text">
                            <i class="mdi mdi-account-search btn-icon-prepend"></i> Tampilkan Semua Data
                          </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
              <!-- <button type="button"  class="btn btn-success"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button> -->

            </div>


<?php include 'footer.php'; ?>