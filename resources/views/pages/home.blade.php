
{{-- HERO --}}
<section class="relative isolate overflow-hidden bg-white">

    {{-- Background Jepang --}}
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <img
            src="{{ asset('image/background.png') }}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover"
            style="filter: blur(1px);"
        >

        <div class="absolute inset-0 bg-white/30"></div>

        <div
            class="absolute inset-0"
            style="background: linear-gradient(90deg, rgba(255,255,255,0.72), rgba(255,255,255,0.45) 55%, rgba(255,255,255,0.25));"
        ></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16 md:py-24 grid md:grid-cols-2 gap-10 lg:gap-16 items-center">

        {{-- Teks utama --}}
        <div class="text-center md:text-left md:pl-6">

            <p class="inline-flex items-center justify-center md:justify-start gap-2 text-sm font-medium text-brand-red mb-5">
                <span class="h-2 w-2 rounded-full bg-brand-red"></span>
                Lembaga Pelatihan Bahasa &amp; Kerja Jepang
            </p>

            <h1 class="font-display text-4xl md:text-5xl lg:text-[3.4rem] font-bold leading-[1.12] mb-6">
                Rencanakan masa depanmu bersama
                <span class="text-brand-red">Nippon Tomoki Indonesia</span>
            </h1>

            <p class="text-brand-gray text-base md:text-lg leading-relaxed mb-8 max-w-lg mx-auto md:mx-0">
                Kami membekali calon pekerja migran dengan bahasa,
                keterampilan, dan kesiapan mental untuk berkarir di Jepang
                secara legal dan terarah.
            </p>

            <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">

                <a
                    href="{{ $waLink }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-brand-red hover:bg-brand-redDark text-white font-semibold px-7 py-3.5 rounded-full transition-colors shadow-md"
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
                    class="text-brand-ink font-semibold text-sm hover:text-brand-red transition-colors"
                >
                    Lihat program pelatihan
                </a>

            </div>
        </div>

        {{-- Slider foto otomatis --}}
        <div class="relative w-full min-w-0">

            <div
                id="heroSlider"
                class="relative w-full aspect-[5/4] md:aspect-[4/3] lg:aspect-[5/4] overflow-hidden rounded-3xl shadow-xl bg-white/50"
            >

                {{-- Foto pertama --}}
                <img
                    src="{{ asset('image/p1.png') }}"
                    alt="Peserta pelatihan Nippon Tomoki Indonesia"
                    class="hero-slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000"
                >

                {{-- Foto kedua --}}
                <img
                    src="{{ asset('image/p2.png') }}"
                    alt="Kegiatan pembelajaran bahasa Jepang"
                    class="hero-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"
                >

                {{-- Lapisan tipis agar foto menyatu dengan desain --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent pointer-events-none"></div>

                {{-- Indikator slider --}}
                <div class="absolute bottom-5 left-0 right-0 z-10 flex justify-center gap-2">
                    <button
                        type="button"
                        class="hero-dot h-2.5 w-7 rounded-full bg-white transition-all"
                        aria-label="Tampilkan foto pertama"
                        aria-current="true"
                        data-slide="0"
                    ></button>

                    <button
                        type="button"
                        class="hero-dot h-2.5 w-2.5 rounded-full bg-white/60 transition-all"
                        aria-label="Tampilkan foto kedua"
                        aria-current="false"
                        data-slide="1"
                    ></button>
                </div>

            </div>

        </div>

    </div>
</section>

{{-- Slider otomatis --}}
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

        slides.forEach((slide, i) => {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('opacity-0', i !== index);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle('w-7', i === index);
            dot.classList.toggle('w-2.5', i !== index);
            dot.classList.toggle('bg-white', i === index);
            dot.classList.toggle('bg-white/60', i !== index);
            dot.setAttribute('aria-current', i === index ? 'true' : 'false');
        });
    }

    function startAutoSlide() {
        clearInterval(autoSlide);

        autoSlide = setInterval(() => {
            showSlide((currentSlide + 1) % slides.length);
        }, 4000);
    }

    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            showSlide(Number(dot.dataset.slide));
            startAutoSlide();
        });
    });

    showSlide(0);
    startAutoSlide();
});
</script>
