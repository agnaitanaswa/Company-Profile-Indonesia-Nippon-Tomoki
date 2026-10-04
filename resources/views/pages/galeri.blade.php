@extends('layouts.app')

@section('title', 'Nippon Tomoki Indonesia — Rencanakan Masa Depanmu Bersama Kami')

@section('content')

{{-- ==========================================================
    HALAMAN GALERI
========================================================== --}}

<section class="bg-white py-16">

    {{-- ======================================================
        JUDUL HALAMAN
    ======================================================= --}}
    <div class="max-w-6xl mx-auto px-6 mb-10 text-center">

        <span class="inline-block mb-3 text-sm font-semibold tracking-wider uppercase text-brand-red">
            Galeri
        </span>

        <h1 class="font-display text-3xl md:text-4xl font-bold text-brand-ink">
            Fasilitas & Kegiatan
        </h1>

        <p class="mt-3 text-brand-gray max-w-2xl mx-auto">
            Lihat berbagai fasilitas dan kegiatan yang tersedia
            di LPK Indonesia Nippon Tomoki.
        </p>

    </div>


    {{-- ======================================================
        CONTAINER GALERI
    ======================================================= --}}
    <div class="max-w-6xl mx-auto px-6">

        <div class="relative">

            {{-- ==================================================
                TOMBOL SEBELUMNYA
            =================================================== --}}
            <button
                type="button"
                onclick="geserGaleri(-1)"
                class="absolute left-[-8px] md:left-[-15px] top-1/2 -translate-y-1/2 z-20
                       flex h-10 w-10 items-center justify-center
                       rounded-full bg-white shadow-lg
                       text-2xl text-brand-ink
                       hover:bg-brand-red hover:text-white
                       transition duration-300"
                aria-label="Galeri sebelumnya"
            >
                &#10094;
            </button>


            {{-- ==================================================
                CONTAINER FOTO YANG BISA DI-SCROLL
            =================================================== --}}
            <div
                id="galeriContainer"
                class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory
                       pb-4 px-1 scrollbar-thin"
            >

                @foreach ($galeriImages as $index => $image)

                    {{-- ==================================================
                        CARD FOTO
                    =================================================== --}}
                    <article
                        class="group flex-none w-[315px] md:w-[350px]
                               snap-start overflow-hidden
                               rounded-2xl bg-white
                               border border-brand-ink/5
                               shadow-sm hover:shadow-xl
                               transition duration-300"
                    >

                        {{-- ==============================================
                            BAGIAN GAMBAR
                        =============================================== --}}
                        <div
                            class="relative h-60 overflow-hidden cursor-pointer"
                            onclick="bukaLightbox({{ $index }})"
                        >

                            {{-- Foto --}}
                            <img
                                src="{{ asset($image['src']) }}"
                                alt="{{ $image['alt'] }}"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-110"
                            >

                            {{-- Overlay ketika hover --}}
                            <div
                                class="absolute inset-0 flex items-center justify-center
                                       bg-black/0 group-hover:bg-black/40
                                       transition duration-300"
                            >

                                <div
                                    class="flex h-12 w-12 items-center justify-center
                                           rounded-full bg-white/90
                                           text-brand-ink
                                           opacity-0 scale-75
                                           group-hover:opacity-100
                                           group-hover:scale-100
                                           transition duration-300 shadow-lg"
                                >
                                    {{-- Icon kaca pembesar --}}
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 21l-4.35-4.35m2.1-5.4a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z"
                                        />
                                    </svg>
                                </div>

                            </div>

                        </div>


                        {{-- ==============================================
                            INFORMASI FOTO
                        =============================================== --}}
                        <div class="p-5">

                            <h3 class="font-display text-lg font-bold text-brand-ink">
                                {{ $image['title'] ?? $image['alt'] }}
                            </h3>

                            <p class="mt-2 text-sm leading-relaxed text-brand-gray">
                                {{ $image['description'] ?? 'Dokumentasi kegiatan dan fasilitas Indonesia Nippon Tomoki.' }}
                            </p>

                        </div>

                    </article>

                @endforeach

            </div>


            {{-- ==================================================
                TOMBOL BERIKUTNYA
            =================================================== --}}
            <button
                type="button"
                onclick="geserGaleri(1)"
                class="absolute right-[-8px] md:right-[-15px] top-1/2 -translate-y-1/2 z-20
                       flex h-10 w-10 items-center justify-center
                       rounded-full bg-white shadow-lg
                       text-2xl text-brand-ink
                       hover:bg-brand-red hover:text-white
                       transition duration-300"
                aria-label="Galeri berikutnya"
            >
                &#10095;
            </button>

        </div>


        {{-- ======================================================
            PETUNJUK GALERI
        ======================================================= --}}
        <div class="mt-5 flex items-center justify-center gap-2 text-sm text-brand-gray">

            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M7 16l-4-4m0 0l4-4m-4 4h18"
                />
            </svg>

            <span>
                Geser untuk melihat fasilitas dan kegiatan lainnya
            </span>

        </div>

    </div>

