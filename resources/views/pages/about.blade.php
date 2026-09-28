@extends('layouts.app')

@section('title', 'Tentang Kami | PT. Putra Maju Sukses')

@section('content')

{{-- PAGE HEADER --}}
<section class="ibm pt-40 pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="h-1 w-16 bg-[#cb1e1b] mb-8"></div>

        <h1 class="text-4xl sm:text-5xl font-semibold text-[#161616] max-w-3xl leading-[1.15] tracking-tight">
            Mengenal PT. Putra Maju Sukses
        </h1>

        <p class="mt-6 max-w-2xl text-[#525252] leading-relaxed">
            Perusahaan dengan cakupan bidang usaha yang beragam
            untuk memenuhi berbagai kebutuhan produk dan layanan.
        </p>
    </div>
</section>

{{-- PROFILE --}}
<section class="ibm py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-16 items-stretch">
            <div class="lg:col-span-5">
                <div class="relative border border-[#e0e0e0] h-full min-h-[320px] overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80"
                        alt="Office"
                        class="absolute inset-0 w-full h-full object-cover"
                    >

                    <div class="absolute bottom-0 left-0 bg-white border-t border-r border-[#e0e0e0] p-6">
                        <p class="text-3xl font-semibold text-[#cb1e1b]">
                            14
                        </p>
                        <p class="text-sm text-[#525252] mt-1">
                            Bidang usaha terdaftar
                        </p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <h2 class="text-3xl font-semibold text-[#161616] tracking-tight">
                    Bertumbuh melalui berbagai peluang
                </h2>

                <div class="mt-6 space-y-5 text-[#525252] leading-relaxed">
                    <p>
                        PT. Putra Maju Sukses merupakan perusahaan
                        yang menjalankan kegiatan usaha di berbagai
                        sektor perdagangan dan jasa.
                    </p>

                    <p>
                        Dengan bidang usaha yang mencakup teknologi
                        informasi, komputer, peralatan rumah tangga,
                        alat olahraga, alat musik, kebutuhan konstruksi
                        hingga mesin dan perlengkapan lainnya.
                    </p>

                    <p>
                        Kami berkomitmen untuk terus memberikan
                        produk dan layanan yang dapat memenuhi
                        kebutuhan pelanggan serta mendukung aktivitas
                        bisnis secara berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VALUES --}}
<section class="ibm py-24 bg-[#f4f4f4]">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-semibold text-[#161616] tracking-tight max-w-xl">
            Prinsip dalam menjalankan usaha
        </h2>

        <div class="mt-12 grid md:grid-cols-3">
            @php
                $values = [
                    ['num' => '01', 'title' => 'Profesional', 'desc' => 'Menjalankan kegiatan usaha secara profesional dengan memperhatikan kebutuhan pelanggan.'],
                    ['num' => '02', 'title' => 'Fleksibel', 'desc' => 'Memiliki cakupan usaha yang luas sehingga dapat beradaptasi dengan berbagai kebutuhan.'],
                    ['num' => '03', 'title' => 'Berkelanjutan', 'desc' => 'Terus mengembangkan layanan dan peluang usaha untuk pertumbuhan jangka panjang.'],
                ];
            @endphp

            @foreach($values as $value)
                <div class="carbon-tile p-8 flex flex-col justify-between min-h-[220px] {{ !$loop->first ? 'md:-ml-px' : '' }}">
                    <span class="ibm-mono text-sm font-semibold text-[#cb1e1b]">
                        {{ $value['num'] }}
                    </span>

                    <div class="mt-8">
                        <h3 class="font-semibold text-lg text-[#161616]">
                            {{ $value['title'] }}
                        </h3>
                        <p class="mt-3 text-sm text-[#525252] leading-relaxed">
                            {{ $value['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
