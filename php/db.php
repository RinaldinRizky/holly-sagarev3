<?php
$host = 'localhost'; // Biasanya 'localhost' untuk server shared hosting
$username = 'u126967367_userforms'; // Ganti dengan nama pengguna database Anda
$password = 'Aldingans123'; // Ganti dengan password database Anda
$database = 'u126967367_userforms'; // Ganti dengan nama database Anda

// Membuat koneksi menggunakan MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
