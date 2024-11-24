<?php
// Koneksi ke database
require_once 'koneksi2.php';

// Inisialisasi koneksi dari objek Database
$db = new Database();
$koneksi = $db->koneksi;

// Pastikan variabel $host, $username, $password, dan $database_name didefinisikan di file koneksi2.php
$host = 'localhost'; // Sesuaikan dengan konfigurasi database Anda
$username = 'root'; // Sesuaikan dengan konfigurasi database Anda
$password = ''; // Sesuaikan dengan konfigurasi database Anda
$database_name = 'perpusdig'; // Sesuaikan dengan nama database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $database_name :" . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Periksa dan ambil data dari form
    $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
    $penulis = isset($_POST['penulis']) ? $_POST['penulis'] : '';
    $penerbit = isset($_POST['penerbit']) ? $_POST['penerbit'] : '';
    $tahun = isset($_POST['tahun_terbit']) ? $_POST['tahun_terbit'] : '';
    $sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : '';
    $kategori = isset($_POST['kategori']) ? $_POST['kategori'] : '';

    // Proses unggah file cover
    $cover_file = $_FILES['cover-file']['name'];
    $cover_tmp = $_FILES['cover-file']['tmp_name'];
    $cover_dir = 'uploads/covers/' . basename($cover_file);

    // Proses unggah file e-book
    $ebook_file = $_FILES['file-upload']['name'];
    $ebook_tmp = $_FILES['file-upload']['tmp_name'];
    $ebook_dir = 'uploads/ebooks/' . basename($ebook_file);

    // Periksa dan buat direktori jika belum ada
    if (!is_dir('uploads/ebooks')) {
        mkdir('uploads/ebooks', 0777, true);
    }
    if (!is_dir('uploads/covers')) {
        mkdir('uploads/covers', 0777, true);
    }

    // Pindahkan file ke direktori yang diinginkan
    if (move_uploaded_file($ebook_tmp, $ebook_dir) && move_uploaded_file($cover_tmp, $cover_dir)) {
        // Simpan data ke database
        $sql = "INSERT INTO e_book (judul, penulis, penerbit, tahun_terbit, sinopsis, kategori, sampul, pdf) VALUES (:judul, :penulis, :penerbit, :tahun, :sinopsis, :kategori, :sampul, :pdf)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':penulis', $penulis);
        $stmt->bindParam(':penerbit', $penerbit);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':sinopsis', $sinopsis);
        $stmt->bindParam(':kategori', $kategori);
        $stmt->bindParam(':sampul', $cover_file);
        $stmt->bindParam(':pdf', $ebook_file);

        if ($stmt->execute()) {
            echo "Data e-book berhasil disimpan!";
        } else {
            echo "Terjadi kesalahan saat menyimpan data.";
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}
?>
