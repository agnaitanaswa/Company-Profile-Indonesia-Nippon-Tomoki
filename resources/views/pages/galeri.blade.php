@extends('layouts.app')

@section('title', 'Nippon Tomoki Indonesia — Rencanakan Masa Depanmu Bersama Kami')

@section('content')

{{-- ============ GALERI ============ --}}
<section id="galeri" class="py-20 bg-white">

    <div class="max-w-6xl mx-auto px-6">

        {{-- JUDUL GALERI --}}
        <div class="text-center mb-10">
            <p class="text-sm font-semibold tracking-widest text-brand-red uppercase mb-2">
                Galeri
            </p>

            <h2 class="font-display font-bold text-3xl md:text-4xl text-brand-ink">
                Fasilitas & Kegiatan LPK
            </h2>

            <p class="mt-3 text-brand-gray max-w-2xl mx-auto">
                Lihat berbagai fasilitas dan kegiatan yang tersedia
                di LPK Indonesia Nippon Tomoki.
            </p>
        </div>


        {{-- ============ CAROUSEL GALERI ============ --}}
        <div class="relative">

            {{-- TOMBOL KIRI --}}
            <button
                onclick="geserGaleri(-1)"
                type="button"
                class="absolute left-2 top-1/2 -translate-y-1/2 z-10
                       w-11 h-11 rounded-full bg-white shadow-lg
                       flex items-center justify-center
                       text-xl text-brand-ink
                       hover:bg-brand-red hover:text-white
                       transition duration-300"
                aria-label="Foto sebelumnya"
            >
                &#10094;
            </button>


            {{-- CONTAINER FOTO --}}
            <div
                id="galeriContainer"
                class="flex gap-5 overflow-x-auto scroll-smooth
                       snap-x snap-mandatory px-4"
            >

                {{-- FOTO 1 - RUANG KELAS --}}
                <div class="flex-none w-[280px] md:w-[350px] snap-center">

                    <div class="overflow-hidden rounded-2xl shadow-md">
                        <div class="aspect-[4/3]">
                            <img
                                src="{{ asset('image/kelas.jpeg') }}"
                                alt="Ruang kelas LPK Indonesia Nippon Tomoki"
                                class="w-full h-full object-cover
                                       hover:scale-105 transition duration-500"
                            >
                        </div>

                        <div class="p-4 bg-white">
                            <h3 class="font-display font-bold text-lg text-brand-ink">
                                Ruang Kelas
                            </h3>

                            <p class="text-sm text-brand-gray mt-1">
                                Ruang pembelajaran yang digunakan untuk
                                kegiatan belajar dan pelatihan peserta.
                            </p>
                        </div>
                    </div>

                </div>


                {{-- FOTO 2 - RUANG KELAS 2 --}}
                <div class="flex-none w-[280px] md:w-[350px] snap-center">

                    <div class="overflow-hidden rounded-2xl shadow-md">
                        <div class="aspect-[4/3]">
                            <img
                                src="{{ asset('image/kelasdua.jpeg') }}"
                                alt="Ruang kelas LPK Indonesia Nippon Tomoki"
                                class="w-full h-full object-cover
                                       hover:scale-105 transition duration-500"
                            >
                        </div>

                        <div class="p-4 bg-white">
                            <h3 class="font-display font-bold text-lg text-brand-ink">
                                Ruang Kelas
                            </h3>

                            <p class="text-sm text-brand-gray mt-1">
                                Fasilitas ruang kelas untuk menunjang
                                proses pembelajaran dan pelatihan.
                            </p>
                        </div>
                    </div>

                </div>


                {{-- FOTO 3 - KAMAR MANDI --}}
                <div class="flex-none w-[280px] md:w-[350px] snap-center">

                    <div class="overflow-hidden rounded-2xl shadow-md">
                        <div class="aspect-[4/3]">
                            <img
                                src="{{ asset('image/km (1).jpeg') }}"
                                alt="Kamar mandi LPK Indonesia Nippon Tomoki"
                                class="w-full h-full object-cover
                                       hover:scale-105 transition duration-500"
                            >
                        </div>

                        <div class="p-4 bg-white">
                            <h3 class="font-display font-bold text-lg text-brand-ink">
                                Kamar Mandi
                            </h3>

                            <p class="text-sm text-brand-gray mt-1">
                                Fasilitas kamar mandi yang disediakan
                                untuk menunjang kenyamanan peserta.
                            </p>
                        </div>
                    </div>

                </div>


                {{-- FOTO 4 - MUSHOLLA --}}
                <div class="flex-none w-[280px] md:w-[350px] snap-center">

                    <div class="overflow-hidden rounded-2xl shadow-md">
                        <div class="aspect-[4/3]">
                            <img
                                src="{{ asset('image/musholla.jpeg') }}"
                                alt="Musholla LPK Indonesia Nippon Tomoki"
                                class="w-full h-full object-cover
                                       hover:scale-105 transition duration-500"
                            >
                        </div>

                        <div class="p-4 bg-white">
                            <h3 class="font-display font-bold text-lg text-brand-ink">
                                Musholla
                            </h3>

                            <p class="text-sm text-brand-gray mt-1">
                                Fasilitas tempat ibadah yang dapat digunakan
                                oleh peserta dan pengunjung.
                            </p>
                        </div>
                    </div>

                </div>


                {{-- FOTO 5 - KEGIATAN PEMBELAJARAN --}}
                <div class="flex-none w-[280px] md:w-[350px] snap-center">

                    <div class="overflow-hidden rounded-2xl shadow-md">
                        <div class="aspect-[4/3]">
                            <img
                                src="{{ asset('image/ngajarsatu.jpeg') }}"
                                alt="Kegiatan pembelajaran LPK Indonesia Nippon Tomoki"
                                class="w-full h-full object-cover
                                       hover:scale-105 transition duration-500"
                            >
                        </div>

                        <div class="p-4 bg-white">
                            <h3 class="font-display font-bold text-lg text-brand-ink">
                                Kegiatan Pembelajaran
                            </h3>

                            <p class="text-sm text-brand-gray mt-1">
                                Kegiatan belajar dan mengajar untuk
                                meningkatkan kemampuan peserta.
                            </p>
                        </div>
                    </div>

                </div>

            </div>


            {{-- TOMBOL KANAN --}}
            <button
                onclick="geserGaleri(1)"
                type="button"
                class="absolute right-2 top-1/2 -translate-y-1/2 z-10
                       w-11 h-11 rounded-full bg-white shadow-lg
                       flex items-center justify-center
                       text-xl text-brand-ink
                       hover:bg-brand-red hover:text-white
                       transition duration-300"
                aria-label="Foto berikutnya"
            >
                &#10095;
            </button>

        </div>


        {{-- PETUNJUK --}}
        <p class="text-center text-sm text-brand-gray mt-5">
            Geser untuk melihat fasilitas dan kegiatan lainnya →
        </p>

    </div>

</section>


{{-- ============ JAVASCRIPT GALERI ============ --}}
<script>

    // Fungsi untuk menggeser galeri ke kiri atau kanan
    function geserGaleri(arah) {

        // Mengambil container galeri
        const container = document.getElementById('galeriContainer');

        // Jarak perpindahan setiap tombol ditekan
        const jarak = 375;

        // Menggeser galeri secara halus
        container.scrollBy({
            left: arah * jarak,
            behavior: 'smooth'
        });
    }

</script>

@endsection