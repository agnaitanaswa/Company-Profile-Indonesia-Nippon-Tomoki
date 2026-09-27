# Nippon Tomoki Indonesia — Website Laravel

Kode ini berisi halaman **Beranda, Tentang Kami, Layanan, dan Kontak** untuk
website LPK "Nippon Tomoki Indonesia", dengan palet merah `#BF2A36` dan putih,
serta tombol **Konsultasi Gratis** yang langsung mengarah ke WhatsApp.

## Struktur file

```
routes/web.php                          -> daftar route halaman
app/Http/Controllers/PageController.php -> logic tiap halaman + redirect WhatsApp
resources/views/layouts/app.blade.php   -> layout utama (navbar, footer, tombol WA mengambang)
resources/views/pages/home.blade.php    -> Beranda / landing page
resources/views/pages/about.blade.php   -> Tentang Kami
resources/views/pages/services.blade.php-> Layanan / Program
resources/views/pages/contact.blade.php -> Kontak
config/services.php.snippet             -> tambahan config untuk nomor WhatsApp
.env.example.snippet                    -> contoh variabel .env
```

## Cara pasang ke proyek Laravel

1. Buat proyek Laravel baru (kalau belum ada):
   ```bash
   composer create-project laravel/laravel nippon-tomoki
   cd nippon-tomoki
   ```

2. Salin folder `routes`, `app`, dan `resources` dari paket ini ke dalam
   proyek Laravel kamu (timpa file yang sama).

3. Tambahkan isi `config/services.php.snippet` ke dalam array `return [...]`
   pada file `config/services.php` bawaan Laravel.

4. Tambahkan baris di `.env.example.snippet` ke file `.env` kamu, lalu ganti
   nomor `6285147474858` dengan nomor WhatsApp asli tim kamu (format
   internasional, tanpa tanda `+`, diawali `62`).

5. Jalankan:
   ```bash
   php artisan serve
   ```
   Lalu buka `http://127.0.0.1:8000`.

## Cara kerja tombol "Konsultasi Gratis"

- Setiap tombol "Konsultasi Gratis" (di navbar, hero, banner CTA, floating
  button, dan footer) memakai variabel `$waLink`, yang dibuat otomatis oleh
  `PageController` dari nomor di `.env` + pesan pembuka yang sudah diisi.
- Klik tombol akan langsung membuka `https://wa.me/...` di tab baru, siap
  chat tanpa perlu simpan nomor dulu.
- Form singkat di halaman Kontak meneruskan isian nama & pesan ke route
  `konsultasi-gratis`, yang lalu redirect ke WhatsApp dengan pesan yang sudah
  disesuaikan.

## Styling

- Tailwind dimuat lewat CDN (`<script src="https://cdn.tailwindcss.com">`)
  supaya bisa langsung jalan tanpa proses build. Warna brand (`brand.red`,
  `brand.ink`, `brand.sand`, `brand.gray`) dan font (`Sora` untuk judul,
  `Inter` untuk teks) dikonfigurasi langsung di `layouts/app.blade.php`.
- Untuk produksi, sebaiknya pindahkan konfigurasi Tailwind ke
  `tailwind.config.js` + build lewat Vite (`npm install -D tailwindcss`,
  lalu `@tailwind base; @tailwind components; @tailwind utilities;` di
  `resources/css/app.css`), supaya CSS di-bundle dan bukan diambil dari CDN.
- Gambar hero & about memakai Unsplash sebagai placeholder — ganti dengan
  foto asli kegiatan pelatihan/alumni sebelum go-live.

## Yang bisa disesuaikan lagi

- Ganti alamat, email, dan nama program di `resources/views/pages/*.blade.php`
  sesuai data resmi terbaru.
- Tambahkan halaman baru (misalnya "Persyaratan" atau "Acara") dengan pola
  yang sama: route baru di `web.php`, method baru di `PageController`, dan
  view baru di `resources/views/pages/`.
