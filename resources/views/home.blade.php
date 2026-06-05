@extends('layouts.app')

@section('title', 'Beranda | Kopi Kita - Biji Kopi Premium Nusantara')

@section('content')
<!-- Hero Section -->
<section class="relative bg-coffee-950 text-white min-h-[85vh] flex items-center overflow-hidden border-b border-coffee-900 crop-marks-wrap">
    <div class="crop-marks-wrap-inner"></div>
    <!-- CMYK Targets -->
    <div class="absolute top-4 right-4 cmyk-targets hidden md:inline-flex z-20">
        <span class="cmyk-dot cmyk-cyan"></span>
        <span class="cmyk-dot cmyk-magenta"></span>
        <span class="cmyk-dot cmyk-yellow"></span>
        <span class="cmyk-dot cmyk-key"></span>
    </div>
    <!-- Ambient Warm Glows -->
    <div class="ambient-glow -top-40 -left-40 opacity-70"></div>
    <div class="ambient-glow bottom-0 right-0 opacity-40"></div>
    
    <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-24">
        <!-- Editorial Grid Container -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 border border-coffee-800/60">
            
            <!-- Left Column: Content (7 cols) -->
            <div class="lg:col-span-7 p-8 sm:p-12 md:p-16 flex flex-col justify-center border-r border-coffee-800/60 relative">

                
                <span class="inline-flex items-center px-4 py-1.5 text-[10px] tracking-widest uppercase text-coffee-300 border-b border-coffee-500/30 mb-8 self-start hero-reveal">
                    Specialty Coffee — Nusantara
                </span>
                
                <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-white leading-[1.1] mb-8 hero-reveal">
                    Menyeduh Cita Rasa <span class="text-coffee-300 italic">Nusantara</span> Ke Cangkir Anda
                </h1>
                
                <p class="text-xs sm:text-sm text-coffee-300 leading-relaxed mb-10 font-light max-w-xl hero-reveal">
                    Kopi Kita menghubungkan Anda secara transparan dengan kebun-kebun kopi terbaik Indonesia. Rasakan keunikan aroma dan karakter rasa autentik dari setiap biji kopi specialty grade yang disangrai dengan ketelitian tinggi.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 hero-reveal">
                    <a href="{{ route('products') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-coffee-300 text-xs font-bold rounded-none text-coffee-950 bg-coffee-300 hover:bg-coffee-200 transition-all duration-300">
                        JELAJAHI PRODUK &rarr;
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-white/20 text-xs font-bold rounded-none text-white hover:bg-white/10 hover:border-white transition-all duration-300">
                        CERITA PETANI
                    </a>
                </div>
            </div>
            
            <!-- Right Column: Hero Image Frame (5 cols) -->
            <div class="lg:col-span-5 relative min-h-[350px] lg:min-h-0 overflow-hidden bg-coffee-900 flex items-stretch">
                <!-- Image zoom hover wrap -->
                <div class="w-full h-full relative img-editorial-wrap flex items-stretch">
                    <img src="{{ asset('images/hero_coffee.png') }}" alt="Kopi Kita Latte Art" class="w-full h-full object-cover object-center opacity-85 mix-blend-luminosity img-editorial">
                    <div class="absolute inset-0 bg-gradient-to-t from-coffee-950/80 via-transparent to-transparent"></div>
                    
                    <!-- Overlapping Typography badge -->
                    <div class="absolute bottom-6 left-6 right-6 flex items-end justify-between border-t border-white/10 pt-4 font-mono">
                           <div>
                               <span class="block text-[8px] text-white/50 uppercase tracking-widest">Est. 2021</span>
                               <span class="block font-serif text-xs text-white italic">Roastery & Coffee Bar</span>
                           </div>
                           <span class="text-[9px] text-white/60">ID // 40135</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-28 bg-coffee-50 relative overflow-hidden">
    <!-- Ambient Glow -->
    <div class="ambient-glow top-1/4 left-1/3 opacity-30"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header split layout -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-20 border-b border-coffee-200/50 pb-8 reveal-element">
            <div class="max-w-xl">
                <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Filosofi Kami</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-coffee-950 mt-3">Mengapa Kopi Kita Sangat Istimewa?</h2>
            </div>
            <p class="text-xs sm:text-sm text-coffee-600 max-w-sm mt-4 md:mt-0 font-light leading-relaxed">
                Kami menerapkan kurasi dan ketelitian tingkat barista dari hulu ke hilir untuk menjaga kesegaran cangkir Anda.
            </p>
        </div>

        <!-- Editorial Grid blueprint -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-coffee-200/50 reveal-element">
            <!-- Value 1 -->
            <div class="p-8 sm:p-12 border-r border-b md:border-b-0 border-coffee-200/50 hover:bg-coffee-100/30 transition-all duration-500 flex flex-col items-start text-left">
                <div class="w-12 h-12 rounded-xl bg-coffee-100/80 flex items-center justify-center text-coffee-700 mb-8 border border-coffee-200/40">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-11.314l.707.707m12.728 12.728l.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-serif text-lg font-bold text-coffee-950 mb-3">Direct Trade & Transparan</h3>
                <p class="text-xs sm:text-sm text-coffee-600 leading-relaxed font-light">
                    Kami bermitra langsung dengan kelompok tani lokal di Kintamani dan Bajawa, memastikan harga beli yang adil untuk kesejahteraan mereka secara berkelanjutan.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="p-8 sm:p-12 border-r border-b md:border-b-0 border-coffee-200/50 hover:bg-coffee-100/30 transition-all duration-500 flex flex-col items-start text-left">
                <div class="w-12 h-12 rounded-xl bg-coffee-100/80 flex items-center justify-center text-coffee-700 mb-8 border border-coffee-200/40">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="font-serif text-lg font-bold text-coffee-950 mb-3">Penyangraian Mikro Presisi</h3>
                <p class="text-xs sm:text-sm text-coffee-600 leading-relaxed font-light">
                    Menggunakan pemantauan kurva sangrai digital modern untuk menjamin kestabilan karamelisasi dan mempertahankan aroma floral asli biji kopi.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="p-8 sm:p-12 hover:bg-coffee-100/30 transition-all duration-500 flex flex-col items-start text-left">
                <div class="w-12 h-12 rounded-xl bg-coffee-100/80 flex items-center justify-center text-coffee-700 mb-8 border border-coffee-200/40">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h3 class="font-serif text-lg font-bold text-coffee-950 mb-3">Karakter Rasa Bersih</h3>
                <p class="text-xs sm:text-sm text-coffee-600 leading-relaxed font-light">
                    Menghasilkan cup profile yang bersih (clean cup) dan berkarakter rasa tegas tanpa rasa pahit gosong abu roasting yang mengganggu.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Coffee Match Quiz Section (Interactive Quiz) -->
