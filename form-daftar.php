<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Negeri 4 Tanjungpinang</title>
</head>

<body>
    <h3>Formulir Pendaftaran Siswa Baru</h3>
    <form action="proses-pendaftaran.php" method="POST">
        <table border="0" width="75%">
            <tr>
                <td width="20%"><label for="nama">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="20%"><label for="alamat">Alamat</label></td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td width="20%"><label for="jenis_kelamin">Jenis Kelamin: </label></td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan-laki"> Perempuan
                </td>
            </tr>
            <tr>
                <td width=20%><label for="agama">Agama</label></td>
                <td>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen Protestan</option>
                        <option>Kristen Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="20%"><label for="sekolah-asal">Sekolah Asal</label></td>
                <td><input type="text" name="sekolah_asal"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="daftar">Daftar</button></td>
            </tr>
        </table>
    </form>


</body>

</html>