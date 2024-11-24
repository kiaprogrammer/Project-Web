<?php
require_once 'koneksi2.php';
$db = new Database  ();
$koneksi = $db->koneksi; // Inisialisasi koneksi dari objek Database
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp1'] . $_POST['otp2'] . $_POST['otp3'] . $_POST['otp4'] . $_POST['otp5'] . $_POST['otp6'];

    // Cek apakah OTP valid dan belum expired
    $query = $conn->prepare("SELECT * FROM password_resets WHERE otp = ? AND expiry > NOW()");
    $query->bind_param("s", $otp);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Simpan email di sesi untuk digunakan di formulir update password
        $_SESSION['email'] = $email;

        // Redirect ke halaman update password
        header("Location: aturulangsandi.php");
        exit();
    } else {
        echo "Kode OTP tidak valid atau telah expired.";
    }
}
?>