<section class="py-24 bg-coffee-100/60 overflow-hidden reveal-element border-t border-b border-coffee-200/30">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-none border border-coffee-200/50 p-8 md:p-12 shadow-sm" 
             x-data="{ 
                step: 1, 
                acidity: '', 
                method: '',
                getResult() {
                    if (this.acidity === 'citrus' && this.method === 'filter') {
                        return {
                            name: 'Bali Kintamani Arabica',
                            desc: 'Karakter rasa buah jeruk sitrus yang menyegarkan dengan body ringan, sangat pas diseduh manual V60.',
                            price: 'Rp 58.000',
                            link: '{{ route("products.show", 3) }}'
                        };
                    } else if (this.acidity === 'strong' && (this.method === 'tubruk' || this.method === 'filter')) {
                        return {
                            name: 'Toraja Kalosi Arabica',
                            desc: 'Cita rasa pekat, bersahaja (earthy), dengan aftertaste manis madu liar yang tahan lama.',
                            price: 'Rp 62.000',
                            link: '{{ route("products.show", 4) }}'
                        };
                    } else if (this.acidity === 'strong' && this.method === 'espresso') {
                        return {
                            name: 'Senja Espresso Blend',
                            desc: 'Cita rasa yang tebal dengan rasa manis karamel dan cokelat hitam. Sempurna untuk espresso shot dan latte.',
                            price: 'Rp 45.000',
                            link: '{{ route("products.show", 5) }}'
                        };
                    } else if (this.acidity === 'balanced' && this.method === 'filter') {
                        return {
                            name: 'Flores Bajawa Arabica',
                            desc: 'Keseimbangan rasa manis karamel yang lembut dan cokelat susu dengan aroma bunga-bungaan yang wangi.',
                            price: 'Rp 55.000',
                            link: '{{ route("products.show", 1) }}'
                        };
                    } else {
                        return {
                            name: 'Aceh Gayo Arabica',
                            desc: 'Body yang tebal, minim asam, rasa rempah eksotis yang harum. Cocok untuk tubruk atau seduhan harian.',
                            price: 'Rp 60.000',
                            link: '{{ route("products.show", 2) }}'
                        };
                    }
                }
             }">
            
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-coffee-600 text-[10px] uppercase tracking-widest font-medium border-b border-coffee-300/50 pb-1">Rekomendasi Cerdas</span>
                <h2 class="font-serif text-3xl font-bold text-coffee-950 mt-4 mb-2">Temukan Kopi Favoritmu</h2>
                <p class="text-xs text-coffee-600 font-light">Bingung memilih? Jawab 2 pertanyaan singkat ini untuk menemukan kopi Nusantara yang paling cocok untuk lidah Anda.</p>
            </div>

            <!-- Quiz Steps -->
            <div class="relative">
                <!-- Step 1: Acidity Preference -->
                <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                    <h3 class="text-sm sm:text-base font-semibold text-coffee-900 mb-6 text-center">1. Karakter rasa seperti apa yang paling Anda sukai?</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <button @click="acidity = 'citrus'; step = 2" class="p-6 border border-coffee-200 rounded-none text-left hover:border-coffee-500 hover:bg-coffee-50/30 transition-all duration-300 group cursor-pointer focus:outline-none">
                            <svg class="h-6 w-6 text-coffee-700 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 12h18M12 12a9 9 0 100 18 9 9 0 000-18z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-12.728 12.728M5.636 5.636l12.728 12.728" />
                            </svg>
                            <span class="block font-serif font-bold text-sm text-coffee-950 mb-1">Segar & Asam Buah</span>
                            <span class="block text-xs text-coffee-500 font-light leading-relaxed">Rasa sitrus jeruk alami, ringan di lidah, tidak terlalu pekat.</span>
                        </button>
                        <button @click="acidity = 'balanced'; step = 2" class="p-6 border border-coffee-200 rounded-none text-left hover:border-coffee-500 hover:bg-coffee-50/30 transition-all duration-300 group cursor-pointer focus:outline-none">
                            <svg class="h-6 w-6 text-coffee-700 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3 7.5 7.03 7.5 12s2.015 9 4.5 9z" />
                            </svg>
                            <span class="block font-serif font-bold text-sm text-coffee-950 mb-1">Seimbang & Manis</span>
                            <span class="block text-xs text-coffee-500 font-light leading-relaxed">Keseimbangan cokelat manis karamel dengan keasaman lembut.</span>
                        </button>
                        <button @click="acidity = 'strong'; step = 2" class="p-6 border border-coffee-200 rounded-none text-left hover:border-coffee-500 hover:bg-coffee-50/30 transition-all duration-300 group cursor-pointer focus:outline-none">
                            <svg class="h-6 w-6 text-coffee-700 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16M4 6v12M12 6v12M20 6v12" />
                            </svg>
                            <span class="block font-serif font-bold text-sm text-coffee-950 mb-1">Pahit Pekat & Bold</span>
                            <span class="block text-xs text-coffee-500 font-light leading-relaxed">Body tebal, minim rasa asam, dominan cokelat hitam dan rempah.</span>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Brewing Method -->
                <div x-show="step === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0" x-cloak>
                    <h3 class="text-sm sm:text-base font-semibold text-coffee-900 mb-6 text-center">2. Bagaimana metode menyeduh kopi Anda?</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <button @click="method = 'filter'; step = 3" class="p-6 border border-coffee-200 rounded-none text-left hover:border-coffee-500 hover:bg-coffee-50/30 transition-all duration-300 group cursor-pointer focus:outline-none">
                            <svg class="h-6 w-6 text-coffee-700 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h12l-3 12H9L6 3zM9 15v3M15 15v3M8 21h8" />
                            </svg>
                            <span class="block font-serif font-bold text-sm text-coffee-950 mb-1">Seduh Manual (V60/Filter)</span>
                            <span class="block text-xs text-coffee-500 font-light leading-relaxed">Lebih suka memfilter kopi untuk rasa jernih (clean cups).</span>
                        </button>
                        <button @click="method = 'tubruk'; step = 3" class="p-6 border border-coffee-200 rounded-none text-left hover:border-coffee-500 hover:bg-coffee-50/30 transition-all duration-300 group cursor-pointer focus:outline-none">
                            <svg class="h-6 w-6 text-coffee-700 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v-4M3 8h11v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                            </svg>
                            <span class="block font-serif font-bold text-sm text-coffee-950 mb-1">Tubruk / Kopi Susu</span>
                            <span class="block text-xs text-coffee-500 font-light leading-relaxed">Seduh langsung dengan ampas atau dicampur susu & gula aren.</span>
                        </button>
                        <button @click="method = 'espresso'; step = 3" class="p-6 border border-coffee-200 rounded-none text-left hover:border-coffee-500 hover:bg-coffee-50/30 transition-all duration-300 group cursor-pointer focus:outline-none">
                            <svg class="h-6 w-6 text-coffee-700 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span class="block font-serif font-bold text-sm text-coffee-950 mb-1">Mesin Espresso / Mokapot</span>
                            <span class="block text-xs text-coffee-500 font-light leading-relaxed">Mengekstrak kopi konsentrasi tinggi dengan tekanan.</span>
                        </button>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <button @click="step = 1" class="text-xs font-semibold text-coffee-550 hover:text-coffee-800 transition duration-300 cursor-pointer">← Kembali ke pertanyaan sebelumnya</button>
                    </div>
                </div>

                <!-- Step 3: Result -->
                <div x-show="step === 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-98" x-transition:enter-end="opacity-100 scale-100" x-cloak class="text-center bg-coffee-50/60 p-8 rounded-none border border-coffee-200/50">
                    <svg class="h-8 w-8 text-coffee-800 mx-auto mt-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 21l-1.813-5.096L2 15l5.096-1.813L9 9l1.813 5.096L16 15l-5.096 1.813zM19.071 4.929l-.707.707M16.243 7.757l-.707.707" />
                    </svg>
                    <h3 class="text-[10px] font-bold text-coffee-500 uppercase tracking-widest mt-4">Kopi Paling Cocok Untuk Anda:</h3>
                    <h4 class="font-serif text-2xl sm:text-3xl font-bold text-coffee-950 mt-2 mb-3" x-text="getResult().name"></h4>
                    <p class="text-xs sm:text-sm text-coffee-650 max-w-md mx-auto mb-6 leading-relaxed font-light" x-text="getResult().desc"></p>
                    <div class="text-lg font-bold text-coffee-900 mb-6" x-text="getResult().price"></div>
                    
                    <div class="flex flex-wrap justify-center gap-4">
                        <a :href="getResult().link" 
                           class="inline-flex items-center justify-center px-8 py-3.5 border border-coffee-950 text-xs font-bold rounded-none text-white bg-coffee-950 hover:bg-white hover:text-coffee-950 transition-all duration-300 cursor-pointer">
                            LIHAT DETAIL BIJI KOPI &rarr;
                        </a>
                        <button @click="step = 1; acidity = ''; method = ''" class="inline-flex items-center justify-center px-8 py-3.5 border border-coffee-300 text-xs font-bold rounded-none text-coffee-800 bg-white hover:bg-coffee-50 transition-all duration-300 cursor-pointer">
                            COBA QUIZ LAGI
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-28 bg-coffee-50 border-b border-coffee-200/40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 border-b border-coffee-200/50 pb-8 reveal-element">
            <div>
                <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Katalog Terlaris</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-coffee-950 mt-3">Produk Favorit Kopi Kita</h2>
            </div>
            <a href="{{ route('products') }}" class="mt-4 md:mt-0 inline-flex items-center font-mono text-[9px] font-bold uppercase tracking-widest text-coffee-600 hover:text-coffee-950 transition duration-300 border-b border-coffee-300 pb-1 cursor-pointer">
                Lihat Semua Katalog &rarr;
            </a>
        </div>

        <!-- Product Cards Grid with editorial lines -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0 border border-coffee-200/50">
            @foreach($products as $product)
            <div class="bg-white border-r border-b last:border-r-0 lg:last:border-r-0 border-coffee-200/50 flex flex-col h-full group reveal-element">
                <!-- Product Image with custom wrap -->
                <div class="h-64 img-editorial-wrap relative border-b border-coffee-200/50">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover img-editorial">
                    <span class="absolute top-4 left-4 bg-coffee-950 text-coffee-100 text-[8px] font-mono font-bold px-3 py-1 uppercase tracking-widest border border-coffee-700/30">
                        {{ $product['category_label'] }}
                    </span>
                </div>
                
                <!-- Content -->
                <div class="p-6 sm:p-8 flex-grow flex flex-col">
                    <div class="flex items-center gap-1.5 mb-3 font-mono text-[9px]">
                        <span class="font-bold text-coffee-950">{{ $product['rating'] }}/5</span>
                        <span class="text-coffee-400">({{ $product['reviews_count'] }} ulasan)</span>
                    </div>
                    <h3 class="font-serif text-lg sm:text-xl font-bold text-coffee-950 mb-2 group-hover:text-coffee-750 transition-colors duration-300">
                        <a href="{{ route('products.show', $product['id']) }}">{{ $product['name'] }}</a>
                    </h3>
                    <p class="text-[11px] text-coffee-500 italic mb-4">Origin: {{ $product['origin'] }}</p>
                    <p class="text-xs sm:text-sm text-coffee-600 leading-relaxed mb-6 flex-grow font-light">
                        {{ Str::limit($product['description'], 105) }}
                    </p>

                    <!-- Bottom Details with crisp alignment -->
                    <div class="mt-auto border-t border-coffee-100 pt-5 flex items-center justify-between">
                        <span class="text-base font-serif font-bold text-coffee-950">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                        <a href="{{ route('products.show', $product['id']) }}" class="inline-flex items-center justify-center w-9 h-9 rounded-none bg-coffee-950 text-white hover:bg-coffee-100 hover:text-coffee-950 transition duration-300 font-mono font-bold text-sm border border-coffee-950">
                            &rarr;
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section (Interactive Slider) -->
<section class="py-28 bg-coffee-950 text-white overflow-hidden relative reveal-element border-b border-coffee-900">
    <div class="ambient-glow -top-40 -left-40 opacity-40"></div>
    <div class="ambient-glow -bottom-40 -right-40 opacity-40"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" x-data="{ activeSlide: 0, slidesCount: {{ count($testimonials) }} }">
        <div class="text-center mb-16">
            <span class="text-coffee-400 text-[10px] uppercase tracking-widest font-medium">Kisah Seduhan</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-white mt-3">Kata Sahabat Seduh Kopi Kita</h2>
        </div>

        <!-- Slider Window -->
        <div class="relative min-h-[220px] flex items-center justify-center">
            @foreach($testimonials as $index => $testimonial)
            <div x-show="activeSlide === {{ $index }}" 
                 x-transition:enter="transition ease-out duration-500" 
                 x-transition:enter-start="opacity-0 translate-y-4" 
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 class="text-center max-w-2xl mx-auto"
                 x-cloak>
                
                <!-- Score -->
                <div class="flex justify-center gap-1.5 mb-6 font-mono text-[10px] text-coffee-400 tracking-wider">
                    <span>RATING: {{ $testimonial['stars'] }}/5</span>
                </div>

                <!-- Review Content -->
                <blockquote class="font-serif text-lg sm:text-xl md:text-2xl italic leading-relaxed text-coffee-100 mb-8">
                    "{{ $testimonial['content'] }}"
                </blockquote>

                <!-- Reviewer Info -->
                <cite class="not-italic block">
                    <span class="block text-sm font-semibold text-white">{{ $testimonial['name'] }}</span>
                    <span class="block text-[11px] text-coffee-400 mt-1 uppercase tracking-wider">{{ $testimonial['role'] }}</span>
                </cite>
            </div>
            @endforeach

            <!-- Left/Right controls -->
            <button @click="activeSlide = (activeSlide - 1 + slidesCount) % slidesCount" class="absolute left-0 p-2.5 rounded-none border border-coffee-800 hover:bg-coffee-900 text-coffee-300 hover:text-white transition duration-300 focus:outline-none cursor-pointer">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button @click="activeSlide = (activeSlide + 1) % slidesCount" class="absolute right-0 p-2.5 rounded-none border border-coffee-800 hover:bg-coffee-900 text-coffee-300 hover:text-white transition duration-300 focus:outline-none cursor-pointer">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Indicators -->
        <div class="flex justify-center gap-2 mt-10">
            @foreach($testimonials as $index => $testimonial)
            <button @click="activeSlide = {{ $index }}" :class="activeSlide === {{ $index }} ? 'bg-coffee-400 w-6' : 'bg-coffee-800 w-2'" class="h-1.5 rounded-none transition-all duration-300 focus:outline-none cursor-pointer"></button>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Bottom Banner -->