</section>



{{-- ==========================================================
    LIGHTBOX / POPUP FOTO
========================================================== --}}

<div
    id="lightbox"
    class="fixed inset-0 z-[9999] hidden
           items-center justify-center
           bg-black/90 p-4"
    onclick="tutupJikaKlikLuar(event)"
>

    {{-- ======================================================
        TOMBOL CLOSE
    ======================================================= --}}
    <button
        type="button"
        onclick="tutupLightbox()"
        class="absolute right-5 top-5 z-50
               flex h-11 w-11 items-center justify-center
               rounded-full bg-white/90
               text-3xl font-light text-gray-800
               shadow-lg
               hover:bg-white
               transition duration-300"
        aria-label="Tutup galeri"
    >
        &times;
    </button>


    {{-- ======================================================
        TOMBOL FOTO SEBELUMNYA
    ======================================================= --}}
    <button
        type="button"
        onclick="fotoSebelumnya()"
        class="absolute left-3 md:left-8 top-1/2 -translate-y-1/2 z-50
               flex h-12 w-12 items-center justify-center
               rounded-full bg-white/90
               text-2xl text-gray-800
               shadow-lg
               hover:bg-white
               transition duration-300"
        aria-label="Foto sebelumnya"
    >
        &#10094;
    </button>


    {{-- ======================================================
        ISI LIGHTBOX
    ======================================================= --}}
    <div
        id="lightboxContent"
        class="relative max-w-5xl w-full
               flex flex-col items-center"
    >

        {{-- Foto besar --}}
        <img
            id="lightboxImage"
            src=""
            alt=""
            class="max-h-[78vh] max-w-full
                   rounded-xl object-contain
                   shadow-2xl
                   select-none"
        >


        {{-- Caption foto --}}
        <div
            id="lightboxCaption"
            class="mt-4 max-w-[90%]
                   rounded-full
                   bg-black/60
                   px-5 py-2
                   text-center text-sm
                   text-white
                   backdrop-blur"
        >
        </div>

    </div>


    {{-- ======================================================
        TOMBOL FOTO BERIKUTNYA
    ======================================================= --}}
    <button
        type="button"
        onclick="fotoBerikutnya()"
        class="absolute right-3 md:right-8 top-1/2 -translate-y-1/2 z-50
               flex h-12 w-12 items-center justify-center
               rounded-full bg-white/90
               text-2xl text-gray-800
               shadow-lg
               hover:bg-white
               transition duration-300"
        aria-label="Foto berikutnya"
    >
        &#10095;
    </button>

</div>



{{-- ==========================================================
    JAVASCRIPT GALERI
========================================================== --}}

