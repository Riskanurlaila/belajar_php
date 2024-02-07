<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Perulangan for</title>
            <style>
                .box {
                    width:  50px;
                    height: 50px;
                    background-color: blue;
                    margin: 5px;
                    float: left;
                }
                </style>
                </head>
                <body>
        <h2 style="font-family: Montserrat;" Hello world></h2>
        <p><b>Haii guys</b></p>
        <p style="color:firebrickb;
                  font-family: 'Times New Roman', Times, serif;
                  font-size: 23px;">
            <h2>Nama:Riska Nurlaila</h2>
             <h2>Kelas:XI-Rpl</h2>
            </p>
            <br>
            <img src="ryska.jpeg" alt="" width="200px" style="box-shadow: 300px;">

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
