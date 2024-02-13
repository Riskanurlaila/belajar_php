<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Perulangan for</title>
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
            <style>
                .box {
                    width:  50px;
                    height: 50px;
                    background-color: blue;
                    margin: 5px;
                    float: left;
                }
                </style>

                <?php
                // jumlah kotak yang ingin ditampilkan
                $jumlah_kotak = 5;

                // perulangan untuk membuat kotak sebanyak jumlahyang ditentukan
                for ($i = 0; $i < $jumlah_kotak; $i++) {
                    echo "<div class='box'></div>";
                }
                ?>
                </body>
                </html>
