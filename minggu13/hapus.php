<?php
session_start();
include 'konek.php'; // File koneksi ke database

// Periksa apakah ID tersedia dalam permintaan POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM anggota WHERE id = ?";
    $params = [$id];

    // Eksekusi query dengan parameter
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt) {
        // Jika berhasil, kirimkan respons JSON sukses
        echo json_encode(['success' => 'Sukses']);
    } else {
        // Jika gagal, kirimkan respons JSON dengan pesan error
        echo json_encode(['error' => 'Gagal menghapus data', 'details' => sqlsrv_errors()]);
    }
} else {
    // Jika ID tidak ada, kirimkan respons JSON dengan pesan error
    echo json_encode(['error' => 'ID tidak valid']);
}

// Tutup koneksi database
sqlsrv_close($conn);
?>
