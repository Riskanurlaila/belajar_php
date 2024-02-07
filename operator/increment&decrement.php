<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment & Decrement</title>
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

        .counter {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            width: 48%;
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
            <img src="ryska.jpeg" alt="" width="300px" height="350px"> 
    </div>

    <div class="counter">
        <h2>Increment & Decrement</h2>

        <?php
        // Mengecek apakah form telah disubmit
        if (isset($_POST['submit'])) {
            // Mengambil nilai dari form
            $nilai = $_POST['nilai'];

            // Menggunakan operator increment dan decrement
            $increment = $nilai++;
            $decrement = $nilai--;

            // Menampilkan hasil
            echo "<p class='result'>Nilai setelah increment: $increment</p>";
            echo "<p class='result'>Nilai setelah decrement: $decrement</p>";
        }
        ?>
        <form method="post">
            <label for="nilai">Masukkan Nilai:</label>
            <input type="number" name="nilai" required>

            <button type="submit" name="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
