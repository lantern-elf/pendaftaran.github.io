<?php
include 'connection.php';
$nim = $_GET['nim'];
$sql = mysqli_query($conn, "DELETE from data_mhs WHERE nim='$nim'") or die('error');

echo $sql;
if ($sql) {
    echo "<script> alert ('Delete this file?'); window.location='admin.php';</script>";
    mysqli_query($conn, "ALTER TABLE data_mhs AUTO_INCREMENT=1");
} else {
    echo "<script> alert ('Failed to delete this file')</script>";
}
