<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP String</title>
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

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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

    <div class="form-container">
        <form action="process.php" method="post">
            <label for="text">Enter a String:</label>
            <input type="text" name="text" required>
            <button type="submit">Submit</button>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari input dengan nama "text"
    $inputText = $_POST["text"];

    // Menampilkan pesan dengan nilai string yang dimasukkan
    echo "You entered: $inputText";
}
?>

    </div>
</body>
</html>
