<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tambah.css">
    <title>Registrasi Data Siswa</title>
</head>
<body>
    <div class="container">

        <h1>Registrasi Data Siswa</h1>

        <form action="output.php" method="post">
            <table cellpadding="11">
                <tr class="nama">
                    <td>
                        <label for="nama">Nama</label>
                    </td>
                    <td>
                        <label for="nama" class="label-titik-dua"> : </label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" class="input-nama" required>
                    </td>
                </tr>
                <tr class="nis">
                    <td>
                        <label for="nis">NIS</label>
                    </td>
                    <td>
                        <label for="nis" class="label-titik-dua"> : </label>
                    </td>
                    <td>
                        <input type="text" name="nis" id="nis" minlength="10" maxlength="10" required>
                    </td>
                </tr>
                <tr class="alamat">
                    <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td>
                        <label for="alamat" class="label-titik-dua"> : </label>
                    </td>
                    <td>
                        <input name="alamat" id="alamat" type="text" required>
                    </td>
                </tr>
                <tr class="jenis-kelamin">
                    <td>
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                    </td>
                    <td>
                        <label for="jenis_kelamin" class="label-titik-dua"> : </label>
                    </td>
                    <td>
                        <input name="jenisKelamin" id="jenis_kelamin" type="text" required>
                    </td>
                </tr>
                <tr class="agama">
                    <td>
                        <label for="agama">Agama</label>
                    </td>
                    <td>
                        <label for="agama" class="label-titik-dua"> : </label>
                    </td>
                    <td>
                        <input name="agama" id="agama" type="text" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="tombol-simpan">
                        <button type="submit" name="submit" class="tombol-simpan">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
