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
                        Variabel PHP adalah suatu penampung data pada pemrograman yang diwakili oleh sekumpulan karakter
                        <div class="main-profile-bio">
                       
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
                                    <span>Instagram</span> <a href="">instagram.com/spruko</a>
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
                            <h6 class="card-title mb-1">variabel</h6>
                            <p class="text-muted card-sub-title">The default collapse behavior to create an
                                accordion.</p>
                        </div>
                        <div aria-multiselectable="true" class="accordion accordion-dark" id="accordion2"
                            role="tablist">
                            <div class="card">
                                <div class="card-header" id="headingOne2" role="tab">
                                    <a aria-controls="collapseOne2" aria-expanded="false"
                                        data-bs-toggle="collapse" href="#collapseOne2">
                                        <!DOCTYPE html>
                                          <html lang="en">
                                          <head>
                                          <meta charset="UTF-8">
                                          <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                             <title>PHP Variables</title>
                                            </head>
                                            <body>
                                           <div id="container">
                                              <div id="overlay">
                                               <h2>Nama: Riska Nurlaila</h2>
                                                <p>Kelas: XI Rpl</p>
                                                <p>Tanggal Praktikum: 6 february 2024</p>
                                                <img src="ryska.jpeg" alt="" width="200px" height="300px"> 
                                             </div>
                                            <style>
                                               body{
                                               background-image: url(wlpp.jpg)
                                             }
                                           </style>

                                            <?php
                                             // Mendefinisikan variabel
                                             $nama = "Riska Nurlaila";
                                             $umur = 17;
                                             $tinggi = 155.5;
                                             $isMahasiswa = true;

                                             // Menampilkan nilai variabel
                                             echo "<h2>Informasi Personal</h2>";
                                             echo "<p>Nama: $nama</p>";
                                             echo "<p>Umur: $umur tahun</p>";
                                             echo "<p>Tinggi: $tinggi cm</p>";

                                              // Menggunakan kondisi berdasarkan variabel
                                               if ($isMahasiswa) {
                                               echo "<p>Status: Mahasiswa</p>";
                                            } else {
                                               echo "<p>Status: Bukan Mahasiswa</p>";
                                            }
                                            ?>
    
                                            </body>
                                            </html>
