<?php
    // include database connection file
    include_once("koneksi.php");
    
    // Check if form is submitted for user update, then redirect to homepage after update
    if(isset($_POST['update']))
    { 
        $id = $_POST['id'];
        $j_santri = $_POST['j_santri'];
        $s_pendidikan = $_POST['s_pendidikan'];
        $biaya = $_POST['biaya'];
        $alamat = $_POST['alamat'];
        $lokasi = $_POST['lokasi'];
        $j_fasilitas = $_POST['j_fasilitas'];
        $j_prestasi = $_POST['j_prestasi'];
        $j_ekstra = $_POST['j_ekstra'];

        // operasi if else data c1 = jumlah santri
        if ($j_santri >= 1000) {
            $c1 = 5;
         }
        elseif ($j_santri >= 500) {
            $c1 = 4;
         }
        elseif ($j_santri >= 300) {
            $c1 = 3;
         }


        // operasi if else data c2 = sistem pendidikan
        if ($s_pendidikan=="Ilmu Pengetahuan Umum, Ilmu Agama, & Khusus") {
            $c2 = 5;
        }
        elseif ($s_pendidikan=="Ilmu Pengetahuan Umum & Ilmu Agama" || $s_pendidikan=="Ilmu Agama & Khusus") {
             $c2 = 4;
         }

        elseif ($s_pendidikan=="Ilmu Agama") {
             $c2 = 3;
         }



        // operasi if else data c3 = biaya
        if ($biaya >= 800000) {
            $c3 = 1;
        }
        elseif ($biaya >= 600000) {
            $c3 = 2;
        }
        elseif ($biaya >= 500000) {
            $c3 = 3;
        }
        elseif ($biaya >= 400000) {
            $c3 = 4;
        }
        elseif ($biaya >= 300000) {
            $c3 = 5;
        }


        // operasi if else data c4 = lokasi
        if ($lokasi >= 9.0) {
            $c4 = 1;
        }
        elseif ($lokasi >= 6.0) {
            $c4 = 2;
        }
        elseif ($lokasi >= 4.0) {
            $c4 = 3;
        }
        elseif ($lokasi >= 3.0) {
            $c4 = 4;
        }
        elseif ($lokasi >= 0.1) {
            $c4 = 5;
        }


        // Operasi if else data c5 = fasilitas
        if ($j_fasilitas >= 20) {
            $c5 = 5;
        }
        elseif ($j_fasilitas >= 15) {
            $c5 = 4;
        }
        elseif ($j_fasilitas >= 10) {
            $c5 = 3;
        }
        elseif ($j_fasilitas >= 5) {
            $c5 = 2;
        }
        elseif ($j_fasilitas >= 0) {
            $c5 = 1;
        }

        // operasi if else data c6 = prestasi
        if ($j_prestasi >= 20) {
            $c6 = 5;
        }
        elseif ($j_prestasi >= 15) {
            $c6 = 4;
        }
        elseif ($j_prestasi >= 10) {
            $c6 = 3;
        }
        elseif ($j_prestasi >= 5) {
            $c6 = 2;
        }
        elseif ($j_prestasi >= 0) {
            $c6 = 1;
        }

        // operasi if else data c7 = ekstrakulikuler
        if ($j_ekstra >= 20) {
            $c7 = 5;
        }
        elseif ($j_ekstra >= 15) {
            $c7 = 4;
        }
        elseif ($j_ekstra >= 10) {
            $c7 = 3;
        }
        elseif ($j_ekstra >= 5) {
            $c7 = 2;
        }
        elseif ($j_ekstra >= 1) {
            $c7 = 1;
        }
        elseif ($j_ekstra = 0) {
            $c7 = 0;
        }
            
        // update user data
        $result = mysqli_query($koneksi, "UPDATE data_ponpes SET id='$id', j_santri='$j_santri', s_pendidikan='$s_pendidikan', biaya='$biaya', lokasi='$lokasi', j_fasilitas='$j_fasilitas', j_prestasi='$j_prestasi', j_ekstra='$j_ekstra', c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5', c6='$c6', c7='$c7' WHERE id=$id");
        
        // Redirect to homepage to display updated user in list
        header("Location: admin-page.php#ponpes2");
    }
?>

<?php
// Display selected user data based on id
// Getting id from url
include 'koneksi.php';
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM data_ponpes WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $ponpes = $user_data['ponpes'];
    $j_santri = $user_data['j_santri'];
    $s_pendidikan = $user_data['s_pendidikan'];
    $biaya = $user_data['biaya'];    
    $lokasi = $user_data['lokasi'];
    $j_fasilitas = $user_data['j_fasilitas'];
    $j_prestasi = $user_data['j_prestasi'];
    $j_ekstra = $user_data['j_ekstra'];
}
?>

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
                <a href="admin-page.php">Data Pondok Pesantren</a>
                <a href="admin-page.php">Data Kriteria</a>
                <a href="">Data Normalisasi</a>
            </div>
            <div class="btn-back">
                <button><a href="admin-login.php">Log Out</a></button>
            </div>
        </div>
    </div>

    <div class="main">
        <h3>Data Kriteria - <i><?php echo $ponpes; ?></i></h3>
        <form action="edit2.php" method="post">
            <div class="container">
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <div class="mb-3">
                    <label for="Input2" class="form-label">Jumlah Santri</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input2" name="j_santri" value="<?php echo $j_santri ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Input3" class="form-label">Sistem Pendidikan</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input3" name="s_pendidikan" value="<?php echo $s_pendidikan ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Input4" class="form-label">Biaya Perbulan</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input4" name="biaya" value="<?php echo $biaya ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Input6" class="form-label">Lokasi</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input6" name="lokasi" value="<?php echo $lokasi ?>">
                    </div>
                    <div class="form-text"><b style="color: red;">*</b> Seberapa Jauh Dari Pusat Kota</div>
                </div>
                <div class="mb-3">
                    <label for="Input7" class="form-label">Jumlah Fasilitas</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input7" name="j_fasilitas" value="<?php echo $j_fasilitas ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Input8" class="form-label">Jumlah Prestasi</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input8" name="j_prestasi" value="<?php echo $j_prestasi ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Input9" class="form-label">Jumlah EKstrakulikuler</label>
                    <div class="container">
                        <input type="text" class="form-control" id="Input9" name="j_ekstra" value="<?php echo $j_ekstra ?>">
                    </div>
                </div>
                <div class="container">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-updt">
                        Update
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="border: 0px;">
                                    <b>Data Kriteria -</b> <i><?php echo $ponpes; ?></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <center><h5>Apakah Anda yakin ingin menyimpan perubahan ini ?</h5></center>
                                </div>
                                <div class="modal-footer" style="border: 0px;">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary" name="update">Ya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </form>   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>