<?php
include 'header.php';
require 'method.php';


$hasil = query("SELECT * FROM barTersedia"); //memanggil fungsi query untuk mengambil data Baranng

//mencari data dengan kata kunci
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
                    
                        <div class="row mb-10">
                            <div class="col-md-3">
                            <form  method="post" action="">
                              <label id="pencarian">Cari Barang :</label>
                              <input type="text" name="data" for="pencarian" autocomplete="off"><br>
                              <!-- <button class="mdi mdi-account-search btn-icon-prepend" type="submit" name="cari">Cari</button> -->
                              <button type="submit" name="cari" type="button" class="btn btn-primary btn-icon-text mb-15">
                                <i class="mdi mdi-account-search btn-icon-prepend"></i> Cari
                              </button>
                            </form>
                          <br><br>
                            </div>

                            <div class="col-md-3">
                            <form action="" method="POST">
                                <button type="submit" name="semua" type="button" class="btn btn-success btn-icon-text">
                                <i class="mdi mdi-account-search btn-icon-prepend"></i> Tampilkan Semua Data
                              </button>
                            </form>
                              <br><br>
                            </div>

                        </div>

                        <div class="row">

                        <?php foreach($hasil as $barang) : ?>
                            <div class="col-md-3">
                              <div class="card text-dark bg-light border-primary mb-3"  style="width: 16rem; height:32rem;">
                              <h6 class="card-text-dark bg-info mb-3">Kategory : <?= $barang['nama_jenis']?></h6>
                                <img src="../images/<?= $barang['gambar_barang']?>" class="card-img-top img-thumbnail rounded float-start img-fluid" alt="..." width="100px">
                                <div class="card-body">
                                  <h5 class="card-title"><?= $barang['nama_barang']?></h5>
                                  
                                  <p class="card-text">Stok : <?= $barang['stok_barang']?> Pcs</p>
                                  <p class="card-text">Berat : <?= $barang['berat_barang']?></p>
                                  <p class="card-text">Rp. <?= $barang['harga_jual']?></p>
                                  <a href="beli.php?id=<?= $barang['id_barang']?>" class="btn btn-danger text-center"><i class="mdi mdi-cart-plus"></i>  Beli</a>
                                </div>
                              </div>
                            </div>
                          
                          <?php endforeach; ?>
                            

                        </div>

        
      </div>
    </div>
  </div>
</div>
</div>


<?php include 'footer.php'; ?>