<?php
session_start();
include 'koneksi2.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header("Content-Type:application/json");

// Fungsi untuk generate OTP
function generateOTP($length = 4) {
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= rand(0, 9);
    }
    return $otp;
}

// Cek apakah email dikirimkan melalui POST
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $response = array();

    // Validasi apakah email tidak kosong dan format email valid
    if (empty($email)) {
        $response['status'] = 'error';
        $response['message'] = 'Email tidak boleh kosong.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Email tidak valid.';
    } else {
        // Cek apakah email ada di database
        if ($koneksi) {
            $stmt = $koneksi->prepare("SELECT * FROM `admin` WHERE `email` = ?;");
            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Jika email ditemukan, generate OTP
                    $otp = generateOTP(4);  // Generate OTP 5 digit
                    $_SESSION['otp'] = $otp;  // Menyimpan OTP dalam session
                    $_SESSION['email'] = $email;  // Simpan email ke session untuk verifikasi berikutnya
                    
                    // Kirim OTP ke email pengguna menggunakan PHPMailer
                    $mail = new PHPMailer(true);
                    $senderEmail = 'e41231785@student.polije.ac.id'; // Ganti dengan email anda
                    $senderName = 'perpusdig'; // Ganti dengan nama pengirim
                    try {
                        // Set pengaturan SMTP
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';  // Ganti dengan SMTP server yang Anda gunakan
                        $mail->SMTPAuth = true;
                        $mail->Username = $senderEmail;  // Ganti dengan alamat email pengirim
                        $mail->Password = 'yourpassword';  // Ganti dengan password email pengirim
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;
                        
                        // Penerima
                        $mail->setFrom($senderEmail, $senderName);
                        $mail->addAddress($email);

                        // Konten email
                        $mail->isHTML(true);
                        $mail->Subject = 'Kode OTP untuk Perubahan Kata Sandi';
                        $mail->Body    = 'Kode OTP Anda adalah: ' . $otp;
                        
                        // Kirim email
                        if ($mail->send()) {
                            $response['status'] = 'success';
                            $response['redirect'] = true;
                        } else {
                            $response['status'] = 'error';
                            $response['message'] = 'Gagal mengirim OTP ke email.';
                        }
                    } catch (Exception $e) {
                        $response['status'] = 'error';
                        $response['message'] = 'Terjadi kesalahan saat mengirim email: ' . $mail->ErrorInfo;
                    }
                } else {
                    // Jika email tidak ditemukan
                    $response['status'] = 'error';
                    $response['message'] = 'Email tidak ditemukan.';
                }

                // Menutup statement
                $stmt->close();
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Terjadi kesalahan pada query database.';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Koneksi database gagal.';
        }
    }

    // Menutup koneksi
    $koneksi->close();

    // Mengembalikan respon dalam format JSON
    echo json_encode($response);
} else {
    // Jika email tidak dikirimkan lewat POST
    echo json_encode(array('status' => 'error', 'message' => 'Email tidak dikirimkan.'));
}
?>