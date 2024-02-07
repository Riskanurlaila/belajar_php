<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
    .card {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    h2 {
        margin-top: 0;
    }
    p {
        margin-bottom: 10px;
    }
    .card img {
        max-width: 100%;
        border-radius: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <div class="gallery">
        <?php
        // Data mahasiswa
        $mahasiswa = array(
            array('nama' => 'John Doe', 'nim' => '12345', 'prodi' => 'Teknik Informatika', 'foto' => 'john.jpg'),
            array('nama' => 'Jane Doe', 'nim' => '67890', 'prodi' => 'Sistem Informasi', 'foto' => 'jane.jpg'),
            array('nama' => 'Alice', 'nim' => '54321', 'prodi' => 'Teknik Elektro', 'foto' => 'alice.jpg')
        );

        // Menampilkan data mahasiswa menggunakan perulangan foreach
        foreach ($mahasiswa as $mhs) {
            echo "<div class='card'>";
            echo "<img src='photos/" . $mhs['ryska.jpeg'] . "' alt='" . $mhs['nama'] . "'>";
            echo "<h2>" . $mhs['nama'] . "</h2>";
            echo "<p>NIM: " . $mhs['nim'] . "</p>";
            echo "<p>Prodi: " . $mhs['prodi'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>