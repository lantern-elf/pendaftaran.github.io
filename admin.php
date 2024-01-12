<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include 'connection.php';
    ?>
</head>

<body>
    <div class="background_overlay"></div>
    <div class="parent">
        <div class="container table_container">
            <div>
                <center>
                    <h1 class="header_table">Daftar Mahasiswa Baru</h1>
                </center>
            </div>
            <div class="table_border">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Asal Sekolah</th>
                        <th>Program Studi</th>
                        <th colspan="3">Action</th>
                    </tr>
                    <?php
                    $data_name = mysqli_query($conn, "Select * from data_mhs");
                    $no = 1;
                    foreach ($data_name as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['tgl_lahir']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['no_telp']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['asl_sklh']; ?></td>
                            <td><?php echo $row['prodi']; ?></td>
                            <td><a href="view_admin.php?nim=<?php echo $row['nim']; ?>">View</td>
                            <td><a href="delete.php?nim=<?php echo $row['nim']; ?>">Delete</td>
                            <td><a href="edit.php?nim=<?php echo $row['nim']; ?>">Edit</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <a class="admin_link edit_admin" href="print.php">Print Data</a><br />
        </div>
    </div>
</body>

</html>