<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Array dengan HTML dan CSS</title>
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

        .array-display {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        .array-values {
            font-size: 16px;
            color: #333;
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

    <div class="array-display">
        <h2>Contoh Array</h2>
        <?php
        // Mendefinisikan array
        $buah = array("Apel", "Jeruk", "Pisang", "Anggur");

        // Menampilkan nilai array dengan desain yang menarik
        echo '<p class="array-values">' . implode(", ", $buah) . '</p>';
        ?>
    </div>
</body>
</html>
