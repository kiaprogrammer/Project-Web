<?php
session_start();

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['otp_code'])) {
    $inputOtp = $_POST['otp_code'];

    // Cek apakah OTP tersimpan di session
    if (!isset($_SESSION['otp'], $_SESSION['otp_expiry'])) {
        $response['status'] = 'error';
        $response['message'] = 'Kode OTP tidak ditemukan atau sudah kedaluwarsa.';
        echo json_encode($response);
        exit;
    }

    $currentTime = time();

    // Cek waktu kedaluwarsa OTP
    if ($currentTime > $_SESSION['otp_expiry']) {
        unset($_SESSION['otp'], $_SESSION['otp_expiry']); // Hapus data OTP dari session
        $response['status'] = 'error';
        $response['message'] = 'Kode OTP telah kedaluwarsa. Silakan minta kode baru.';
        echo json_encode($response);
        exit;
    }

    // Validasi OTP
    if ($inputOtp == $_SESSION['otp']) {
        unset($_SESSION['otp'], $_SESSION['otp_expiry']); // Hapus OTP setelah berhasil diverifikasi
        $response['status'] = 'success';
        $response['message'] = 'Kode OTP valid.';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Kode OTP tidak valid. Silakan coba lagi.';
    }

    echo json_encode($response);
}
?>
