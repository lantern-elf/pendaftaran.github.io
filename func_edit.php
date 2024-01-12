<?php
include 'connection.php';
include 'variable.php';


mysqli_query($conn, "update data_mhs set nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$gender', alamat='$alamat', no_telp='$no_telp', email='$email', asl_sklh='$asl_sklh', prodi='$prodi' where nim='$nim'");

header("location:admin.php");
