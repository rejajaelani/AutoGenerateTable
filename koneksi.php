<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_visualisasi";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// } else {
//     echo "Koneksi berhasil";
// }

// // Menutup koneksi
// $conn->close();
?>
