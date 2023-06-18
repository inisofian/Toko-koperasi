<?php

include("config.php");

// Jika tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//Mengambil id dari query string
$id = $_GET['id'];

// Membuat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Negeri 4 Tanjungpinang</title>
</head>

<body>

    <h3>Formulir Edit Siswa</h3>
    <form action="proses-edit.php" method="POST">
        <table border="0" width="75%">

            <tr>
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                <td><label for="nama">Nama : </label></td>
                <td><input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" /></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td width="20%"><label for="jenis_kelamin">Jenis Kelamin: </label></td>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <td><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td width="20%"> <label for="agama">Agama: </label></td>
                <?php $agama = $siswa['agama']; ?>
                <td><select name="agama">
                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td width="20%"><label for="sekolah_asal">Sekolah Asal: </label></td>
                <td><input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>