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

 

?>