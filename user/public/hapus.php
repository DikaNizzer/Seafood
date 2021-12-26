<?php
require 'method.php';

session_start();

$id_barang = $_GET['id'];

// unset($_SESSION['keranjang'][$id_barang]);
// echo "<script> 
//         alert('Barang berhasil dihapus');
//         document.location.href = 'keranjang2.php';
//         </script>";

//Jika Produk Sudah Pernah DIbeli
if(isset($_SESSION["keranjang"][$id_barang])){
    $_SESSION['keranjang'][$id_barang]-=1;
     

        if($_SESSION['keranjang'][$id_barang]==0){
            unset($_SESSION['keranjang'][$id_barang]);
            echo "<script> 
                alert('Barang berhasil dihapus');
                document.location.href = 'keranjang2.php';
                </script>"; 
        }

        echo "<script> 
        alert('Barang berhasil dihapus');
        document.location.href = 'keranjang2.php';
        </script>";
}


//jika belumdibeli
// else{
//     $_SESSION['keranjang'][$id_barang] = 1;
// }

?>