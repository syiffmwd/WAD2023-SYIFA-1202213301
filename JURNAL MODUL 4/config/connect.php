<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect_db = mysqli_connect("localhost:8080","root","","modul4");
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if(!$connect_db) {
    die('Koneksi gagal: ' . mysql_connect_error());
}
// 
 
?>