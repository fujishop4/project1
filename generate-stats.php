<?php
// File tujuan
$file = __DIR__ . "/server-stats.json";

// Daftar server
$servers = [
    "Singapore" => rand(200, 500),
    "Japan" => rand(150, 400),
    "United States" => rand(300, 600),
    "Germany" => rand(100, 350),
    "Netherlands" => rand(120, 300),
    "Brazil" => rand(80, 200),
    "India" => rand(200, 450),
    "United Kingdom" => rand(150, 350),
    "Australia" => rand(100, 250)
];

// Data JSON
$data = [
    "updated_at" => date("Y-m-d H:i:s"),
    "servers" => $servers
];

// Simpan ke file JSON
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo "✅ Data server berhasil diupdate ke server-stats.json\n";
