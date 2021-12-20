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

//function untuk menambah data Jabatan baru
function tambahJabatan($data){ 
    global $koneksi;

    //membuat variabel untuk menampung data
    $id= htmlspecialchars($data["idjabatan"]);
    $nama= htmlspecialchars($data["namajabatan"]);

    
    $masukan="INSERT INTO jabatan VALUES ('$id', '$nama')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah
}


//function untuk menambah data Negara baru
function tambahNegara($data){
    global $koneksi;

    //membuat variabel untuk menampung data
    $id= htmlspecialchars($data["idnegara"]);
    $nama= htmlspecialchars($data["namanegara"]);

    
    $masukan="INSERT INTO negara VALUES ('$id', '$nama')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah
}

//function untuk menambah Jenis Barang baru
function tambahBarang($data){
    global $koneksi;

    //membuat variabel untuk menampung data
    $id= htmlspecialchars($data["idbarang"]);
    $nama= htmlspecialchars($data["namabarang"]);

    
    $masukan="INSERT INTO jenis_barang VALUES ('$id', '$nama')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah
}

//function untuk menambah Jenis Barang baru
function tambahdokument($data){
    global $koneksi;

    //membuat variabel untuk menampung data
    $id= htmlspecialchars($data["iddokumen"]);
    $nama= htmlspecialchars($data["namadokumen"]);

    
    $masukan="INSERT INTO jenis_dokumen VALUES ('$id', '$nama')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah
}

//function untuk menambah Data Konsumen
function regis($data){
    global $koneksi;
    
    //membuat variabel untuk menampung data
    $id= htmlspecialchars($data["id"]);
    $nama= htmlspecialchars($data["nama"]);
    $email= htmlspecialchars($data["email"]);
    $pass= htmlspecialchars($data["pass"]);
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $idnegara= htmlspecialchars($data["idnegara"]);
    
    $masukan="INSERT INTO calon_konsumen VALUES ('$id', '$idnegara', '$nama', '$email', '$password')";
    mysqli_query($koneksi, $masukan); //buat query
    return mysqli_affected_rows($koneksi); //cek berhasil tidaknya baris yang terubah
}
?>