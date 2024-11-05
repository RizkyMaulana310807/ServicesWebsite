<?php
// Nama cookie yang ingin dihapus
$cookie_name = "username";

// Mengatur waktu kedaluwarsa menjadi waktu yang telah lewat
setcookie($cookie_name, "", time() - 3600, "/"); // Hapus cookie untuk seluruh domain

// Anda dapat menambahkan logika lain di sini jika perlu, misalnya menghapus sesi

// Mengembalikan respons
http_response_code(200); // Status OK
echo json_encode(["message" => "Logout successful"]);
?>