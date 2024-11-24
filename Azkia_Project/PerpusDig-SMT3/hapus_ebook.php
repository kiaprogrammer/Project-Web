<?php
require_once 'koneksi2.php';
$db = new Database();
$koneksi = $db->koneksi; // Inisialisasi koneksi dari objek Database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];

    // Query untuk menghapus data berdasarkan judul
    $query = $koneksi->prepare("DELETE FROM e_book WHERE judul = :judul");
    $query->bindParam(':judul', $judul);

    if ($query->execute()) {
        // Jika data berhasil dihapus, redirect ke halaman e-book dengan pesan sukses
        header("Location: Ebook.php?message=success");
    } else {
        // Jika data gagal dihapus, redirect ke halaman e-book dengan pesan error
        header("Location: Ebook.php?message=error");
    }
} else {
    // Jika akses bukan melalui metode POST, redirect ke halaman e-book
    header("Location: Ebook.php");
}
?>
