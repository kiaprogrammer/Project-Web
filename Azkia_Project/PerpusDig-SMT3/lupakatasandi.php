<?php
// index.php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "perpusdig");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];
    // Cek apakah email terdaftar
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Logika untuk mengirim email reset kata sandi
        echo json_encode(["status" => "success", "message" => "Link pemulihan kata sandi telah dikirim ke email Anda."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Email tidak ditemukan."]);
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Kata Sandi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* style.css */
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            margin: 0;
            background-color: #f7f8fc;
        }

        .container {
            display: flex;
            justify-content: space-between;
            width: 100%; /* Mengisi lebar penuh layar */
            height: 100%; /* Mengisi tinggi penuh layar */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            margin: 0; /* Menghapus margin */
        }

        .form-container, .image-container {
            flex: 1;
            padding: 2rem;
            height: 100%; /* Mengisi tinggi penuh */
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 5rem;
            margin-top: 1rem;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin-right: 0.5rem;
        }

        .perpus {
            font-family: 'Poppins';
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        .dig {
            font-family: 'Poppins';
            font-size: 24px;
            font-weight: bold;
            color: #ff6b00;
        }

        .header-container {
            display: flex;
            flex-direction: column;
            align-items: right;
            justify-content: right;
            margin-bottom: 1rem;
        }

        .header-container .back-link {
            text-decoration: none;
            color: #000;
            font-size: 14px;
            margin-top: 1rem;
        }

        .header-container h2 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
        }

        p {
            margin-bottom: 1rem;
            color: #666;
            text-align: center;
            padding-bottom: 10px;
        }

        .user-box {
            position: relative;
            margin-bottom: 1rem;
        }

        .user-box input[type="email"] {
            padding: 1rem 0.8rem 1rem 0.8rem;  /* Menambahkan padding untuk ruang label */
            width: 100%;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
            text-align: left;
            position: relative;
        }

        .user-box input:focus {
            border-color: #007bff; /* Warna border berubah saat fokus */
            outline: none; /* Menghilangkan outline default */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .user-box input::placeholder {
            color: transparent; /* Hide placeholder text */
        }

        .user-box label {
            position: absolute;
            top: 50%;  /* Posisikan label di tengah vertikal */
            left: 12px;
            transform: translateY(-50%);  /* Vertikal center */
            font-size: 1rem;
            color: #999;
            background: white;
            padding: 0 5px;
            pointer-events: none;
            transition: all 0.3s ease;  /* Transition semua properti */
            z-index: 1; /* Agar label tetap di atas input */
        }

        .user-box input:focus ~ label,
        .user-box input:not(:placeholder-shown) ~ label {
            top: -1px;  /* Angkat label sedikit di atas input */
            left: 10px;
            font-size: 0.8rem;  /* Menyusutkan font size */
            color: #007bff;  /* Ganti warna saat fokus */
            border-color: #007bff;
        }

        /* Menambahkan animasi saat label pindah ke posisi baru */
        @keyframes labelMove {
            0% {
                top: 50%;
                font-size: 16px;
                color: #999;
                transform: translateY(-50%);
            }
            100% {
                top: -10px;
                font-size: 12px;
                color: #007bff;
                transform: translateY(0);
            }
        }

        button {
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Memberikan jarak antara tombol dan input sebelumnya */
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            font-family: 'Arial', sans-serif;  /* Menggunakan font yang lebih elegan */
            text-align: center;               /* Menempatkan teks di tengah */
            margin-top: 1rem;               /* Memberikan jarak atas lebih besar */
            padding: 1rem 0.8rem;             /* Memberikan padding lebih besar untuk ruang */
            border-radius: 10px;              /* Membuat sudut yang lebih halus */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan shadow untuk kesan elegan */
        }

        .message p {
            margin: 0;
            font-size: 0.4rem;                 /* Ukuran font yang sedikit lebih besar */
            line-height: 1.5;                  /* Jarak antar baris agar mudah dibaca */
        }

        .error {
            font-family: 'Arial', sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            padding: 0.5rem;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.1);
            margin-top: 1rem;
        }

        .success {
            font-family: 'Arial', sans-serif;
            background-color: #d4edda;
            color: #155724;
            padding: 0.5rem;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 255, 0, 0.1);
            margin-top: 1rem;
        }

        .loading {
            font-family: 'Arial', sans-serif;
            background-color: #fff3cd;
            color: #856404;
            padding: 0.5rem;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(255, 255, 0, 0.1);
            margin-top: 1rem;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        /* Media Query untuk Responsif */
        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Mengubah ke kolom pada layar kecil */
            }
        }
    </style>
    </head>
    <body>
    <div class="container">
        <div class="form-container">
            <div class="logo-container">
                <img src="assets/logo perpusdig.png" alt="PerpusDig Logo" class="logo">
                <span class="perpus">Perpus</span><span class="dig">Dig</span>
            </div>
            <div class="header-container">
                <a href="#" class="back-link">&lt; Kembali</a>
                <h2>Perbarui Kata Sandi</h2>
            </div>
            <p>Jangan khawatir. Masukkan email Anda di bawah ini untuk memulihkan kata sandi Anda</p>
            <form id="resetForm">
                <div class="user-box">
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    <label for="email">Email</label>
                </div>
                <button type="button" onclick="window.location.href='forgotverify.php';">Selanjutnya</button>
            </form>
            <div id="message"></div>
        </div>
        <div class="image-container">
            <img src="assets/password.png" alt="Forgot Password" weight="400">
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $("#resetForm").on("submit", function(e) {
            e.preventDefault();

            const email = $("#email").val();
            if (!validateEmail(email)) {
                $("#message").html("<p class='error'>Masukkan email yang valid.</p>");
                return;
            }

            $("#message").html("<p class='loading'>Memproses...</p>");
            $.ajax({
                type: "POST",
                url: "lupakatasandi.php",
                data: { email: email },
                dataType: "json",
                success: function(response) {
                    if (response.status === "success") {
                        $("#message").html("<p class='success'>" + response.message + "</p>");
                    } else {
                        $("#message").html("<p class='error'>" + response.message + "</p>");
                    }
                },
                error: function() {
                    $("#message").html("<p class='error'>Terjadi kesalahan. Silakan coba lagi nanti.</p>");
                }
            });
        });

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html>
