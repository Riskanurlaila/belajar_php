<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

// Contoh variabel
$nilai = 85;

// Struktur if-else
if ($nilai >= 80 && $nilai <= 100) {
    $grade = 'A';
    $keterangan = 'Sangat Baik';
} elseif ($nilai >= 70 && $nilai < 80) {
    $grade = 'B';
    $keterangan = 'Baik';
} elseif ($nilai >= 60 && $nilai < 70) {
    $grade = 'C';
    $keterangan = 'Cukup';
} elseif ($nilai >= 50 && $nilai < 60) {
    $grade = 'D';
    $keterangan = 'Kurang';
} elseif ($nilai >= 0 && $nilai < 50) {
    $grade = 'E';
    $keterangan = 'Sangat Kurang';
} else {
    $grade = 'Invalid';
    $keterangan = 'Nilai tidak valid';
}

// Output
echo "Nilai: $nilai<br>";
echo "Grade: $grade<br>";
echo "Keterangan: $keterangan";

?>
