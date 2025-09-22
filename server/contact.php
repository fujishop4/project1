<?php
header("Content-Type: application/json");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Pastikan PHPMailer sudah diinstall lewat Composer:
// composer require phpmailer/phpmailer

require __DIR__ . '/vendor/autoload.php';

// Konfigurasi SMTP
$mailHost = "smtp.gmail.com";     // Host SMTP (contoh: Gmail)
$mailPort = 587;                  // Port (587 TLS, 465 SSL)
$mailUsername = "youremail@gmail.com";  // Email pengirim
$mailPassword = "your-app-password";    // Password aplikasi (jangan pakai password asli Gmail!)
$mailFrom     = "youremail@gmail.com";  // Email pengirim
$mailFromName = "[Nama Situs] Support"; // Nama pengirim
$mailTo       = "admin@namasitus.com";  // Email admin penerima

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = trim($_POST['nama'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $pesan  = trim($_POST['pesan'] ?? '');

    // Validasi input
    if (empty($nama) || empty($email) || empty($pesan)) {
        echo json_encode([
            "status"  => "error",
            "message" => "Semua field wajib diisi."
        ]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status"  => "error",
            "message" => "Format email tidak valid."
        ]);
        exit;
    }

    try {
        $mail = new PHPMailer(true);

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = $mailHost;
        $mail->SMTPAuth   = true;
        $mail->Username   = $mailUsername;
        $mail->Password   = $mailPassword;
        $mail->SMTPSecure = "tls";
        $mail->Port       = $mailPort;

        // Pengirim & penerima
        $mail->setFrom($mailFrom, $mailFromName);
        $mail->addAddress($mailTo);

        // Konten email
        $mail->isHTML(true);
        $mail->Subject = "Pesan Baru dari Form Kontak - $nama";
        $mail->Body    = "
            <h2>Pesan Baru dari Form Kontak</h2>
            <p><b>Nama:</b> {$nama}</p>
            <p><b>Email:</b> {$email}</p>
            <p><b>Pesan:</b><br>" . nl2br(htmlspecialchars($pesan)) . "</p>
        ";
        $mail->AltBody = "Nama: $nama\nEmail: $email\nPesan: $pesan";

        $mail->send();

        echo json_encode([
            "status"  => "success",
            "message" => "Pesan berhasil dikirim via SMTP!"
        ]);
    } catch (Exception $e) {
        echo json_encode([
            "status"  => "error",
            "message" => "Gagal mengirim pesan. Error: {$mail->ErrorInfo}"
        ]);
    }
} else {
    echo json_encode([
        "status"  => "error",
        "message" => "Gunakan metode POST untuk mengirim pesan."
    ]);
}
