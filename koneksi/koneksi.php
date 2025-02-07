<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_surat";

$db = mysqli_connect("localhost", "root", "", "db_surat");
// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>
