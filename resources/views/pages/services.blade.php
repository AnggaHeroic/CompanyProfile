@extends('layouts.app')

@section('title', 'Layanan & KBLI | PT. Putra Maju Sukses')

@section('content')

{{-- PAGE HEADER --}}
<section class="ibm pt-40 pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="h-1 w-16 bg-[#cb1e1b] mb-8"></div>

        <h1 class="text-4xl sm:text-5xl font-semibold text-[#161616] max-w-3xl leading-[1.15] tracking-tight">
            Berbagai bidang usaha dalam satu perusahaan
        </h1>

        <p class="mt-6 max-w-2xl text-[#525252] leading-relaxed">
            PT. Putra Maju Sukses memiliki cakupan kegiatan usaha
            yang meliputi perdagangan, teknologi informasi,
            peralatan, mesin, hingga berbagai kebutuhan lainnya.
        </p>
    </div>
</section>

{{-- KBLI LIST --}}
<section class="ibm pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="flex items-baseline justify-between pb-4">
            <span class="text-sm font-medium text-[#525252]">Bidang Usaha</span>
            <span class="ibm-mono text-sm font-medium text-[#525252]">14 Terdaftar</span>
        </div>

        @php
            $kbli = [
                'Perdagangan Besar Peralatan Masak, Peralatan Dapur, dan Elektronik Rumah Tangga',
                'Perdagangan Besar Peralatan dan Perlengkapan Olahraga',
                'Perdagangan Besar Alat Musik',
                'Aktivitas Teknologi Informasi dan Jasa Komputer Lainnya',
                'Perdagangan Besar Alat Permainan dan Mainan Anak-Anak',
                'Perdagangan Besar Berbagai Barang dan Perlengkapan Rumah Tangga Lainnya YTD',
                'Perdagangan Besar Komputer dan Perlengkapan Komputer',
                'Perdagangan Besar Piranti Lunak',
                'Perdagangan Besar Bahan Konstruksi Lainnya',
                'Perdagangan Besar Mesin, Peralatan dan Perlengkapan Lainnya',
                'Industri Mesin Pendingin',
                'Perdagangan Besar Alat Tulis dan Gambar',
                'Perdagangan Besar Mesin Kantor dan Industri Pengolahan, Suku Cadang dan Perlengkapannya',
                'Internet Service Provider',
            ];
        @endphp

        <div>
            @foreach($kbli as $index => $item)
                <div class="carbon-row group flex items-center gap-6 py-5 px-2 -mx-2">
                    <span class="ibm-mono shrink-0 text-sm font-semibold text-[#cb1e1b] w-8">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    <span class="flex-1 text-[#161616] font-medium leading-snug">
                        {{ $item }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
