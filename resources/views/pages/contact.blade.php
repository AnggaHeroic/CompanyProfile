@extends('layouts.app')

@section('title', 'Kontak Kami | PT. Putra Maju Sukses')

@section('content')

<section class="ibm pt-40 pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="h-1 w-16 bg-[#cb1e1b] mb-8"></div>

        <h1 class="text-4xl sm:text-5xl font-semibold text-[#161616] max-w-3xl leading-[1.15] tracking-tight">
            Mari terhubung dengan PT. Putra Maju Sukses
        </h1>

        <p class="mt-6 text-[#525252] max-w-2xl leading-relaxed">
            Silakan hubungi kami untuk pertanyaan, kebutuhan produk,
            layanan, maupun peluang kerja sama.
        </p>
    </div>
</section>

<section class="ibm pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-8">
            {{-- Contact info --}}
            <div class="lg:col-span-2">
                <a
                    href="mailto:sputramaju@gmail.com"
                    class="carbon-row group flex items-center justify-between gap-4 p-6"
                >
                    <div>
                        <p class="text-sm text-[#525252]">Email</p>
                        <p class="mt-1 font-semibold text-[#161616] break-all">sputramaju@gmail.com</p>
                    </div>
                    <svg class="w-5 h-5 shrink-0 text-[#161616] carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 17L17 7M7 7h10v10"/>
                    </svg>
                </a>

                <a
                    href="tel:081130521216"
                    class="carbon-row group flex items-center justify-between gap-4 p-6"
                >
                    <div>
                        <p class="text-sm text-[#525252]">Telepon</p>
                        <p class="mt-1 font-semibold text-[#161616]">0811 3052 1216</p>
                    </div>
                    <svg class="w-5 h-5 shrink-0 text-[#161616] carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 17L17 7M7 7h10v10"/>
                    </svg>
                </a>

                <div class="carbon-row p-6">
                    <p class="text-sm text-[#525252]">Alamat</p>
                    <p class="mt-1 font-semibold text-[#161616] leading-relaxed">
                        Jalan Tukad Batanghari Nomor 6,
                        Panjer, Denpasar Selatan,
                        Kota Denpasar
                    </p>
                </div>
            </div>

            {{-- Map --}}
            <div class="lg:col-span-3">
                <div class="h-full min-h-[500px] border border-[#e0e0e0] overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps?q=Jalan%20Tukad%20Batanghari%20Nomor%206,%20Panjer,%20Denpasar%20Selatan,%20Kota%20Denpasar&output=embed"
                        class="w-full h-full min-h-[500px] border-0"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>

        {{-- Google Maps CTA --}}
        <div class="mt-8 bg-[#161616] p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
            <div>
                <p class="font-semibold text-white">
                    Ingin mengunjungi kantor kami?
                </p>

                <p class="mt-1 text-sm text-[#c6c6c6]">
                    Buka lokasi langsung melalui Google Maps.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Jalan+Tukad+Batanghari+Nomor+6+Panjer+Denpasar"
                target="_blank"
                class="carbon-btn group w-full sm:w-auto bg-[#cb1e1b] text-white hover:bg-[#a91614]"
            >
                Buka Google Maps
                <svg class="w-4 h-4 carbon-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
