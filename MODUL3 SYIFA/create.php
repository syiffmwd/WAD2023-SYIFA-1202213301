<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa


$connect = mysqli_connect("localhost:8080","root","","modul3_wad") 



// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
    include("connect.php");
// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama = $_POST['nama_mobil'];
    // b. Ambil data brand mobil
    $brand = $_POST['brand_mobil'];
    // c. Ambil data warna mobil
    $warna = $_POST['warna_mobil'];
    // d. Ambil data tipe mobil
    $tipe = $_POST['tipe_mobil'];
    // e. Ambil data harga mobil
    $harga = $_POST['harga_mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = mysqli_query($connect, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES('$nama', '$email', '$deskripsi')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta thhp-equiv='refresh' content='1 url=index.php";
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    } else {
        echo "<script>alert('Gagal menambahkan')</script>";
        echo "<meta thhp-equiv='refresh' content='1 url=index.php";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>

<html lang="en">

<head>
    <title>Method POST</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" nama_mobil="nama_mobil"><br />
        <input type="text" brand_mobil="brand_mobil"><br />
        <input type="text" warna_mobil="warna_mobil"><br />
        <input type="text" tipe_mobil="tipe_mobil"><br />
        <input type="number" harga_mobil="harga_mobil"><br />
    </form>

    <?php
    if ($_POST) {
        $_POST["nama_mobil"];
        $_POST["brand_mobil"];
        $_POST["warna_mobil"];
        $_POST["tipe_mobil"];
        $_POST["harga_mobil"];
    }
    ?>

    <?php
        $insert = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES ('')";
    ?>
</body>

<html>
    