@extends('layouts.app')

@section('title', 'PT. Putra Maju Sukses | Beranda')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[720px] lg:min-h-[780px] flex items-center overflow-hidden pt-20">
    {{-- Decorative Lines --}}
    <div class="absolute top-32 right-0 w-[420px] h-[420px] pointer-events-none opacity-40">
        <div class="absolute right-0 top-0 w-72 h-72 border-t-2 border-r-2 border-[#cb1e1b]"></div>
        <div class="absolute right-16 top-16 w-72 h-72 border-t-2 border-r-2 border-[#cb1e1b]"></div>
        <div class="absolute right-32 top-32 w-72 h-72 border-t-2 border-r-2 border-[#cb1e1b]"></div>
    </div>

    <div class="absolute bottom-0 left-0 w-40 h-40 border-l-2 border-b-2 border-[#cb1e1b]/30"></div>
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 w-full relative">
        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-3 mb-7">
                <span class="w-10 h-[2px] bg-[#cb1e1b]"></span>
                <span class="text-[#cb1e1b] text-sm font-bold tracking-[0.18em] uppercase">
                    PT. Putra Maju Sukses
                </span>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight text-[#3f3f3f] leading-[1.08]">
                Membangun
                <span class="text-[#cb1e1b]">
                    kebutuhan bisnis
                </span>
                untuk masa depan.
            </h1>

            <p class="mt-7 text-base sm:text-lg text-gray-500 leading-relaxed max-w-2xl">
                Kami hadir dengan berbagai solusi produk dan layanan,
                mulai dari perdagangan peralatan rumah tangga,
                teknologi informasi, komputer, hingga kebutuhan bisnis lainnya.
            </p>

            <div class="mt-9 flex flex-col sm:flex-row gap-3">
                <a
                    href="{{ route('services') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-[#cb1e1b] px-7 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-900/10 hover:bg-[#a91614] transition"
                >
                    Jelajahi Layanan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center rounded-full border border-gray-300 px-7 py-3.5 text-sm font-semibold text-gray-700 hover:border-[#cb1e1b] hover:text-[#cb1e1b] transition"
                >
                    Hubungi Kami
                </a>
            </div>
        </div>

        {{-- Info strip --}}
        <div class="mt-20 grid grid-cols-2 lg:grid-cols-4 border-y border-gray-200">
            <div class="py-7 pr-6">
                <p class="text-2xl font-bold text-[#3f3f3f]">
                    14+
                </p>
                <p class="text-sm text-gray-500 mt-1">
                    Bidang Usaha
                </p>
            </div>

            <div class="py-7 px-6 border-l border-gray-200">
                <p class="text-2xl font-bold text-[#3f3f3f]">
                    IT
                </p>
                <p class="text-sm text-gray-500 mt-1">
                    Solusi Teknologi
                </p>
            </div>

            <div class="py-7 px-6 border-t lg:border-t-0 lg:border-l border-gray-200">
                <p class="text-2xl font-bold text-[#3f3f3f]">
                    Bali
                </p>
                <p class="text-sm text-gray-500 mt-1">
                    Berbasis di Denpasar
                </p>
            </div>

            <div class="py-7 pl-6 border-l border-gray-200 border-t lg:border-t-0">
                <p class="text-2xl font-bold text-[#cb1e1b]">
                    24/7
                </p>
                <p class="text-sm text-gray-500 mt-1">
                    Terhubung Secara Digital
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT PREVIEW --}}
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div>
                <span class="section-label">
                    Tentang Kami
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-bold text-[#3f3f3f] leading-tight">
                    Satu perusahaan,
                    <span class="text-[#cb1e1b]">
                        berbagai kebutuhan.
                    </span>
                </h2>

                <p class="mt-6 text-gray-500 leading-relaxed">
                    PT. Putra Maju Sukses bergerak dalam berbagai bidang
                    perdagangan dan jasa. Dengan cakupan usaha yang luas,
                    kami berkomitmen menyediakan produk dan layanan yang
                    dapat mendukung kebutuhan individu maupun bisnis.
                </p>

                <a
                    href="{{ route('about') }}"
                    class="inline-flex items-center gap-2 mt-7 text-sm font-semibold text-[#cb1e1b] hover:gap-3 transition-all"
                >
                    Selengkapnya

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-7 rounded-2xl border border-gray-100 card-hover">
                    <div class="w-12 h-12 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 7h18M5 7v13h14V7M8 7V4h8v3"/>
                        </svg>
                    </div>

                    <h3 class="font-bold text-[#3f3f3f]">
                        Perdagangan
                    </h3>

                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                        Berbagai kebutuhan produk dan perlengkapan.
                    </p>
                </div>

                <div class="bg-white p-7 rounded-2xl border border-gray-100 card-hover mt-8">
                    <div class="w-12 h-12 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5h16v14H4zM8 9h8M8 13h5"/>
                        </svg>
                    </div>

                    <h3 class="font-bold text-[#3f3f3f]">
                        Teknologi
                    </h3>

                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                        Solusi teknologi informasi dan komputer.
                    </p>
                </div>

                <div class="bg-white p-7 rounded-2xl border border-gray-100 card-hover">
                    <div class="w-12 h-12 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 3v18M3 12h18"/>
                        </svg>
                    </div>

                    <h3 class="font-bold text-[#3f3f3f]">
                        Beragam Produk
                    </h3>

                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                        Produk untuk kebutuhan rumah dan bisnis.
                    </p>
                </div>

                <div class="bg-white p-7 rounded-2xl border border-gray-100 card-hover mt-8">
                    <div class="w-12 h-12 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12l4 4L19 6"/>
                        </svg>
                    </div>

                    <h3 class="font-bold text-[#3f3f3f]">
                        Profesional
                    </h3>

                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                        Mengutamakan pelayanan dan kebutuhan pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- SERVICES --}}
