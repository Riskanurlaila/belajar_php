<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Aritmatika PHP</title>
    <style>

        body{
            font-family: Arial, sans-serif;
            background-image: url(wlpp.jpg);
            text-align: center;
            margin: 50px;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            font-weight: bold;
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

<div class="container">
    <h2>Operator Aritmatika PHP</h2>
    
    <form method="post" action="">
        <label for="num1">Angka 1:</label>
        <input type="text" name="num1" id="num1" required>
        
        <label for="num2">Angka 2:</label>
        <input type="text" name="num2" id="num2" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        //operator aritmatika merupakan operator yang biasa kita temukan dalam operasi matematika//
    //Sedangkan aritmatika adalah cabang ilmu matematika yang membahas perhitungan sederhana. Mulai dari penambahan, pembagian, pengurangan, dan perkalian.//
        // Melakukan operasi aritmatika
        $result_addition = $num1 + $num2;
        $result_subtraction = $num1 - $num2;
        $result_multiplication = $num1 * $num2;
        $result_division = ($num2 != 0) ? $num1 / $num2 : "Tidak bisa dibagi dengan 0";

    ?>
        <p>Hasil Penjumlahan: <?php echo $result_addition; ?></p>
        <p>Hasil Pengurangan: <?php echo $result_subtraction; ?></p>
        <p>Hasil Perkalian: <?php echo $result_multiplication; ?></p>
        <p>Hasil Pembagian: <?php echo $result_division; ?></p>
    <?php
 }
  ?>
</div>
</body>
</html>