<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Verify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
       /* Body Styling */
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: #f5f5f5; */
            margin: 0;
            padding: 0;
        }

        /* Logo PerpusDig Styling */
        .logo-container {
            display: flex;
            position: absolute;
            margin-top: 10px; /* Sesuaikan dengan tata letak Anda */
            margin-left: 10px;  /* Sesuaikan dengan tata letak Anda */
            left: 20px; /* Sesuaikan jarak sesuai kebutuhan Anda */
        }
        
        .logo-container img {
            width: 80px;
        }

        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-size: 2em;
            font-weight: 900;
            margin-left: 10px;
        }

        .perpus-text {
            color: #0349AD;
            font-weight: 600;
        }

        .dig-text {
            color: #FF904D;
            font-weight: 600;
        }

        /* Wrapper for Containers */
        .container-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            width: 100%;
            margin-top: 40px;
        }

        /* White Container Styling
        .container {
            width: 100%;
            max-width: 500px;
            padding: 0 15px;
            margin-top: 20px;
        } */

        /* Login Box */
        .login-box {
            height: 65vh;
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            z-index: 1;
            transform: translateX(200px);
            margin-top: 100px;
        }

        /* Login Heading */
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 2.3em;
            font-weight: 600;
            display: flex;
            justify-content: center;
            gap: 5px; /* Memberi jarak antara "Verifikasi" dan "Kode" */
            color: #313131;
        }

        /* Jika ingin teks terpisah dalam 2 span */
        .login-box h2 span {
            display: inline-block;
        }

        /* Back Button */
        .back-button {
            display: flex;
            align-items: center;
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 1.1em;
            color: #313131;
            cursor: pointer;
        }

        /* Welcome Message */
        .welcome-message {
            margin-top: -10px;
            font-size: 1em;
            color: #555;
        }

        /* CSS untuk Input Kode Verifikasi */
        .code-input-wrapper {
            display: flex;
            gap: 10px;
            margin-top: 120px;  /* Memberikan jarak lebih banyak antara pesan dan input kode */
            margin-bottom: 20px;
            justify-content: center;
        }
        .code-input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            border: 2px solid #007bff;
            border-radius: 5px;
            color: #313131;
            outline: none;
        }

        /* Resend Message */
        .resend-message {
            font-size: 0.9em;
            color: #555;
            text-align: center;
            margin-top: 10px; /* Memberikan jarak jika perlu */
        }
        .resend-link {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }
        .resend-link:hover {
            text-decoration: underline;
        }

        /* Kodingan Untuk Button */
        .btn {
            width: 100%;
            padding: 10px;
            margin-top:20px;
            background-color: #007bff;
            color: white;
            overflow: hidden;
            transition: 0.38s;
            border: none;
            border-radius: 8px;
            font-size: 21px;
            font-weight: 549;
            cursor: pointer;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            -webkit-transition: 0.38s;
            -moz-transition: 0.38s;
            -ms-transition: 0.38s;
            -o-transition: 0.38s;
        }
        .btn:hover {
            background-color: #0056b3;
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
            margin-left: 400px;
            text-align: center;
            height: 650px;
            font-family: 'Poppins', sans-serif;
        }

        /* Kodingan untuk Image di dalam Container Biru */
        .info-container img {
            display: block;
            margin: 130px auto 0;
            width: 650px;
            margin-top: 0px;
            margin-left: -50px;
            transform: translateX(-20px) translateY(-20px);
        }
    </style>
</head>
<body>
    <div class="logo-container">
    <img src="assets/logo perpusdig.png" alt="logo perpusdig" width="90px">
    <span class="perpus-text">Perpus</span><span class="dig-text">Dig</span>
    </div>
    <div class="container-wrapper">
        <!-- Container untuk Form Verifikasi Kode -->
        <div class="container">
            <div class="login-box">
                <!-- Tombol Kembali -->
                <div class="back-button">
                    <span class="back-icon">&lt;</span>
                    <span>Kembali</span>
                </div>
                <h2><span>Verifikasi</span> <span>Kode</span></h2>
                <!-- Pesan Verifikasi -->
                <p class="welcome-message">Kode otentikasi telah dikirim ke email Anda</p>
                
                <form>
                    <div class="code-input-wrapper">
                        <input type="text" maxlength="1" class="code-input">
                        <input type="text" maxlength="1" class="code-input">
                        <input type="text" maxlength="1" class="code-input">
                        <input type="text" maxlength="1" class="code-input">
                    </div>
                    <p class="resend-message">Tidak menerima kode? <a href="#" class="resend-link">Kirim ulang</a></p>
                    <button type="button" class="btn" onclick="window.location.href='aturulangsandi.php';">Verifikasi</button>
            </div>
        </div>

        <!-- Container Baru untuk Informasi -->
        <div class="info-container">
            <img src="assets/icon login.png" alt="ikon people login" width="580px">
        </div>
    </div>
</body>
</html>
