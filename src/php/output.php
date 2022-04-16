<!-- Apabila user belum mengisikan form registrasi, maka user akan dikembalikan ke halaman tambah.php -->
<?php
 if ( !isset($_POST["nama"]) ||
     !isset($_POST["nis"]) ||
     !isset($_POST["alamat"]) ||
     !isset($_POST["jenisKelamin"]) ||
     !isset($_POST["agama"])) {

    //  redirect
    header('Location: tambah.php');
    exit;
 } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <title>Data Siswa</title>
</head>
<body>
    <?php
     $nama = $_POST['nama'];
     $nis = $_POST['nis'];
     $alamat = $_POST['alamat'];
     $jenis_kelamin = $_POST['jenisKelamin'];
     $agama = $_POST['agama'];
    ?>

    <div class="container">

        <h1>Data Siswa</h1>

        <table cellpadding="10">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><?= $nis; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jenis_kelamin; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?= $agama; ?></td>
            </tr>
        </table>
    </div>

</body>
</html>
