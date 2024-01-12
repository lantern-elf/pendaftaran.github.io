<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include 'connection.php';
    ?>
</head>

<body>
    <div class="background_overlay"></div>
    <form method="post" action="">
        <div class="parent">
            <div class="container">
                <div class="input_row">
                    <center>
                        <h1 style="position: relative; top: 25px">Pendaftaran Mahasiswa</h1>
                    </center>
                </div>
                <div class="input_row">
                    <label class="text_label">Nama</label><br />
                    <input type="text" name="nama">
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_label">Tanggal Lahir</label><br />
                    <input type="date" name="tgl_lahir">
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_label">Jenis Kelamin</label>
                    <Select type="text" name="gender">
                        <option></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </Select>
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_label">Alamat</label><br />
                    <input type="text" name="alamat">
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_laber">Nomor Telepon</label>
                    <input type="number" name="no_telp">
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_label">Email</label><br />
                    <input type="email" name="email">
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_laber">Asal Sekolah</label>
                    <input type="text" name="asl_sklh">
                    <hr>
                </div>
                <div class="input_row">
                    <label class="text_label">Program Studi</label><br />
                    <select type="text" name="prodi">
                        <option></option>
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
                <div class="input_row_submit">
                    <input type="submit">
                    <a class="admin_link" href="admin.php">login sebagai admin</a>
                </div>
                <div class="php_row">
                    <?php
                    error_reporting(0);
                    include 'variable.php';
                    if (!$nama || !$tgl_lahir || !$alamat || !$no_telp || !$email || !$asl_sklh || !$prodi) {
                        echo '<div style="color:#bd4444;">Lengkapi Data !</div>';
                    } else {
                        $sql = $conn->query("INSERT INTO data_mhs values('','$nama','$tgl_lahir','$gender','$alamat','$no_telp','$email','$asl_sklh','$prodi')") or die('<div style="color:#bd4444;">gagal<div');
                        if ($sql) {
                            // echo "Data terinput";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>
</body>

</html>