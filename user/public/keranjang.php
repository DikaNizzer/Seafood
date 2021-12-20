<?php
include 'header.php';
require 'method.php';

$id = $_SESSION["user"]["id_calon_konsumen"] ;
// $hasil = query("SELECT * FROM pemesanan join detail_pemesanan on
// (pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan) where pemesanan.id_calon_konsumen = '$id'"); //memanggil fungsi query untuk mengambil data Baranng

$hasil = query("call pembelian '$id')");

?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Keranjang Anda</h4>
                    
                        <!-- <form  method="post" action="">
                            <label id="pencarian">Cari Barang :</label>
                            <input type="text" name="data" for="pencarian" autocomplete="off"><br>
                             <button class="mdi mdi-account-search btn-icon-prepend" type="submit" name="cari">Cari</button>
                            <button type="submit" name="cari" type="button" class="btn btn-primary btn-icon-text mb-15">
                              <i class="mdi mdi-account-search btn-icon-prepend"></i> Cari
                            </button>
                        </form> -->


                    <div class="table-responsive mb-7">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id Pemesanan</th>
                                <th>Tanggan Pemesanan</th>
                                <!-- <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Berat </th>
                                <th>Harga</th> -->
                                <!-- <th>Gender</th> -->
                                <!-- <th>Password</th> -->
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $barang) : ?>
                            <tr>
                                <td><?= $barang['id_pemesanan']?></td>
                                <td><?= $barang['tgl_pemesanan']?></td>
                                <!-- <td><?= $barang['nama_barang']?></td>
                                <td><?= $barang['stok_barang']?> Pcs</td>
                                <td><?= $barang['berat_barang']?></td>
                                <td>Rp. <?= $barang['harga_jual']?> </td> -->
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