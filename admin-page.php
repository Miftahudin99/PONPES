<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/costume2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

        <title>Admin Page</title>
    </head>
    <body>

        <div class="side-nav">
            <div class="nav-bar">
                <center><img src="img/PONPES.png"></center>
                <div class="link-nav">
                    <a href="#ponpes1">Data Pondok Pesantren</a>
                    <a href="#ponpes4">Sejarah Singkat</a>
                    <a href="#ponpes2">Data Kriteria</a>
                    <a href="#ponpes3">Data Normalisasi</a>
                </div>
                <div class="btn-back">
                    <button><a href="admin-login.php">Log Out</a></button>
                </div>
            </div>
        </div>

        <div class="main" id="ponpes1">
            <h3>Data Pondok Pesantren</h3>
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary" id="button">
                Tambah Data Baru
            </button>

                  <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: 0px;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-sub">
                            <h4>Tambah Data Pondok Pesantren</h4>
                        </div>
                        <div class="modal-body">
                            <form action="hitung.php" method="post">
                                <input type="hidden" name="id">
                                <div class="mb-3">
                                    <label for="Input1" class="form-label">Pondok Pesantren</label>
                                    <input type="text" class="form-control" id="Input1" name="ponpes">
                                </div>
                                <div class="mb-3">
                                    <label for="Input2" class="form-label">Jumlah Santri</label>
                                    <input type="text" class="form-control" id="Input2" name="j_santri">
                                </div>
                                <div class="mb-3">
                                    <label for="Input3" class="form-label">Sistem Pendidikan</label>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="s_pendidikan" id="flexRadioDefault1" value="Ilmu Pengetahuan Umum, Ilmu Agama, & Khusus">
                                      <label class="form-check-label" for="flexRadioDefault1">
                                        Ilmu Pengetahuan Umum, Ilmu Agama, & Khusus
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="s_pendidikan" id="flexRadioDefault2" value="Ilmu Pengetahuan Umum & Ilmu Agama">
                                      <label class="form-check-label" for="flexRadioDefault2">
                                        Ilmu Pengetahuan Umum & Ilmu Agama
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="s_pendidikan" id="flexRadioDefault3" value="Ilmu Agama & Khusus">
                                      <label class="form-check-label" for="flexRadioDefault3">
                                        Ilmu Agama & Khusus
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="s_pendidikan" id="flexRadioDefault4" value="Ilmu Agama">
                                      <label class="form-check-label" for="flexRadioDefault4">
                                        Ilmu Agama
                                      </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Input4" class="form-label">Biaya Perbulan</label>
                                    <input type="text" class="form-control" id="Input4" name="biaya">
                                </div>
                                <div class="mb-3">
                                    <label for="Input5" class="form-label">Alamat Pondok Pesantren</label>
                                    <input type="text" class="form-control" id="Input5" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="Input6" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="Input6" name="lokasi">
                                    <div class="form-text"><b style="color: red;">*</b> Seberapa Jauh Dari Pusat Kota</div>
                                </div>
                                <div class="mb-3">
                                    <label for="Input7" class="form-label">Jumlah Fasilitas</label>
                                    <input type="text" class="form-control" id="Input7" name="j_fasilitas">
                                </div>
                                <div class="mb-3">
                                    <label for="Input8" class="form-label">Jumlah Prestasi</label>
                                    <input type="text" class="form-control" id="Input8" name="j_prestasi">
                                </div>
                                <div class="mb-3">
                                    <label for="Input9" class="form-label">Jumlah EKstrakulikuler</label>
                                    <input type="text" class="form-control" id="Input9" name="j_ekstra">
                                </div>
                                <div class="mb-3">
                                    <label for="Input10" class="form-label">Link Fanspage atau Website Resmi</label>
                                    <input type="text" class="form-control" id="Input10" name="link">
                                </div>
                                <input class="btn" type="submit" name="add" value="SIMPAN">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Ponpes</th>
                          <th scope="col">Alamat Ponpes</th>
                          <th scope="col">Link Fanspage / Website</th>
                          <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'koneksi.php';
                            $id = 1;
                            $data = mysqli_query($koneksi,"select * from data_ponpes");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $d['id']; ?></th>
                            <td><?php echo $d['ponpes']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td id="opsi" style="width: 60px;"><a href="<?php echo $d['link'] ?>"><?php echo $d['link'] ?></a></td>
                            <td id="opsi">
                                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>  <a href="delete.php?id=<?php echo $d['id']?>"onClick="return confirm('Apakah Data ini Akan Dihapus?')">Delete</a>
                            </td>
                        </tr>
                        <?php 
                              }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="main" id="ponpes4">
            <h3>Sejarah Singkat - Ponpes</h3>
            <div class="container table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" style="width: 30%;">Ponpes</th>
                            <th scope="col">Sejarah Singkat</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'koneksi.php';
                            $id = 1;
                            $data = mysqli_query($koneksi,"select * from data_ponpes");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $d['id']; ?></th>
                            <td style="width: 30%;"><?php echo $d['ponpes']; ?></td>
                            <td><?php echo $d['sejarah']; ?></td>
                            <td id="opsi" width="80px">
                                <center><a href="edit3.php?id=<?php echo $d['id']; ?>">Edit</a></center>
                            </td>
                        </tr>
                        <?php 
                              }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="main" id="ponpes2">
            <h3>Data Kriteria</h3>
            <div class="container table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Ponpes</th>
                            <th scope="col">Jumlah Santri</th>
                            <th scope="col">Sistem Pendidikan</th>
                            <th scope="col">Biaya</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jumlah Fasilitas</th>
                            <th scope="col">Jumlah Prestasi</th>
                            <th scope="col">Jumlah Ekstrakulikuler</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'koneksi.php';
                            $id = 1;
                            $data = mysqli_query($koneksi,"select * from data_ponpes");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $d['id']; ?></th>
                            <td><?php echo $d['ponpes']; ?></td>
                            <td><?php echo $d['j_santri']; ?></td>
                            <td><?php echo $d['s_pendidikan']; ?></td>
                            <td>Rp. <?php echo $d['biaya']; ?></td>
                            <td><?php echo $d['lokasi']; ?> Km</td>
                            <td><?php echo $d['j_fasilitas']; ?></td>
                            <td><?php echo $d['j_prestasi']; ?></td>
                            <td><?php echo $d['j_ekstra']; ?></td>
                            <td id="opsi" width="80px">
                                <center><a href="edit2.php?id=<?php echo $d['id']; ?>">Edit</a></center>
                            </td>
                        </tr>
                        <?php 
                              }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="main" id="ponpes3">
            <h3>Data Normalisasi</h3>
            <div class="container table-responsive">
                <table class="table table-bordered">
                    <thead style="text-align: center;">
                        <tr>
                            <th scope="col">Alternatif</th>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                            <th scope="col">C4</th>
                            <th scope="col">C5</th>
                            <th scope="col">C6</th>
                            <th scope="col">C7</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <?php 
                            include 'koneksi.php';
                            $id = 1;
                            $data = mysqli_query($koneksi,"select * from data_ponpes");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th scope="row">A<?php echo $d['id']; ?></th>
                            <td><?php echo $d['c1']; ?></th>
                            <td><?php echo $d['c2']; ?></th>
                            <td><?php echo $d['c3']; ?></th>
                            <td><?php echo $d['c4']; ?></th>
                            <td><?php echo $d['c5']; ?></th>
                            <td><?php echo $d['c6']; ?></th>
                            <td><?php echo $d['c7']; ?></th>
                        </tr>
                        <?php 
                              }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>