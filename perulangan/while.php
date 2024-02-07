<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Looping dengan PHP</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
        text-align: center;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <ul>

        <?php
        // Data mahasiswa
        $mahasiswa = array(
            array('nama' => 'Riska Nurlaila', 'nim' => '12345', 'prodi' => 'Teknik Informatika'),
            array('nama' => 'Valen florencia', 'nim' => '67890', 'prodi' => 'Sistem Informasi'),
            array('nama' => 'Desi Lisnawati', 'nim' => '54321', 'prodi' => 'Teknik Elektro')
        );
        
        // Menampilkan data mahasiswa menggunakan perulangan while
        $i = 0;
        while ($i < count($mahasiswa)) {
            echo "<li>";
            echo "<strong>Nama:</strong> " . $mahasiswa[$i]['nama'] . "<br>";
            echo "<strong>NIM:</strong> " . $mahasiswa[$i]['nim'] . "<br>";
            echo "<strong>Prodi:</strong> " . $mahasiswa[$i]['prodi'];
            echo "</li>";
            $i++;
        }
        ?>
    </ul>
</div>
</body>
</html>