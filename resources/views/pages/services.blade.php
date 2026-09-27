@extends('layouts.app')

@section('title', 'Layanan & Program — Nippon Tomoki Indonesia')

@section('content')

    <section class="bg-brand-sand">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <p class="text-sm font-semibold text-brand-red mb-3">Layanan</p>
            <h1 class="font-display text-4xl font-bold max-w-2xl leading-tight">
                Program pelatihan yang mengantarmu siap kerja di Jepang
            </h1>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ([
                [
                    'name' => 'Program Kaigosha Ners',
                    'desc' => 'Pelatihan khusus untuk calon tenaga perawat lansia (kaigo) yang akan bekerja di fasilitas kesehatan Jepang, mencakup bahasa, teknik perawatan dasar, dan etika kerja.',
                    'points' => ['Bahasa Jepang khusus kaigo', 'Praktik perawatan dasar', 'Pendampingan dokumen visa'],
                ],
                [
                    'name' => 'Program Reguler',
                    'desc' => 'Pelatihan bahasa dan keterampilan kerja umum bagi calon pekerja migran ke berbagai sektor industri di Jepang.',
                    'points' => ['Kelas bahasa Jepang bertahap', 'Simulasi wawancara kerja', 'Bimbingan budaya kerja Jepang'],
                ],
                [
                    'name' => 'Nihongo Gakkou',
                    'desc' => 'Kursus bahasa Jepang umum untuk pelajar maupun pekerja, dari tingkat dasar hingga persiapan uji kemampuan bahasa Jepang (JLPT).',
                    'points' => ['Kelas N5 sampai N3', 'Latihan percakapan aktif', 'Persiapan ujian JLPT'],
                ],
            ] as $program)
                <div class="rounded-2xl border border-brand-ink/10 p-8 hover:border-brand-red/40 hover:shadow-lg transition-all">
                    <h3 class="font-display text-xl font-bold mb-3">{{ $program['name'] }}</h3>
                    <p class="text-sm text-brand-gray leading-relaxed mb-5">{{ $program['desc'] }}</p>
                    <ul class="space-y-2 mb-6">
                        @foreach ($program['points'] as $point)
                            <li class="flex gap-2 text-sm text-brand-ink">
                                <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-brand-red shrink-0"></span>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ $waLink }}" target="_blank" rel="noopener"
                       class="text-sm font-semibold text-brand-red hover:text-brand-redDark">
                        Tanya program ini &rarr;
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ============ PROSES SINGKAT ============ --}}
    <section class="bg-brand-sand">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <h2 class="font-display text-2xl font-bold mb-10 text-center">Proses pendaftaran</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
                @foreach ([
                    'Konsultasi' => 'Diskusikan minat dan kondisimu bersama tim kami lewat WhatsApp.',
                    'Pendaftaran' => 'Lengkapi berkas administrasi dan pilih program yang sesuai.',
                    'Pelatihan' => 'Ikuti kelas bahasa dan keterampilan sesuai jadwal program.',
                    'Penempatan' => 'Pendampingan hingga proses keberangkatan ke Jepang.',
                ] as $step => $desc)
                    <div class="bg-white rounded-2xl p-6 shadow-sm">
                        <p class="font-semibold mb-2">{{ $step }}</p>
                        <p class="text-sm text-brand-gray leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-red">
        <div class="max-w-6xl mx-auto px-6 py-14 flex flex-col md:flex-row items-center justify-between gap-6 text-white text-center md:text-left">
            <h2 class="font-display text-2xl font-bold">Belum yakin program mana yang cocok?</h2>
            <a href="{{ $waLink }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 bg-white text-brand-red font-semibold px-7 py-3.5 rounded-full hover:bg-brand-sand transition-colors">
                Konsultasi Gratis
            </a>
        </div>
    </section>

@endsection
