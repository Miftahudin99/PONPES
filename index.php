<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/costume.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <title>PONPES .</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top navbar-light">
            <div class="container">
                <a href="admin-login.php"><img src="img/PONPES.png" class="navbar-brand" style="width: 180px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#">Our Project</a>
                    </li>
                    <li class="nav-item">
                      <a href="#">What's New</a>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 8%; margin-bottom: 5%;">
            <div class="row" id="head1">
                <div class="col-md-8" id="judul">
                    Temukan Pondok Pesantren Ideal Anda !
                </div>
                <div class="col-md-4" id="sub-judul">
                    Telusuri Rekomendasi Pondok Pesantren di Kota Tasikmalaya dan Temukan Tempat Pendidikan Islami yang Sesuai dengan Keinginan dan Kebutuhan Anda!
                </div>
            </div>
        </div>

        <img src="img/santri.png" style="width: 100%;">

            <div class="container" id="head2">
                Mulailah Tentukan Pondok Pesantren Ideal Anda !
            </div>

        <form action="aksi_bobot.php" method="post" class="container" >
            <div class="row justify-content-center" style="margin-bottom: 4%;">
                <div class="col-md-3">
                    <div id="judul1">
                        Kriteria Pertama
                    </div>
                    <div id="sub-judul1" >
                        <select name="bobot1">
                            <option>Pilih Kriteria !</option>
                            <option value="Jumlah Santri">Jumlah Santri</option>
                            <option value="Sistem Pendidikan">Sistem Pendidikan</option>
                            <option value="Biaya">Biaya</option>
                            <option value="Lokasi">Lokasi</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Prestasi">Prestasi</option>
                            <option value="Ekstrakulikuler">Ekstrakulikuler</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="judul2">
                        Kriteria Kedua
                    </div>
                    <div id="sub-judul2">
                        <select name="bobot2">
                            <option>Pilih Kriteria !</option>
                            <option value="Jumlah Santri">Jumlah Santri</option>
                            <option value="Sistem Pendidikan">Sistem Pendidikan</option>
                            <option value="Biaya">Biaya</option>
                            <option value="Lokasi">Lokasi</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Prestasi">Prestasi</option>
                            <option value="Ekstrakulikuler">Ekstrakulikuler</option>
                        </select>
                    </div>
                </div>
            </div>

            <center> <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="button">
                Submit
            </button> </center>

              <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: 0px;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="container modal-text">
                            Terima kasih atas pemilihan bobot yang sesuai dengan kriteria Anda! Selamat mengeksplorasi pengalaman pendidikan islami yang penuh makna!
                        </div>
                        <div class="modal-body">
                            <button type="submit" class="btn btn-primary btn-lg" value="Submit">Rekomendasi <b>PONPES</b> <b style="color: #FF8F27;">.</b> Ideal Anda !</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="container logo">
            <a href=""><img src="img/logo1.png"></a>
            <a href=""><img src="img/logo2.png"></a>
            <a href=""><img src="img/logo3.png"></a>
        </div>

        <img src="img/santri1.png" style="width: 100%; margin-top: 5%;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" id="Judul3">
                    <img src="img/PONPES.png" class="navbar-brand" style="width: 70%; margin-bottom: 10%;">
                    <p>
                        Merupakan sebuah platform website yang memuat sebuah informasi tentang rekomendasi pondok pesantren di Kota Tasikmalaya
                    </p>
                    <div class="logo1">
                        <a href=""><img src="img/logo1.png"></a>
                        <a href=""><img src="img/logo2.png"></a>
                        <a href=""><img src="img/logo3.png"></a>
                    </div>
                </div>
                <div class="col-md-6" id="sub-judul3">
                    <p>
                        Sistem Pendukung Keputusan (SPK) Rekomendasi Pondok Pesantren bertujuan untuk mempermudah proses pemilihan pondok pesantren dengan memberikan rekomendasi yang tepat dan personal. Dengan menggunakan teknologi dan data terkini, SPK ini membantu calon santri dan orang tua untuk menentukan pondok pesantren yang sesuai dengan kebutuhan dan preferensi mereka.
                    </p>
                    </br>
                    <p>
                        Kelebihan utama dari sistem ini terletak pada kemampuannya untuk menyajikan informasi yang komprehensif mengenai setiap pondok pesantren, termasuk fasilitas, kurikulum, prestasi, dan suasana belajar. 
                    </p>
                    </br>
                    <p>
                        Dibandingkan dengan pemilihan secara tradisional, SPK Rekomendasi Pondok Pesantren memberikan efesiensi dan akurasi dalam memberikan pilihan yang sesuai dengan kriteria yang diinginkan. Dengan demikian, sistem ini tidak hanya mempermudah calon santri dan orang tua dalam pengambilan keputusan, tetapi juga memberikan pengalaman pemilihan Pondok Pesantren yang lebih informatif, terarah, dan sesuai dengan perkembangan zaman.
                    </p>
                </div>
            </div>
        </div>

        <img src="img/santri2.png" style="width: 45%; margin-top: -120px; position: absolute;">

        <div class="container" id="berita" style="margin-top: 15%; width: 70%;">
            <h1>What's New</h1>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-warpper">
                            <div class="card" style="width: 18rem;">
                              <img src="img/santri2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h>22 Maret 2024</h>
                                <h5 class="card-title">15 Rekomendasi Pondok Pesantren Di Kota Tasikmalaya</h5>
                                <p class="card-text">15 Pondok pesantren ini menawarkan lingkungan pendidikan islami yang kaya akan tradisi dan nilai-nilai keagamaan</p>
                                <a href=""><img src="img/logo10.png" style="width: 35px;"></a>
                              </div>
                            </div>

                            <div class="card" style="width: 18rem;">
                              <img src="img/santri2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h>22 Maret 2024</h>
                                <h5 class="card-title">15 Rekomendasi Pondok Pesantren Di Kota Tasikmalaya</h5>
                                <p class="card-text">15 Pondok pesantren ini menawarkan lingkungan pendidikan islami yang kaya akan tradisi dan nilai-nilai keagamaan</p>
                                <a href=""><img src="img/logo10.png" style="width: 35px;"></a>
                              </div>
                            </div>

                            <div class="card" style="width: 18rem;">
                              <img src="img/santri2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h>22 Maret 2024</h>
                                <h5 class="card-title">15 Rekomendasi Pondok Pesantren Di Kota Tasikmalaya</h5>
                                <p class="card-text">15 Pondok pesantren ini menawarkan lingkungan pendidikan islami yang kaya akan tradisi dan nilai-nilai keagamaan</p>
                                <a href=""><img src="img/logo10.png" style="width: 35px;"></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-warpper">
                            <div class="card" style="width: 18rem;">
                              <img src="img/santri2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h>22 Maret 2024</h>
                                <h5 class="card-title">15 Rekomendasi Pondok Pesantren Di Kota Tasikmalaya</h5>
                                <p class="card-text">15 Pondok pesantren ini menawarkan lingkungan pendidikan islami yang kaya akan tradisi dan nilai-nilai keagamaan</p>
                                <a href=""><img src="img/logo10.png" style="width: 35px;"></a>
                              </div>
                            </div>

                            <div class="card" style="width: 18rem;">
                              <img src="img/santri2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h>22 Maret 2024</h>
                                <h5 class="card-title">15 Rekomendasi Pondok Pesantren Di Kota Tasikmalaya</h5>
                                <p class="card-text">15 Pondok pesantren ini menawarkan lingkungan pendidikan islami yang kaya akan tradisi dan nilai-nilai keagamaan</p>
                                <a href=""><img src="img/logo10.png" style="width: 35px;"></a>
                              </div>
                            </div>

                            <div class="card" style="width: 18rem;">
                              <img src="img/santri2.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h>22 Maret 2024</h>
                                <h5 class="card-title">15 Rekomendasi Pondok Pesantren Di Kota Tasikmalaya</h5>
                                <p class="card-text">15 Pondok pesantren ini menawarkan lingkungan pendidikan islami yang kaya akan tradisi dan nilai-nilai keagamaan</p>
                                <a href=""><img src="img/logo10.png" style="width: 35px;"></a>
                              </div>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="arrow" style="display: flex; margin-top: 3%;">
                    <div type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="margin-right: 2%;">
                        <span aria-hidden="true"><img src="img/logo7.png" style="width: 40px;"></span>
                    </div>
                    <div type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-left: 2%;">
                        <span aria-hidden="true"><img src="img/logo8.png" style="width: 40px;"></span> 
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #f5f5f5; margin-top: 15%;">
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