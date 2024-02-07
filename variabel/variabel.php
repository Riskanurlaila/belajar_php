<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
<div id="container">
        <div id="overlay">
            <h2>Nama: Riska Nurlaila</h2>
            <p>Kelas: XI Rpl</p>
            <p>Tanggal Praktikum: 6 february 2024</p>
            <img src="ryska.jpeg" alt="" width="300px" height="350px"> 
    </div>
    <style>
        body{
          background-image: url(wlpp.jpg)
        }
</style>

<?php
// Mendefinisikan variabel
$nama = "Riska Nurlaila";
$umur = 17;
$tinggi = 155.5;
$isMahasiswa = true;

// Menampilkan nilai variabel
echo "<h2>Informasi Personal</h2>";
echo "<p>Nama: $nama</p>";
echo "<p>Umur: $umur tahun</p>";
echo "<p>Tinggi: $tinggi cm</p>";

// Menggunakan kondisi berdasarkan variabel
if ($isMahasiswa) {
    echo "<p>Status: Mahasiswa</p>";
} else {
    echo "<p>Status: Bukan Mahasiswa</p>";
}
?>
    
</body>
</html>
