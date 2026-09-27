@extends('layouts.app')

@section('title', 'Kontak — Nippon Tomoki Indonesia')

@section('content')

    <section class="bg-brand-sand">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <p class="text-sm font-semibold text-brand-red mb-3">Kontak</p>
            <h1 class="font-display text-4xl font-bold max-w-2xl leading-tight">
                Hubungi kami, konsultasi selalu gratis
            </h1>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-14">
        <div>
            <h2 class="font-display text-2xl font-bold mb-6">Informasi Kontak</h2>
            <ul class="space-y-6">
                <li class="flex gap-4">
                    <span class="h-10 w-10 rounded-full bg-brand-red/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    <div>
                        <p class="font-semibold mb-1">Alamat</p>
                        <p class="text-sm text-brand-gray leading-relaxed">
                            Ruko Larisa Residence, Jl. Golf Raya No. A4,<br>
                            Cisaranten Wetan, Kec. Cinambo,<br>
                            Kota Bandung, Jawa Barat 40293
                        </p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <span class="h-10 w-10 rounded-full bg-brand-red/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </span>
                    <div>
                        <p class="font-semibold mb-1">Telepon / WhatsApp</p>
                        <a href="{{ $waLink }}" target="_blank" rel="noopener" class="text-sm text-brand-gray hover:text-brand-red">
                            0851-4747-4858
                        </a>
                    </div>
                </li>
                <li class="flex gap-4">
                    <span class="h-10 w-10 rounded-full bg-brand-red/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-red" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <div>
                        <p class="font-semibold mb-1">Email</p>
                        <p class="text-sm text-brand-gray">nipontomokiindonesia@gmail.com</p>
                    </div>
                </li>
            </ul>

            <a href="{{ $waLink }}" target="_blank" rel="noopener"
               class="mt-10 inline-flex items-center gap-2 bg-brand-red hover:bg-brand-redDark text-white font-semibold px-7 py-3.5 rounded-full transition-colors">
                Chat via WhatsApp
            </a>
        </div>

        {{-- ============ FORM (opsional, kirim data via route terpisah bila dibutuhkan) ============ --}}
        <div class="bg-brand-sand rounded-[1.5rem] p-8">
            <h2 class="font-display text-xl font-bold mb-6">Atau kirim pesan singkat</h2>
            <form action="{{ route('konsultasi-gratis') }}" method="GET" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1.5" for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required
                           class="w-full rounded-xl border border-brand-ink/15 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-red">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1.5" for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4" required
                              class="w-full rounded-xl border border-brand-ink/15 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-red"
                              placeholder="Saya ingin bertanya tentang program..."></textarea>
                </div>
                <p class="text-xs text-brand-gray">
                    Pesan ini akan meneruskanmu langsung ke WhatsApp tim kami.
                </p>
                <button type="submit"
                        class="w-full bg-brand-red hover:bg-brand-redDark text-white font-semibold py-3.5 rounded-full transition-colors">
                    Kirim &amp; Lanjut ke WhatsApp
                </button>
            </form>
        </div>
    </section>

@endsection
