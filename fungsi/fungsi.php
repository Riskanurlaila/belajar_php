<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>

<?php
// Mendefinisikan fungsi
function sambut($nama) {
    return "Halo, $nama!";
}

function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
}

// Memanggil fungsi
$ucapan = sambut("John");
$hasilTambah = tambah(5, 3);

// Menampilkan hasil
echo "<h2>Fungsi Sambut</h2>";
echo "<p>$ucapan</p>";

echo "<h2>Fungsi Tambah</h2>";
echo "<p>Hasil tambah: $hasilTambah</p>";
?>
    
</body>
</html>
