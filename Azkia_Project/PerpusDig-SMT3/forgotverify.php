<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Verify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Body Styling -->
    <style>
        body {
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .main-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
        max-width: 1200px;
        gap: 20px;
        margin-top: 40px;
    }

    .logo-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .logo-container img {
        width: 50px;
    }

    .logo-text {
        font-family: 'Poppins', sans-serif;
        font-size: 1.5em;
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

    .left-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

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
    }

    .right-container {
        flex: 1;
        padding: 40px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
    }

    .login-box {
        width: 100%;
        height: auto;
        background: rgba(255, 255, 255, 0.85);
        padding: 40px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .login-box h2 {
        margin-bottom: 20px;
        font-size: 2.3em;
        font-weight: 600;
        display: flex;
        justify-content: center;
        gap: 5px;
        color: #313131;
    }

    .login-box h2 span {
        display: inline-block;
    }

    .back-button {
        display: flex;
        align-items: center;
        position: absolute;
        top: 15px;
        left: 15px;
        font-size: 1.1em;
        color: #313131;
        text-decoration: none; /* Hilangkan garis bawah pada link */
        cursor: pointer;
    }

    .welcome-message {
        margin-top: -10px;
        font-size: 1em;
        color: #555;
    }

    .code-input-wrapper {
        display: flex;
        gap: 10px;
        margin-top: 50px;
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

    .resend-message {
        font-size: 0.9em;
        color: #555;
        text-align: center;
        margin-top: 10px;
    }

    .resend-link {
        color: #007bff;
        text-decoration: none;
        cursor: pointer;
    }

    .resend-link:hover {
        text-decoration: underline;
    }

    .btn {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #007bff;
        color: white;
        overflow: hidden;
        transition: 0.38s;
        border: none;
        border-radius: 8px;
        font-size: 21px;
        font-weight: 549;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="right-container">
            <div class="logo-container">
                <img src="assets/logo perpusdig.png" alt="PerpusDig Logo" class="logo">
                <span class="logo-text">
                    <span class="perpus-text">Perpus</span><span class="dig-text">Dig</span>
                </span>
            </div>
            <div class="login-box">
                <a href="lupakatasandi.php" class="back-button">
                    <span class="back-icon">&lt;</span>
                    <span>Kembali</span>
                </a>
                <h2><span>Verifikasi</span> <span>Kode</span></h2>
                <p class="welcome-message">Kode otentikasi telah dikirim ke email Anda</p>

                <form action="check_otp.php" method="post">
                    <div class="code-input-wrapper">
                        <input type="text" maxlength="1" class="code-input" name="otp1" required>
                        <input type="text" maxlength="1" class="code-input" name="otp2" required>
                        <input type="text" maxlength="1" class="code-input" name="otp3" required>
                        <input type="text" maxlength="1" class="code-input" name="otp4" required>
                    </div>
                    <p class="resend-message">Tidak menerima kode? <a href="#" class="resend-link">Kirim ulang</a></p>
                    <button type="submit" class="btn">Verifikasi</button>
                </form>
            </div>
        </div>

        <div class="left-container">
            <img src="assets/icon login.png" alt="ikon people login" width="580px">
        </div>
    </div>
    <script>
        document.getElementById('resend-link').addEventListener('click', function(event) {
            event.preventDefault();
            
            fetch('resend_otp.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: ''
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
