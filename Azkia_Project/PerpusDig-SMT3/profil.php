<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PerpusDig - Profil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }
        .header img {
            height: 40px;
            margin-right: 10px;
        }
        .header h1 {
            font-size: 20px;
            margin: 0;
        }
        .container {
            display: flex;
            flex: 1;
            background-color: white;
        }
        .sidebar {
            width: 250px;
            background-color: white;
            padding: 20px;
            color: black;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #ccc;
        }
        .sidebar .profile {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #ccc;
            display: block;
            margin: 0 auto;
        }
        .sidebar .profile h2 {
            font-size: 18px;
            margin: 10px 0 5px;
        }
        .sidebar .profile .role {
            background-color: #A8CFFB;
            color: black;
            padding: 5px 10px;
            border-radius: 20px;
            display: inline-block;
        }
        .sidebar .menu {
            list-style: none;
            padding: 0;
            flex-grow: 1;
        }
        .sidebar .menu li {
            margin: 10px 0;
        }
        .sidebar .menu li a {
            color: black;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 20px;
            transition: background-color 0.3s;
        }
        .sidebar .menu li a:hover {
            background-color: rgba(168, 207, 251, 0.6);
        }
        .sidebar .menu li a i {
            margin-right: 10px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: white;
            overflow-y: auto;
        }
        .content .profile-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 0px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 0px;
        }
        .content .breadcrumb {
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 0px;
            margin-top: 0px;
        }
        .content .breadcrumb a {
            color: white;
            text-decoration: none;
        }
        .content .profile-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            color: black;
            display: flex;
            flex-direction: column;
            height: calc(100% - 60px);
        }
        .content .profile-card .profile-pic {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .content .profile-card .profile-pic img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            display: block;
            margin: 0 auto;
        }
        .content .profile-card .profile-pic .camera-icon {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #28a745;
            color: white;
            border-radius: 50%;
            padding: 5px;
            transform: translate(50%, 50%);
        }
        .content .profile-card .form-group {
            margin-bottom: 30px;
            position: relative;
        }
        .content .profile-card .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .content .profile-card .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .content .profile-card .form-group .edit-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #007bff;
            cursor: pointer;
        }
        .content .profile-card .form-row {
            display: flex;
            justify-content: space-between;
        }
        .content .profile-card .form-row .form-group {
            flex-basis: 48%;
        }
        .content .profile-card .delete-account {
            color: red;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .content .profile-card .delete-account i {
            margin-right: 10px;
        }
        .content .profile-card .delete-account input {
            flex-basis: 75%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 10px;
            width: calc(100% - 40px);
        }
        .content .profile-card .delete-account .fa-trash-alt {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: red;
            cursor: pointer;
        }
        .content .profile-card .buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: auto;
        }
        .content .profile-card .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            margin-left: 10px;
            cursor: pointer;
        }
        .content .profile-card .buttons .cancel {
            background-color: #6c757d;
            color: white;
        }
        .content .profile-card .buttons .save {
            background-color: #0F78CB;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="assets/logo perpusdig.png" alt="Logo" width="40" height="40"/>
        <h1>PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="assets/profil.png" alt="Profile Picture" width="80" height="80"/>
                <h2>Ini Bapak Budi</h2>
                <div class="role">Super Admin</div>
            </div>
            <ul class="menu">
                <li><a href="dashboard_super.php"><i class="fas fa-home"></i> Beranda</a></li>
                <li><a href="Ebook.php"><i class="fas fa-book"></i> E - Book</a></li>
                <li><a href="Buku.php"><i class="fas fa-book-open"></i> Buku</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Data Anggota</a></li>
                <li><a href="data_admin.php"><i class="fas fa-user-shield"></i> Data Admin</a></li>
                <li><a href="#"><i class="fas fa-file-alt"></i> Pengajuan Peminjaman</a></li>
                <li><a href="#"><i class="fas fa-history"></i> Riwayat Peminjaman</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="profile-header">Profil</div>
            <div class="breadcrumb">
                <a href="dashboard_super.php">Beranda</a> / Profil
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="assets/profil.png" alt="Profile Picture" width="100" height="100"/>
                    <div class="camera-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" value="19750101 200003 1 003" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" value="Ini Bapak Budi" readonly/>
                        <i class="fas fa-edit edit-icon"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" value="admin123" readonly/>
                        <i class="fas fa-edit edit-icon"></i>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="admin@perpusdig.com" readonly/>
                        <i class="fas fa-edit edit-icon"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">No. Telp</label>
                        <input type="text" id="phone" value="085123456789" readonly/>
                        <i class="fas fa-edit edit-icon"></i>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" id="address" value="Jl. Perpus Dig No. 1" readonly/>
                        <i class="fas fa-edit edit-icon"></i>
                    </div>
                </div>
                <div class="form-group delete-account">
                    <label for="delete-account">Hapus Akun</label>
                    <input type="text" id="delete-account" value="Ketik 'HAPUS' untuk menghapus akun" readonly/>
                    <i class="fas fa-trash-alt"></i>
                </div>
                <div class="buttons">
                    <button class="cancel">Batal</button>
                    <button class="save">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
