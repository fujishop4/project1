<?php
// Set header biar output bisa dibaca browser
header("Content-Type: application/json");

// Cek apakah form sudah dikirim via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $server   = htmlspecialchars($_POST['server'] ?? '');
    $username = htmlspecialchars($_POST['username'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');

    // Validasi input sederhana
    if (empty($username) || empty($password)) {
        echo json_encode([
            "status"  => "error",
            "message" => "Username dan Password wajib diisi."
        ]);
        exit;
    }

    if (strlen($username) < 3 || strlen($password) < 6) {
        echo json_encode([
            "status"  => "error",
            "message" => "Username minimal 3 huruf, password minimal 6 karakter."
        ]);
        exit;
    }

    // Dummy response (seolah-olah akun SSH berhasil dibuat)
    // Nantinya bagian ini bisa kamu ganti dengan perintah SSH ke server VPS
    $host = "";
    if ($server === "singapore") {
        $host = "sg1.namasitus.com";
    } elseif ($server === "usa") {
        $host = "us1.namasitus.com";
    } elseif ($server === "europe") {
        $host = "eu1.namasitus.com";
    } else {
        $host = "default.namasitus.com";
    }

    // Kirim data hasil pembuatan akun
    echo json_encode([
        "status"   => "success",
        "message"  => "Akun SSH berhasil dibuat!",
        "data" => [
            "host"     => $host,
            "port"     => 22,
            "username" => $username,
            "password" => $password,
            "expired"  => date("d-m-Y", strtotime("+7 days"))
        ]
    ]);
} else {
    echo json_encode([
        "status"  => "error",
        "message" => "Gunakan metode POST untuk membuat akun."
    ]);
}
