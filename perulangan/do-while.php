<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Do-While PHP</title>
    <body>
        <div id="container">
        <div id="overlay">
            <h2>Nama: Riska Nurlaila</h2>
            <p>Kelas: XI Rpl</p>
            <p>Tanggal Praktikum: 6 february 2024</p>
            <img src="ryska.jpeg" alt="" width="300px" height="350px"> 
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(wlpp.jpg);
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Contoh Do-While PHP</h1>

    <?php
    $counter = 1;
    //Struktur perulangan do while di php adalah pengulangan statement yang dieksekusi setidaknya satu kali terlebih dulu dan kemudian berulang kali atau berhenti, tergantung pada kondisi yang diberikan di akhir blok program.
    do {
        echo "<p>Mengulang untuk yang ke-$counter kali.</p>";
        $counter++;
    } while ($counter <= 5);
    ?>

</body>
</html>
