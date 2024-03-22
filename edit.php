<?php
    // include database connection file
    include_once("koneksi.php");
    
    // Check if form is submitted for user update, then redirect to homepage after update
    if(isset($_POST['update']))
    { 
        $id = $_POST['id'];
        $ponpes = $_POST['ponpes'];
        $alamat = $_POST['alamat'];
        $link=$_POST['link'];
            
        // update user data
        $result = mysqli_query($koneksi, "UPDATE data_ponpes SET ponpes='$ponpes', alamat='$alamat', link='$link' WHERE id=$id");
        
        // Redirect to homepage to display updated user in list
        header("Location: admin-page.php");
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
    $alamat = $user_data['alamat'];
    $link = $user_data['link'];
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
                    <a href="">Data Kriteria</a>
                    <a href="">Data Normalisasi</a>
                </div>
                <div class="btn-back">
                    <button><a href="admin-login.php">Log Out</a></button>
                </div>
            </div>
        </div>

        <div class="main">
            <h3>Update Data Pondok Pesantren</h3>
            <form action="edit.php" method="post">
                <div class="container">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <div class="mb-3">
                        <label for="Input1" class="form-label">Pondok Pesantren</label>
                        <div class="container">
                            <input type="text" class="form-control" id="Input1" name="ponpes" value="<?php echo $ponpes; ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">Alamat</label>
                        <div class="container">
                            <input type="text" class="form-control" id="Input2" name="alamat" value="<?php echo $alamat; ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">Link Fanspage / Website</label>
                        <div class="container">
                            <input type="text" class="form-control" id="Input3" name="link" value="<?php echo $link; ?>">
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="container">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-updt">
                            Update
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="border: 0px;">
                                        <b>Data PONPES - </b><i><?php echo $ponpes; ?></i>
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