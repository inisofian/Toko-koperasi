<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Negeri 4 Tanjungpinang</title>
</head>

<body>
    <h2>Siswa yang sudah mendaftar</h2>
    <a href="form-daftar.php">Tambah Baru</a>
    <!-- Script php untuk membuat  notifikasi penambahan data berhasil atau gagal -->
<div>
    <?php if (isset($_GET['status'])) : ?>
        <?php if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran siswa baru berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }

        ?>
    <?php endif; ?>
</div>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th align="center">Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;
            $sql = "SELECT * FROM calon_siswaa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_assoc($query)) {
            ?>

                <td><?php echo $no++ ?></td>
                <td><?php echo $siswa['nama'] ?></td>
                <td><?php echo $siswa['alamat'] ?></td>
                <td><?php echo $siswa['jenis_kelamin'] ?></td>
                <td><?php echo $siswa['agama'] ?></td>
                <td><?php echo $siswa['sekolah_asal'] ?></td>

                <td align="center">
                    <a href="form-edit.php?id=<?php echo $siswa['id'] ?>">Edit</a>
                    <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus.php?id=<?php echo $siswa['id'] ?>">Hapus</a>
                </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>