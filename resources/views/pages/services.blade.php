@extends('layouts.app')

@section('title', 'Layanan & KBLI | PT. Putra Maju Sukses')

@section('content')

<section class="pt-40 pb-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <span class="section-label">
            Layanan & KBLI
        </span>

        <h1 class="mt-5 text-4xl sm:text-5xl font-bold text-[#3f3f3f] max-w-3xl">
            Berbagai bidang usaha
            <span class="text-[#cb1e1b]">
                dalam satu perusahaan.
            </span>
        </h1>

        <p class="mt-6 text-gray-500 max-w-2xl leading-relaxed">
            PT. Putra Maju Sukses memiliki cakupan kegiatan usaha
            yang meliputi perdagangan, teknologi informasi,
            peralatan, mesin, hingga berbagai kebutuhan lainnya.
        </p>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
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

            @foreach($kbli as $index => $item)
                <article
                    class="group rounded-2xl border border-gray-200 p-7 hover:border-[#cb1e1b]/30 hover:shadow-xl hover:shadow-gray-900/5 transition-all duration-300"
                >

                    <div class="flex items-start justify-between">
                        <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-red-50 text-[#cb1e1b] font-bold text-sm">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <span class="text-gray-300 group-hover:text-[#cb1e1b] transition text-xl">
                            ↗
                        </span>
                    </div>

                    <h2 class="mt-7 text-lg font-bold text-[#3f3f3f] leading-snug">
                        {{ $item }}
                    </h2>

                    <div class="mt-6 w-8 h-[2px] bg-[#cb1e1b] group-hover:w-14 transition-all"></div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection