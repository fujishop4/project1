# FastSSH Clone Website

Website ini adalah clone sederhana dari fastssh.com dengan penyesuaian agar legal, SEO-ready, dan siap untuk Google AdSense.

## Struktur Folder

/ (root domain)
â”‚â”€â”€ index.html                â†’ Halaman utama (home)
â”‚â”€â”€ ssh-account.html          â†’ Daftar server SSH + link create
â”‚â”€â”€ create-singapore.html     â†’ Form buat akun SSH (Singapore)
â”‚â”€â”€ tutorial.html             â†’ Panduan cara pakai SSH/VPN
â”‚â”€â”€ blog.html                 â†’ Blog / artikel (SEO content)
â”‚â”€â”€ support.html              â†’ FAQ + Contact form
â”‚â”€â”€ about.html                â†’ Tentang kami
â”‚â”€â”€ privacy-policy.html       â†’ Privacy Policy
â”‚â”€â”€ terms.html                â†’ Terms of Service
â”‚â”€â”€ disclaimer.html           â†’ Disclaimer
â”‚â”€â”€ sitemap.html              â†’ Sitemap manual (HTML)
â”‚â”€â”€ sitemap.xml               â†’ Sitemap XML untuk SEO
â”‚â”€â”€ robots.txt                â†’ File robots.txt (SEO)
â”‚â”€â”€ ads.txt                   â†’ File ads.txt (buat AdSense compliance)
â”‚
â”œâ”€â”€ /assets                   â†’ Folder untuk gambar, CSS, JS (kosong, bisa diisi sendiri)
â”‚
â”œâ”€â”€ /server                   â†’ Backend PHP
â”‚    â”œâ”€â”€ api.php              â†’ API dummy buat akun SSH
â”‚    â”œâ”€â”€ contact.php          â†’ Kirim pesan (dummy, bisa diganti PHPMailer SMTP)
â”‚    â””â”€â”€ vendor/              â†’ Folder PHPMailer (jika pakai composer)

## Fitur

- Legal Pages Lengkap â†’ Privacy, Disclaimer, Terms of Service, About.
- SEO Tools â†’ sitemap.xml, sitemap.html, robots.txt, ads.txt.
- Form Buat Akun SSH (Dummy API) â†’ server/api.php.
- Form Kontak â†’ support.html + server/contact.php.
- Ready for Google AdSense.

## Cara Instalasi

1. Upload semua file ke hosting (cPanel / VPS).
2. Pastikan folder `/server/` bisa menjalankan PHP.
3. Edit bagian berikut sesuai kebutuhan:
   - `ads.txt` â†’ ganti `pub-0000000000000000` dengan Publisher ID AdSense.
   - `server/contact.php` â†’ ganti dengan email adminmu atau gunakan PHPMailer SMTP.
   - `sitemap.xml` â†’ ganti domain `https://namasitus.com` dengan domainmu.

## Catatan

- `api.php` masih dummy (tidak benar-benar membuat akun SSH). Jika ingin real provisioning, butuh integrasi dengan VPS (misalnya via command SSH).
- Untuk form kontak yang lebih aman, gunakan PHPMailer + SMTP Gmail / Hosting.

## Lisensi

Proyek ini dibuat sebagai template edukasi dan bisa dikembangkan bebas untuk kebutuhan pribadi/komersial.
