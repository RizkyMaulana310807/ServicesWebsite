<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$password = "rizkymaulana31";
$dbname = "ServicesWebsite";  // ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // echo "Berhasil tersambung ke database $dbname<br>";
}

// Set karakter koneksi untuk menghindari masalah dengan encoding
$conn->set_charset("utf8mb4");

ob_end_flush();
?>
