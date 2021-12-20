<?php

require '../public/method.php';

//Registrasi Konsumen
if( isset ($_POST["konsumen"])){
    //Cek Data
    if (regis($_POST) > 0){
        echo "<script> 
                alert('Registrasi Berhasil, Silahkan Login !!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo "<script> 
        alert('Registrasi Gagal, Coba Lagi !!');
        document.location.href = 'index.php';
        </script>";
    }
}


if( isset($_POST["login"]) ) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $cekid = mysqli_query($koneksi, "SELECT * from calon_konsumen where emial_calon_konsumen = '$email' ");
    //cek id,  idnya ada tidak
    if( mysqli_num_rows($cekid) === 1){

        //cek paswword
        $user = mysqli_fetch_assoc($cekid);

        if( password_verify($password, $user["password"]) ){

            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: ../public/index.php");
            
            exit;
        }else{
            echo "<script> 
            alert('Login Gagal, Coba Lagi !!');
            document.location.href = 'index.php';
            </script>";
        }
    }else{
        echo "<script> 
        alert('Login Gagal, Coba Lagi !!');
        document.location.href = 'index.php';
        </script>";
    }

    // $error = true;

}
?>