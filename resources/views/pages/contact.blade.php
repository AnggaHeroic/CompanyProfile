@extends('layouts.app')

@section('title', 'Kontak Kami | PT. Putra Maju Sukses')

@section('content')

<section class="pt-40 pb-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <span class="section-label">
            Kontak Kami
        </span>

        <h1 class="mt-5 text-4xl sm:text-5xl font-bold text-[#3f3f3f] max-w-3xl">
            Mari terhubung dengan
            <span class="text-[#cb1e1b]">
                PT. Putra Maju Sukses.
            </span>
        </h1>

        <p class="mt-6 text-gray-500 max-w-2xl leading-relaxed">
            Silakan hubungi kami untuk pertanyaan, kebutuhan produk,
            layanan, maupun peluang kerja sama.
        </p>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-8">
            {{-- Contact info --}}
            <div class="lg:col-span-2">
                <div class="space-y-4">
                    {{-- Email --}}
                    <a
                        href="mailto:sputramaju@gmail.com"
                        class="block p-6 rounded-2xl border border-gray-200 hover:border-[#cb1e1b]/30 hover:shadow-lg transition"
                    >
                        <div class="w-11 h-11 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 7l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>

                        <p class="mt-5 text-xs font-semibold uppercase tracking-wider text-gray-400">
                            Email
                        </p>

                        <p class="mt-1 font-semibold text-[#3f3f3f] break-all">
                            sputramaju@gmail.com
                        </p>
                    </a>

                    {{-- Phone --}}
                    <a
                        href="tel:081130521216"
                        class="block p-6 rounded-2xl border border-gray-200 hover:border-[#cb1e1b]/30 hover:shadow-lg transition"
                    >
                        <div class="w-11 h-11 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 5a2 2 0 012-2h2l2 5-2 2a16 16 0 007 7l2-2 5 2v2a2 2 0 01-2 2h-1C10.82 19 5 13.18 5 6V5z"/>
                            </svg>
                        </div>

                        <p class="mt-5 text-xs font-semibold uppercase tracking-wider text-gray-400">
                            Telepon
                        </p>

                        <p class="mt-1 font-semibold text-[#3f3f3f]">
                            0811 3052 1216
                        </p>
                    </a>

                    {{-- Address --}}
                    <div class="p-6 rounded-2xl border border-gray-200">
                        <div class="w-11 h-11 rounded-xl bg-red-50 text-[#cb1e1b] flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M12 21s7-6 7-12a7 7 0 10-14 0c0 6 7 12 7 12z"/>
                                <circle cx="12" cy="9" r="2.5" stroke-width="1.7"/>
                            </svg>

                        </div>

                        <p class="mt-5 text-xs font-semibold uppercase tracking-wider text-gray-400">
                            Alamat
                        </p>

                        <p class="mt-1 font-semibold text-[#3f3f3f] leading-relaxed">
                            Jalan Tukad Batanghari Nomor 6,
                            Panjer, Denpasar Selatan,
                            Kota Denpasar
                        </p>
                    </div>
                </div>
            </div>

            {{-- Map --}}
            <div class="lg:col-span-3">
                <div class="h-full min-h-[500px] rounded-3xl overflow-hidden border border-gray-200 shadow-sm">
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
        <div class="mt-8 rounded-2xl bg-[#353535] p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">
            <div>
                <p class="font-bold text-white">
                    Ingin mengunjungi kantor kami?
                </p>

                <p class="mt-1 text-sm text-gray-400">
                    Buka lokasi langsung melalui Google Maps.
                </p>
            </div>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Jalan+Tukad+Batanghari+Nomor+6+Panjer+Denpasar"
                target="_blank"
                class="inline-flex items-center justify-center rounded-full bg-[#cb1e1b] px-6 py-3 text-sm font-semibold text-white hover:bg-[#a91614] transition"
            >
                Buka Google Maps
            </a>
        </div>
    </div>
</section>
@endsection