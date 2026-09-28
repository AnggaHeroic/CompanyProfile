@extends('layouts.app')

@section('title', 'PT. Putra Maju Sukses | Beranda')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600;700;800;900&family=JetBrains+Mono:wght@500;600;700&display=swap" rel="stylesheet">
<style>
    .font-display {
        font-family: 'Archivo', 'Inter', sans-serif;
        letter-spacing: -0.02em;
    }
    .font-code {
        font-family: 'JetBrains Mono', ui-monospace, monospace;
    }
    .ledger-row {
        border-top: 1px solid #e2ddd0;
    }
    .ledger-row:last-child {
        border-bottom: 1px solid #e2ddd0;
    }
    .ruler-mark {
        position: absolute;
        right: 0;
        width: 22px;
        height: 1px;
        background: rgba(203, 30, 27, 0.45);
    }
</style>
@endpush

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden pt-32 pb-16 lg:pt-40 lg:pb-20 bg-[#faf9f5]">
    {{-- Ruler mark: a single deliberate device, not decoration --}}
    <div class="hidden lg:block absolute top-28 bottom-20 right-10 w-px bg-[#e2ddd0]">
        @for ($i = 0; $i <= 10; $i++)
            <span class="ruler-mark" style="top: {{ $i * 10 }}%; width: {{ $i % 5 === 0 ? '22px' : '10px' }};"></span>
        @endfor
    </div>

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 relative">
        <div class="flex items-center gap-3 mb-8">
            <span class="font-code text-xs font-semibold text-[#cb1e1b]">PT.001</span>
            <span class="w-8 h-px bg-[#cb1e1b]"></span>
            <span class="text-xs font-semibold text-[#5c5752] tracking-wide">Putra Maju Sukses, Denpasar Bali</span>
        </div>

        <h1 class="font-display max-w-5xl text-[13vw] sm:text-6xl lg:text-[5.5rem] font-black leading-[0.98] text-[#221f1c]">
            Satu perusahaan.
            <br>
            Empat belas bidang usaha.
        </h1>

        <p class="mt-8 max-w-xl text-base sm:text-lg text-[#5c5752] leading-relaxed">
            Dari peralatan rumah tangga hingga teknologi informasi,
            kami menjalankan kegiatan perdagangan dan jasa lintas sektor
            di bawah satu badan usaha yang sama.
        </p>

        <div class="mt-10 flex flex-wrap items-center gap-4">
            <a href="{{ route('services') }}"
               class="inline-flex items-center justify-center bg-[#cb1e1b] px-8 py-3.5 text-sm font-semibold text-white hover:bg-[#a91614] transition-colors">
                Lihat Bidang Usaha
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center text-sm font-semibold text-[#221f1c] border-b-2 border-[#221f1c] pb-0.5 hover:border-[#cb1e1b] hover:text-[#cb1e1b] transition-colors">
                Hubungi Kami
            </a>
        </div>

        {{-- Ledger strip --}}
        <div class="mt-20 grid grid-cols-2 lg:grid-cols-4 -mx-6 border-t border-[#e2ddd0]">
            <div class="py-6 px-6 border-b lg:border-b-0 border-r border-[#e2ddd0]">
                <p class="font-display text-2xl font-bold text-[#221f1c]">14</p>
                <p class="mt-1 text-xs text-[#5c5752]">Bidang usaha terdaftar</p>
            </div>
            <div class="py-6 px-6 border-b lg:border-b-0 border-[#e2ddd0] lg:border-r">
                <p class="font-display text-2xl font-bold text-[#221f1c]">IT &amp; Komputer</p>
                <p class="mt-1 text-xs text-[#5c5752]">Salah satu lini utama</p>
            </div>
            <div class="py-6 px-6 border-r border-[#e2ddd0]">
                <p class="font-display text-2xl font-bold text-[#221f1c]">Denpasar</p>
                <p class="mt-1 text-xs text-[#5c5752]">Domisili perusahaan</p>
            </div>
            <div class="py-6 px-6">
                <p class="font-display text-2xl font-bold text-[#cb1e1b]">24/7</p>
                <p class="mt-1 text-xs text-[#5c5752]">Layanan terhubung digital</p>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section class="ibm py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-10 mb-16">
            <div class="lg:col-span-7">
                <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-semibold text-[#161616] leading-[1.15] tracking-tight">
                    Cakupan usaha yang luas, dikelola dalam satu atap.
                </h2>
            </div>
            <div class="lg:col-span-5 flex flex-col justify-end">
                <p class="text-[#525252] leading-relaxed">
                    PT. Putra Maju Sukses bergerak dalam berbagai bidang perdagangan
                    dan jasa. Berikut empat lini yang paling banyak berjalan.
                </p>
                <a href="{{ route('about') }}"
                   class="carbon-btn group mt-6 self-start bg-transparent text-[#161616] border border-[#161616] hover:bg-[#161616] hover:text-white">
                    Selengkapnya tentang kami
                    <svg class="w-4 h-4 carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4">
            @php
                $lines = [
                    ['title' => 'Perdagangan', 'desc' => 'Peralatan rumah tangga, dapur, elektronik, olahraga, hingga alat musik.'],
                    ['title' => 'Teknologi Informasi', 'desc' => 'Aktivitas TI dan jasa komputer, termasuk internet service provider.'],
                    ['title' => 'Komputer & Piranti Lunak', 'desc' => 'Perdagangan komputer, perlengkapan komputer, dan piranti lunak.'],
                    ['title' => 'Kebutuhan Bisnis', 'desc' => 'Mesin, alat tulis, bahan konstruksi, dan perlengkapan industri lainnya.'],
                ];
            @endphp

            @foreach($lines as $line)
                <div class="carbon-tile p-6 flex flex-col justify-between min-h-[180px] {{ !$loop->first ? '-ml-px' : '' }}">
                    <h3 class="font-semibold text-[#161616] leading-snug">
                        {{ $line['title'] }}
                    </h3>
                    <div class="flex items-end justify-between gap-2 mt-6">
                        <p class="text-sm text-[#525252] leading-relaxed">
                            {{ $line['desc'] }}
                        </p>
                        <svg class="w-5 h-5 shrink-0 text-[#161616] carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 17L17 7M7 7h10v10"/>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SERVICES / KBLI PREVIEW --}}
<section class="ibm py-24 bg-[#f4f4f4]">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
            <h2 class="text-3xl sm:text-4xl font-semibold text-[#161616] tracking-tight">
                Layanan &amp; KBLI
            </h2>

            <a href="{{ route('services') }}"
               class="carbon-btn group self-start md:self-auto bg-[#cb1e1b] text-white hover:bg-[#a91614]">
                Lihat seluruh 14 bidang usaha
                <svg class="w-4 h-4 carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        @php
            $preview = [
                'Perdagangan Besar Peralatan Masak, Peralatan Dapur, dan Elektronik Rumah Tangga',
                'Aktivitas Teknologi Informasi dan Jasa Komputer Lainnya',
                'Perdagangan Besar Komputer dan Perlengkapan Komputer',
                'Perdagangan Besar Piranti Lunak',
                'Perdagangan Besar Mesin, Peralatan dan Perlengkapan Lainnya',
                'Internet Service Provider',
            ];
        @endphp

        <div class="border-b border-[#e0e0e0]">
            @foreach($preview as $index => $item)
                <a href="{{ route('services') }}"
                   class="carbon-row group flex items-center gap-6 py-5 px-4 -mx-4">
                    <span class="ibm-mono shrink-0 text-sm font-semibold text-[#cb1e1b]">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    <span class="flex-1 text-[#161616] font-medium leading-snug">
                        {{ $item }}
                    </span>
                    <svg class="w-5 h-5 shrink-0 text-[#161616] carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ibm bg-[#161616]">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-20">
        <div class="h-1 w-16 bg-[#cb1e1b] mb-10"></div>

        <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
                <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-semibold text-white leading-[1.15] tracking-tight">
                    Punya kebutuhan atau ingin bekerja sama?
                </h2>
                <p class="mt-4 text-[#c6c6c6] max-w-lg">
                    Jangan ragu untuk menghubungi PT. Putra Maju Sukses.
                </p>
            </div>

            <div class="lg:col-span-4 lg:flex lg:justify-end">
                <a href="{{ route('contact') }}"
                   class="carbon-btn group w-full lg:w-auto mt-6 lg:mt-0 bg-[#cb1e1b] text-white hover:bg-[#a91614]">
                    Hubungi Kami
                    <svg class="w-4 h-4 carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
