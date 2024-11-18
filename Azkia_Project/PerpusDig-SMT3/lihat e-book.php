<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDig - Lihat E Book</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
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
    }

    .sidebar ul li a {
        color: inherit;
        text-decoration: none;
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
        border-radius: 10px;
    }

    .maincontainer img {
        margin-left: 50px;
        margin-top: 15px;
    }

    .maincontainer h2 {
        font-size: 2em;
        color: #0349AD;
    }

    .info {
        margin: 20px 0;
        font-family: "Montserrat", sans-serif;
    }

    .info-item {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }

    .availability {
        margin-top: 20px;
        font-size: 1.3em;
        color: #007bff;
    }

    .badge {
        background-color: #007bff;
        color: white;
        padding: 5px 10px;
        border-radius: 50%;
        font-size: 14px;
    }

    .read-more {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="header">
        <img alt="Library logo" src="assets/logo perpusdig.png" />
        <h1>PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <img alt="User profile picture" src="assets/profil.png" />
            <h3>Ini Bapak Budi</h3>
            <p>Super Admin</p>
            <ul>
                <li><a href="dashboard_super.php"><i class="fas fa-home"></i>Beranda</a></li>
                <li><a href="Ebook.php"><i class="fas fa-book"></i>E - Book</a></li>
                <li><a href="Buku.php"><i class="fas fa-book-open"></i>Buku</a></li>
                <li><a href="data_anggota.php"><i class="fas fa-users"></i>Data Anggota</a></li>
                <li><a href="profil.php"><i class="fas fa-user-shield"></i>Data Admin</a></li>
                <li><i class="fas fa-file-alt"></i>Pengajuan Peminjaman</li>
                <li><i class="fas fa-history"></i>Riwayat Peminjaman</li>
            </ul>
        </div>
        <div class="content">
            <h2>Data E - Book</h2>
            <div class="breadcrumb">
                <a href="dashboard_super.php">Beranda</a> / Data E - Book / Detail E - Book
            </div>
            <div class="maincontainer">
                <img alt="Cover Laut Bercerita" height="300" src="asset/cover laut.jpg" width="200" />
                <h2>Laut Bercerita</h2>
                <button class="badge">Fiksi</button>
                <div class="info">
                    <div class="info-item"><span>Penulis</span><span>: Leila S. Cudhori</span></div>
                    <div class="info-item"><span>Penerbit</span><span>: Perpustakaan Populer Gramedia</span></div>
                    <div class="info-item"><span>Tahun Terbit</span><span>: 2017</span></div>
                </div>
                <div class="availability">
                    <i class="fas fa-book"></i>
                    <span><strong>2 / 5 </strong></span>
                </div>
                <div class="availability2">
                    <span>Jumlah Buku</span>
                </div>
                <div class="description">
                    <h3>Deskripsi E - Buku</h3>
                    <p>Jakarta, Maret 1998, Biru Laut, seorang mahasiswa, disergap oleh empat pria tak dikenal...</p>
                </div>
                <a class="read-more" href="#">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</body>

</html>
