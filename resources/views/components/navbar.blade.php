<header
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 20"
    :class="scrolled
        ? 'bg-white/95 shadow-sm border-gray-100'
        : 'bg-white border-transparent'"
    class="fixed top-0 left-0 right-0 z-50 border-b backdrop-blur-md transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="h-20 flex items-center justify-between">
            {{-- Logo --}}
            <a
                href="{{ route('home') }}"
                class="flex items-center"
            >
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="PT. Putra Maju Sukses"
                    class="w-[145px] sm:w-[165px] h-auto"
                >
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center gap-8">
                <a
                    href="{{ route('home') }}"
                    class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('about') }}"
                    class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                >
                    Tentang Kami
                </a>

                <a
                    href="{{ route('services') }}"
                    class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                >
                    Layanan & KBLI
                </a>

                <a
                    href="{{ route('gallery') }}"
                    class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}"
                >
                    Galeri
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                >
                    Kontak Kami
                </a>

                <a
                    href="https://wa.me/6281130521216"
                    target="_blank"
                    class="ml-2 inline-flex items-center gap-2 rounded-full bg-[#cb1e1b] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#a91614] hover:shadow-md"
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
            </nav>

            {{-- Mobile button --}}
            <button
                @click="open = !open"
                class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-700"
            >
                <svg
                    x-show="!open"
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    x-show="open"
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>

        {{-- Mobile Navigation --}}
        <div
            x-show="open"
            x-transition
            class="lg:hidden border-t border-gray-100 py-5"
        >
            <nav class="flex flex-col gap-2">
                <a
                    href="{{ route('home') }}"
                    class="mobile-nav-link"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('about') }}"
                    class="mobile-nav-link"
                >
                    Tentang Kami
                </a>

                <a
                    href="{{ route('services') }}"
                    class="mobile-nav-link"
                >
                    Layanan & KBLI
                </a>

                <a
                    href="{{ route('gallery') }}"
                    class="mobile-nav-link"
                >
                    Galeri
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="mobile-nav-link"
                >
                    Kontak Kami
                </a>
            </nav>
        </div>
    </div>
</header>