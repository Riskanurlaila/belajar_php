<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(wlpp.jpg );
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
    <title>Operator Ternary PHP</title>
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
    <h2>Operator Ternary PHP</h2>
    
    <form method="post" action="">
        <label for="inputNumber">Masukkan Nilai:</label>
        <input type="text" name="inputNumber" id="inputNumber" required>

        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $inputNumber = $_POST["inputNumber"];

        // Menentukan apakah nilai genap atau ganjil menggunakan operator ternary
        $result = ($inputNumber % 2 == 0) ? "Genap" : "Ganjil";
    ?>
        <p>Hasil: Nilai ini adalah <?php echo $result; ?></p>
    <?php } ?>
</div>

</body>
</html>
