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
$dayOfWeek = 'Senin';

// Struktur switch-case
switch ($dayOfWeek) {
    case 'Senin':
        $activity = 'Memulai pekerjaan baru';
        break;
    case 'Selasa':
        $activity = 'Meeting tim proyek';
        break;
    case 'Rabu':
        $activity = 'Mengembangkan fitur baru';
        break;
    case 'Kamis':
        $activity = 'Pelatihan teknis';
        break;
    case 'Jumat':
        $activity = 'Review kode';
        break;
    default:
        $activity = 'Hari libur';
        break;
}

// Output
echo "Hari ini adalah $dayOfWeek<br>";
echo "Kegiatan hari ini: $activity";

?>
