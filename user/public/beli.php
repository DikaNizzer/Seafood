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

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
// echo "<script> 
//     alert('Berhasil membeli barang dengan id ');
//     document.location.href = 'barang2.php';
//     </script>";


?>