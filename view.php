<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        tr,
        td,
        th {
            border-style: none;
        }
    </style>
</head>

<body>
    <div class="background_overlay"></div>
    <div class="parent">
        <div class="container">
            <?php
            include 'connection.php';
            $nim = $_GET['nim'];
            $data = Mysqli_query($conn, "select * from data_mhs where nim='$nim'");
            while ($row = mysqli_fetch_array($data)) {
            ?>
                <h2 class="header_table" align="center">Data Mahasiswa</h2>
                <div class="record">
                    <table>
                        <tr>
                            <td>Nim</td>
                            <td>: <?php echo $row['nim']; ?>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $row['nama']; ?>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: <?php echo $row['tgl_lahir']; ?>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?php echo $row['jenis_kelamin']; ?>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?php echo $row['alamat']; ?>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td>: <?php echo $row['no_telp']; ?>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <?php echo $row['email']; ?>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>: <?php echo $row['asl_sklh']; ?>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>: <?php echo $row['prodi']; ?>
                        </tr>
                        <tr>
                            <td>
                                <a class="admin_link edit_admin" href="edit.php?nim=<?php echo $row['nim']; ?>">Edit
                            </td>
                        </tr>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>