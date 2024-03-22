<?php
// Include the database connection file
include('koneksi.php');

// Query to select all records from the 'alternatif' table
$query = "SELECT * FROM data_ponpes";

// Execute the query
$result = mysqli_query($koneksi, $query);

// Array to store the data along with calculated Sk values
$data = array();

$bobot1 = $_POST['bobot1'];
$bobot2 = $_POST['bobot2'];

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/costume3.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <title>PONPES .</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top navbar-light">
            <div class="container">
                <a href="index.php"><img src="img/PONPES.png" class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" style="color: #FF8F27;">Our Project</a>
                    </li>
                    <li class="nav-item">
                      <a href="#">What's New</a>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="judul">
                <b style="font-weight: 700;">Rekomendasi</b> Pondok Pesantren di Kota Tasikmalaya
            </div>
            <div class="sub-judul1">
                <p style="text-align: right;">Berdasarkan Kriteria <b><?php echo $bobot1 . "</b> dan <b>" . $bobot2 ?></b></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/santri1.png" style="width: 100%;">
                    <div class="sub-judul">
                        <b style="font-weight: 700;">Terima kasih!</b> telah menggunakan <b style="font-weight: 700; color: #1560BD;">PONPES</b> <b style="font-weight: 700; color: #FF8F27;">.</b> untuk mendapatkan rekomendasi pondok pesantren di Kota Tasikmalaya! Kami telah melakukan perhitungan berdasarkan kriteria yang Anda pilih, dan hasilnya siap untuk Anda lihat.
                        </br>
                        </br>
                        Silahkan temukan pondok pesantren yang sesuai dengan preferensi Anda dan dapatkan informasi yang Anda butuhkan untuk membuat keputusan yang tepat dan kami berharap dengan adanya informasi ini akan membantu dalam menemukan pondok pesantren yang sesuai dengan kebutuhan Anda.
                        </br>
                        </br>
                        </br>
                        <center><b style="font-weight: 700;">Selamat mengeksplorasi!</b></center>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                        // pemilihan bobot nilai
                        if (($bobot1=="Jumlah Santri" && $bobot2=="Sistem Pendidikan") || ($bobot1=="Sistem Pendidikan" && $bobot2=="Jumlah Santri")) {
                            $b1 = 0.19;
                            $b2 = 0.19;
                            $b3 = 0.15;
                            $b4 = 0.15;
                            $b5 = 0.12;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        else if (($bobot1=="Jumlah Santri" && $bobot2=="Biaya") || ($bobot1=="Biaya" && $bobot2=="Jumlah Santri")) {
                            $b1 = 0.19;
                            $b2 = 0.15;
                            $b3 = 0.19;
                            $b4 = 0.15;
                            $b5 = 0.12;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        else if (($bobot1=="Jumlah Santri" && $bobot2=="Lokasi") || ($bobot1=="Lokasi" && $bobot2=="Jumlah Santri")) {
                            $b1 = 0.19;
                            $b2 = 0.15;
                            $b3 = 0.15;
                            $b4 = 0.19;
                            $b5 = 0.12;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        else if (($bobot1=="Jumlah Santri" && $bobot2=="Fasilitas") || ($bobot1=="Fasilitas" && $bobot2=="Jumlah Santri")) {
                            $b1 = 0.19;
                            $b2 = 0.15;
                            $b3 = 0.15;
                            $b4 = 0.12;
                            $b5 = 0.19;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        else if (($bobot1=="Jumlah Santri" && $bobot2=="Prestasi") || ($bobot1=="Prestasi" && $bobot2=="Jumlah Santri")) {
                            $b1 = 0.19;
                            $b2 = 0.15;
                            $b3 = 0.15;
                            $b4 = 0.12;
                            $b5 = 0.12;
                            $b6 = 0.19;
                            $b7 = 0.08;
                        }
                        else if (($bobot1=="Jumlah Santri" && $bobot2=="Ekstrakulikuler") || ($bobot1=="Ekstrakulikuler" && $bobot2=="Jumlah Santri")) {
                            $b1 = 0.19;
                            $b2 = 0.15;
                            $b3 = 0.15;
                            $b4 = 0.12;
                            $b5 = 0.12;
                            $b6 = 0.08;
                            $b7 = 0.19;
                        }
                        elseif (($bobot1=="Sistem Pendidikan" && $bobot2=="Biaya") || ($bobot1=="Biaya" && $bobot2=="Sistem Pendidikan")) {
                            $b1 = 0.15;
                            $b2 = 0.19;
                            $b3 = 0.19;
                            $b4 = 0.15;
                            $b5 = 0.12;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Sistem Pendidikan" && $bobot2=="Lokasi") || ($bobot1=="Lokasi" && $bobot2=="Sistem Pendidikan")) {
                            $b1 = 0.15;
                            $b2 = 0.19;
                            $b3 = 0.15;
                            $b4 = 0.19;
                            $b5 = 0.12;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Sistem Pendidikan" && $bobot2=="Fasilitas") || ($bobot1=="Fasilitas" && $bobot2=="Sistem Pendidikan")) {
                            $b1 = 0.15;
                            $b2 = 0.19;
                            $b3 = 0.15;
                            $b4 = 0.12;
                            $b5 = 0.19;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Sistem Pendidikan" && $bobot2=="Prestasi") || ($bobot1=="Prestasi" && $bobot2=="Sistem Pendidikan")) {
                            $b1 = 0.15;
                            $b2 = 0.19;
                            $b3 = 0.15;
                            $b4 = 0.12;
                            $b5 = 0.12;
                            $b6 = 0.19;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Sistem Pendidikan" && $bobot2=="Ekstrakulikuler") || ($bobot1=="Ekstrakulikuler" && $bobot2=="Sistem Pendidikan")) {
                            $b1 = 0.15;
                            $b2 = 0.19;
                            $b3 = 0.15;
                            $b4 = 0.12;
                            $b5 = 0.12;
                            $b6 = 0.08;
                            $b7 = 0.19;
                        }
                        elseif (($bobot1=="Biaya" && $bobot2=="Lokasi") || ($bobot1=="Lokasi" && $bobot2=="Biaya")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.19;
                            $b4 = 0.19;
                            $b5 = 0.12;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Biaya" && $bobot2=="Fasilitas") || ($bobot1=="Fasilitas" && $bobot2=="Biaya")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.19;
                            $b4 = 0.12;
                            $b5 = 0.19;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Biaya" && $bobot2=="Prestasi") || ($bobot1=="Prestasi" && $bobot2=="Biaya")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.19;
                            $b4 = 0.12;
                            $b5 = 0.12;
                            $b6 = 0.19;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Biaya" && $bobot2=="Ekstrakulikuler") || ($bobot1=="Ekstrakulikuler" && $bobot2=="Biaya")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.19;
                            $b4 = 0.12;
                            $b5 = 0.12;
                            $b6 = 0.08;
                            $b7 = 0.19;
                        }
                        elseif (($bobot1=="Lokasi" && $bobot2=="Fasilitas") || ($bobot1=="Fasilitas" && $bobot2=="Lokasi")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.12;
                            $b4 = 0.19;
                            $b5 = 0.19;
                            $b6 = 0.12;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Lokasi" && $bobot2=="Prestasi") || ($bobot1=="Lokasi" && $bobot2=="Prestasi")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.12;
                            $b4 = 0.19;
                            $b5 = 0.12;
                            $b6 = 0.19;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Lokasi" && $bobot2=="Ekstrakulikuler") || ($bobot1=="Ekstrakulikuler" && $bobot2=="Lokasi")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.12;
                            $b4 = 0.19;
                            $b5 = 0.12;
                            $b6 = 0.08;
                            $b7 = 0.19;
                        }
                        elseif (($bobot1=="Fasilitas" && $bobot2=="Prestasi") || ($bobot1=="Prestasi" && $bobot2=="Fasilitas")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.12;
                            $b4 = 0.12;
                            $b5 = 0.19;
                            $b6 = 0.19;
                            $b7 = 0.08;
                        }
                        elseif (($bobot1=="Fasilitas" && $bobot2=="Ekstrakulikuler") || ($bobot1=="Ekstrakulikuler" && $bobot2=="Fasilitas")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.12;
                            $b4 = 0.12;
                            $b5 = 0.19;
                            $b6 = 0.08;
                            $b7 = 0.19;
                        }
                        elseif (($bobot1=="Prestasi" && $bobot2=="Ekstrakulikuler") || ($bobot1=="Ekstrakulikuler" && $bobot2=="Prestasi")) {
                            $b1 = 0.15;
                            $b2 = 0.15;
                            $b3 = 0.12;
                            $b4 = 0.12;
                            $b5 = 0.08;
                            $b6 = 0.19;
                            $b7 = 0.19;
                        }

                        // Check if there are any rows returned from the query
                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $row) {
                                $id = $row['id'];
                                $ponpes = $row['ponpes'];
                                $link = $row['link'];
                                $sejarah = $row['sejarah'];
                                $alamat = $row['alamat'];
                                $c1 = $row['c1'];
                                $c2 = $row['c2'];
                                $c3 = $row['c3'];
                                $c4 = $row['c4'];
                                $c5 = $row['c5'];
                                $c6 = $row['c6'];
                                $c7 = $row['c7'];

                                // Perhitungan SPK dengan Metode MAUT
                                $x1 = ($c1 - 3) / 8 * $b1;
                                $x2 = ($c2 - 3) / 8 * $b2;
                                $x3 = ($c3 - 1) / 6 * $b3;
                                $x4 = ($c4 - 1) / 6 * $b4;
                                $x5 = ($c5 - 2) / 7 * $b5;
                                $x6 = ($c6 - 1) / 6 * $b6;
                                $x7 = ($c7 - 2) / 7 * $b7;

                                // Perhitungan Value $x1-$x7
                                $sk = $x1 + $x2 + $x3 + $x4 + $x5 + $x6 + $x7;

                                // Memasukan data kedalam array
                                $data[]= array(
                                    'id' => $id,
                                    'ponpes' => $ponpes,
                                    'link' => $link,
                                    'sk' => $sk,
                                    'sejarah' => $sejarah,
                                    'alamat' => $alamat
                                );
                            }

                        // membuat pengurutkan data berdasarkan hasil dari value sk
                        usort($data, function($elementpertama, $elementkedua) {
                            return $elementkedua['sk'] <=> $elementpertama['sk'];
                        });

                        // output dari hasil pengurutan data
                        foreach ($data as $row) {
                    ?>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $row['id'];?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <?php echo $row['ponpes'];?>
                                </button>
                            </h1>
                            <div id="flush-collapse<?php echo $row['id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h4 style="font-weight: 600;">Selayang Pandang</h4>
                                    </br>
                                    <?php echo $row['sejarah'];?>
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-8">
                                            <h6 style="font-weight: 600;">Alamat Ponpes</h6>
                                            <?php echo $row['alamat']; ?>
                                        </div>
                                        <div class="col-4">
                                            <a href="<?php echo $row['link'];?>">
                                                <center>
                                                    <img src="img/logo5.png" style="width: 30%; margin-top: 15px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fanspage / Website Resmi" class="link-web">
                                                </center>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    }

                    else {
                        echo "No records found"; // Output message if no records are found
                    } 

                    ?>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #f5f5f5; margin-top: 5%;">
            <div class="row" id="footer">
                <div class="col-md-5" id="Judul4">
                    <p style="color: #1560BD; font-size: 70px; font-weight: 700;">PONPES <b style="color: #FF8F27;">.</b></p>             
                    <p style="color: #333333; width: 100%;"><a style="color: #1560BD; font-weight: 700;">PONPES <a style="color: #FF8F27">.</a></a> merupakan sebuah platform website yang memuat sebuah informasi tentang rekomendasi pondok pesantren di Kota Tasikmalaya</p>
                </div>
                <div class="col-md-7" id="footer-nav">
                    <center>
                        <div class="navbar-foot">
                            <a href="">About Us</a>
                            <a href="">Our Project</a>
                            <a href="">What's New</a>
                        </div>
                        <div class="input-group mb-3" style="width: 460px; margin-top: 10%;">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" style="border: 2px solid #333333; border-right: 0px solid; background-color: #f5f5f5; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                            <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: #f5f5f5; border: 2px solid #333333; border-left: 0px solid; border-top-right-radius: 20px; border-bottom-right-radius: 20px;"><img src="img/logo6.png" style="width: 30px;"></span>
                        </div>
                        <div class="logo2">
                            <a href=""><img src="img/logo1.png"></a>
                            <a href=""><img src="img/logo2.png"></a>
                            <a href=""><img src="img/logo3.png"></a>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>