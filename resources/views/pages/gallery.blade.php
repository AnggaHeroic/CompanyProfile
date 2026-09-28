@extends('layouts.app')

@section('title', 'Galeri | PT. Putra Maju Sukses')

@section('content')

<section class="pt-40 pb-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <span class="section-label">
            Galeri
        </span>

        <h1 class="mt-5 text-4xl sm:text-5xl font-bold text-[#3f3f3f]">
            Dokumentasi
            <span class="text-[#cb1e1b]">
                kegiatan kami.
            </span>
        </h1>

        <p class="mt-6 max-w-xl text-gray-500 leading-relaxed">
            Kumpulan dokumentasi kegiatan dan aktivitas
            PT. Putra Maju Sukses.
        </p>

    </div>

</section>


<section
    x-data="{ selected: null }"
    class="py-20"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">

            @php
                $gallery = [
                    'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1497366412874-3415097a27e7?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1497366858526-0766cadbe8fa?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1497215842964-222b430dc094?auto=format&fit=crop&w=1000&q=80',
                ];
            @endphp

            @foreach($gallery as $index => $image)

                <button
                    @click="selected = '{{ $image }}'"
                    class="group relative aspect-[4/3] overflow-hidden rounded-2xl bg-gray-100"
                >

                    <img
                        src="{{ $image }}"
                        alt="Galeri PT. Putra Maju Sukses"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                    >

                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition"></div>

                    <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition">

                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white text-[#cb1e1b]">
                            +
                        </span>

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
        class="fixed inset-0 z-[100] bg-black/80 flex items-center justify-center p-5"
        style="display:none"
    >

        <button
            @click="selected = null"
            class="absolute top-5 right-5 w-10 h-10 rounded-full bg-white text-gray-800"
        >
            ×
        </button>

        <img
            :src="selected"
            class="max-w-5xl max-h-[85vh] rounded-xl object-contain"
            alt=""
        >

    </div>

</section>

@endsection