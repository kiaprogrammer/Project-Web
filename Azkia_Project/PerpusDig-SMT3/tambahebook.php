<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDig</title>
    <style>
        body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f0f0f0;
            }

            header {
                background-color: #1976d2;
                color: white;
                padding: 10px 20px;
                display: flex;
                align-items: center;
            }

            header .logo img {
                height: 40px;
                margin-right: 10px;
            }

            header h1 {
                font-size: 18px;
            }

            .container {
                display: flex;
            }

            aside {
                width: 200px;
                background-color: #fff;
                border-right: 1px solid #ddd;
                padding: 20px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }

            aside .profile {
                text-align: center;
                margin-bottom: 20px;
            }

            aside .profile img {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                display: block;
                margin: 0 auto;
            }

            aside .profile p {
                margin: 10px 0 5px;
                font-weight: bold;
            }

            aside .profile span {
                display: inline-block;
                background-color: #e0e0e0;
                padding: 2px 6px;
                border-radius: 12px;
                font-size: 12px;
            }

            aside nav ul {
                list-style: none;
                padding: 0;
            }

            aside nav ul li {
                margin: 10px 0;
            }

            aside nav ul li a {
                color: #333;
                text-decoration: none;
                display: block;
                padding: 8px 12px;
                border-radius: 4px;
            }

            aside nav ul li a.active,
            aside nav ul li a:hover {
                background-color: #1976d2;
                color: white;
            }

            main {
                flex-grow: 1;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                margin: 20px;
            }

            .breadcrumb {
                margin-bottom: 10px;
            }

            .breadcrumb a {
                color: #1976d2;
                text-decoration: none;
            }

            .breadcrumb span {
                color: #777;
            }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/logo perpusdig.png" alt="Logo">
            <h1>PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
        </div>
    </header>
    <div class="container">
        <aside>
            <div class="profile">
                <img src="assets/profil.png alt="Profil">
                <p>Ini Bapak Budi</p>
                <span>Super Admin</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="#">E - Book</a></li>
                    <li><a href="#">Buku</a></li>
                    <li><a href="#">Data Anggota</a></li>
                    <li><a href="#">Data Admin</a></li>
                    <li><a href="#">Pengajuan Peminjaman</a></li>
                    <li><a href="#">Riwayat Peminjaman</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <div class="breadcrumb">
                <a href="#">Beranda</a> / <a href="#">Data E - Book</a> / <span>Tambah Data</span>
            </div>
            <h2>Tambah Data</h2>
            <!-- Content for Tambah Data goes here -->
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var navLinks = document.querySelectorAll('aside nav ul li a');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                navLinks.forEach(function (link) {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    });
    </script>
</body>
</html>
