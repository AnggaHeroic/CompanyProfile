<footer class="bg-[#303030] text-white">
    {{-- CTA --}}
    <div class="border-b border-white/10">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-14">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                <div>
                    <p class="text-[#e63a36] text-sm font-semibold mb-2">
                        PT. PUTRA MAJU SUKSES
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-bold">
                        Mari membangun kerja sama bersama kami.
                    </h2>

                    <p class="mt-3 text-gray-400 max-w-xl">
                        Hubungi kami untuk informasi lebih lanjut mengenai
                        produk, layanan, maupun kebutuhan bisnis Anda.
                    </p>
                </div>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-[#cb1e1b] px-6 py-3 font-semibold transition hover:bg-[#a91614]"
                >
                    Hubungi Kami
                    <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"
                        />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Main Footer --}}
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            {{-- Brand --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl p-3 inline-block mb-5">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="PT. Putra Maju Sukses"
                        class="w-[165px]"
                    >
                </div>

                <p class="text-gray-400 leading-relaxed max-w-md">
                    PT. Putra Maju Sukses merupakan perusahaan yang bergerak
                    di berbagai bidang perdagangan, teknologi informasi,
                    perlengkapan rumah tangga, serta kebutuhan lainnya.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="font-semibold mb-5">
                    Navigasi
                </h3>

                <ul class="space-y-3 text-gray-400 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-white">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="hover:text-white">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}" class="hover:text-white">
                            Layanan & KBLI
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('gallery') }}" class="hover:text-white">
                            Galeri
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-white">
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="font-semibold mb-5">
                    Kontak
                </h3>

                <ul class="space-y-4 text-sm text-gray-400">
                    <li>
                        sputramaju@gmail.com
                    </li>

                    <li>
                        0811 3052 1216
                    </li>

                    <li class="leading-relaxed">
                        Jalan Tukad Batanghari Nomor 6,
                        Panjer, Denpasar Selatan,
                        Kota Denpasar
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-5">
            <p class="text-center text-xs text-gray-500">
                © {{ date('Y') }} PT. Putra Maju Sukses.
                All rights reserved.
            </p>
        </div>
    </div>
</footer>