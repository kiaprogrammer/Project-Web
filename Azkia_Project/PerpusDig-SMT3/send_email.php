<?php
session_start();
include 'koneksi2.php'; // Koneksi ke database
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Memuat PHPMailer

// Fungsi untuk generate OTP
function generateOTP($length = 4) {
    return str_pad(random_int(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
}

// Fungsi untuk mengirim OTP melalui email
function sendOTPEmail($email, $otp) {
    $mail = new PHPMailer(true);
    $senderEmail = 'e41231785@student.polije.ac.id';
    $senderName = 'Perpusdig';

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $senderEmail;
        $mail->Password = 'cgpc hqhu kqqw dxol'; // Ganti dengan environment variable untuk keamanan
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($senderEmail, $senderName);
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Kode OTP untuk Reset Kata Sandi';
        $mail->Body = '
        <html>
            <body>
                <h2>Halo!</h2>
                <p>Gunakan kode OTP berikut untuk memulihkan kata sandi Anda:</p>
                <h3>' . $otp . '</h3>
                <p>Kode ini hanya berlaku selama 5 menit. Abaikan email ini jika Anda tidak meminta reset kata sandi.</p>
            </body>
        </html>';
        $mail->AltBody = 'Kode OTP Anda adalah: ' . $otp;

        // Kirim email
        $mail->send();
        return true;
    } catch (Exception $e) {
        return 'Gagal mengirim email: ' . $mail->ErrorInfo;
    }
}

// Periksa jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan email dari form
    $email = $_POST['email_user'] ?? null;

    if (empty($email)) {
        $_SESSION['message'] = 'Email tidak dikirimkan!';
        header("Location: lupakatasandi.php");
        exit;
    }

    // Validasi format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Format email tidak valid!';
        header("Location: lupakatasandi.php");
        exit;
    }

    try {
        // Periksa email di tabel admin
        $sql = "SELECT * FROM admin WHERE email = :email";
        $stmt = $koneksi->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Jika email ditemukan, generate OTP
            $otp = generateOTP();
            $_SESSION['otp'] = $otp;
            $_SESSION['email'] = $email;
            $_SESSION['otp_expiry'] = time() + (5 * 60); // OTP berlaku selama 5 menit

            // Kirim OTP ke email
            $email_send_result = sendOTPEmail($email, $otp);

            if ($email_send_result === true) {
                $_SESSION['message'] = 'Kode OTP berhasil dikirim ke email.';
                header("Location: forgotverify.php"); // Redirect ke halaman verifikasi OTP
                exit;
            } else {
                $_SESSION['message'] = $email_send_result; // Menampilkan pesan error jika pengiriman email gagal
                header("Location: lupakatasandi.php");
                exit;
            }
        } else {
            $_SESSION['message'] = 'Email tidak ditemukan.';
            header("Location: lupakatasandi.php");
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Terjadi kesalahan pada database: ' . $e->getMessage();
        header("Location: lupakatasandi.php");
        exit;
    }
}
?>
