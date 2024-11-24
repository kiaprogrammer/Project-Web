<?php
require_once 'koneksi2.php';
$db = new Database  ();
$koneksi = $db->koneksi; // Inisialisasi koneksi dari objek Database
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_SESSION['email'];

    // Cek apakah email ada di database
    $query = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $otp = rand(1000, 9999); // Menghasilkan kode OTP 4 digit
        $expiry = date("Y-m-d H:i:s", strtotime("+10 minutes")); // OTP berlaku selama 10 menit

        // Simpan OTP dan expiry di database
        $query = $conn->prepare("UPDATE password_resets SET otp = ?, expiry = ? WHERE email = ?");
        $query->bind_param("sss", $otp, $expiry, $email);
        $query->execute();

        // Kirim email ke pengguna
        $subject = "Konfirmasi Reset Password";
        $message = "Kode OTP untuk reset password Anda adalah: $otp. Kode ini akan berlaku selama 10 menit.";
        $headers = "From: no-reply@yourdomain.com";

        mail($email, $subject, $message, $headers);

        echo "Kode OTP telah dikirim ulang ke email Anda.";
    } else {
        echo "Email tidak ditemukan.";
    }
}
?>