<script>

    /* ==========================================================
       DATA FOTO DARI CONTROLLER
    ========================================================== */

    const galeriImages = @json($galeriImages);


    /* ==========================================================
       INDEX FOTO YANG SEDANG DIBUKA
    ========================================================== */

    let indexFotoSekarang = 0;


    /* ==========================================================
       VARIABEL UNTUK SWIPE HP
    ========================================================== */

    let posisiTouchAwal = 0;
    let posisiTouchAkhir = 0;


    /* ==========================================================
       FUNGSI MENGGESER GALERI CARD
       
       arah:
       -1 = ke kiri
        1 = ke kanan
    ========================================================== */

    function geserGaleri(arah) {

        const container = document.getElementById('galeriContainer');

        const jarak = 375;

        container.scrollBy({
            left: arah * jarak,
            behavior: 'smooth'
        });
    }


    /* ==========================================================
       FUNGSI MEMBUKA LIGHTBOX
       
       index = posisi foto dalam array galeriImages
    ========================================================== */

    function bukaLightbox(index) {

        indexFotoSekarang = index;

        // Tampilkan foto
        tampilkanFoto();

        // Ambil elemen popup
        const lightbox = document.getElementById('lightbox');

        // Hilangkan class hidden
        lightbox.classList.remove('hidden');

        // Tambahkan display flex
        lightbox.classList.add('flex');

        // Supaya halaman belakang tidak ikut scroll
        document.body.classList.add('overflow-hidden');
    }


    /* ==========================================================
       FUNGSI MENAMPILKAN FOTO
    ========================================================== */

    function tampilkanFoto() {

        const foto = galeriImages[indexFotoSekarang];

        const imageElement =
            document.getElementById('lightboxImage');

        const captionElement =
            document.getElementById('lightboxCaption');


        // Mengubah sumber gambar
        imageElement.src = "{{ asset('') }}" + foto.src;

        // Mengubah teks alt
        imageElement.alt = foto.alt;


        // Mengambil title jika tersedia
        // Jika tidak ada, gunakan alt
        const judul = foto.title ?? foto.alt;


        // Menampilkan judul + posisi foto
        captionElement.textContent =
            judul + ' • ' +
            (indexFotoSekarang + 1) +
            ' / ' +
            galeriImages.length;
    }


    /* ==========================================================
       FUNGSI MENUTUP LIGHTBOX
    ========================================================== */

    function tutupLightbox() {

        const lightbox =
            document.getElementById('lightbox');


        // Sembunyikan popup
        lightbox.classList.add('hidden');

        // Hapus display flex
        lightbox.classList.remove('flex');

        // Aktifkan kembali scroll halaman
        document.body.classList.remove('overflow-hidden');
    }


    /* ==========================================================
       FOTO SEBELUMNYA
    ========================================================== */

    function fotoSebelumnya() {

        indexFotoSekarang--;


        // Jika sudah melewati foto pertama,
        // kembali ke foto terakhir
        if (indexFotoSekarang < 0) {

            indexFotoSekarang =
                galeriImages.length - 1;
        }


        tampilkanFoto();
    }


    /* ==========================================================
       FOTO BERIKUTNYA
    ========================================================== */

    function fotoBerikutnya() {

        indexFotoSekarang++;


        // Jika sudah melewati foto terakhir,
        // kembali ke foto pertama
        if (indexFotoSekarang >= galeriImages.length) {

            indexFotoSekarang = 0;
        }


        tampilkanFoto();
    }


    /* ==========================================================
       KLIK AREA HITAM UNTUK MENUTUP POPUP
    ========================================================== */

    function tutupJikaKlikLuar(event) {

        if (event.target.id === 'lightbox') {

            tutupLightbox();
        }
    }


    /* ==========================================================
       KONTROL KEYBOARD
       
       ESC       = tutup
       ARROW LEFT  = sebelumnya
       ARROW RIGHT = berikutnya
    ========================================================== */

    document.addEventListener('keydown', function(event) {

        // Tombol ESC
        if (event.key === 'Escape') {

            tutupLightbox();
        }


        // Tombol panah kiri
        if (event.key === 'ArrowLeft') {

            fotoSebelumnya();
        }


        // Tombol panah kanan
        if (event.key === 'ArrowRight') {

            fotoBerikutnya();
        }
    });


    /* ==========================================================
       SWIPE FOTO DI HP
    ========================================================== */

    const lightbox =
        document.getElementById('lightbox');


    // Saat jari mulai menyentuh layar
    lightbox.addEventListener('touchstart', function(event) {

        posisiTouchAwal =
            event.changedTouches[0].screenX;
    });


    // Saat jari selesai menyentuh layar
    lightbox.addEventListener('touchend', function(event) {

        posisiTouchAkhir =
            event.changedTouches[0].screenX;

        prosesSwipe();
    });


    /* ==========================================================
       MEMPROSES ARAH SWIPE
    ========================================================== */

    function prosesSwipe() {

        const jarakSwipe =
            posisiTouchAkhir - posisiTouchAwal;


        // Swipe cukup jauh ke kiri
        // berarti foto berikutnya
        if (jarakSwipe < -50) {

            fotoBerikutnya();
        }


        // Swipe cukup jauh ke kanan
        // berarti foto sebelumnya
        if (jarakSwipe > 50) {

            fotoSebelumnya();
        }
    }

</script>

@endsection