<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Kopi Kita - UMKM Biji Kopi Premium Nusantara. Kopi pilihan kualitas tinggi langsung dari petani lokal Indonesia. Cita rasa otentik untuk setiap seduhan Anda.">

    <title>@yield('title', 'Kopi Kita | Biji Kopi Premium Nusantara')</title>

    <!-- Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,600;0,6..72,700;1,6..72,400&family=IBM+Plex+Mono:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- GSAP & ScrollTrigger Animation Library -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <!-- CSS & JS Assets (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-coffee-50 text-coffee-950 font-sans antialiased min-h-screen flex flex-col selection:bg-coffee-200 selection:text-coffee-900"
    x-data="{ mobileMenuOpen: false }">
    <!-- Tactile Grain Film Overlay -->
    <div class="grain-overlay"></div>

    <!-- Page Loader Curtain -->
    <div id="page-loader">
        <div class="loader-content">
            <span class="w-12 h-12 rounded-none bg-coffee-850 flex items-center justify-center text-coffee-100 font-serif font-bold text-2xl shadow-sm mx-auto mb-4 border border-coffee-700/50">K</span>
            <h2 class="font-serif text-xl font-bold text-coffee-100 tracking-wide">Kopi<span class="text-coffee-300 font-sans font-normal">Kita</span></h2>
            <div class="w-16 h-[1px] bg-coffee-800 mx-auto mt-4 overflow-hidden relative border-t border-coffee-700/40">
                <div class="absolute inset-y-0 left-0 w-8 bg-coffee-400" id="loader-progress-bar"></div>
            </div>
        </div>
    </div>
    
    <!-- Custom Cursor Follower -->
    <div class="custom-cursor" id="custom-cursor"></div>
    <div class="custom-cursor-dot" id="custom-cursor-dot"></div>

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 transition-all duration-300 w-full glass border-b border-coffee-200/30"
        x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 10)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                        <span
                            class="w-10 h-10 rounded-none bg-coffee-800 flex items-center justify-center text-coffee-100 font-serif font-bold text-xl shadow-md group-hover:bg-coffee-700 transition duration-300">K</span>
                        <span
                            class="font-serif font-bold text-2xl tracking-wide text-coffee-900 group-hover:text-coffee-700 transition duration-300">Kopi<span
                                class="text-coffee-500 font-sans font-normal">Kita</span></span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}"
                        class="font-medium text-sm tracking-wide text-coffee-800 hover:text-coffee-600 transition-colors duration-300 nav-link-custom {{ Route::is('home') ? 'active text-coffee-700' : '' }}">Beranda</a>
                    <a href="{{ route('about') }}"
                        class="font-medium text-sm tracking-wide text-coffee-800 hover:text-coffee-600 transition-colors duration-300 nav-link-custom {{ Route::is('about') ? 'active text-coffee-700' : '' }}">Tentang
                        Kami</a>
                    <a href="{{ route('products') }}"
                        class="font-medium text-sm tracking-wide text-coffee-800 hover:text-coffee-600 transition-colors duration-300 nav-link-custom {{ Route::is('products') ? 'active text-coffee-700' : '' }}">Katalog</a>
                    <a href="{{ route('contact') }}"
                        class="font-medium text-sm tracking-wide text-coffee-800 hover:text-coffee-600 transition-colors duration-300 nav-link-custom {{ Route::is('contact') ? 'active text-coffee-700' : '' }}">Kontak</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center justify-center px-6 py-2.5 border border-coffee-950 rounded-none text-xs font-bold text-white bg-coffee-950 hover:bg-white hover:text-coffee-950 transition-all duration-300">
                        BELI SEKARANG &rarr;
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-lg text-coffee-800 hover:text-coffee-600 hover:bg-coffee-100 transition duration-300"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Buka menu utama</span>
                        <svg class="h-6 w-6" x-show="!mobileMenuOpen" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" x-show="mobileMenuOpen" x-cloak fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Drawer style) -->
        <div class="md:hidden" id="mobile-menu" x-show="mobileMenuOpen"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
            x-cloak>
            <div class="px-2 pt-2 pb-4 space-y-1 bg-coffee-50 border-b border-coffee-200">
                <a href="{{ route('home') }}"
                    class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ Route::is('home') ? 'bg-coffee-100 text-coffee-800' : 'text-coffee-700 hover:bg-coffee-100 hover:text-coffee-900' }}">Beranda</a>
                <a href="{{ route('about') }}"
                    class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ Route::is('about') ? 'bg-coffee-100 text-coffee-800' : 'text-coffee-700 hover:bg-coffee-100 hover:text-coffee-900' }}">Tentang
                    Kami</a>
                <a href="{{ route('products') }}"
                    class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ Route::is('products') ? 'bg-coffee-100 text-coffee-800' : 'text-coffee-700 hover:bg-coffee-100 hover:text-coffee-900' }}">Katalog</a>
                <a href="{{ route('contact') }}"
                    class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ Route::is('contact') ? 'bg-coffee-100 text-coffee-800' : 'text-coffee-700 hover:bg-coffee-100 hover:text-coffee-900' }}">Kontak</a>
                <div class="pt-4 pb-2 px-3">
                    <a href="{{ route('products') }}"
                        class="w-full flex items-center justify-center px-4 py-3 border border-coffee-950 rounded-none text-xs font-bold text-white bg-coffee-950 hover:bg-white hover:text-coffee-955 transition duration-300">
                        BELI SEKARANG &rarr;
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow animate-fade-in">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-coffee-950 text-coffee-100 w-full pt-16 pb-8 border-t border-coffee-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Branding and bio -->
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <span
                            class="w-9 h-9 rounded-lg bg-coffee-500 flex items-center justify-center text-coffee-950 font-serif font-bold text-lg">K</span>
                        <span class="font-serif font-bold text-xl tracking-wide text-white">Kopi<span
                                class="text-coffee-400 font-sans font-normal">Kita</span></span>
                    </div>
                    <p class="text-coffee-300 text-sm leading-relaxed mb-4">
                        Kopi Kita menyajikan biji kopi Arabika & Robusta kualitas premium pilihan langsung dari petani
                        lokal di seluruh kepulauan Indonesia. Disangrai dengan presisi tinggi untuk menghadirkan rasa
                        nusantara sesungguhnya.
                    </p>
                </div>

                <!-- Quick links -->
                <div>
                    <h3 class="font-semibold text-white tracking-wider text-base mb-4 uppercase">Navigasi</h3>
                    <ul class="space-y-2.5 text-sm text-coffee-300">
                        <li><a href="{{ route('home') }}"
                                class="hover:text-coffee-400 hover:translate-x-1 inline-block transition duration-200">Beranda</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="hover:text-coffee-400 hover:translate-x-1 inline-block transition duration-200">Tentang
                                Kami</a></li>
                        <li><a href="{{ route('products') }}"
                                class="hover:text-coffee-400 hover:translate-x-1 inline-block transition duration-200">Katalog</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="hover:text-coffee-400 hover:translate-x-1 inline-block transition duration-200">Kontak
                                Kami</a></li>
                    </ul>
                </div>

                <!-- Operational hours -->
                <div>
                    <h3 class="font-semibold text-white tracking-wider text-base mb-4 uppercase">Jam Operasional</h3>
                    <ul class="space-y-2 text-sm text-coffee-300">
                        <li><span class="text-white font-medium">Senin - Jumat:</span> 09.00 - 21.00 WIB</li>
                        <li><span class="text-white font-medium">Sabtu - Minggu:</span> 09.00 - 22.00 WIB</li>
                        <li class="pt-3">
                            <span class="text-coffee-400 text-xs italic">*Hari Libur Nasional tetap buka.</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact details -->
                <div>
                    <h3 class="font-semibold text-white tracking-wider text-base mb-4 uppercase">Hubungi Kami</h3>
                    <ul class="space-y-3 text-sm text-coffee-300">
                        <li class="flex items-start gap-2.5">
                            <svg class="h-5 w-5 text-coffee-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Kopi Harum No. 45, Bandung, Jawa Barat</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="h-5 w-5 text-coffee-400 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="h-5 w-5 text-coffee-400 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>halo@kopikita.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Divider and copyright -->
            <div
                class="border-t border-coffee-900 pt-8 mt-8 flex flex-col md:flex-row items-center justify-between text-xs text-coffee-400">
                <p>&copy; {{ date('Y') }} Kopi Kita Roastery & Café. Hak Cipta Dilindungi.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition duration-200">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition duration-200">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Floating Barista Assistant Widget -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end" x-data="{ 
        open: false, 
        messages: [], 
        typing: false, 
        inputMessage: '',
        init() {
            this.messages.push({
                sender: 'aris',
                text: 'Halo! Saya Aris, Barista Virtual Kopi Kita. Ada yang bisa saya bantu hari ini? ☕',
                productCard: null
            });
        },
        askPreset(question, answer, productCard = null) {
            this.messages.push({ sender: 'user', text: question, productCard: null });
            this.typing = true;
            setTimeout(() => {
                this.typing = false;
                this.messages.push({ sender: 'aris', text: answer, productCard: productCard });
            }, 1000);
        },
        sendMessage() {
            if (this.inputMessage.trim() === '') return;
            let userMsg = this.inputMessage;
            let query = userMsg.toLowerCase();
            this.messages.push({ sender: 'user', text: userMsg, productCard: null });
            this.inputMessage = '';
            this.typing = true;
            
            setTimeout(() => {
                this.typing = false;
                let reply = '';
                let productCard = null;
                
                if (query.includes('kintamani') || query.includes('jeruk') || query.includes('asam') || query.includes('bali')) {
                    reply = 'Untuk profil rasa segar buah sitrus jeruk bali dan manis tebu alami, Kintamani Arabica dengan proses Natural adalah pilihan paling eksklusif! Silakan klik kartu di bawah ini untuk melihat detail lengkap biji kopi.';
                    productCard = {
                        name: 'Bali Kintamani Arabica',
                        desc: 'Specialty Grade • Rasa jeruk segar & manis tebu alami. Sempurna untuk filter manual.',
                        price: 'Rp 58.000',
                        image: 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&q=80&w=600',
                        link: '{{ route("products.show", 3) }}'
                    };
                } else if (query.includes('bajawa') || query.includes('flores') || query.includes('cokelat') || query.includes('coklat') || query.includes('manis')) {
                    reply = 'Flores Bajawa Arabica menyajikan aroma bunga manis (floral) dengan hint rasa milk chocolate yang creamy serta keasaman seimbang. Sangat mewah untuk seduh filter harian!';
                    productCard = {
                        name: 'Flores Bajawa Arabica',
                        desc: 'Micro-Lot Reserve • Rasa manis cokelat karamel & floral wangi. Keseimbangan sensori tinggi.',
                        price: 'Rp 55.000',
                        image: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&q=80&w=600',
                        link: '{{ route("products.show", 1) }}'
                    };
                } else if (query.includes('gayo') || query.includes('herbal') || query.includes('rempah') || query.includes('bold')) {
                    reply = 'Aceh Gayo Arabica legendaris diproses giling basah tradisional (wet hulled) untuk menghasilkan body yang sangat tebal, minim asam, dan rasa rempah herbal yang eksotis.';
                    productCard = {
                        name: 'Aceh Gayo Arabica',
                        desc: 'SCA Grade 1 • Rasa rempah eksotis, herbal, dan dark cocoa pekat. Ramah lambung.',
                        price: 'Rp 60.000',
                        image: 'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&q=80&w=600',
                        link: '{{ route("products.show", 2) }}'
                    };
                } else if (query.includes('toraja') || query.includes('madu') || query.includes('earthy')) {
                    reply = 'Toraja Kalosi Arabica dari Micro-Lot Reserve menawarkan rasa pekat bersahaja (earthy) dengan aftertaste manis madu hitam liar yang tahan lama.';
                    productCard = {
                        name: 'Toraja Kalosi Arabica',
                        desc: 'Limited Micro-Lot • Rasa pekat earthy, herbal, dan manis madu hitam. Sangat berkarakter.',
                        price: 'Rp 62.000',
                        image: 'https://images.unsplash.com/photo-1587960301182-d3918a0ffbe2?auto=format&fit=crop&q=80&w=600',
                        link: '{{ route("products.show", 4) }}'
                    };
                } else if (query.includes('susu') || query.includes('aren') || query.includes('senja') || query.includes('espresso') || query.includes('blend')) {
                    reply = 'Senja Espresso Blend memadukan 70% Arabika Flores dan 30% Robusta Temanggung, menghasilkan crema tebal beraroma karamel yang bold, cocok untuk menu kopi susu kekinian.';
                    productCard = {
                        name: 'Senja Espresso Blend',
                        desc: 'Roaster Signature • Rasa karamel, kacang panggang & creamy body. Ideal untuk espresso.',
                        price: 'Rp 45.000',
                        image: 'https://images.unsplash.com/photo-1610632380989-680fe40816c6?auto=format&fit=crop&q=80&w=600',
                        link: '{{ route("products.show", 5) }}'
                    };
                } else {
                    reply = 'Terima kasih atas pesan Anda mengenai Specialty Coffee! Untuk Anda, saya sangat merekomendasikan Flores Bajawa Arabica (Micro-Lot Reserve) yang manis, floral, dan berkarakter seimbang. Cek detail bijinya di bawah:';
                    productCard = {
                        name: 'Flores Bajawa Arabica',
                        desc: 'Micro-Lot Reserve • Rasa manis cokelat karamel & floral wangi. Paling seimbang.',
                        price: 'Rp 55.000',
                        image: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&q=80&w=600',
                        link: '{{ route("products.show", 1) }}'
                    };
                }
                
                this.messages.push({ sender: 'aris', text: reply, productCard: productCard });
            }, 1200);
        }
    }">
        <!-- Bubble Button -->
        <button @click="open = !open"
            class="w-14 h-14 rounded-full bg-coffee-800 text-white flex items-center justify-center shadow-lg hover:bg-coffee-700 hover:scale-105 active:scale-95 transition-all duration-300 relative focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-coffee-500">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="!open">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="open" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <!-- Notification Badge -->
            <span class="absolute top-0 right-0 flex h-3.5 w-3.5" x-show="!open && messages.length === 1">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-coffee-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-coffee-500"></span>
            </span>
        </button>

        <!-- Chat Drawer Window -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-y-8 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-8 scale-95"
            class="absolute bottom-16 right-0 w-80 sm:w-96 bg-white rounded-3xl shadow-2xl border-2 border-coffee-800/80 overflow-hidden flex flex-col z-50"
            x-cloak>
            <!-- Header -->
            <div class="bg-coffee-800 p-4 text-white flex items-center gap-3">
                <div
                    class="w-10 h-10 rounded-full bg-coffee-600 flex items-center justify-center font-bold text-sm text-coffee-100">
                    A
                </div>
                <div>
                    <h4 class="font-serif font-bold text-sm text-white">Barista Aris</h4>
                    <span class="block text-[10px] text-coffee-300">Virtual Assistant • Online</span>
                </div>
            </div>

            <!-- Chat Messages Area -->
            <div class="flex-grow p-4 space-y-3 max-h-72 overflow-y-auto bg-coffee-50/50" id="chat-messages"
                x-init="$watch('messages', () => { $nextTick(() => { $el.scrollTop = $el.scrollHeight }) })">
                <template x-for="msg in messages">
                    <div :class="msg.sender === 'user' ? 'justify-end' : 'justify-start'"
                        class="flex items-start gap-2.5">
                        <!-- Avatar for Barista -->
                        <div x-show="msg.sender === 'aris'"
                            class="w-6 h-6 rounded-full bg-coffee-300 text-coffee-800 text-[10px] font-bold flex items-center justify-center shrink-0">
                            A</div>

                        <div class="flex flex-col gap-2 max-w-[80%]">
                            <div :class="msg.sender === 'user' ? 'bg-coffee-800 text-white rounded-tr-none' : 'bg-white text-coffee-900 border border-coffee-200/60 rounded-tl-none'"
                                class="p-3 rounded-2xl text-xs shadow-sm leading-relaxed" x-text="msg.text">
                            </div>

                            <!-- Dynamic Product Recommendation Card -->
                            <template x-if="msg.productCard">
                                <div
                                    class="bg-white border border-coffee-200 rounded-2xl overflow-hidden shadow-sm flex flex-col mt-1">
                                    <img :src="msg.productCard.image" class="h-24 w-full object-cover">
                                    <div class="p-3">
                                        <h5 class="font-serif font-bold text-xs text-coffee-950"
                                            x-text="msg.productCard.name"></h5>
                                        <p class="text-[10px] text-coffee-600 mt-0.5 leading-normal"
                                            x-text="msg.productCard.desc"></p>
                                        <div
                                            class="flex items-center justify-between mt-3 pt-2 border-t border-coffee-100">
                                            <span class="text-xs font-bold text-coffee-900"
                                                x-text="msg.productCard.price"></span>
                                            <a :href="msg.productCard.link"
                                                class="text-[9px] font-bold bg-coffee-800 text-white px-2.5 py-1 rounded-full hover:bg-coffee-700 transition">
                                                Detail Kopi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
                <!-- Typing Indicator -->
                <div x-show="typing" class="flex items-center gap-2 justify-start" x-cloak>
                    <div
                        class="w-6 h-6 rounded-full bg-coffee-300 text-coffee-800 text-[10px] font-bold flex items-center justify-center shrink-0">
                        A</div>
                    <div
                        class="bg-white border border-coffee-200/60 rounded-2xl rounded-tl-none p-3 shadow-sm flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 bg-coffee-500 rounded-full animate-bounce"></span>
                        <span
                            class="w-1.5 h-1.5 bg-coffee-500 rounded-full animate-bounce [animation-delay:0.2s]"></span>
                        <span
                            class="w-1.5 h-1.5 bg-coffee-500 rounded-full animate-bounce [animation-delay:0.4s]"></span>
                    </div>
                </div>
            </div>

            <!-- Preset Buttons -->
            <div class="p-3 border-t border-coffee-100 bg-white flex flex-wrap gap-1.5">
                <button @click="askPreset('Rekomendasi Biji Kopi', 'Untuk kopi rasa segar buah jeruk citrus alami dengan proses Natural yang eksklusif, saya sangat merekomendasikan **Bali Kintamani Arabica**! Klik kartu di bawah untuk detail lengkap:', {
                    name: 'Bali Kintamani Arabica',
                    desc: 'Specialty Grade • Rasa segar jeruk Bali & manis tebu murni. Sangat clean cup.',
                    price: 'Rp 58.000',
                    image: 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&q=80&w=600',
                    link: '{{ route("products.show", 3) }}'
                })"
                    class="text-[10px] font-semibold bg-coffee-50 text-coffee-800 hover:bg-coffee-100 border border-coffee-200 rounded-full px-2.5 py-1 transition">
                    ☕ Rekomendasi Kopi
                </button>
                <button
                    @click="askPreset('Lokasi & Jam Buka', 'Kedai fisik dan Roastery utama kami berlokasi di Jl. Kopi Harum No. 45, Bandung. Kami buka setiap hari pukul 09.00 - 22.00 WIB. Mari mampir! 📍', null)"
                    class="text-[10px] font-semibold bg-coffee-50 text-coffee-800 hover:bg-coffee-100 border border-coffee-200 rounded-full px-2.5 py-1 transition">
                    📍 Lokasi & Jam Buka
                </button>
                <button
                    @click="askPreset('Bisa Giling Gratis?', 'Tentu saja! Kami melayani giling gratis sesuai kebutuhan seduh Anda: Biji Utuh, Giling Kasar, Giling Sedang, atau Giling Halus. Silakan pilih opsi gilingan saat mengorder! 👍', null)"
                    class="text-[10px] font-semibold bg-coffee-50 text-coffee-800 hover:bg-coffee-100 border border-coffee-200 rounded-full px-2.5 py-1 transition">
                    ⚙️ Giling Gratis?
                </button>
            </div>

            <!-- Input Bar -->
            <form @submit.prevent="sendMessage()" class="p-3 border-t border-coffee-100 bg-white flex gap-2">
                <input type="text" x-model="inputMessage" placeholder="Tulis pertanyaan..."
                    class="flex-grow bg-coffee-50 border border-coffee-200 rounded-full text-xs px-4 py-2 text-coffee-800 focus:outline-none focus:border-coffee-500">
                <button type="submit"
                    class="w-8 h-8 bg-coffee-800 hover:bg-coffee-700 text-white rounded-full flex items-center justify-center shrink-0 transition">
                    <svg class="h-4 w-4 transform rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- GSAP Animations and Custom Cursor Script -->
        <script>
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);

            document.addEventListener('DOMContentLoaded', () => {
                // Initialize Custom Cursor for Desktop (fine pointers)
                const cursor = document.getElementById('custom-cursor');
                const cursorDot = document.getElementById('custom-cursor-dot');
                
                if (cursor && cursorDot && window.matchMedia('(pointer: fine)').matches) {
                    // Initialize cursor positions out of viewport
                    gsap.set([cursor, cursorDot], { x: -100, y: -100 });
                    
                    const xTo = gsap.quickTo(cursor, "x", { duration: 0.25, ease: "power3" });
                    const yTo = gsap.quickTo(cursor, "y", { duration: 0.25, ease: "power3" });
                    
                    const dotXTo = gsap.quickTo(cursorDot, "x", { duration: 0.08, ease: "power3" });
                    const dotYTo = gsap.quickTo(cursorDot, "y", { duration: 0.08, ease: "power3" });
                    
                    window.addEventListener("mousemove", e => {
                        xTo(e.clientX);
                        yTo(e.clientY);
                        dotXTo(e.clientX);
                        dotYTo(e.clientY);
                    });
                    
                    // Mouse leaves window
                    document.addEventListener("mouseleave", () => {
                        gsap.to([cursor, cursorDot], { opacity: 0, duration: 0.3 });
                    });
                    
                    document.addEventListener("mouseenter", () => {
                        gsap.to([cursor, cursorDot], { opacity: 1, duration: 0.3 });
                    });

                    // Add magnetic / hover scale interaction on buttons and anchors
                    const updateHovers = () => {
                        document.querySelectorAll('a, button, select, input, textarea, [role="button"], .group').forEach(el => {
                            // Prevent duplicating event listeners
                            if (el.dataset.cursorBound) return;
                            el.dataset.cursorBound = "true";
                            
                            el.addEventListener('mouseenter', () => {
                                cursor.classList.add('hovering');
                            });
                            el.addEventListener('mouseleave', () => {
                                cursor.classList.remove('hovering');
                            });
                        });
                    };
                    
                    updateHovers();
                    
                    // Re-run for dynamically added content if any
                    const observer = new MutationObserver(updateHovers);
                    observer.observe(document.body, { childList: true, subtree: true });
                }

                // GSAP ScrollTrigger Reveals
                document.querySelectorAll('.reveal-element').forEach(el => {
                    gsap.fromTo(el, 
                        { opacity: 0, y: 30 },
                        { 
                            opacity: 1, 
                            y: 0, 
                            duration: 1.2, 
                            ease: "power3.out",
                            scrollTrigger: {
                                trigger: el,
                                start: "top 88%",
                                toggleActions: "play none none none"
                            }
                        }
                    );
                });
            });

            // Page Loader Curtain Closing on Window Load
            window.addEventListener('load', () => {
                const tl = gsap.timeline();
                
                // Animate progress bar inside loader
                tl.fromTo('#loader-progress-bar', { xPercent: -100 }, { xPercent: 100, duration: 1.0, ease: "power1.inOut" })
                  .to('#page-loader .loader-content', { opacity: 1, y: 0, duration: 0.3, ease: "power2.out" }, "-=1.0")
                  // Fade out content
                  .to('#page-loader .loader-content', { opacity: 0, y: -20, duration: 0.25, ease: "power2.in" })
                  // Slide curtain up
                  .to('#page-loader', { yPercent: -100, duration: 0.7, ease: "power3.inOut" }, "-=0.1")
                  // Trigger hero title reveal
                  .from('.hero-reveal', { opacity: 0, y: 30, duration: 1.0, ease: "power3.out", stagger: 0.12 }, "-=0.3")
                  // Set loader to display none to allow interactions
                  .set('#page-loader', { display: 'none' });
            });

            // Smooth exit page transitions on local links
            document.addEventListener("DOMContentLoaded", () => {
                document.querySelectorAll("a").forEach(link => {
                    const href = link.getAttribute("href");
                    if (!href) return;

                    // Ensure target is on same domain, isn't hash/anchor, and doesn't open in a new tab
                    const isLocal = href.startsWith("/") || href.startsWith(window.location.origin);
                    const isAnchor = href.includes("#");
                    const isExternal = link.getAttribute("target") === "_blank";

                    if (isLocal && !isAnchor && !isExternal) {
                        link.addEventListener("click", e => {
                            e.preventDefault();
                            
                            // Re-display loader and slide it back down
                            const loader = document.getElementById("page-loader");
                            if (loader) {
                                loader.style.display = "flex";
                                gsap.set(loader, { yPercent: 100 });
                                
                                gsap.to(loader, {
                                    yPercent: 0,
                                    duration: 0.6,
                                    ease: "power3.inOut",
                                    onComplete: () => {
                                        window.location.href = href;
                                    }
                                });
                            } else {
                                window.location.href = href;
                            }
                        });
                    }
                });
            });
        </script>
</body>

</html>