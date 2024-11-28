<?php
session_start(); // Memulai sesi untuk menyimpan data pengguna

// Memasukkan file koneksi
include('koneksi2.php'); // Menyertakan koneksi database

// Proses login jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];           // Mengambil input email dari form
    $password = $_POST['password'];     // Mengambil input password dari form

    // Menghindari SQL Injection dengan prepared statement
    $stmt = $koneksi->prepare("SELECT * FROM admin WHERE email = :email AND password = :password");
    
    // Mengikat parameter untuk query
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    
    // Menjalankan query
    $stmt->execute();
    
    // Mengecek apakah ada data yang ditemukan
    if ($stmt->rowCount() > 0) {
        // Mengambil data pengguna
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Menyimpan data pengguna ke session
        $_SESSION['user_id'] = $user['id'];    // Menyimpan ID pengguna
        $_SESSION['user_email'] = $user['email']; // Menyimpan email pengguna

        // Mengarahkan ke halaman dashboard jika login berhasil
        header("Location: dashboard_super.php");
        exit();
    } else {
        // Menampilkan pesan error jika login gagal
        $error_message = "Email atau kata sandi salah.";
    }
}

// Menutup koneksi PDO
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Kodingan untuk Body dan Import Google font */
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
        }

        /* logo perpusdig */
        img {
            display: block;
            margin: 0 auto;
        }

        /* CSS untuk logo dan teks PerpusDig */
        .logo-container {
            display: flex;
            align-items: center;
            position: absolute;
            top: 30px;
            left: 30px;
        }

        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-size: 2em;
            font-weight: 900;
            margin-left: 10px;
            display: flex;
        }

        .perpus-text {
            color: #0349AD;
            font-weight: 600;
        }

        .dig-text {
            color: #FF904D;
            font-weight: 600;
        }

        /* Kodingan untuk Wrapper yang membungkus kedua container (putih dan biru) */
        .container-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            width: 100%;
            max-width: 1450px;
        }

        /* Kodingan untuk Container Putih */
        .container {
            width: 100%;
            max-width: 500px;
            padding: 0 15px;
            position: relative;
        }

        /* Kodingan untuk Box Login */
        .login-box {
            height: 65vh;
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            z-index: 1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Kodingan untuk Heading di dalam login box */
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 2.3em;
            font-weight: 600;
            color: #313131;
            text-align: center;
        }

        /* Tombol Kembali */
        .back-button {
            display: flex;
            align-items: center;
            position: absolute;
            top: 15px;
            left: 35px;
            font-size: 1.1em;
            color: #313131;
            cursor: pointer;
            padding: 2px 8px;
            border-radius: 8px;
            transition: transform 0.2s, color 0.2s, background-color 0.3s ease;
        }

        .back-icon {
            margin-right: 5px;
            font-size: 1.5em;
            font-weight: bold;
        }

        .back-button:hover {
            color: #0056b3;
            background-color: #e0f0ff;
        }

        .back-button:active {
            transform: scale(0.95);
            color: #003d80;
            background-color: #b8d9ff;
        }

        /* Pesan Selamat Datang */
        .welcome-message {
            margin-top: -10px;
            margin-bottom: 30px;
            font-size: 1em;
            color: #555;
            text-align: center;
        }

        /* Kodingan untuk Input User */
        .user-box {
            position: relative;
            margin-bottom: 30px;
        }

        .user-box input {
            width: 100%;
            padding: 10px;
            background: none;
            border: 1.6px solid #888888;
            border-radius: 8px;
            outline: none;
            color: #313131;
            font-size: 1.1em;
            transition: border-color 0.5s;
        }

        .user-box input::placeholder {
            color: #888;
            transition: opacity 0.5s ease;
        }

        .user-box label {
            position: absolute;
            top: -10px;
            left: 10px;
            background: white;
            padding: 0 5px;
            font-size: 0.9em;
            color: #313131;
            pointer-events: none;
            transition: 0.5s;
        }

        .user-box input:focus::placeholder {
            opacity: 0;
        }

        .user-box input:focus~label,
        .user-box input:not(:placeholder-shown)~label {
            font-family: 'Poppins', Arial, sans-serif;
            font-weight: 600;
            top: -25px;
            left: 0px;
            color: #000000;
            font-size: 0.99em;
        }

        .user-box input:focus {
            border-color: #373737;
        }

        /* Kodingan Untuk Button */
        .btn {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            transition: 0.38s;
            border: none;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Kodingan untuk Button "Lupa Kata Sandi" */
        .btn-lupakatasandi {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            font-size: 0.9em;
            color: #313131;
            transition: color 0.3s;
        }

        .btn-lupakatasandi:hover {
            color: red;
        }

        /* Kodingan untuk Container Biru */
        .info-container {
            position: relative;
            width: 100%;
            max-width: 500px;
            background-color: #EFEFEF;
            padding: 40px;
            border-radius: 10px;
            color: white;
            text-align: center;
            height: 650px;
            font-family: 'Poppins', sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Kodingan untuk Image di dalam Container Biru */
        .info-container img {
            display: block;
            margin: 130px auto 0;
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <img src="assets/logo perpusdig.png" alt="logo perpusdig" width="90px">
        <span class="logo-text">
            <span class="perpus-text">Perpus</span><span class="dig-text">Dig</span>
        </span>
    </div>

    <div class="container-wrapper">
        <!-- Container untuk Form Login -->
        <div class="container">
            <div class="login-box">
                <!-- Tombol Kembali -->
                <div class="back-button">
                    <a href="javascript:history.back()" class="back-link">
                        <span class="back-icon">&lt;</span>
                        <span>Kembali</span>
                    </a>
                </div>
                <h2>Masuk Akun</h2>
                <!-- Pesan Selamat Datang -->
                <p class="welcome-message">Selamat Datang! Masukkan email dan kata sandi untuk mengakses akun Anda</p>

                <!-- Form Login -->
                <form action="login.php" method="POST">
                    <div class="user-box">
                        <input type="email" name="email" id="email" placeholder="Masukkan email anda" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" id="password" placeholder="Masukkan kata sandi anda"
                            required>
                        <label for="password">Kata Sandi</label>
                    </div>
                    <button type="submit" class="btn">Masuk</button>
                    <a href="lupakatasandi.php" class="btn-lupakatasandi">Lupa Kata Sandi?</a>
                </form>
            </div>
        </div>

        <!-- Container Baru untuk Informasi -->
        <div class="info-container">
            <img src="assets/icon login.png" alt="ikon people login">
        </div>
    </div>
</body>

</html>
