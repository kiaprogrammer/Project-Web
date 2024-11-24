<?php
require_once 'koneksi2.php';
$db = new Database();
$koneksi = $db->koneksi; // Inisialisasi koneksi dari objek Database
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .header img {
            width: 40px;
            margin-right: 10px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .sidebar img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto;
        }

        .sidebar h3 {
            text-align: center;
            margin: 10px 0;
        }

        .sidebar p {
            text-align: center;
            background-color: #A8CFFB;
            border-radius: 15px;
            padding: 5px 10px;
            display: inline-block;
            margin: 0 auto;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            flex-grow: 1;
            margin-top: 20px;
        }

        .sidebar ul li {
            padding: 10px;
            margin: 15px 0;
            background-color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sidebar ul li:hover {
            background-color: rgba(168, 207, 251, 0.6);
            border-radius: 20px;
        }

        .sidebar ul li i {
            margin-right: 10px;
        }


        .sidebar ul li a {
            color: inherit;
            text-decoration: none;
        }

        .sidebar ul li a:focus,
        .sidebar ul li a:active {
            outline: none;
            box-shadow: none;
        }

        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .content h2 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 0px;
            margin-bottom: 0px;
        }

        .maincontainer {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        table {
            width: 100%;
            /* border-collapse: collapse; */
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            /* border: 1px solid #ddd; */
            text-align: left;
        }

        table thead tr {
            background-color: #f4f4f4;
        }

        .content .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .content .actions button {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .content .actions button:hover {
            background-color: #d8d8d8;
        }

        .content .actions input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }

        .action-btn {
            display: inline-flex;
            align-items: center; /* Ikon di dalam tombol rata tengah vertikal */
            background-color: transparent;
            justify-content: center;
            border: none;
            cursor: pointer;
            padding: 0 5px;
            /* Mengurangi padding horizontal antar ikon */
            margin: 0;
            /* Menghilangkan margin default */
            vertical-align: middle;
            /* Pastikan ikon sejajar horizontal */
            
        }
        

        td[style*="text-align: center;"] form {
            display: inline-block;
            /* Pastikan form diatur dalam satu baris */
        }

        /* .action-btn i {
            color: #e74c3c;
        } */

        .breadcrumb {
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin-top: 0px;
        }

        /* .sortable:hover {
            cursor: pointer;
            color: #007bff;
        } */

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 60px;
            margin-left: 290px;
        }

        .pagination button {
            background-color: transparent;
            border: 1px solid #ccc;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 5px;
            transition: background-color 0.3s;
        }

        .pagination button:hover {
            background-color: #e0e0e0;
        }

        .pagination button.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 10px;
        }

        .top-bar button {
            border: none;
            background-color: transparent;
            /* Membuat tombol tanpa latar belakang */
            padding: 0;
            cursor: pointer;
        }

        .top-bar button a {
            text-decoration: none;
            /* Menghilangkan garis bawah pada link */
            color: inherit;
            /* Menggunakan warna teks yang diwariskan dari elemen luar */
        }

        .top-bar button:focus,
        .top-bar button:active {
            outline: none;
            /* Menghilangkan garis biru saat tombol diklik atau difokuskan */
        }

        .breadcrumb a {
            text-decoration: none;
            /* Menghilangkan garis bawah pada link */
            color: inherit;
            /* Menggunakan warna teks yang diwariskan dari elemen induk */
        }

        .breadcrumb a:focus,
        .breadcrumb a:active,
        .breadcrumb a:visited {
            color: inherit;
            /* Menghilangkan perubahan warna setelah link diklik atau dikunjungi */
            outline: none;
            /* Menghilangkan garis biru saat link difokuskan */
        }
    </style>
</head>

<body>
    <div class="header">
        <img alt="Library logo" src="asset/logo perpusdig.png" />
        <h1>PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <img alt="User profile picture" src="asset/profil.png" />
            <h3>Ini Bapak Budi</h3>
            <p>Super Admin</p>
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-home"></i>Beranda</a></li>
                <li><i class="fas fa-book"></i> E - Book</li>
                <li><i class="fas fa-book-open"></i> Buku</li>
                <li><a href="data_anggota.php"><i class="fas fa-users"></i>Data Anggota</a></li>
                <li><a href="profil.php"><i class="fas fa-user-shield"></i> Data Admin</a></li>
                <li><i class="fas fa-file-alt"></i> Pengajuan Peminjaman</li>
                <li><i class="fas fa-history"></i> Riwayat Peminjaman</li>
            </ul>
        </div>
        <div class="content">
            <h2>Data E - Book</h2>
            <div class="breadcrumb">
                <a href="dashboard_super.php">Beranda</a> / Data E - Book
            </div>
            <div class="maincontainer">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = $koneksi->prepare("SELECT judul, penulis, tahun_terbit, kategori FROM e_book");
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($result as $row) { // Iterasi melalui hasil query
                            echo "<tr>
                <td>{$no}</td>
                <td>{$row['judul']}</td>
                <td>{$row['penulis']}</td>
                <td>{$row['tahun_terbit']}</td>
                <td>{$row['kategori']}</td>
                <td style='text-align: center;'>
                    <!-- Form untuk lihat data -->
                    <form method='POST' action='lihat e-book.php' style='display:inline;'>
                        <input type='hidden' name='judul' value='{$row['judul']}' />
                        <button type='submit' class='action-btn'>
                            <i class='fas fa-eye'></i>
                        </button>
                    </form>
                    <!-- Form untuk hapus data -->
                    <form method='POST' action='hapus_ebook.php' style='display:inline;'>
                        <input type='hidden' name='judul' value='{$row['judul']}' />
                        <button type='submit' class='action-btn' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>
                            <i class='fas fa-trash-alt'></i>
                        </button>
                    </form>
                    <!-- Form untuk edit data -->
                    <form method='POST' action='tambah e-book.php' style='display:inline;'>
                        <input type='hidden' name='judul' value='{$row['judul']}' />
                        <button type='submit' class='action-btn'>
                            <i class='fas fa-edit'></i>
                        </button>
                    </form>
                </td>
            </tr>";
                            $no++; // Increment nomor
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
<div class="pagination">
    <button class="active">1</button>
    <button>2</button>
    <button>3</button>
    <button>4</button>
    <button>&gt;</button>
    <select>
        <option>10</option>
        <option>20</option>
        <option>30</option>
    </select>
    <span>/Halaman</span>
</div>

</html>