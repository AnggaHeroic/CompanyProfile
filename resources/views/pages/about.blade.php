@extends('layouts.app')

@section('title', 'Tentang Kami | PT. Putra Maju Sukses')

@section('content')

<section class="pt-40 pb-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <span class="section-label">
            Tentang Kami
        </span>

        <h1 class="mt-5 text-4xl sm:text-5xl font-bold text-[#3f3f3f] max-w-3xl">
            Mengenal lebih dekat
            <span class="text-[#cb1e1b]">
                PT. Putra Maju Sukses
            </span>
        </h1>

        <p class="mt-6 max-w-2xl text-gray-500 leading-relaxed">
            Perusahaan dengan cakupan bidang usaha yang beragam
            untuk memenuhi berbagai kebutuhan produk dan layanan.
        </p>
    </div>
</section>


<section class="py-24">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl bg-gray-100 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80"
                        alt="Office"
                        class="w-full h-full object-cover"
                    >
                </div>

                <div class="absolute -bottom-7 -right-5 sm:right-8 bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                    <p class="text-3xl font-bold text-[#cb1e1b]">
                        14+
                    </p>
                    <p class="text-sm text-gray-500 mt-1">
                        Bidang usaha
                    </p>
                </div>
            </div>

            <div>
                <span class="section-label">
                    Profil Perusahaan
                </span>

                <h2 class="mt-5 text-3xl font-bold text-[#3f3f3f]">
                    Bertumbuh melalui
                    <span class="text-[#cb1e1b]">
                        berbagai peluang.
                    </span>
                </h2>

                <div class="mt-6 space-y-5 text-gray-500 leading-relaxed">
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

<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <span class="section-label">
                Nilai Kami
            </span>

            <h2 class="mt-5 text-3xl sm:text-4xl font-bold text-[#3f3f3f]">
                Prinsip dalam menjalankan usaha
            </h2>
        </div>

        <div class="mt-12 grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-8 border border-gray-100">
                <div class="text-[#cb1e1b] text-3xl font-bold">
                    01
                </div>

                <h3 class="mt-5 font-bold text-xl">
                    Profesional
                </h3>

                <p class="mt-3 text-gray-500 text-sm leading-relaxed">
                    Menjalankan kegiatan usaha secara profesional
                    dengan memperhatikan kebutuhan pelanggan.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-gray-100">
                <div class="text-[#cb1e1b] text-3xl font-bold">
                    02
                </div>

                <h3 class="mt-5 font-bold text-xl">
                    Fleksibel
                </h3>

                <p class="mt-3 text-gray-500 text-sm leading-relaxed">
                    Memiliki cakupan usaha yang luas sehingga dapat
                    beradaptasi dengan berbagai kebutuhan.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-gray-100">
                <div class="text-[#cb1e1b] text-3xl font-bold">
                    03
                </div>

                <h3 class="mt-5 font-bold text-xl">
                    Berkelanjutan
                </h3>

                <p class="mt-3 text-gray-500 text-sm leading-relaxed">
                    Terus mengembangkan layanan dan peluang usaha
                    untuk pertumbuhan jangka panjang.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection