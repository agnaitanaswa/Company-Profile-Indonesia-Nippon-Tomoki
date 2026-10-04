<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Controllers extends Controller
{
    /**
     * Nomor WhatsApp tujuan konsultasi gratis.
     * Simpan nomor asli di file .env sebagai WHATSAPP_NUMBER,
     * contoh: WHATSAPP_NUMBER=6285147474858
     */
    protected string $waNumber;

    public function __construct()
    {
        $this->waNumber = config('services.whatsapp.number', '6285188574085');
    }

    public function beranda(): View
    {
        return view('pages.home', [
            'waLink' => $this->buildWaLink('Halo, saya ingin konsultasi gratis mengenai program pelatihan di Nippon Tomoki Indonesia.'),
        ]);
    }

     // BARU: halaman Galeri
    public function galeri(): View
    {
        return view('pages.gallery', [
            'waLink' => $this->buildWaLink('Halo, saya ingin konsultasi gratis mengenai program pelatihan di Nippon Tomoki Indonesia.'),
            'galeriImages' => [
                ['src' => 'image/kelas.jpeg', 'alt' => 'Kelas bahasa Jepang'],
                ['src' => 'image/kelasdua.jpeg', 'alt' => 'Praktik wawancara kerja'],
                ['src' => 'image/km.jpeg', 'alt' => 'Kama mandi'],
                ['src' => 'image/musholla.jpeg', 'alt' => 'Ruang musholla'],
                ['src' => 'image/ruangkelas.jpeg', 'alt' => 'Ruang kelas'],
                ['src' => 'image/ngajarsatu.jpeg', 'alt' => 'Ngajar di kelas bahasa Jepang'],
                ['src' => 'image/lpk-6.jpeg', 'alt' => 'Alumni Matching Job'],
            ],
        ]);
    }


    public function tentangKami(): View
    {
        return view('pages.about', [
            'waLink' => $this->buildWaLink('Halo, saya ingin tahu lebih lanjut tentang Nippon Tomoki Indonesia.'),
        ]);
    }

    public function layanan(): View
    {
        return view('pages.services', [
            'waLink' => $this->buildWaLink('Halo, saya ingin bertanya tentang program/layanan pelatihan.'),
        ]);
    }

    public function kontak(): View
    {
        return view('pages.contact', [
            'waLink' => $this->buildWaLink('Halo, saya ingin menghubungi Nippon Tomoki Indonesia.'),
        ]);
    }

    /**
     * Redirect langsung ke WhatsApp — dipakai oleh tombol
     * "Konsultasi Gratis" di landing page.
     */
    public function konsultasiGratis(Request $request): RedirectResponse
    {
        $nama = $request->query('nama');
        $pesan = $request->query('pesan');

        $message = $nama || $pesan
            ? "Halo, saya {$nama}. {$pesan}"
            : 'Halo, saya ingin konsultasi gratis mengenai program pelatihan di Nippon Tomoki Indonesia.';

        return redirect()->away($this->buildWaLink($message));
    }

    private function buildWaLink(string $message): string
    {
        return 'https://wa.me/' . $this->waNumber . '?text=' . rawurlencode($message);
    }
}