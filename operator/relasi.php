<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
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
    <title>Operator Relasi PHP</title>
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
    <h2>Operator Relasi PHP</h2>
    
    <form method="post" action="">
        <label for="num1">Angka 1:</label>
        <input type="text" name="num1" id="num1" required>
        
        <label for="num2">Angka 2:</label>
        <input type="text" name="num2" id="num2" required>

        <button type="submit">Bandin</button>
    </form>

    <?php
    //Operator Relasi Operator relasi adalah operator untuk membandingkan dua buah nilai.
    // Hasil operasi dari operator relasi akan menghasilkan nilai dengan tipe data boolean, yaitu true (benar) dan false (salah).
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Melakukan perbandingan menggunakan operator relasi
        $result = ($num1 == $num2) ? "Sama" : "Tidak Sama";
    ?>
        <p>Hasil Perbandingan: <?php echo $result; ?></p>
    <?php } ?>
</div>

</body>
</html>