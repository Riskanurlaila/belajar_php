<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Penugasan</title>
    <body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(wlpp.jpg);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        input {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div id="container">
        <div id="overlay">
            <h2>Nama: Riska Nurlaila</h2>
            <p>Kelas: XI Rpl</p>
            <p>Tanggal Praktikum: 6 february 2024</p>
            <img src="ryska.jpeg" alt="" width="300" height="350"> 
    </div>

    <div class="calculator">
        <h2>Kalkulator Penugasan</h2>

        <?php
        // Mengecek apakah form telah disubmit
        if (isset($_POST['submit'])) {
            // Mengambil nilai dari form
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];

            // Menggunakan operator penugasan untuk memanipulasi nilai
            $angka1 += $angka2; // Penjumlahan dan penugasan
            $angka2 -= 5; // Pengurangan dan penugasan
            $angka1 *= 2; // Perkalian dan penugasan
            $angka2 /= 3; // Pembagian dan penugasan

            // Menampilkan hasil
            echo "<p class='result'>Nilai Angka Pertama setelah operasi: $angka1</p>";
            echo "<p class='result'>Nilai Angka Kedua setelah operasi: $angka2</p>";
        }
        ?>
        <form method="post">
            <label for="angka1">Masukkan Angka Pertama:</label>
            <input type="number" name="angka1" required>

            <label for="angka2">Masukkan Angka Kedua:</label>
            <input type="number" name="angka2" required>

            <button type="submit" name="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
