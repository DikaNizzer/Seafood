<?php
session_start();

//Ambil id yang dari _GET
$id_barang = $_GET['id'];

//Jika Produk Sudah Pernah DIbeli
if(isset($_SESSION["keranjang"][$id_barang])){
    $_SESSION['keranjang'][$id_barang]+=1;
} 

//jika belumdibeli
else{
    $_SESSION['keranjang'][$id_barang] = 1;
}

echo 
        "<script> 
        alert('Barang Berhasil DI Tambah');
        document.location.href = 'keranjang2.php';
        </script>";



?>