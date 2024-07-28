<?php

$servername = "localhost"; // ganti dengan MySQL Host yang benar dari hPanel
$username = "u126967367_login"; // username MySQL dari hPanel
$password = "Aldingans123456"; // password MySQL yang benar
$dbname = "u126967367_login"; // nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    echo "Connection Failed";
}
?>

<!-- die("Connection failed: " . mysqli_connect_error()); -->