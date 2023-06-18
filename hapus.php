<?php

include("config.php");

if( isset($_GET['id']) ){

    // Mengambil id dari query string
    $id = $_GET['id'];

    // Membuat query hapus
    $sql = "DELETE FROM calon_siswaa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus berhasil?
    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>