<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Tipe data boolean</title>
</head>
<style>
body{
    background-image: url(wlpp.jpg)
}
</style>
<body>
<div id="container">
        <div id="overlay">
            <h2>Nama: Riska Nurlaila</h2>
            <p>Kelas: XI Rpl</p>
            <p>Tanggal Praktikum: 6 february 2024</p>
            <img src="ryska.jpeg" alt="" width="300px" height="350px"> 
    </div>

<?php
// Variabel untuk menyimpan status user aktif atau tidak
$userAktif = true;

// Variabel untuk menyimpan status user memiliki izin admin atau tidak
$userAdmin = false;

// Menampilkan pesan berdasarkan status user aktif
if ($userAktif) {
    echo "Selamat datang! Anda berhasil login. ";
} else {
    echo "Maaf, akun Anda tidak aktif. ";
}

// Menampilkan pesan berdasarkan status izin admin user
if ($userAdmin) {
    echo "Anda memiliki akses sebagai admin. ";
} else {
    echo "Anda bukan admin. ";
}
?>

</body>
</html>