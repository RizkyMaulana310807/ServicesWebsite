<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['namaValue'];
    $username = $_POST['usernameValue'];
    $password = $_POST['passwordValue'];

    // Pastikan untuk menyiapkan dan menghindari serangan SQL Injection
    $stmt = $conn->prepare("INSERT INTO user_account (nama, username, password, date_created, last_online) VALUES (?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("sss", $nama, $username, $password);

    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan.<br>";
        $_SESSION['status'] = 'LogIn';
    } else {
        echo "Error: " . $stmt->error;
    }

    }
$stmt->close();
header("Location: ../login.php");


ob_end_flush();
?>
