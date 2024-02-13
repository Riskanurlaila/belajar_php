<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh While PHP</title>
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
    <h1>Contoh While PHP</h1>

    <?php
    $counter = 1;
    //While adalah perintah pada PHP dan bahasa pemrograman lainnya untuk membuat sebuah perulangan yang tidak di ketahui berapa kali perulangan tersebut di lakukan.
    while ($counter <= 5) {
        echo "<p>Mengulang untuk yang ke-$counter kali.</p>";
        $counter++;
    }
    ?>

</body>
</html>