<section class="py-24">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <div>
                <span class="section-label">
                    Bidang Usaha
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-bold text-[#3f3f3f]">
                    Layanan & KBLI
                </h2>

            </div>

            <a
                href="{{ route('services') }}"
                class="text-sm font-semibold text-[#cb1e1b]"
            >
                Lihat semua bidang usaha →
            </a>
        </div>


        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
                $services = [
                    [
                        'title' => 'Peralatan Rumah Tangga',
                        'desc' => 'Perdagangan peralatan masak, dapur, elektronik dan kebutuhan rumah tangga.'
                    ],
                    [
                        'title' => 'Teknologi Informasi',
                        'desc' => 'Aktivitas teknologi informasi dan berbagai jasa komputer lainnya.'
                    ],
                    [
                        'title' => 'Komputer & Software',
                        'desc' => 'Perdagangan komputer, perlengkapan komputer dan piranti lunak.'
                    ],
                    [
                        'title' => 'Peralatan Olahraga',
                        'desc' => 'Penyediaan berbagai peralatan dan perlengkapan olahraga.'
                    ],
                    [
                        'title' => 'Alat Musik',
                        'desc' => 'Perdagangan besar berbagai alat musik dan kebutuhan pendukungnya.'
                    ],
                    [
                        'title' => 'Kebutuhan Bisnis',
                        'desc' => 'Mesin, peralatan, perlengkapan, alat tulis dan berbagai kebutuhan lainnya.'
                    ],
                ];
            @endphp

            @foreach($services as $service)
                <div class="group p-7 rounded-2xl border border-gray-200 hover:border-[#cb1e1b]/30 hover:shadow-xl hover:shadow-gray-900/5 transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="w-11 h-11 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M12 6v12M6 12h12"/>
                            </svg>
                        </div>

                        <span class="text-gray-300 group-hover:text-[#cb1e1b] transition">
                            →
                        </span>
                    </div>

                    <h3 class="mt-6 font-bold text-lg text-[#3f3f3f]">
                        {{ $service['title'] }}
                    </h3>

                    <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                        {{ $service['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="pb-24">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-[#353535] px-7 py-12 sm:px-12 sm:py-16">
            <div class="absolute right-0 top-0 w-64 h-64 border-t border-r border-[#cb1e1b]/60"></div>
            <div class="absolute right-12 top-12 w-64 h-64 border-t border-r border-[#cb1e1b]/30"></div>
            <div class="relative max-w-2xl">
                <p class="text-[#ef413d] text-sm font-semibold">
                    TERHUBUNG DENGAN KAMI
                </p>

                <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-white">
                    Punya kebutuhan atau ingin bekerja sama?
                </h2>

                <p class="mt-4 text-gray-400">
                    Jangan ragu untuk menghubungi PT. Putra Maju Sukses.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex mt-7 rounded-full bg-white px-6 py-3 text-sm font-semibold text-[#3f3f3f] hover:bg-gray-100 transition"
                >
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection