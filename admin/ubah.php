<?php


require "method.php";

// ubah jabatan
if( isset ($_POST["ubahjab"])){

    global $koneksi;

    $id= htmlspecialchars($_POST["idjabatan"]);
    $nama= htmlspecialchars($_POST["namajabatan"]);
    $ubah="UPDATE jabatan set 
                nama_jabatan = '$nama'
                WHERE id_jabatan = $id ";
    mysqli_query($koneksi, $ubah);

    //Cek Data
    if (mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                alert('Data Berhasil Diubah');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Tidak Ada Data Yang Di Ubah');
        document.location.href = 'master.php';
        </script>";
    }

}

//ubah jabatannegara
if( isset ($_POST["ubahnegara"])){
    global $koneksi;

    $id= htmlspecialchars($_POST["idnegara"]);
    $nama= htmlspecialchars($_POST["namanegara"]);
    $ubahh="UPDATE negara set 
                nama_negara = '$nama'
                WHERE id_negara = '$id'";
    mysqli_query($koneksi, $ubahh);

    //Cek Data
    if (mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                alert('Data Berhasil Diubah');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Tidak Ada Data Yang Di Ubah');
        document.location.href = 'master.php';
        </script>";
    }
}


//ubah Jenis Barang
if( isset ($_POST["ubahjenisbarang"])){
    global $koneksi;

    $id= htmlspecialchars($_POST["idjenisbarang"]);
    $nama= htmlspecialchars($_POST["idnamasbarang"]);


    $ubahh="UPDATE jenis_barang set 
                nama_jenis = '$nama'
                WHERE id_jenis = $id ";
    mysqli_query($koneksi, $ubahh);

    //Cek Data
    if (mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                alert('Data Berhasil Diubah');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Tidak Ada Data Yang Di Ubah');
        document.location.href = 'master.php';
        </script>";
    }
}

//ubah Jenis dokument
if( isset ($_POST["ubahjenisdokumen"])){
    global $koneksi;

    $id= htmlspecialchars($_POST["idjenisdok"]);
    $nama= htmlspecialchars($_POST["namadok"]);


    $ubahh="UPDATE jenis_dokumen set 
                nama_dokumen = '$nama'
                WHERE id_jenis_dokumen = $id ";
    mysqli_query($koneksi, $ubahh);

    //Cek Data
    if (mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                alert('Data Berhasil Diubah');
                document.location.href = 'master.php';
            </script>";
    }else{
        echo "<script> 
        alert('Tidak Ada Data Yang Di Ubah');
        document.location.href = 'master.php';
        </script>";
    }
}
?>