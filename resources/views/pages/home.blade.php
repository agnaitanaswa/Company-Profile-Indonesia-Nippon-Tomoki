
@extends('layouts.app')

@section('title', 'Nippon Tomoki Indonesia — Rencanakan Masa Depanmu Bersama Kami')

@section('content')

    {{-- BACKGROUND BERSAMA HERO DAN TENTANG --}}
    <div class="relative isolate overflow-hidden">

        {{-- Background Jepang --}}
        <div class="pointer-events-none absolute inset-0 z-0">
            <img
                src="{{ asset('image/background.png') }}"
                alt=""
                aria-hidden="true"
                class="absolute inset-0 h-full w-full object-cover object-center"
                style="filter: blur(1px); transform: scale(1.01);"
            >

            <div
                class="absolute inset-0"
                style="background: rgba(255, 255, 255, 0.42);"
            ></div>

            <div
                class="absolute inset-0"
                style="background: linear-gradient(90deg, rgba(255,255,255,0.58), rgba(255,255,255,0.22));"
            ></div>
        </div>

        {{-- HERO --}}
        <section class="relative z-10">

            <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-8 px-5 py-10 sm:px-8 sm:py-12 md:grid-cols-2 md:gap-10 md:px-8 md:py-16 lg:gap-14 lg:py-20">

                {{-- Informasi utama --}}
                <div class="min-w-0 md:pl-3">

                    <p class="mb-4 inline-flex items-center gap-2 text-sm font-medium text-brand-red">
                        <span class="h-2 w-2 shrink-0 rounded-full bg-brand-red"></span>
                        Lembaga Pelatihan Bahasa &amp; Kerja Jepang
                    </p>

                    <h1 class="mb-5 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-[3rem] lg:leading-[1.12]">
                        Rencanakan masa depanmu bersama
                        <span class="text-brand-red">Nippon Tomoki Indonesia</span>
                    </h1>

                    <p class="mb-6 max-w-lg text-base leading-relaxed text-brand-gray sm:text-lg">
                        Kami membekali calon pekerja migran dengan bahasa,
                        keterampilan, dan kesiapan mental untuk berkarir di Jepang
                        secara legal dan terarah.
                    </p>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-4">

                        <a
                            href="{{ $waLink }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-red px-5 py-3 text-sm font-semibold text-white shadow-md transition-colors hover:bg-brand-redDark sm:px-6 sm:text-base"
                        >
                            Konsultasi Gratis

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 shrink-0"
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
                            class="text-sm font-semibold text-brand-ink transition-colors hover:text-brand-red sm:text-base"
                        >
                            Lihat program pelatihan
                        </a>

                    </div>
                </div>

                {{-- Slider foto --}}
                <div class="mx-auto w-full min-w-0 max-w-md md:ml-auto md:max-w-[390px] lg:max-w-[420px]">

                    <div
                        id="heroSlider"
                        class="relative aspect-[5/4] w-full overflow-hidden rounded-2xl bg-white/40 shadow-xl"
                    >

                        <img
                            src="{{ asset('image/p1.png') }}"
                            alt="Peserta pelatihan Nippon Tomoki Indonesia"
                            class="hero-slide absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity duration-700"
                        >

                        <img
                            src="{{ asset('image/profession.png') }}"
                            alt="Peserta pelatihan berbagai profesi"
                            class="hero-slide absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700"
                        >

                        {{-- Indikator slider --}}
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
        </section>

        {{-- TENTANG SINGKAT --}}
        <section class="relative z-10">

            <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-8 px-5 pb-12 pt-4 sm:px-8 sm:pb-16 md:grid-cols-2 md:gap-12 md:px-8 md:pb-20 md:pt-8">

                {{-- Foto instruktur --}}
                <div class="relative order-1 mx-auto w-full max-w-lg md:mx-0 md:max-w-none">

                    <div class="overflow-hidden rounded-2xl shadow-xl">
                        <img
                            src="{{ asset('image/p2.png') }}"
                            alt="Instruktur bahasa Jepang sedang memberikan konsultasi"
                            class="h-64 w-full object-cover sm:h-80 md:h-72 lg:h-80"
                            loading="lazy"
                        >
                    </div>

                    {{-- Statistik program --}}
                    <div class="absolute -right-2 -top-4 rounded-xl bg-white px-4 py-3 text-center shadow-lg sm:-right-3 sm:px-5">
                        <p class="font-display text-xl font-bold text-brand-red">3</p>
                        <p class="text-xs text-brand-gray">Program Unggulan</p>
                    </div>

                    {{-- Statistik alumni --}}
                    <div class="absolute -bottom-4 left-3 rounded-xl bg-white px-4 py-3 text-center shadow-lg sm:-left-3 sm:px-5">
                        <p class="font-display text-xl font-bold text-brand-red">45+</p>
                        <p class="text-xs text-brand-gray">Alumni Sukses</p>
                    </div>

                </div>

                {{-- Deskripsi perusahaan --}}
                <div class="order-2 min-w-0 pt-2 md:pt-0">

                    <p class="mb-3 text-sm font-semibold text-brand-red">
                        Tentang Nippon Tomoki Indonesia
                    </p>

                    <h2 class="mb-4 font-display text-2xl font-bold leading-snug sm:text-3xl">
                        Wujudkan impian berkarir di Jepang
                    </h2>

                    <p class="mb-6 text-sm leading-relaxed text-brand-gray sm:text-base">
                        Nippon Tomoki Indonesia adalah lembaga pelatihan bahasa Jepang
                        yang berfokus pada pembentukan tenaga kerja profesional dan
                        berkepribadian. Kami berkomitmen menghasilkan SDM yang mahir
                        dan berdaya saing di pasar global melalui program pelatihan
                        berbasis kompetensi.
                    </p>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6">

                        @foreach ([
                            [
                                'title' => 'Siap Bersaing Global',
                                'desc' => 'Mencetak lulusan yang siap bersaing di pasar kerja global, khususnya Jepang.'
                            ],
                            [
                                'title' => 'Legal & Terpercaya',
                                'desc' => 'Berkomitmen menjalankan pelatihan dan penyaluran kerja sesuai ketentuan yang berlaku.'
                            ],
                            [
                                'title' => 'Program Inovatif',
                                'desc' => 'Mengembangkan program pelatihan yang inovatif dan berbasis kompetensi.'
                            ],
                            [
                                'title' => 'Instruktur Berpengalaman',
                                'desc' => 'Didukung pengajar yang membantu peserta mempersiapkan kemampuan bahasa Jepang.'
                            ],
                        ] as $item)

                            <div class="min-w-0">

                                <div class="mb-2 flex h-9 w-9 items-center justify-center rounded-full bg-brand-red/10">
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

    </div>
    {{-- AKHIR BACKGROUND BERSAMA --}}

    {{-- CTA BANNER --}}
    <section class="bg-brand-red">

        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-5 px-5 py-10 text-white sm:px-8 sm:py-12 md:flex-row md:gap-8 md:px-8 md:py-14">

            <div class="text-center md:text-left">

                <h2 class="mb-2 font-display text-2xl font-bold leading-snug sm:text-3xl">
                    Siap memulai langkah pertamamu ke Jepang?
                </h2>

                <p class="text-sm leading-relaxed text-white/80 sm:text-base">
                    Konsultasi gratis, langsung terhubung dengan tim kami lewat WhatsApp.
                </p>

            </div>

            <a
                href="{{ $waLink }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex shrink-0 items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-brand-red transition-colors hover:bg-brand-sand sm:text-base"
            >
                Konsultasi Gratis via WhatsApp
            </a>

        </div>
    </section>

    {{-- SCRIPT SLIDER OTOMATIS --}}
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
