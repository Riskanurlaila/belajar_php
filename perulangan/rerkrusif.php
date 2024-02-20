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
            <a class="nav-link"   href="fungsi.php">Function</a>
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
                        Perulangan rekursif dalam pemrograman adalah metode di mana sebuah fungsi memanggil dirinya sendiri
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
                                    <img src="ryska.png" alt="" >
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
                            <h6 class="card-title mb-1">rekrusif</h6>
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
    <title>PHP rekrusif</title>
    <body>
    <div id="container">
        <div id="overlay">
            <h2>Nama: Riska Nurlaila</h2>
            <p>Kelas: XI Rpl</p>
            <p>Tanggal Praktikum: 6 february 2024</p>
            <img src="ryska.jpeg" alt="" width="200px" height="300px"> 
    </div>
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
    <title>Rekursi PHP</title>
</head>
<body>

<div class="container">
    <h2>Rekursi PHP</h2>
    
    <form method="post" action="">
        <label for="inputNumber">Masukkan Angka:</label>
        <input type="text" name="inputNumber" id="inputNumber" required>

        <button type="submit">Proses</button>
    </form>

    <?php
    function recursiveFunction($number) {
        // Base case
        if ($number <= 0) {
            return 1;
        } else {
            // Recursive case
            return $number * recursiveFunction($number - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $inputNumber = $_POST["inputNumber"];

        // Memanggil fungsi rekursif
        $result = recursiveFunction($inputNumber);
    ?>
        <p>Hasil Faktorial: <?php echo $result; ?></p>
    <?php } ?>
</div>

</body>
</html>
 