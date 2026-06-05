@extends('layouts.app')

@section('title', 'Katalog Biji Kopi | Kopi Kita')

@section('content')
<!-- Header Page Banner with Crop Marks and CMYK targets -->
<section class="relative bg-coffee-950 text-white py-24 overflow-hidden border-b border-coffee-900 crop-marks-wrap">
    <div class="crop-marks-wrap-inner"></div>
    <!-- CMYK Targets -->
    <div class="absolute top-4 right-4 cmyk-targets hidden md:inline-flex">
        <span class="cmyk-dot cmyk-cyan"></span>
        <span class="cmyk-dot cmyk-magenta"></span>
        <span class="cmyk-dot cmyk-yellow"></span>
        <span class="cmyk-dot cmyk-key"></span>
    </div>
    <!-- Ambient Glow -->
    <div class="ambient-glow -top-40 -left-40 opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="text-coffee-300 text-[10px] uppercase tracking-widest font-medium border-b border-coffee-500/30 pb-1">
            Katalog Biji Kopi
        </span>
        <h1 class="font-serif text-4xl sm:text-5xl font-bold mt-6 mb-4">Galeri Biji Kopi</h1>
        <p class="text-xs sm:text-sm text-coffee-300 max-w-xl mx-auto font-light leading-relaxed">
            Kurasi ceri kopi pilihan dari berbagai pegunungan di Indonesia, disangrai dengan presisi oleh Roaster ahli untuk melepaskan karakteristik rasa terbaiknya.
        </p>
    </div>
</section>

