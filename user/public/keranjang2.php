<?php
include 'header.php';
require 'method.php';


// $hasil = query("SELECT * FROM barTersedia"); //memanggil fungsi query untuk mengambil data Baranng

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "<pre>";
if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
    echo "<script> 
        alert('Belum ada barang di keranjang, Silahkan Tambahkan barang');
        document.location.href = 'barang.php';
        </script>";
}

?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">

        <div class="card border-success">
            <div class="card-body">
            <h4 class="card-title">Barang di Keranjang Anda : </h4>

            <?php $no=1;$harga = 0; ?>
            <?php foreach($_SESSION['keranjang'] as $id_barang => $jumlah): ?>
                <?php 
                    $hasil = $koneksi->query("SELECT * FROM barTersedia WHERE id_barang = '$id_barang'") ;   
                    $pecah = $hasil->fetch_assoc();
                    $subharga = $jumlah * $pecah['harga_jual'];
                    
                
                ?>

            
                
            <div class="card mb-3 bg-light border-primary mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="../images/<?= $pecah['gambar_barang']?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $no.". ". $pecah['nama_barang']?></h5>
                    <p class="card-text">Harga : Rp.<?= number_format($pecah['harga_jual'])?></p>
                    <p class="card-text">Berat Barang : <?= $pecah['berat_barang']?></p>
                    <p class="card-text">Jumlah  : <?= $jumlah ?></p>
                    <p class="card-text">Subharga  : Rp. <?= number_format($subharga);  ?></p>
                    <?php $harga = $harga+$subharga;?>
                    <p class="card-text"><small class="text-muted">Jenis : <?= $pecah['nama_jenis']?></small></p>
                    <a href="hapus.php?id=<?=$pecah['id_barang']?>" class="btn btn-danger"> Hapus</a>
                </div>
                </div>
            </div>
            </div>
            <br>
            <?php  $no++; ?>
            <?php endforeach; ?>
            

                <h6 class="position-absolute bottom-0 end-0">Total harga : <?= number_format($harga) ?></h6>
                <a href="barang.php" class="btn btn-success"> Lanjutkan Belanja</a>
                <a href="barang.php" class="btn btn-danger"> Pesan</a>


            </div>
        </div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>