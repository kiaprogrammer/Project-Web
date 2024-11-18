<!DOCTYPE html>
<html>
<head>
    <title>PerpusDig - Data Admin </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #0F78CB;
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
            color: #0F78CB;
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
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
        }
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .content h2 {
            background-color: #0F78CB;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }
        .stats .stat {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            border-radius: 5px;
            color: white;
            text-align: center;
        }
        .stats .stat.red {
            background-color: #e74c3c;
        }
        .stats .stat.orange {
            background-color: #f39c12;
        }
        .stats .stat.yellow {
            background-color: #f1c40f;
        }
        .stats .stat.blue {
            background-color: #3498db;
        }
        .main-content {
            display: flex;
            justify-content: space-between;
            flex-grow: 1;
        }
        .main-content .loans {
            flex: 2;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
        }
        .main-content .categories {
            flex: 1;
        }
        .loans, .categories {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .loans ul {
            list-style: none;
            padding: 0;
        }
        .loans ul li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .loans ul li:last-child {
            border-bottom: none;
        }
        .categories img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img alt="Library logo" src="assets/logo perpusdig.png"/>
        <h1>&#124; PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <img alt="User profile picture" src="assets/profil.png"/>
            <h3>Ini Bapak Budi</h3>
            <p>Super Admin</p>
            <ul>
            <li>
                <li><a href="dashboard_super.php"><i class="fas fa-home"></i>Beranda</a></li>
                <li><a href="Ebook.php"><i class="fas fa-book"></i>E - Book</a></li>
                <li><a href="Buku.php"><i class="fas fa-book-open"></i>Buku</a></li>
                <li><a href="data_anggota.php"><i class="fas fa-users"></i>Data Anggota</a></li>
                <li><a href="data_admin.php"><i class="fas fa-user-shield"></i>Data Admin</a></li>
                <li><i class="fas fa-file-alt"></i>Pengajuan Peminjaman</li>
                <li><i class="fas fa-history"></i>Riwayat Peminjaman</li>
            </ul>
        </div>
        <div class="content">
            <h2>Data Admin</h2>
        </div>
    </div>
</body>
</html>