<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nippon Tomoki Indonesia — Lembaga Pelatihan Kerja Jepang')</title>
    <meta name="description" content="@yield('meta_description', 'Nippon Tomoki Indonesia, lembaga pelatihan bahasa dan kerja Jepang. Konsultasi gratis, cepat lewat WhatsApp.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Tailwind lewat CDN untuk kemudahan setup awal.
         Untuk produksi, pindahkan konfigurasi ini ke tailwind.config.js
         dan build lewat Vite (lihat resources/css/app.css). --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            red: '#BF2A36',
                            redDark: '#9E212B',
                            ink: '#22201F',
                            sand: '#F7F4F0',
                            gray: '#6B6560',
                        },
                    },
                    fontFamily: {
                        display: ['Sora', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    <style>
        body { font-family: 'Inter', sans-serif; color: #22201F; }
        h1, h2, h3, .font-display { font-family: 'Sora', sans-serif; }
    </style>

    @stack('styles')
</head>
<body class="bg-white text-brand-ink antialiased">

    {{-- ============ NAVBAR ============ --}}
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-brand-ink/5">
        <div class="max-w-6xl mx-auto px-6 flex items-center justify-between h-20">
            <a href="{{ route('beranda') }}" class="flex items-center gap-3">
                <span class="relative inline-flex h-9 w-9 items-center justify-center">
                    <span class="absolute inset-0 rounded-full bg-brand-red"></span>
                    <span class="relative text-white font-display font-bold text-sm">NT</span>
                </span>
                <span class="leading-tight">
                    <span class="block font-display font-bold text-lg">Nippon Tomoki</span>
                    <span class="block text-xs tracking-wide text-brand-gray -mt-0.5">Indonesia</span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-8 font-medium text-sm">
                <a href="{{ route('beranda') }}"
                   class="hover:text-brand-red transition-colors {{ request()->routeIs('beranda') ? 'text-brand-red' : 'text-brand-ink' }}">Beranda</a>
                <a href="{{ route('tentang-kami') }}"
                   class="hover:text-brand-red transition-colors {{ request()->routeIs('tentang-kami') ? 'text-brand-red' : 'text-brand-ink' }}">Tentang Kami</a>
                <a href="{{ route('layanan') }}"
                   class="hover:text-brand-red transition-colors {{ request()->routeIs('layanan') ? 'text-brand-red' : 'text-brand-ink' }}">Layanan</a>
                <a href="{{ route('kontak') }}"
                   class="hover:text-brand-red transition-colors {{ request()->routeIs('kontak') ? 'text-brand-red' : 'text-brand-ink' }}">Kontak</a>
            </nav>

            <a href="{{ $waLink ?? route('konsultasi-gratis') }}" target="_blank" rel="noopener"
               class="hidden md:inline-flex items-center gap-2 bg-brand-red hover:bg-brand-redDark text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-colors">
                Konsultasi Gratis
            </a>

            {{-- Mobile menu toggle --}}
            <button id="menuBtn" class="md:hidden p-2" aria-label="Buka menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div id="mobileMenu" class="hidden md:hidden border-t border-brand-ink/5 px-6 py-4 space-y-3">
            <a href="{{ route('beranda') }}" class="block font-medium">Beranda</a>
            <a href="{{ route('tentang-kami') }}" class="block font-medium">Tentang Kami</a>
            <a href="{{ route('layanan') }}" class="block font-medium">Layanan</a>
            <a href="{{ route('kontak') }}" class="block font-medium">Kontak</a>
            <a href="{{ $waLink ?? route('konsultasi-gratis') }}" target="_blank" rel="noopener"
               class="block text-center bg-brand-red text-white font-semibold px-5 py-2.5 rounded-full">
                Konsultasi Gratis
            </a>
        </div>
    </header>

    {{-- ============ MAIN CONTENT ============ --}}
    <main>
        @yield('content')
    </main>

    {{-- ============ FOOTER ============ --}}
    <footer class="bg-brand-ink text-white mt-24">
        <div class="max-w-6xl mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="relative inline-flex h-8 w-8 items-center justify-center">
                        <span class="absolute inset-0 rounded-full bg-brand-red"></span>
                        <span class="relative text-white font-display font-bold text-xs">NT</span>
                    </span>
                    <span class="font-display font-bold">Nippon Tomoki Indonesia</span>
                </div>
                <p class="text-sm text-white/60 leading-relaxed">
                    Lembaga pelatihan yang unggul dalam mencetak lulusan tenaga kerja
                    yang profesional dan berkepribadian, siap bersaing di pasar global.
                </p>
            </div>

            <div>
                <h4 class="font-display font-semibold mb-4">Menu Utama</h4>
                <ul class="space-y-2 text-sm text-white/70">
                    <li><a href="{{ route('beranda') }}" class="hover:text-brand-red">Beranda</a></li>
                    <li><a href="{{ route('tentang-kami') }}" class="hover:text-brand-red">Tentang Kami</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-brand-red">Layanan</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-brand-red">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-display font-semibold mb-4">Program Kami</h4>
                <ul class="space-y-2 text-sm text-white/70">
                    <li>Program Kaigosha Ners</li>
                    <li>Program Reguler</li>
                    <li>Nihongo Gakkou</li>
                    <li>
                        <a href="{{ $waLink ?? route('konsultasi-gratis') }}" target="_blank" rel="noopener" class="hover:text-brand-red">
                            Konsultasi Gratis
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-display font-semibold mb-4">Kontak Kami</h4>
                <ul class="space-y-3 text-sm text-white/70">
                    <li>Ruko Larisa Residence, Jl. Golf Raya No. A4, Cisaranten Wetan, Kec. Cinambo, Kota Bandung, Jawa Barat 40293</li>
                    <li>0851-4747-4858</li>
                    <li>nipontomokiindonesia@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10">
            <div class="max-w-6xl mx-auto px-6 py-5 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-white/50">
                <p>© {{ date('Y') }} Nippon Tomoki Indonesia. Semua hak cipta dilindungi.</p>
                <div class="flex gap-5">
                    <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white">Syarat &amp; Ketentuan</a>
                    <a href="#" class="hover:text-white">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Floating WhatsApp button, selalu terlihat --}}
    <a href="{{ $waLink ?? route('konsultasi-gratis') }}" target="_blank" rel="noopener"
       class="fixed bottom-6 right-6 z-50 inline-flex items-center justify-center h-14 w-14 rounded-full bg-brand-red text-white shadow-lg shadow-brand-red/30 hover:bg-brand-redDark transition-colors"
       aria-label="Konsultasi gratis via WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.148.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.626.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            <path d="M12.001 2C6.478 2 2 6.478 2 12c0 1.98.579 3.828 1.579 5.38L2 22l4.75-1.55A9.94 9.94 0 0012.001 22C17.523 22 22 17.523 22 12S17.523 2 12.001 2zm0 18.2a8.18 8.18 0 01-4.17-1.14l-.3-.18-3.12 1.02 1.03-3.04-.2-.31A8.17 8.17 0 013.8 12c0-4.53 3.69-8.2 8.2-8.2s8.2 3.67 8.2 8.2-3.68 8.2-8.199 8.2z"/>
        </svg>
    </a>

    <script>
        document.getElementById('menuBtn')?.addEventListener('click', () => {
            document.getElementById('mobileMenu')?.classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>
</html>
