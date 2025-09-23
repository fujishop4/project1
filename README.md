# ADIJAYA VPN Website

Website resmi **ADIJAYA VPN** untuk pembuatan akun SSH gratis, tutorial, blog, dan dukungan pengguna.

## Struktur Folder

```
project1-merged-final/
 ├── index.html
 ├── about.html
 ├── blog.html
 ├── ssh-account.html
 ├── tutorial.html
 ├── support.html
 ├── privacy-policy.html
 ├── terms.html
 ├── disclaimer.html
 ├── sitemap.html
 ├── server-stats.json
 └── assets/
     ├── style.css
     └── logo.png   ← letakkan logo Anda di sini
```

## Logo

- Ganti file `assets/logo.png` dengan logo milik Anda (format PNG, sebaiknya ukuran persegi 256x256px).  
- Logo akan otomatis muncul di navbar semua halaman.

## Fitur

- **SSH Account**: Halaman untuk membuat akun SSH gratis.
- **Tutorial**: Panduan penggunaan SSH di Android, Windows, dan Linux.
- **Blog**: Artikel terbaru seputar SSH dan keamanan internet.
- **Support**: Halaman bantuan & kontak.
- **Server Stats**: Data server ditampilkan melalui `server-stats.json`.

## Cara Deploy

1. Upload semua file ke root hosting Anda (misalnya `public_html` di cPanel).
2. Pastikan folder `assets/` tetap berada di root agar CSS dan logo berfungsi.
3. Tambahkan domain/subdomain di server hosting Anda.
4. Aktifkan HTTPS agar website lebih aman.
5. Jika menggunakan Google AdSense:
   - Ubah `ca-pub-XXXX` dan `data-ad-slot` dengan kode iklan asli dari AdSense.

## Lisensi

© 2025 ADIJAYA VPN. All rights reserved.
