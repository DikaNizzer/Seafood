<?php


require "method.php";

//Hapus Data jabatan
if(isset($_GET["idjabatan"])){
    $jabatan = $_GET["idjabatan"];

    global $koneksi;
    $result = mysqli_query($koneksi, "DELETE FROM jabatan WHERE id_jabatan = '$jabatan'");
    if(mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                    alert('Data Berhasil Dihapus');
                    document.location.href = 'master.php';
                </script>";
        }else{"<script> 
            alert('Data gagal Dihapus');
            document.location.href = 'master.php';
        </script>";
        }
    

}

//Hapus Data Negara
if(isset($_GET["idnegara"])){
    $negara = $_GET["idnegara"];

    global $koneksi;

        // Delete user row from table based on given id
    $result = mysqli_query($koneksi, "DELETE FROM negara WHERE id_negara = '$negara'");
        if(mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                    alert('Data Berhasil Dihapus');
                    document.location.href = 'master.php';
                </script>";
        }else{"<script> 
            alert('Data gagal Dihapus');
            document.location.href = 'master.php';
        </script>";
        }
}

//Hapus Jenis Barang
if(isset($_GET["idjenisbarang"])){
    $id = $_GET["idjenisbarang"];

    global $koneksi;

        // Delete user row from table based on given id
    $result = mysqli_query($koneksi, "DELETE FROM jenis_barang WHERE id_jenis = '$id'");
        if(mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                    alert('Data Berhasil Dihapus');
                    document.location.href = 'master.php';
                </script>";
        }else{"<script> 
            alert('Data gagal Dihapus');
            document.location.href = 'master.php';
        </script>";
        }
}

//Hapus Jenis Dokument
if(isset($_GET["iddokumen"])){
    $id = $_GET["iddokumen"];

    global $koneksi;

        // Delete user row from table based on given id
    $result = mysqli_query($koneksi, "DELETE FROM jenis_dokumen WHERE id_jenis_dokumen = '$id'");
        if(mysqli_affected_rows($koneksi) > 0){
        echo "<script> 
                    alert('Data Berhasil Dihapus');
                    document.location.href = 'master.php';
                </script>";
        }else{"<script> 
            alert('Data gagal Dihapus');
            document.location.href = 'master.php';
        </script>";
        }
}
?>