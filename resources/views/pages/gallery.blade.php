@extends('layouts.app')

@section('title', 'Galeri | PT. Putra Maju Sukses')

@section('content')

<section class="ibm pt-40 pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="h-1 w-16 bg-[#cb1e1b] mb-8"></div>

        <h1 class="text-4xl sm:text-5xl font-semibold text-[#161616] leading-[1.15] tracking-tight">
            Dokumentasi kegiatan kami
        </h1>

        <p class="mt-6 max-w-xl text-[#525252] leading-relaxed">
            Kumpulan dokumentasi kegiatan dan aktivitas
            PT. Putra Maju Sukses.
        </p>
    </div>
</section>

<section
    x-data="{ selected: null }"
    class="ibm pb-24 bg-white"
>
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-3 auto-rows-[160px] sm:auto-rows-[200px] lg:auto-rows-[220px] gap-px bg-[#e0e0e0] border border-[#e0e0e0]">

            @php
                $gallery = [
                    ['src' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1600&q=80', 'featured' => true],
                    ['src' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80', 'featured' => false],
                    ['src' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1000&q=80', 'featured' => false],
                    ['src' => 'https://images.unsplash.com/photo-1497366412874-3415097a27e7?auto=format&fit=crop&w=1000&q=80', 'featured' => false],
                    ['src' => 'https://images.unsplash.com/photo-1497366858526-0766cadbe8fa?auto=format&fit=crop&w=1000&q=80', 'featured' => false],
                    ['src' => 'https://images.unsplash.com/photo-1497215842964-222b430dc094?auto=format&fit=crop&w=1000&q=80', 'featured' => false],
                ];
            @endphp

            @foreach($gallery as $item)
                <button
                    @click="selected = '{{ $item['src'] }}'"
                    class="group relative overflow-hidden bg-white {{ $item['featured'] ? 'col-span-2 row-span-2' : '' }}"
                >
                    <img
                        src="{{ $item['src'] }}"
                        alt="Galeri PT. Putra Maju Sukses"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                    >

                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition"></div>

                    <div class="absolute bottom-0 right-0 w-10 h-10 flex items-center justify-center bg-white text-[#cb1e1b] opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h6m0 0v6m0-6L14 10M9 21H3m0 0v-6m0 6l7-7"/>
                        </svg>
                    </div>
                </button>
            @endforeach

        </div>
    </div>

    {{-- Lightbox --}}
    <div
        x-show="selected"
        x-transition.opacity
        @click.self="selected = null"
        @keydown.escape.window="selected = null"
        class="fixed inset-0 z-[100] bg-black/90 flex items-center justify-center p-5"
        style="display:none"
    >
        <button
            @click="selected = null"
            class="absolute top-5 right-5 w-10 h-10 flex items-center justify-center bg-white text-[#161616]"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <img
            :src="selected"
            class="max-w-5xl max-h-[85vh] object-contain"
            alt=""
        >
    </div>
</section>

@endsection