<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Directory Operations</title>
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

        .container {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>PHP Directory Operations</h2>

    <?php
    $directory = "./example_directory";

    // Membuat direktori jika belum ada
    if (!is_dir($directory)) {
        mkdir($directory);
        echo "<p>Direktori berhasil dibuat.</p>";
    }

    // Membaca isi direktori
    $files = scandir($directory);

    if ($files !== false) {
        echo "<p><strong>Isi Direktori:</strong></p>";
        echo "<ul>";
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<li>$file</li>";
            }
        }
        echo "</ul>";

        // Menambah file ke direktori
        $newFile = "new_file.txt";
        file_put_contents("$directory/$newFile", "Hello, this is a new file!");

        echo "<p><strong>File Baru Ditambahkan:</strong> $newFile</p>";

        // Menghapus file
        $fileToDelete = "$directory/$newFile";
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
            echo "<p><strong>File Dihapus:</strong> $newFile</p>";
        } else {
            echo "<p><strong>File Tidak Ditemukan:</strong> $newFile</p>";
        }

        // Menghapus direktori
        if (is_dir($directory)) {
            rmdir($directory);
            echo "<p><strong>Direktori Dihapus:</strong> $directory</p>";
        }
    } else {
        echo "<p>Gagal membaca direktori.</p>";
    }
    ?>
</div>

</body>
</html>
