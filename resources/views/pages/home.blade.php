
@extends('layouts.app')

@section('title', 'Nippon Tomoki Indonesia — Rencanakan Masa Depanmu Bersama Kami')

@section('content')

    {{-- HERO --}}
    <section class="relative isolate overflow-hidden bg-white">

        {{-- Background Jepang --}}
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <img
                src="{{ asset('image/background.png') }}"
                alt=""
                aria-hidden="true"
                class="absolute inset-0 h-full w-full object-cover"
                style="filter: blur(1px);"
            >

            <div
                class="absolute inset-0"
                style="background: linear-gradient(90deg, rgba(255,255,255,0.82) 0%, rgba(255,255,255,0.55) 55%, rgba(255,255,255,0.32) 100%);"
            ></div>
        </div>

        <div class="relative z-10 mx-auto grid max-w-6xl items-center gap-10 px-6 py-16 sm:px-8 md:grid-cols-2 md:gap-12 md:py-20 lg:gap-16">

            {{-- Informasi utama --}}
            <div class="min-w-0 md:pl-5">

                <p class="mb-5 inline-flex items-center gap-2 text-sm font-medium text-brand-red">
                    <span class="h-2 w-2 shrink-0 rounded-full bg-brand-red"></span>
                    Lembaga Pelatihan Bahasa &amp; Kerja Jepang
                </p>

                <h1 class="mb-6 font-display text-3xl font-bold leading-[1.15] sm:text-4xl lg:text-[3rem]">
                    Rencanakan masa depanmu bersama
                    <span class="text-brand-red">Nippon Tomoki Indonesia</span>
                </h1>

                <p class="mb-8 max-w-md text-base leading-relaxed text-brand-gray lg:text-lg">
                    Kami membekali calon pekerja migran dengan bahasa,
                    keterampilan, dan kesiapan mental untuk berkarir di Jepang
                    secara legal dan terarah.
                </p>

                <div class="flex flex-wrap items-center gap-4">

                    <a
                        href="{{ $waLink }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 rounded-full bg-brand-red px-6 py-3 font-semibold text-white shadow-md transition-colors hover:bg-brand-redDark"
                    >
                        Konsultasi Gratis

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"
                            />
                        </svg>
                    </a>

                    <a
                        href="{{ route('layanan') }}"
                        class="text-sm font-semibold text-brand-ink transition-colors hover:text-brand-red"
                    >
                        Lihat program pelatihan
                    </a>

                </div>
            </div>

            {{-- Slider foto otomatis --}}
            <div class="mx-auto w-full min-w-0 max-w-[420px] md:ml-auto md:max-w-[390px] lg:max-w-[420px]">

                <div
                    id="heroSlider"
                    class="relative aspect-[5/4] w-full overflow-hidden rounded-2xl bg-white/40 shadow-xl"
                >

                    {{-- Foto pertama --}}
                    <img
                        src="{{ asset('image/p1.png') }}"
                        alt="Peserta pelatihan Nippon Tomoki Indonesia"
                        class="hero-slide absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity duration-1000"
                    >

                    {{-- Foto kedua --}}
                    <img
                        src="{{ asset('image/profession.png') }}"
                        alt="Kegiatan pembelajaran bahasa Jepang"
                        class="hero-slide absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-1000"
                    >

                    {{-- Indikator foto --}}
                    <div class="absolute bottom-4 left-0 right-0 z-10 flex justify-center gap-2">

                        <button
                            type="button"
                            class="hero-dot h-2.5 w-7 rounded-full bg-white transition-all"
                            data-slide="0"
                            aria-label="Tampilkan foto pertama"
                            aria-current="true"
                        ></button>

                        <button
                            type="button"
                            class="hero-dot h-2.5 w-2.5 rounded-full bg-white/60 transition-all"
                            data-slide="1"
                            aria-label="Tampilkan foto kedua"
                            aria-current="false"
                        ></button>

                    </div>
                </div>
            </div>

        </div>
   //section

    {{-- TENTANG SINGKAT --}}
        <div class="mx-auto grid max-w-6xl items-center gap-14 px-6 py-20 md:grid-cols-2">

            {{-- Foto instruktur --}}
            <div class="relative order-2 md:order-1">

                <div class="overflow-hidden rounded-[1.5rem] shadow-xl">
                    <img
                        src="{{ asset('image/p2.png') }}"
                        alt="Instruktur bahasa Jepang mengajar"
                        class="h-80 w-full object-cover"
                    >
                </div>

                <div class="absolute -right-3 -top-6 rounded-2xl bg-white px-6 py-4 text-center shadow-lg md:-right-6">
                    <p class="font-display text-2xl font-bold text-brand-red">3</p>
                    <p class="text-xs text-brand-gray">Program Unggulan</p>
                </div>

                <div class="absolute -bottom-6 -left-2 rounded-2xl bg-white px-6 py-4 text-center shadow-lg md:-left-6">
                    <p class="font-display text-2xl font-bold text-brand-red">45+</p>
                    <p class="text-xs text-brand-gray">Alumni Sukses</p>
                </div>

            </div>

            {{-- Deskripsi perusahaan --}}
            <div class="order-1 md:order-2">

                <p class="mb-3 text-sm font-semibold text-brand-red">
                    Tentang Nippon Tomoki Indonesia
                </p>

                <h2 class="mb-5 font-display text-3xl font-bold leading-snug">
                    Wujudkan impian berkarir di Jepang
                </h2>

                <p class="mb-8 leading-relaxed text-brand-gray">
                    Nippon Tomoki Indonesia adalah lembaga pelatihan bahasa Jepang
                    yang unggul dalam mencetak lulusan tenaga kerja profesional
                    dan berkepribadian. Kami berkomitmen menghasilkan SDM yang
                    mahir dan berdaya saing di pasar global melalui program
                    pelatihan berbasis kompetensi.
                </p>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                    @foreach ([
                        [
                            'title' => 'Siap Bersaing Global',
                            'desc' => 'Mencetak lulusan yang siap bersaing di pasar kerja global, khususnya Jepang.'
                        ],
                        [
                            'title' => 'Legal & Terpercaya',
                            'desc' => 'Lembaga resmi yang terdaftar dan beroperasi sesuai regulasi pemerintah.'
                        ],
                        [
                            'title' => 'Program Inovatif',
                            'desc' => 'Mengembangkan program pelatihan yang inovatif dan berbasis kompetensi.'
                        ],
                        [
                            'title' => 'Instruktur Berpengalaman',
                            'desc' => 'Tim pengajar profesional yang ahli dalam pendidikan bahasa Jepang.'
                        ],
                    ] as $item)

                        <div>
                            <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-full bg-brand-red/10">
                                <span class="h-2.5 w-2.5 rounded-full bg-brand-red"></span>
                            </div>

                            <p class="mb-1 text-sm font-semibold">
                                {{ $item['title'] }}
                            </p>

                            <p class="text-sm leading-relaxed text-brand-gray">
                                {{ $item['desc'] }}
                            </p>
                        </div>

                    @endforeach

                </div>
            </div>

        </div>
    </section>

    {{-- CTA BANNER --}}
    <section class="bg-brand-red">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-8 px-6 py-16 text-white md:flex-row">

            <div class="text-center md:text-left">

                <h2 class="mb-2 font-display text-2xl font-bold md:text-3xl">
                    Siap memulai langkah pertamamu ke Jepang?
                </h2>

                <p class="text-white/80">
                    Konsultasi gratis, langsung terhubung dengan tim kami lewat WhatsApp.
                </p>

            </div>

            <a
                href="{{ $waLink }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex shrink-0 items-center gap-2 rounded-full bg-white px-7 py-3.5 font-semibold text-brand-red transition-colors hover:bg-brand-sand"
            >
                Konsultasi Gratis via WhatsApp
            </a>

        </div>
    </section>

    {{-- SCRIPT SLIDER --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.getElementById('heroSlider');

            if (!slider || slider.dataset.initialized === 'true') {
                return;
            }

            slider.dataset.initialized = 'true';

            const slides = slider.querySelectorAll('.hero-slide');
            const dots = slider.querySelectorAll('.hero-dot');

            if (slides.length < 2) {
                return;
            }

            let currentSlide = 0;
            let autoSlide;

            function showSlide(index) {
                currentSlide = index;

                slides.forEach(function (slide, i) {
                    slide.classList.toggle('opacity-100', i === index);
                    slide.classList.toggle('opacity-0', i !== index);
                });

                dots.forEach(function (dot, i) {
                    dot.classList.toggle('w-7', i === index);
                    dot.classList.toggle('w-2.5', i !== index);
                    dot.classList.toggle('bg-white', i === index);
                    dot.classList.toggle('bg-white/60', i !== index);

                    dot.setAttribute(
                        'aria-current',
                        i === index ? 'true' : 'false'
                    );
                });
            }

            function startAutoSlide() {
                clearInterval(autoSlide);

                autoSlide = setInterval(function () {
                    showSlide((currentSlide + 1) % slides.length);
                }, 4000);
            }

            dots.forEach(function (dot) {
                dot.addEventListener('click', function () {
                    showSlide(Number(dot.dataset.slide));
                    startAutoSlide();
                });
            });

            showSlide(0);
            startAutoSlide();
        });
    </script>

@endsection
