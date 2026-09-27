@extends('layouts.app')

@section('title', 'Tentang Kami — Nippon Tomoki Indonesia')

@section('content')

    <section class="bg-brand-sand">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <p class="text-sm font-semibold text-brand-red mb-3">Tentang Kami</p>
            <h1 class="font-display text-4xl font-bold max-w-2xl leading-tight">
                Lembaga pelatihan yang membentuk tenaga kerja siap Jepang
            </h1>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-14 items-start">
        <div>
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=80"
                 alt="Kelas pelatihan bahasa Jepang" class="rounded-[1.5rem] w-full h-96 object-cover shadow-xl">
        </div>
        <div>
            <h2 class="font-display text-2xl font-bold mb-4">Visi Kami</h2>
            <p class="text-brand-gray leading-relaxed mb-8">
                Menjadi lembaga pelatihan kerja terdepan yang mencetak SDM Indonesia
                berkompeten, berkepribadian, dan mampu bersaing di pasar kerja
                internasional, khususnya Jepang.
            </p>

            <h2 class="font-display text-2xl font-bold mb-4">Misi Kami</h2>
            <ul class="space-y-3 text-brand-gray leading-relaxed">
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 rounded-full bg-brand-red shrink-0"></span>
                    Menyelenggarakan pelatihan bahasa dan budaya Jepang berbasis kompetensi.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 rounded-full bg-brand-red shrink-0"></span>
                    Mendampingi peserta dari persiapan dokumen hingga keberangkatan.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 rounded-full bg-brand-red shrink-0"></span>
                    Bekerja sama dengan mitra kerja resmi dan legal di Jepang.
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-1.5 w-1.5 rounded-full bg-brand-red shrink-0"></span>
                    Membangun kepribadian dan etos kerja lulusan yang profesional.
                </li>
            </ul>
        </div>
    </section>

    {{-- ============ NILAI / KEUNGGULAN ============ --}}
    <section class="bg-brand-sand">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <h2 class="font-display text-2xl font-bold mb-10 text-center">Mengapa memilih kami</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
                @foreach ([
                    'Siap Bersaing Global' => 'Mencetak lulusan yang siap bersaing di pasar kerja global, khususnya Jepang.',
                    'Legal & Terpercaya' => 'Lembaga pelatihan resmi yang telah terdaftar dan beroperasi sesuai regulasi pemerintah.',
                    'Program Inovatif' => 'Mengembangkan program pelatihan yang inovatif dan berbasis kompetensi.',
                    'Instruktur Berpengalaman' => 'Tim pengajar profesional yang ahli dalam pendidikan bahasa Jepang.',
                ] as $title => $desc)
                    <div class="bg-white rounded-2xl p-6 shadow-sm">
                        <div class="h-10 w-10 rounded-full bg-brand-red/10 flex items-center justify-center mb-4">
                            <span class="h-3 w-3 rounded-full bg-brand-red"></span>
                        </div>
                        <p class="font-semibold mb-2">{{ $title }}</p>
                        <p class="text-sm text-brand-gray leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-red">
        <div class="max-w-6xl mx-auto px-6 py-14 flex flex-col md:flex-row items-center justify-between gap-6 text-white text-center md:text-left">
            <h2 class="font-display text-2xl font-bold">Ingin tahu lebih lanjut tentang kami?</h2>
            <a href="{{ $waLink }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 bg-white text-brand-red font-semibold px-7 py-3.5 rounded-full hover:bg-brand-sand transition-colors">
                Konsultasi Gratis
            </a>
        </div>
    </section>

@endsection
