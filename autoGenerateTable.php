<?php 

include './koneksi.php';

// Membuat objek dengan lebih dari satu array di dalamnya
$obj = array(
    'TableTest1' => array(
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'nama' => 'VARCHAR(50)'
    ),
    'TableTest2' => array(
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'nama' => 'VARCHAR(50)',
        'alamat' => 'VARCHAR(50)'
    )
);

// Mengakses dan menampilkan semua array dalam objek
foreach ($obj as $key => $array) {
    // Memformat definisi kolom ke dalam bentuk string
    $columns = implode(', ', array_map(function ($columnName, $columnType) {
        return "$columnName $columnType";
    }, array_keys($array), $array));

    // Perintah SQL untuk membuat tabel
    $sql = "CREATE TABLE IF NOT EXISTS $key ($columns)";

    // Menjalankan perintah SQL
    if ($conn->query($sql) === TRUE) {
        echo "Tabel $key berhasil dibuat";
    } else {
        echo "Error: " . $conn->error;
    }
}
