<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../koneksi.php'; // Menghubungkan ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['logInUsername']);
    $password = htmlspecialchars($_POST['logInPass']);

    $sql = "SELECT username, password FROM user_account WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['username'] == $username && $row['password'] == $password) {
                // Mengatur cookie
                $cookie_name = "username";
                $cookie_value = $username;
                $cookie_lifetime = time() + (7 * 24 * 60 * 60); // 7 hari dalam detik

                // Mengatur cookie dengan path yang sesuai
                setcookie($cookie_name, $cookie_value, $cookie_lifetime, "/"); // "/" untuk seluruh domain

                // Memeriksa apakah cookie telah diset
                if (isset($_COOKIE[$cookie_name])) {
                    echo "Cookie '$cookie_name' telah diset dengan nilai: " . $_COOKIE[$cookie_name];
                } else {
                    echo "Cookie '$cookie_name' belum diset.";
                }
                echo "Benar";
            }
        }
    } else {
        echo "Salah";
    }
}

// Menutup koneksi
$conn->close();
