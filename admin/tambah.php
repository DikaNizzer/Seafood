<?php

require "method.php";

//menambah data jabatan
// Untuk Cek apakah ada data jabatan yang di isi di modal
if( isset ($_POST["submitJabatan"])){
    //Cek Data
    if (tambahJabatan($_POST) > 0){
        echo "<script> 
                alert('Data Berhasil DItambahkan');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Data Gagal DItambahkan');
        document.location.href = 'master.php';
        </script>";
    }
}

//menambah data Negara
if( isset ($_POST["submitNegara"])){
    //Cek Data
    if (tambahNegara($_POST) > 0){
        echo "<script> 
                alert('Data Berhasil DItambahkan');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Data Gagal DItambahkan');
        document.location.href = 'master.php';
        </script>";
    }
}


//menambah Jenis Barang
if( isset ($_POST["tambahbarang"])){
    //Cek Data
    if (tambahBarang($_POST) > 0){
        echo "<script> 
                alert('Data Berhasil DItambahkan');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Data Gagal DItambahkan');
        document.location.href = 'master.php';
        </script>";
    }
}

//menambah Jenis dokument
if( isset ($_POST["tambahdok"])){
    //Cek Data
    if (tambahdokument($_POST) > 0){
        echo "<script> 
                alert('Data Berhasil DItambahkan');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Data Gagal DItambahkan');
        document.location.href = 'master.php';
        </script>";
    }
}

//menambah Jenis dokument
if( isset ($_POST["konsumen"])){
    //Cek Data
    if (regis($_POST) > 0){
        echo "<script> 
                alert('Data Berhasil DItambahkan');
                document.location.href = 'konsumen.php';
            </script>";
    }else{
        echo "<script> 
        alert('Data Gagal DItambahkan');
        document.location.href = 'konsumen.php';
        </script>";
    }
}
?>