<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email
    $email = $_POST["email"];
    // b. Ambil nilai input name
    $name = $_POST["name"];
    // c. Ambil nilai input username
    $username = $_POST["username"];
    // d. Ambil nilai input password
    $password = $_POST["password"];
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query_search = "SELECT * FROM users WHERE email = '$email'";
$search = mysqli_query($connect_db, $query_search);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if(mysql_num_rows($result) == 0) {

    // a. Buatlah query untuk melakukan insert data ke dalam database
    $query_insert = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    $insert = mysql_query($connect_db,$query_insert);
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    if($insert) {
        $_SESSION['message'] = 'Pendaftaran Berhasil';
        $_SESSION['color'] = 'success';
        header ('Location: ../views/login.php');
    } else {
        $_SESSION['message'] = 'Pendaftaran Gagal';
    }
}
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar
else{
    $_SESSION['message'] = 'Username sudah terdaftar';
    header('Location: ../views/login.php');
}
//

?>