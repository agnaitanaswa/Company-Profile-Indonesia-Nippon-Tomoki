@extends('layouts.app')

@section('title', 'Nippon Tomoki Indonesia — Rencanakan Masa Depanmu Bersama Kami')

@section('content')

    {{-- ============ HERO ============ --}}
    <section class="relative overflow-hidden bg-white">
        <div class="max-w-6xl mx-auto px-6 py-20 md:py-28 grid md:grid-cols-2 gap-14 items-center">
            <div>
                <p class="inline-flex items-center gap-2 text-sm font-medium text-brand-red mb-5">
                    <span class="h-2 w-2 rounded-full bg-brand-red"></span>
                    Lembaga Pelatihan Bahasa &amp; Kerja Jepang
                </p>
                <h1 class="font-display text-4xl md:text-5xl font-bold leading-[1.15] mb-6">
                    Rencanakan masa depanmu bersama
                    <span class="text-brand-red">Nippon Tomoki Indonesia</span>
                </h1>
                <p class="text-brand-gray text-lg leading-relaxed mb-9 max-w-md">
                    Kami membekali calon pekerja migran dengan bahasa, keterampilan,
                    dan kesiapan mental untuk berkarir di Jepang secara legal dan terarah.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ $waLink }}" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 bg-brand-red hover:bg-brand-redDark text-white font-semibold px-7 py-3.5 rounded-full transition-colors">
                        Konsultasi Gratis
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('layanan') }}" class="text-brand-ink font-semibold text-sm hover:text-brand-red transition-colors">
                        Lihat program pelatihan
                    </a>
                </div>
            </div>

            {{-- Rising-sun motif: menghubungkan warna merah-putih dengan identitas Jepang --}}
            <div class="relative flex justify-center md:justify-end">
                <div class="absolute -right-10 top-1/2 -translate-y-1/2 h-80 w-80 md:h-96 md:w-96 rounded-full bg-brand-red/10"></div>
                <div class="absolute -right-4 top-1/2 -translate-y-1/2 h-64 w-64 md:h-72 md:w-72 rounded-full bg-brand-red/90"></div>
                <div class="relative h-72 w-56 md:h-80 md:w-64 rounded-[2rem] overflow-hidden shadow-2xl bg-brand-sand flex items-end">
                    <img src="https://images.unsplash.com/photo-1590650046871-92c887180603?auto=format&fit=crop&w=600&q=80"
                         alt="Peserta pelatihan Nippon Tomoki Indonesia"
                         class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- ============ TENTANG SINGKAT ============ --}}
    <section class="bg-brand-sand">
        <div class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-14 items-center">
            <div class="order-2 md:order-1 relative">
                <div class="rounded-[1.5rem] overflow-hidden shadow-xl">
                    <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?auto=format&fit=crop&w=700&q=80"
                         alt="Instruktur bahasa Jepang mengajar" class="w-full h-80 object-cover">
                </div>
                <div class="absolute -top-6 -right-6 bg-white rounded-2xl shadow-lg px-6 py-4 text-center">
                    <p class="font-display text-2xl font-bold text-brand-red">3</p>
                    <p class="text-xs text-brand-gray">Program Unggulan</p>
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-lg px-6 py-4 text-center">
                    <p class="font-display text-2xl font-bold text-brand-red">500+</p>
                    <p class="text-xs text-brand-gray">Alumni Sukses</p>
                </div>
            </div>

            <div class="order-1 md:order-2">
                <p class="text-sm font-semibold text-brand-red mb-3">Tentang Nippon Tomoki Indonesia</p>
                <h2 class="font-display text-3xl font-bold mb-5 leading-snug">
                    Wujudkan impian berkarir di Jepang
                </h2>
                <p class="text-brand-gray leading-relaxed mb-8">
                    Nippon Tomoki Indonesia adalah lembaga pelatihan bahasa Jepang yang
                    unggul dalam mencetak lulusan tenaga kerja profesional dan
                    berkepribadian. Kami berkomitmen menghasilkan SDM yang mahir dan
                    berdaya saing di pasar global melalui program pelatihan berbasis
                    kompetensi.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    @foreach ([
                        ['title' => 'Siap Bersaing Global', 'desc' => 'Mencetak lulusan yang siap bersaing di pasar kerja global, khususnya Jepang.'],
                        ['title' => 'Legal & Terpercaya', 'desc' => 'Lembaga resmi yang terdaftar dan beroperasi sesuai regulasi pemerintah.'],
                        ['title' => 'Program Inovatif', 'desc' => 'Mengembangkan program pelatihan yang inovatif dan berbasis kompetensi.'],
                        ['title' => 'Instruktur Berpengalaman', 'desc' => 'Tim pengajar profesional yang ahli dalam pendidikan bahasa Jepang.'],
                    ] as $item)
                        <div>
                            <div class="h-9 w-9 rounded-full bg-brand-red/10 flex items-center justify-center mb-3">
                                <span class="h-2.5 w-2.5 rounded-full bg-brand-red"></span>
                            </div>
                            <p class="font-semibold text-sm mb-1">{{ $item['title'] }}</p>
                            <p class="text-sm text-brand-gray leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============ CTA BANNER ============ --}}
    <section class="bg-brand-red">
        <div class="max-w-6xl mx-auto px-6 py-16 flex flex-col md:flex-row items-center justify-between gap-8 text-white">
            <div class="text-center md:text-left">
                <h2 class="font-display text-2xl md:text-3xl font-bold mb-2">
                    Siap memulai langkah pertamamu ke Jepang?
                </h2>
                <p class="text-white/80">Konsultasi gratis, langsung terhubung dengan tim kami lewat WhatsApp.</p>
            </div>
            <a href="{{ $waLink }}" target="_blank" rel="noopener"
               class="shrink-0 inline-flex items-center gap-2 bg-white text-brand-red font-semibold px-7 py-3.5 rounded-full hover:bg-brand-sand transition-colors">
                Konsultasi Gratis via WhatsApp
            </a>
        </div>
    </section>

@endsection
