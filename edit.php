<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'connection.php'; ?>
</head>

<body>
    <div class="background_overlay"></div>
    <?php
    $nim = $_GET['nim'];
    $data = mysqli_query($conn, "select * from data_mhs where nim='$nim'");
    while ($row = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="func_edit.php">
            <div class="parent">
                <div class="container">
                    <h2 class="header_table" align="center">Edit Data</h2>
                    <div class="input_row">
                        <label class="text_label">Nim</label><br />
                        <input type="text" name="nim" value="<?php echo $row['nim']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_label">Nama</label><br />
                        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_label">Tanggal Lahir</label><br />
                        <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_label">Jenis Kelamin</label>
                        <Select type="text" name="gender">
                            <option value="<?php echo $row['jenis_kelamin']; ?>"><?php echo $row['jenis_kelamin']; ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </Select>
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_label">Alamat</label><br />
                        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_laber">Nomor Telepon</label>
                        <input type="number" name="no_telp" value="<?php echo $row['no_telp']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_label">Email</label><br />
                        <input type="email" name="email" value="<?php echo $row['email']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_laber">Asal Sekolah</label>
                        <input type="text" name="asl_sklh" value="<?php echo $row['asl_sklh']; ?>">
                        <hr>
                    </div>
                    <div class="input_row">
                        <label class="text_label">Program Studi</label><br />
                        <select type="text" name="prodi" value="">
                            <option value="<?php echo $row['prodi']; ?>"><?php echo $row['prodi']; ?></option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Taknik Sipil">Taknik Sipil</option>
                            <option value="Taknik Informatika">Taknik Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Design Kominikasi Visual">Design Kominikasi Visual</option>
                            <option value="Teknologi Game">Teknologi Game</option>
                            <option value="Aristektur">Aristektur</option>
                        </select>
                        <hr>
                    </div>
                    <div class="input_row_edit">
                        <input type="submit" value="Update">
                    </div>
                    <?php
                    error_reporting(0);
                    include 'variable.php' ?>
                </div>
            </div>
        </form>
    <?php } ?>
</body>

</html>