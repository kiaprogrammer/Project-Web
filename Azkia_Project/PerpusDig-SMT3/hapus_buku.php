<?php
require_once 'koneksi2.php';
$db = new Database();
$koneksi = $db->koneksi; // Inisialisasi koneksi dari objek Database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan judul buku dari permintaan POST
    $judul_buku = $_POST['judul'];

    // Menyiapkan query untuk menghapus buku berdasarkan judul
    $query = $koneksi->prepare("DELETE FROM buku WHERE judul_buku = :judul_buku");
    $query->bindParam(':judul_buku', $judul_buku);

    // Eksekusi query
    if ($query->execute()) {
        // Redirect ke halaman buku dengan pesan sukses
        header("Location: buku.php?message=success");
        exit();
    } else {
        // Redirect ke halaman buku dengan pesan error
        header("Location: buku.php?message=error");
        exit();
    }
} else {
    // Jika metode bukan POST, redirect ke halaman buku
    header("Location: buku.php");
    exit();
}
?>
