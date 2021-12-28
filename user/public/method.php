<?php

//var untuk nyambung ke db
$koneksi = mysqli_connect("localhost", "root", "", "uas");


//Function untuk kuery db dan mengembalikan hasilnya berupa array
function query($query){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $query); //membuat query mysql
    $data = [];

    while($sql = mysqli_fetch_assoc($hasil) ) { //mengambil data di mysql
        $data[] = $sql;
    }

    return  $data;
}


//function untuk menambah Data Konsumen
function regis($data){
    global $koneksi;
    
    //membuat variabel untuk menampung data
    $nama= htmlspecialchars($data["nama"]);
    $email= htmlspecialchars($data["email"]);
    $pass= htmlspecialchars($data["pass"]);
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $idnegara= htmlspecialchars($data["idnegara"]);
    
    $masukan="INSERT INTO calon_konsumen (id_negara, nama_calon_konsumen, emial_calon_konsumen, password)
    VALUES ( '$idnegara', '$nama', '$email', '$password')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah
}

// function upload untuk foto
function upload(){

    $namafile= $_FILES['bukti']['name'];
    $ukuran = $_FILES['bukti']['size'];
    $error = $_FILES['bukti']['error'];
    $tempat = $_FILES['bukti']['tmp_name'];

    //Cek Upload gambbar

    if($error ==4){
        echo "<script>
                alert ('Upload Gambar Dahulu')
                </script>";

            return false;
    }

    //hanya boleh up gambar
    $ekstensiboleh = ['jpg', 'jpeg', 'png'];
    $ekstensiupload = explode('.', $namafile);
    $ekstensiupload = strtolower (end($ekstensiupload));

    if( !in_array($ekstensiupload, $ekstensiboleh)){
        echo "<script>
                alert ('Yang Anda Upload Bukan Gambar')
                </script>";

            return false;
    }
    

    // //cek ukuran
    // if($ukuran > 10000){
    //     echo "<script>
    //             alert ('Ukuran Gambar Terlalu Besar')
    //             </script>";

    //         return false;
    // }

    //upload
    //Ganti NamaMh
    $namafotobaru= uniqid();
    $namafotobaru.= ".";
    $namafotobaru.=$ekstensiupload;

    move_uploaded_file($tempat, 'bukti/'.$namafotobaru);
    return $namafotobaru;
}


//Untuk Menambahkan Dat pembayaran
if(isset($_POST['konfirmasi'])){
        
    if (pembayaran($_POST) > 0){
      echo "<script> 
              alert('Berhasil !!');
              document.location.href = 'index.php';
          </script>";
  }else{
      echo "<script> 
      alert('Gagal !!');
      document.location.href = 'index.php';
      </script>";
  }

  }
function pembayaran($data){
    global $koneksi;
        //Ambil Data
        $idpesan = $data['id'];
        $bukti = upload();     
        $jenis = $data['metode'];
        if( !$bukti){
            return false;
        } 

        //Memasukkan Data Ke tabel Pemesanan
        $masukan="INSERT INTO pembayaran(`id_pemesanan`, `bukti_pembayaran`, `jenis_pembayaran`)
        VALUES ( '$idpesan', '$bukti', '$jenis')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah

}

?>