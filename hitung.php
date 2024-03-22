<?php
// hitung.php
include_once("koneksi.php");

if (isset($_POST['add'])) {
    // Ambil nilai dari formulir
    $id = $_POST['id']; // Jangan lupa sesuaikan dengan nilai yang ingin Anda simpan
    $ponpes = $_POST['ponpes'];
    $j_santri = $_POST['j_santri'];
    $s_pendidikan = $_POST['s_pendidikan'];
    $biaya = $_POST['biaya'];
    $alamat = $_POST['alamat'];
    $lokasi = $_POST['lokasi'];
    $j_fasilitas = $_POST['j_fasilitas'];
    $j_prestasi = $_POST['j_prestasi'];
    $j_ekstra = $_POST['j_ekstra'];
    $link = $_POST['link'];


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
    elseif ($lokasi >= 1.0) {
        $c4 = 5;
    }


    // Operasi if else data c5 = fasilitas
    if ($j_fasilitas >= 30) {
        $c5 = 5;
    }
    elseif ($j_fasilitas >= 20) {
        $c5 = 4;
    }
    elseif ($j_fasilitas >= 15) {
        $c5 = 3;
    }
    elseif ($j_fasilitas >= 10) {
        $c5 = 2;
    }
    elseif ($j_fasilitas >= 4) {
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
    elseif ($j_ekstra >= 0) {
        $c7 = 1;
    }

    // Lakukan operasi atau simpan data ke database
    // Contoh: Simpan ke database dengan menggunakan MySQLi

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

// Query untuk menyimpan data ke database
$query = "INSERT INTO data_ponpes (id, ponpes, j_santri, s_pendidikan, biaya, alamat, lokasi, j_fasilitas, j_prestasi, j_ekstra, link, c1, c2, c3, c4, c5, c6, c7) VALUES ('$id', '$ponpes', '$j_santri', '$s_pendidikan', '$biaya', '$alamat', '$lokasi', '$j_fasilitas', '$j_prestasi', '$j_ekstra', '$link', '$c1', '$c2', '$c3', '$c4', '$c5', '$c6', '$c7')";

if (mysqli_query($koneksi, $query)) {
    echo '<script>alert("Data berhasil disimpan."); window.location.href = "admin-page.php";</script>';
} else {
    echo '<script>alert("Error: ' . mysqli_error($koneksi) . '");</script>';
}



    // Tutup koneksi
    mysqli_close($koneksi);
}
?>

