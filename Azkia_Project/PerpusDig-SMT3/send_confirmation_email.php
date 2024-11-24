<?php
require_once 'koneksi2.php';
$db = new Database  ();
$koneksi = $db->koneksi; // Inisialisasi koneksi dari objek Database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Cek apakah email ada di database
    $query = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $otp = rand(1000, 9999); // Menghasilkan kode OTP 4 digit
        $expiry = date("Y-m-d H:i:s", strtotime("+10 minutes")); // OTP berlaku selama 10 menit

        // Simpan OTP dan expiry di database
        $query = $conn->prepare("INSERT INTO password_resets (email, otp, expiry) VALUES (?, ?, ?)");
        $query->bind_param("sss", $email, $otp, $expiry);
        $query->execute();

        // Kirim email ke pengguna
        $subject = "Konfirmasi Reset Password";
        $message = "Kode OTP untuk reset password Anda adalah: $otp. Kode ini akan berlaku selama 10 menit.";
        $headers = "From: no-reply@yourdomain.com";

        mail($email, $subject, $message, $headers);

        echo "Kode OTP telah dikirim ke email Anda.";
    } else {
        echo "Email tidak ditemukan.";
    }
}
?>
