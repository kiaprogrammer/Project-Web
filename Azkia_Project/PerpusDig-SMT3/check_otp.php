<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $otp_input = $_POST['otp1'] . $_POST['otp2'] . $_POST['otp3'] . $_POST['otp4'];

    if ($otp_input == $_SESSION['otp']) {
        $_SESSION['message'] = "Kode OTP berhasil diverifikasi. Silakan perbarui kata sandi Anda.";
        header("Location: update_password.php");
        exit();
    } else {
        $_SESSION['message'] = "Kode OTP salah. Silakan coba lagi.";
        header("Location: forgotverify.php");
        exit();
    }
}
?>