<!-- Product Catalog List Section -->
<section class="py-24 bg-coffee-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeCategory: 'all' }">
        
        <!-- Category Selector (Newspaper Index Style) -->
        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-8 mb-16 font-mono text-[10px] tracking-widest font-bold border-b border-coffee-200/50 pb-6">
            <button @click="activeCategory = 'all'"
                :class="activeCategory === 'all' ? 'text-coffee-950 border-b-2 border-coffee-950 pb-1' : 'text-coffee-400 hover:text-coffee-700 pb-1'"
                class="uppercase focus:outline-none cursor-pointer">
                Semua Biji Kopi
            </button>
            <button @click="activeCategory = 'single-origin'"
                :class="activeCategory === 'single-origin' ? 'text-coffee-950 border-b-2 border-coffee-950 pb-1' : 'text-coffee-400 hover:text-coffee-700 pb-1'"
                class="uppercase focus:outline-none cursor-pointer">
                Single Origin
            </button>
            <button @click="activeCategory = 'blend'"
                :class="activeCategory === 'blend' ? 'text-coffee-950 border-b-2 border-coffee-950 pb-1' : 'text-coffee-400 hover:text-coffee-700 pb-1'"
                class="uppercase focus:outline-none cursor-pointer">
                Espresso Blend
            </button>
            <button @click="activeCategory = 'ready-to-drink'"
                :class="activeCategory === 'ready-to-drink' ? 'text-coffee-950 border-b-2 border-coffee-950 pb-1' : 'text-coffee-400 hover:text-coffee-700 pb-1'"
                class="uppercase focus:outline-none cursor-pointer">
                Bottled Drink
            </button>
        </div>

        <!-- Catalog Grid with editorial lines -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 border border-coffee-200/50 bg-white">
            @foreach($products as $product)
                <!-- Product Card -->
                <div x-show="activeCategory === 'all' || activeCategory === '{{ $product['category'] }}'"
                    x-transition:enter="transition ease-out duration-300" 
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-white border-r border-b last:border-r-0 lg:last:border-r-0 border-coffee-200/50 flex flex-col justify-between h-full group reveal-element crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>

                    <div>
                        <!-- Product Image with custom wrap -->
                        <a href="{{ route('products.show', $product['id']) }}" class="block h-56 img-editorial-wrap relative border-b border-coffee-200/50">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                class="w-full h-full object-cover img-editorial">
                            <span
                                class="absolute top-4 left-4 bg-coffee-950 text-coffee-100 text-[8px] font-mono font-bold px-3 py-1 uppercase tracking-widest border border-coffee-700/30">
                                {{ $product['category_label'] }}
                            </span>
                        </a>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-8">
                            <div class="flex items-center gap-1.5 mb-3 font-mono text-[9px] text-coffee-500">
                                <span class="font-bold text-coffee-950">{{ $product['rating'] }}/5</span>
                                <span>({{ $product['reviews_count'] }} ulasan)</span>
                            </div>
                            <a href="{{ route('products.show', $product['id']) }}"
                                class="block hover:text-coffee-750 transition-colors duration-300">
                                <h3 class="font-serif text-xl font-bold text-coffee-950 mb-2">{{ $product['name'] }}</h3>
                            </a>
                            <span class="text-[9px] font-mono text-coffee-400 uppercase tracking-widest block mb-4">Origin: {{ $product['origin'] }}</span>

                            <!-- Tasting notes / Process -->
                            <div class="flex flex-wrap gap-1.5 mb-5">
                                <span class="text-[9px] uppercase tracking-wider px-2 py-0.5 bg-coffee-50 text-coffee-800 border border-coffee-200/50 font-mono">{{ $product['roast'] }}</span>
                                <span class="text-[9px] uppercase tracking-wider px-2 py-0.5 bg-coffee-50 text-coffee-800 border border-coffee-200/50 font-mono">{{ $product['process'] }}</span>
                            </div>

                            <p class="text-xs text-coffee-600 leading-relaxed font-light">
                                {{ $product['description'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Card Footer (Price & Detail CTA) -->
                    <div class="p-6 sm:p-8 pt-0 border-t border-coffee-100 mt-auto flex flex-col sm:flex-row gap-4 items-center justify-between">
                        <div>
                            <span class="block text-[9px] text-coffee-400 uppercase tracking-widest font-bold">Mulai Dari</span>
                            <span class="text-lg font-serif font-bold text-coffee-950">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                        </div>
                        
                        <!-- Mock Barcode & CTA -->
                        <div class="flex flex-col items-end gap-2 w-full sm:w-auto">
                            <!-- Mock Barcode -->
                            <div class="flex items-center gap-0.5 opacity-25 group-hover:opacity-60 transition duration-300">
                                <div class="h-4 w-0.5 bg-coffee-950"></div>
                                <div class="h-4 w-1 bg-coffee-950"></div>
                                <div class="h-4 w-0.5 bg-coffee-950"></div>
                                <div class="h-4 w-1.5 bg-coffee-950"></div>
                                <div class="h-4 w-0.5 bg-coffee-950"></div>
                                <div class="h-4 w-1 bg-coffee-950"></div>
                                <span class="text-[7px] font-mono text-coffee-900 ml-1">#KPKT-0{{ $product['id'] }}</span>
                            </div>
                            <a href="{{ route('products.show', $product['id']) }}"
                                class="w-full sm:w-auto text-center inline-flex items-center justify-center px-6 py-2.5 border border-coffee-950 bg-coffee-950 text-white hover:bg-white hover:text-coffee-955 transition-all duration-300 text-xs font-bold rounded-none cursor-pointer">
                                DETAIL BIJI KOPI &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Brewing Ratio Calculator Section (Print Barista Dashboard) -->
<section class="py-28 bg-coffee-100/60 overflow-hidden reveal-element border-t border-b border-coffee-200/30 crop-marks-wrap">
    <div class="crop-marks-wrap-inner"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Side: Visual / Introduction -->
            <div class="lg:col-span-5">
                <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Metode Penyeduhan</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-coffee-950 mt-3 mb-6">Kalkulator Seduh Kopi Presisi</h2>
                <p class="text-xs sm:text-sm text-coffee-650 leading-relaxed font-light mb-8">
                    Rasio air dan kopi sangat penting untuk menghasilkan secangkir kopi yang nikmat. Gunakan alat hitung rasio kami yang dikembangkan khusus untuk metode V60, French Press, dan Kopi Tubruk Nusantara.
                </p>
                <div class="rounded-none overflow-hidden shadow-sm border border-coffee-200/50 aspect-[4/3] relative img-editorial-wrap">
                    <img src="{{ asset('images/brewing_v60.png') }}" alt="Menyeduh Kopi V60"
                        class="w-full h-full object-cover img-editorial">
                    <div class="absolute inset-0 bg-coffee-950/10"></div>
                </div>
            </div>

            <!-- Right Side: Interactive Calculator (Alpine.js) -->
            <div class="lg:col-span-7" x-data="{
                        method: 'v60',
                        coffee: 15,
                        ratio: 15,
                        getWater() {
                            return Math.round(this.coffee * this.ratio);
                        },
                        getTemp() {
                            if (this.method === 'v60') return '90°C - 92°C';
                            if (this.method === 'frenchpress') return '92°C - 94°C';
                            return '94°C - 96°C';
                        },
                        getGrindSize() {
                            if (this.method === 'v60') return 'Sedang (Medium)';
                            if (this.method === 'frenchpress') return 'Kasar (Coarse)';
                            return 'Halus (Fine)';
                        },
                        getSteps() {
                            if (this.method === 'v60') {
                                return [
                                    { t: 'Blooming', d: 'Tuang 30-40 gram air bersuhu 90°C secara melingkar perlahan, lalu tunggu 30-45 detik hingga gas kopi terlepas (blooming).' },
                                    { t: 'Tuangan Kedua', d: 'Tuang air perlahan secara melingkar dari tengah hingga mencapai 120 gram. Tunggu hingga air turun sedikit.' },
                                    { t: 'Tuangan Akhir', d: 'Tuang air sisa hingga timbangan menunjukkan total gram air air target. Selesaikan ekstraksi dalam durasi total 2 menit 15 detik.' }
                                ];
                            } else if (this.method === 'frenchpress') {
                                return [
                                    { t: 'Penuangan Awal', d: 'Tuang seluruh air target bersuhu 92°C ke dalam French Press secara merata membasahi seluruh bubuk kopi kasar.' },
                                    { t: 'Waktu Seduh', d: 'Pasang penutup French Press tanpa ditekan. Biarkan kopi terekstraksi secara alami selama 4 menit.' },
                                    { t: 'Pengepresan', d: 'Tekan plunger French Press ke bawah secara perlahan dan konstan hingga mentok. Tuang hasil kopi ke cangkir bersih.' }
                                ];
                            } else {
                                return [
                                    { t: 'Penuangan Air', d: 'Tuang seluruh air target bersuhu 95°C langsung ke cangkir berisi bubuk kopi halus secara melingkar cepat.' },
                                    { t: 'Pengadukan', d: 'Aduk kopi secara memutar perlahan sebanyak 3-4 kali adukan demi meratakan ekstraksi kopi tubruk.' },
                                    { t: 'Pendiaman', d: 'Tunggu 3-4 menit sampai seluruh ampas kopi tenggelam ke dasar cangkir sebelum kopi tubruk siap diminum.' }
                                ];
                            }
                        }
                     }">
                <div class="bg-white p-8 rounded-none border border-coffee-200/50 shadow-sm crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>
                    <div class="flex items-center justify-between border-b border-coffee-100 pb-4 mb-6">
                        <h3 class="font-serif text-xl font-bold text-coffee-950">Hitung Rasio Seduhan Anda</h3>
                        <span class="text-[9px] text-coffee-400 uppercase tracking-widest">Rasio Seduhan</span>
                    </div>

                    <div class="space-y-6 mb-8">
                        <!-- Select Method (Segmented Barista Toggles) -->
                        <div>
                            <label class="block text-[9px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-3">Pilih Metode Seduh:</label>
                            <div class="grid grid-cols-3 gap-0 border border-coffee-250">
                                <button @click="method = 'v60'; ratio = 15"
                                    :class="method === 'v60' ? 'bg-coffee-950 text-white' : 'bg-white text-coffee-800 hover:bg-coffee-50 border-r border-coffee-200/70'"
                                    class="py-3 text-[9px] font-mono font-bold uppercase tracking-wider rounded-none cursor-pointer focus:outline-none">
                                    V60 Pour Over
                                </button>
                                <button @click="method = 'frenchpress'; ratio = 14"
                                    :class="method === 'frenchpress' ? 'bg-coffee-950 text-white' : 'bg-white text-coffee-800 hover:bg-coffee-50 border-r border-coffee-200/70'"
                                    class="py-3 text-[9px] font-mono font-bold uppercase tracking-wider rounded-none cursor-pointer focus:outline-none">
                                    French Press
                                </button>
                                <button @click="method = 'tubruk'; ratio = 15"
                                    :class="method === 'tubruk' ? 'bg-coffee-950 text-white' : 'bg-white text-coffee-800 hover:bg-coffee-50'"
                                    class="py-3 text-[9px] font-mono font-bold uppercase tracking-wider rounded-none cursor-pointer focus:outline-none">
                                    Kopi Tubruk
                                </button>
                            </div>
                        </div>

                        <!-- Coffee Weight Input -->
                        <div>
                            <div class="flex justify-between items-center mb-2 font-mono text-[9px] text-coffee-400 uppercase tracking-wider">
                                <label>Berat Kopi Kering (Gram):</label>
                                <span class="font-bold text-coffee-950 text-xs" x-text="coffee + ' gram'"></span>
                            </div>
                            <input type="range" min="10" max="50" step="1" x-model="coffee"
                                class="w-full accent-coffee-950 cursor-pointer bg-coffee-100 rounded-none h-1">
                        </div>

                        <!-- Brewing Ratio Selection -->
                        <div>
                            <div class="flex justify-between items-center mb-2 font-mono text-[9px] text-coffee-400 uppercase tracking-wider">
                                <label>Rasio Seduh (Kopi : Air):</label>
                                <span class="font-bold text-coffee-950 text-xs" x-text="'1 : ' + ratio"></span>
                            </div>
                            <input type="range" min="10" max="20" step="1" x-model="ratio"
                                class="w-full accent-coffee-950 cursor-pointer bg-coffee-100 rounded-none h-1">
                        </div>
                    </div>

                    <!-- Calculated Output Display (Print Grid) -->
                    <div class="bg-coffee-50/50 rounded-none p-6 border border-coffee-200/50 grid grid-cols-3 gap-4 text-center mb-8 font-mono">
                        <div class="border-r border-coffee-200/40">
                            <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-wider">Kebutuhan Air</span>
                            <span class="block text-sm sm:text-base font-bold text-coffee-950 mt-1.5"
                                x-text="getWater() + ' mL/g'"></span>
                        </div>
                        <div class="border-r border-coffee-200/40">
                            <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-wider">Suhu Air</span>
                            <span class="block text-xs font-bold text-coffee-950 mt-1.5"
                                x-text="getTemp()"></span>
                        </div>
                        <div>
                            <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-wider">Grind Size</span>
                            <span class="block text-xs font-bold text-coffee-950 mt-1.5"
                                x-text="getGrindSize()"></span>
                        </div>
                    </div>

                    <!-- Step-by-Step Instructions -->
                    <div>
                        <h4 class="text-[9px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-4 border-b border-coffee-100 pb-2">
                            Instruksi Langkah Penyeduhan:</h4>
                        <ol class="space-y-4">
                            <template x-for="(step, idx) in getSteps()" :key="idx">
                                <li class="flex items-start gap-4">
                                    <span class="w-5 h-5 rounded-none bg-coffee-950 text-white text-[10px] font-mono font-bold flex items-center justify-center shrink-0 mt-0.5"
                                        x-text="idx + 1"></span>
                                    <div>
                                        <h5 class="text-xs font-bold text-coffee-950" x-text="step.t"></h5>
                                        <p class="text-xs text-coffee-650 mt-0.5 leading-relaxed font-light"
                                            x-text="step.d"></p>
                                    </div>
                                </li>
                            </template>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection