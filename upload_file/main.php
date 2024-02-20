<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="icons.css">
</head>
<style>
	body {
		background-color: #adb5bd;
	}
</style>
<body>
<div class="p-3 bg-dark mb-3" >
		<nav class="nav main-nav flex-column flex-md-row justify-content-center" >
			<a class="nav-link active"   href="new.php" >Home</a>
			<a class="nav-link"   href="operator.php">Operator</a>
			<a class="nav-link"   href="variable.php">Variabel</a>
			<a class="nav-link"   href="form.php">Form</a>
			<a class="nav-link"   href="tipe_data.php">Tipe Data</a>
			<a class="nav-link"   href="file direktori.php">File Direktory</a>
            <a class="nav-link"   href="perulangan.php">Perulangan</a>
            <a class="nav-link"   href="Percabangan.php">Percabangan</a>
            <a class="nav-link"   href="function.php">Function</a>
		</nav>
	</div>
</div>
<div class="row row-sm">
    <div class="col-lg-4">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="ps-0">
                    <div class="main-profile-overview">
                        <div class="d-flex justify-content-between mg-b-20">
                            <div>
                                <h5 class="main-profile-name">Riska Nurlaila</h5>
                                <p class="main-profile-name-text">11 Rekayasa perangkat lunak</p>
                            </div>
                        </div>
                        <h6>Bio</h6>
                        <div class="main-profile-bio">
                        Upload file adalah proses pengiriman file dari pengunjung web (client) ke serve
                        </div><!-- main-profile-bio -->
                        <div class="main-profile-work-list">
                            
                        </div><!-- main-profile-work-list -->
                        <hr class="mg-y-30">
                        <label class="main-content-label tx-13 mg-b-20">Social</label>
                        <div class="main-profile-social-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <img src="instgram.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>Instagram</span> <a href="">github.com/spruko</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-success-transparent text-success">
                                    <img src="twiter.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>Twitter</span> <a href="">twitter.com/spruko.me</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-info-transparent text-info">
                                    <img src="tiktok.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>Tiktok</span> <a href="">linkedin.com/in/spruko</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-danger-transparent text-danger">
                                    <img src="ikon.png" alt="" >
                                </div>
                                <div class="media-body">
                                    <span>My Portfolio</span> <a href="">spruko.com/</a>
                                </div>
                            </div>
                        </div><!-- main-profile-social-list -->
                    </div><!-- main-profile-overview -->
                </div>
            </div>
        </div>
    </div>
<div class="col-lg-8">
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">upload file</h6>
                            <p class="text-muted card-sub-title">The default collapse behavior to create an
                                accordion.</p>
                        </div>
                        <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                            role="tablist">
                            <div class="card">
                                <div class="card-header" id="headingOne2" role="tab">
                                    <a aria-controls="collapseOne2" aria-expanded="false"
                                        data-bs-toggle="collapse" href="#collapseOne2">
                                        <?php
                                           // Mengecek apakah form telah disubmit
                                           if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['uploadFile'])) {
                                              $uploadDir = 'uploads/';
                                              $uploadFile = $uploadDir . basename($_FILES['uploadFile']['name']);
                                              $uploadOk = 1;
                                              $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

                                            // Mengecek apakah file gambar atau bukan
                                             $check = getimagesize($_FILES['uploadFile']['tmp_name']);
                                             if ($check !== false) {
                                             echo "File adalah gambar - " . $check['mime'] . ".<br>";
                                             $uploadOk = 1;
                                            } else {
                                             echo "File bukan gambar.<br>";
                                               $uploadOk = 0;
                                            }

                                             // Mengecek apakah file sudah ada
                                             if (file_exists($uploadFile)) {
                                             echo "Maaf, file tersebut sudah ada.<br>";
                                              $uploadOk = 0;
                                             }

                                             // Mengecek ukuran file
                                               if ($_FILES['uploadFile']['size'] > 500000) {
                                               echo "Maaf, file terlalu besar. Maksimal 500 KB.<br>";
                                                  $uploadOk = 0;
                                             }

                                              // Mengecek format file
                                              if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                                                echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diizinkan.<br>";
                                                $uploadOk = 0;
                                             }

                                             // Jika tidak ada kesalahan, upload file
                                              if ($uploadOk == 1) {
                                              if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadFile)) {
                                              echo "File " . htmlspecialchars(basename($_FILES['uploadFile']['name'])) . " berhasil diunggah.<br>";
                                             } else {
                                             echo "Maaf, terjadi kesalahan saat mengunggah file.<br>";
                                             }
                                             } else {
                                              echo "Maaf, file tidak diunggah.<br>";
                                              }
                                            }
                                             ?>

                                             <!DOCTYPE html>
                                              <html lang="en">
                                              <head>
                                                  <meta charset="UTF-8">
                                                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                  <title>Upload File</title>
                                                  </head>
                                                  <style>
                                                    body{
                                                     background-image: url(wlpp.jpg);
                                                    }
                                                    </style>
                                                  <body>
                                                <div id="container">
                                                  <div id="overlay">
                                                    <h2>Nama: Riska Nurlaila</h2>
                                                    <p>Kelas: XI Rpl</p>
                                                    <p>Tanggal Praktikum: 6 february 2024</p>
                                                    <img src="ryska.jpeg" alt="" width="200px" height="300px"> 
                                               </div>
                                                  <h2>Form Upload File</h2>
                                                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                                   Pilih file gambar: <input type="file" name="uploadFile" id="uploadFile">
                                                   <input type="submit" value="Upload" name="submit">
                                              </form>
                                       </body>
                                       </html>
 