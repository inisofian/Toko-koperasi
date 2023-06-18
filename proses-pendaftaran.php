<?php

include("config.php");

// Memeriksa tombol daftar sudah diklik atau blum
if(isset($_POST['daftar'])){
    // mengambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // membuat query
    $sql = "INSERT INTO calon_siswaa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // Apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list.php dengan status=sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman list.php dengan status=gagal
        header('Location: list-siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>