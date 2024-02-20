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
                        <div class="main-profile-bio">
                        Operator adalah simbol-simbol yang digunakan untuk melakukan operasi terhadap suatu nilai dan variabel. 
                        Ada 6 Jenis operator dalam pemrograman PHP yang harus kita ketahui: Operator Aritmatika; Operator Penugasan atau 
                        Assignment; Operator Increment & Decrement; Operator Relasi atau pembanding; Operator Logika; Operator Bitwise;
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
                            <h6 class="card-title mb-1">Aritmatika</h6>
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
                                           <img src="ryska.jpeg" alt="" width="200px" height="300px"> 
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

                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                         mula mula kita punya 2 variable, yaitu $a dan $b dengan nilai awal 5 dan 2
                                         kemudian kita menggunakan operator aritmatika untuk melakukan
                                         operasi terhadap dua nilai atau variable tersebut. lalu hasilnya disimpan ke variable $c
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Bitwise</h6>
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
                                        <title>Operator Bitwise PHP</title>
                                        </head>
                                         <body>
                                         <div id="container">
                                              <div id="overlay">
                                                  <h2>Nama: Riska Nurlaila</h2>
                                                   <p>Kelas: XI Rpl</p>
                                                   <p>Tanggal Praktikum: 6 february 2024</p>
                                                 <img src="ryska.jpeg" alt="" width="200px" height="300px"> 
                                               </div>

                                                <div class="container">
                                                   <h2>Operator Bitwise PHP</h2>
    
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

                                                  // Melakukan operasi bitwise
                                                  $result_and = $num1 & $num2;
                                                  $result_or = $num1 | $num2;
                                                  $result_xor = $num1 ^ $num2;
                                                  $result_not_num1 = ~$num1;
                                                  $result_shift_left = $num1 << $num2;
                                                  $result_shift_right = $num1 >> $num2;

                                            ?>
                                                   <p>Hasil AND bitwise: <?php echo $result_and; ?></p>
                                                   <p>Hasil OR bitwise: <?php echo $result_or; ?></p>
                                                   <p>Hasil XOR bitwise: <?php echo $result_xor; ?></p>
                                                   <p>Hasil NOT bitwise (Angka 1): <?php echo $result_not_num1; ?></p>
                                                   <p>Hasil Left Shift bitwise: <?php echo $result_shift_left; ?></p>
                                                   <p>Hasil Right Shift bitwise: <?php echo $result_shift_right; ?></p>
                                           <?php } ?>
                                           </div>

                                             </body>
                                            </html>
                                            
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                         konsepnya memang hampir sama dengan operator logika 
                                         bedanya, bitwise digunakan untuk binner
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Increment Dan Decrement</h6>
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
                                         echo "<h3>Postincrement</h3>";
                                         $a = 5;
                                         echo "\$a = $a <br />";
                                         echo "\$a akan bernilai 5: " . $a++ . " (\$a++)<br />";
                                         echo "\$a akan bernilai 6: " . $a . "<br />";
  
                                         echo "<h3>Preincrement</h3>";
                                         $a = 5;
                                         echo "\$a = $a <br />";
                                         echo "\$a akan bernilai 6: " . ++$a . " (++\$a)<br />";
                                         echo "\$a akan bernilai 6: " . $a . "<br />";
  
                                         echo "<h3>Postdecrement</h3>";
                                         $a = 5;
                                         echo "\$a = $a <br />";
                                         echo "\$a akan bernilai 5: " . $a-- . " (\$a--)<br />";
                                         echo "\$a akan bernilai 4: " . $a . "<br />";
  
                                         echo "<h3>Predecrement</h3>";
                                         $a = 5;
                                         echo "\$a = $a <br />";
                                         echo "\$a akan bernilai 4: " . --$a . " (--\$a)<br />";
                                         echo "\$a akan bernilai 4: " . $a . "<br />";
                                         ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                    Operator Increment dan Decrement adalah penyebutan untuk operasi sepert $a++, dan $a–. 
                                    Jika anda telah mempelajari bahasa pemograman lain, operasi increment dan decrement ini sering digunakan dalam perulangan (looping).
                                    Increment digunakan untuk menambah variabel sebanyak 1 angka, sedangkan decrement digunakan untuk mengurangi variabel sebanyak 1 angka. 
                                    Penulisannya menggunakan tanda tambah 2 kali untuk increment, dan tanda kurang 2 kali untuk decrement. 
                                    Penempatan tanda tambah atau kurang ini boleh diwal, atau diakhir variabel, namun keduanya memiliki perbedaan, sehingga terdapat 4 jenis increment dan decrement dalam PHP.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Logika</h6>
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
                                         $hasil1 = true and false;
                                         echo '$hasil1 = ';
                                         echo var_dump($hasil1)."<br/>"; // $hasil1 = bool(true) 
 
                                         $hasil2 = (true and false);
                                         echo '$hasil2 = ';
                                         echo var_dump($hasil2)."<br/>"; // $hasil2 = bool(false) 
 
                                         $hasil3 = (true xor false);
                                         echo '$hasil3 = ';
                                         echo var_dump($hasil3)."<br/>"; // $hasil3 = bool(true) 
 
                                         $hasil4 = (false or true && false);
                                         echo '$hasil4 = ';
                                         echo var_dump($hasil4)."<br/>"; // $hasil4 = bool(false) 
 
                                         $a=true;
                                         $b=false;
                                         $hasil5 = ($a and $b || $a or b);
                                         echo '$hasil5 = ';
                                         echo var_dump($hasil5); // $hasil5 = bool(true)
                                            // saya mengunakan fungsi printf() untuk mencetak memformat dan mencetak teks
                                            // namun akan tetap menampilkan 1 untuk true dan 0 untuk false
                                            // perhatikan hasil yang didapatkan ketika menggunakan operator && (AND), || (OR),
                                            // dan ! (NOT)

                                            // operator && akan menghasilkan true apabila nilai kiri dan kanan bernilai true.
                                            // sedangkan operator || akan menghasilkan false saat nilai kiri dan kanan bernilai false.
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                    Operator Logika adalah operator yang digunakan untuk membandingkan 2 kondisi logika, yaitu logika benar (TRUE) dan logika salah (FALSE).
                                     Operator logika sering digunakan untuk kodisi IF, atau untuk keluar dari proses perulangan (looping).
                                     Jenis operand dalam operator logika ini adalah variabel dengan tipe boolean. 
                                     Namun jika operand bukan boolean, akan "dikonversi" menjadi boolean oleh PHP (aturan "konversi" ini telah kita bahas pada tutorial tentang tipe data boolean PHP).
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Relasi</h6>
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
                                            // operator relasi adalah operator untuk membandingkan dua buah nilai.
                                            // hasil operasi dari operator relasi akan  menghasilkan nilai dengan tipe data boolean,
                                            // true (benar) dan (false) salah.

                                            $a = 6;
                                            $b = 2;
                                            
                                            // menggunakan operator relasi lebih besar
                                            $c = $a > $b;
                                            echo "$a > $b: $c";
                                            echo "<hr>";
                                            
                                            // menggunakan operator relasi lebih kecil
                                            $c = $a < $b;
                                            echo "$a < $b: $c";
                                            echo "<hr>";
                                            
                                            // menggunakan operator relasi lebih sama dengan
                                            $c = $a == $b;
                                            echo "$a == $b: $c";
                                            echo "<hr>";
                                            
                                            // menggunakan operator relasi lebih tidak sama dengan
                                            $c = $a != $b;
                                            echo "$a != $b: $c";
                                            echo "<hr>";
                                            
                                            // menggunakan operator relasi lebih besar sama dengan
                                            $c = $a >= $b;
                                            echo "$a >= $b: $c";
                                            echo "<hr>";
                                            
                                            // menggunakan operator relasi lebih kecil sama dengan
                                            $c = $a <= $b;
                                            echo "$a <= $b: $c";
                                            echo "<hr>";
                                           
                                            // kita akan mendapatkan nilai 1untuk true, sedangkan false tidak ditampilkan atau 0
                                            // ini tidak salah, memang seperti itulah sifat dari fungsi echo di PHP.
                                            // nilai dengan tipe data boolean biasanya tidak untuk ditampilkan. biasanya digunakan
                                            // untuk pembuatan kondisi pada percabangan
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                        operator relasi adalah operator untuk membandingkan dua buah nilai.
                                        hasil operasi dari operator relasi akan  menghasilkan nilai dengan tipe data boolean,
                                        true (benar) dan (false) salah.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="main-content-body main-content-body-profile">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">Ternary</h6>
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
                                            // operator ternary adalah operator untuk membuat suatu kondisi.
                                            // simbol yang digunakan adalah tanda tanya (?) dan titik 2 (:)
                                            $x = 10;

                                            $y = 20;

                                            $z = 30;

                                           $hasil = ($x < $y) ? (($y < $z) ? "y lebih kecil dari z" : "y lebih besar dari z") : "x lebih besar dari y";

                                           echo $hasil;
                                        ?>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne2" class="collapse show"
                                    data-bs-parent="#accordion2" id="collapseOne2" role="tabpanel">
                                    <div class="card-body">
                                    Ternary operator adalah operator kondisional di PHP yang memungkinkan penulisan kondisi if-else dalam bentuk yang lebih singkat.
                                     Operator ternary terdiri dari kondisi yang diperiksa, nilai yang akan dikembalikan jika kondisi tersebut benar (true), dan nilai yang akan dikembalikan jika kondisi tersebut salah (false)
                                </div>
                            </div>
                        </div><!-- accordion -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
</body>
</html>