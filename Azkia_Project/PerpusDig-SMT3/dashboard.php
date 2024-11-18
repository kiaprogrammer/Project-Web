<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDig - Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1; /* Warna latar belakang */
        }

        .maincontainertop {
            width: 100%;
            height: 60px;
            background-color: #0F78CB;
            font-family: 'Poppins';
            color: #f1f1f1;
            position: fixed;       /* Agar tetap di atas */
            top: 0;
            left: 0;
            z-index: 1000;         /* Mengatasi tumpang tindih */
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .topcontainer {
            width: 100%;
            height: 70px;
            margin-top: 0px;      /* Supaya konten di bawah header */
            padding-left: 0%;
            background-color: #0F78CB;
            color: white;
        }

        .container {
            display: flex;
            min-height: 100vh;
            margin-top: 60px;      /* Supaya tidak tertutup header */
            margin-left: 20px;
        }

        .sidebar {
            margin-top: 20px;
            margin-left: 20px;
            width: 250px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .role {
            background-color: #A8CFFB;
            color: #0349AD;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
        }

        .menu li {
            margin-bottom: 15px;
        }

        .menu a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
        }

        .menu a.active, .menu a:hover {
            background-color: #A8CFFB;
            color: #333333;
            border-radius: 30px;
            padding: 10px 20px;
        }

        .main-content {
            flex-grow: 1;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .content {
            background-color: white;
            padding: 20px;
            width: 1030px;
            height: 785px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 20px;
        }
        .logo-container {
            position: relative;
            display: inline-block;
        }

        .logo-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90px; /* Ukuran lingkaran lebih besar dari logo */
            height: 90px;
            background-color: white; /* Warna lingkaran */
            border-radius: 50%;      /* Membuat lingkaran */
            z-index: -1;             /* Pastikan lingkaran berada di belakang logo */
        }

        .logo {
            width: 20px; /* Sesuaikan ukuran logo */
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <img src="assets/profil.png" alt="Profile" class="profile-pic">
                <!-- img nanti di ambil dari database juga -->
                <h3>Ini Bapak Budi</h3>
                <p class="role">Super Admin</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-book"></i> E-Book</a></li>
                    <li><a href="#"><i class="fas fa-book-open"></i> Buku</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Data Anggota</a></li>
                    <li><a href="#"><i class="fas fa-user-shield"></i> Data Admin</a></li>
                    <li><a href="#"><i class="fas fa-book-reader"></i> Pengajuan Peminjaman</a></li>
                    <li><a href="#"><i class="fas fa-history"></i> Riwayat Peminjaman</a></li>
                </ul>
            </nav>
        </div>
        <div class="maincontainertop">
            <header>
                <img src="assets/logo perpusdig.png" alt="logo" class="logo-pic">
                <h>PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h>
            </header>
        </div>
        <!-- Main content -->
        <div class="topcontainer">
            <header>
                <h1>Dashboard</h1>
            </header>
            <div class="content">
                <!-- Content will go here -->
            </div>
        </div>
    </div>
</body>
</html>
