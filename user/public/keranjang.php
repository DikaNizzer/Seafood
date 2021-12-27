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
            

     

                <h6 class="position-absolute bottom-0 end-0">Total harga : Rp. <?= number_format($harga) ?></h6>
                <a href="barang.php" class="btn btn-success"> Lanjutkan Belanja</a>
                <button type="submit" data-bs-toggle="modal" data-bs-target="#alamat" class="btn btn-danger"> Pesan </button>
                <!-- <a href="barang.php" class="btn btn-danger"> Pesan</a> -->


            </div>
        </div>
</div>
</div>
</div>

<!-- Modal alamat-->
<div class="modal fade" id="alamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Alamat Pengiriman</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Pelanggan : </label>
                        <input class="form-control" id="exampleInputPassword1" value="<?=  $_SESSION["user"]["nama_calon_konsumen"]; ?>" type="text" name="nama" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Total Harga  : </label>
                        <input class="form-control" id="exampleInputPassword1" value="<?= $harga ?>" type="text" name="total" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Alamat : </label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Jl.." type="text" name="alamat" required>
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="pesan" class="btn btn-primary">Pesan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<pre>
<?php
print_r($_SESSION['keranjang']);
?>
</pre>
<?php 
    if(isset($_POST['pesan'])){
        //Ambil Data
        $id_konsumen =  $_SESSION["user"]["id_calon_konsumen"];
        $tanggal = date("Y-m-d H:i:s");      
        $total = $_POST['total'];
        $alamat = $_POST['alamat'];

        //Memasukkan Data Ke tabel Pemesanan
        $query="INSERT INTO pemesanan (`id_calon_konsumen`, `tgl_pemesanan`, `alamat_pengirirman`, `total_harga`)
                VALUES ( '$id_konsumen', '$tanggal', '$alamat', '$total')";
        mysqli_query($koneksi, $query); 

        //Mengambil id pemesanan terbaru
        $idterbaru = query("SELECT id_pemesanan from pemesanan ORDER BY id_pemesanan DESC LIMIT 1;");
        foreach($idterbaru as $id){

        }
        $id_pemesanan = $id['id_pemesanan'];

        //Mengisi Data Ke Tabel detail_pemesanan
        foreach($_SESSION['keranjang'] as $id_barang => $jumlah){
            $hasil = $koneksi->query("SELECT * FROM barTersedia WHERE id_barang = '$id_barang'") ;   
            $pecah = $hasil->fetch_assoc();
            $subharga = $jumlah * $pecah['harga_jual'];
            $berat =  $pecah['berat_barang'];

            $query2="INSERT INTO detail_pemesanan
                VALUES ( '$id_pemesanan', '$id_barang', '$subharga', '$berat')";
                mysqli_query($koneksi, $query2); 

        }

        //Menghapus Keranjang Belanja
        unset($_SESSION['keranjang']);

        //Memindahkan ke halaman Pemesanan
        echo "<script> 
                alert('Pemesanan Berhasil !, Silahkan lakukan pembayaran');
                document.location.href = 'pemesanan.php';
                </script>";

    }
?>



<?php include 'footer.php'; ?>