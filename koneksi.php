<?php
$host = 'localhost'; // Server database
$user = 'root'; // Username database
$password = ''; // Password database
$database = 'dbbukutamu'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>