<section class="py-24 bg-coffee-50 flex items-center justify-center">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="bg-coffee-900 text-white rounded-none border border-coffee-950 flex flex-col md:flex-row relative overflow-hidden">
            <!-- Decorative gradient blur -->
            <div class="absolute -bottom-16 -left-16 w-48 h-48 bg-coffee-800/20 rounded-full blur-2xl"></div>

            <div class="p-8 sm:p-12 md:p-16 flex-1 flex flex-col justify-center relative z-10">
                <span class="text-coffee-300 text-[10px] uppercase tracking-widest font-medium mb-3">Nikmati Kopi Terbaik</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-white mb-4">Siap untuk Menyeduh Kopi Impian Anda?</h2>
                <p class="text-xs sm:text-sm text-coffee-300 leading-relaxed mb-8 font-light">
                    Dapatkan biji kopi segar nusantara specialty grade yang dikirim langsung ke rumah Anda. Nikmati kemudahan bertransaksi cepat melalui WhatsApp.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('products') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-coffee-300 text-xs font-bold rounded-none text-coffee-950 bg-coffee-300 hover:bg-coffee-200 transition duration-300">
                        BELANJA SEKARANG &rarr;
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-white/20 text-xs font-bold rounded-none text-white hover:bg-white/10 hover:border-white transition duration-300">
                        HUBUNGI ROASTER
                    </a>
                </div>
            </div>
            <!-- Side Image -->
            <div class="hidden md:block w-[350px] relative img-editorial-wrap">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&q=80&w=600" alt="Cafe Kopi Kita" class="w-full h-full object-cover img-editorial">
                <div class="absolute inset-y-0 left-0 w-16 bg-gradient-to-r from-coffee-900 to-transparent"></div>
            </div>
        </div>
    </div>
</section>
@endsection
