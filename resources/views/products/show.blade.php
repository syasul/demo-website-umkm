@extends('layouts.app')

@section('title', $product['name'] . ' | Kopi Kita')

@section('content')
@php
    // Coordinate configuration for 5-axis Flavor Radar Chart
    $cx = 120;
    $cy = 125;
    $max_r = 75;
    
    // Fetch cupping parameters
    $aroma = $product['cupping_log']['aroma'] ?? 80;
    $acidity = $product['cupping_log']['acidity'] ?? 80;
    $body = $product['cupping_log']['body'] ?? 80;
    $sweetness = $product['cupping_log']['sweetness'] ?? 80;
    $clean = $product['cupping_log']['clean_cup'] ?? 80;
    
    // Map scores to radial distance
    $r0 = $max_r * ($aroma / 100);
    $r1 = $max_r * ($acidity / 100);
    $r2 = $max_r * ($body / 100);
    $r3 = $max_r * ($sweetness / 100);
    $r4 = $max_r * ($clean / 100);
    
    // Calculated coordinates for 5 axes
    // Axis 0: Aroma (Top - 270 deg)
    $p0_x = $cx;
    $p0_y = $cy - $r0;
    
    // Axis 1: Acidity (-18 deg)
    $p1_x = $cx + $r1 * cos(deg2rad(-18));
    $p1_y = $cy + $r1 * sin(deg2rad(-18));
    
    // Axis 2: Body (54 deg)
    $p2_x = $cx + $r2 * cos(deg2rad(54));
    $p2_y = $cy + $r2 * sin(deg2rad(54));
    
    // Axis 3: Sweetness (126 deg)
    $p3_x = $cx + $r3 * cos(deg2rad(126));
    $p3_y = $cy + $r3 * sin(deg2rad(126));
    
    // Axis 4: Clean Cup (198 deg)
    $p4_x = $cx + $r4 * cos(deg2rad(198));
    $p4_y = $cy + $r4 * sin(deg2rad(198));
    
    $points = "$p0_x,$p0_y $p1_x,$p1_y $p2_x,$p2_y $p3_x,$p3_y $p4_x,$p4_y";
@endphp

<section class="py-12 bg-coffee-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Back Button (Monospaced Print Style) -->
        <a href="{{ route('products') }}" class="inline-flex items-center font-mono text-[9px] font-bold uppercase tracking-widest text-coffee-600 hover:text-coffee-955 mb-10 transition duration-300 group">
            <span class="mr-2 transition-transform duration-300 group-hover:-translate-x-1">&larr;</span>
            KEMBALI KE KATALOG
        </a>

        <!-- Product Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start" 
             x-data="{ 
                size: 250, 
                grind: 'Biji Utuh', 
                basePrice: {{ $product['price'] }},
                getPrice() {
                    if (this.size === 500) {
                        return Math.round(this.basePrice * 1.85);
                    }
                    return this.basePrice;
                },
                getWaLink() {
                    let text = `Halo Kopi Kita, saya ingin memesan kopi Specialty melalui Halaman Eksklusif:\n\n` +
                                `- Nama Kopi: {{ $product['name'] }}\n` +
                                `- Kemasan: ${this.size} gram\n` +
                                `- Jenis Gilingan: ${this.grind}\n` +
                                `- Total: Rp ${this.getPrice().toLocaleString('id-ID')}\n\n` +
                                `Mohon diinfokan detail pembayaran dan pengiriman. Terima kasih!`;
                    return 'https://wa.me/6281234567890?text=' + encodeURIComponent(text);
                }
             }">
            
            <!-- Left Side: Product Image, SCA Gold Seal, Radar Chart -->
            <div class="lg:col-span-6 space-y-8">
                <!-- Large Image Card with Crop Marks -->
                <div class="rounded-none overflow-hidden shadow-sm border border-coffee-200/60 aspect-[4/3] relative img-editorial-wrap crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover img-editorial">
                    <span class="absolute top-6 left-6 bg-coffee-950 text-coffee-100 text-[8px] font-mono font-bold px-3 py-1 uppercase tracking-widest border border-coffee-700/30">
                        {{ $product['badge'] }}
                    </span>
                </div>

                <!-- SCA Gold Seal Badge (Log Sheet style) -->
                @if(isset($product['sca_score']))
                <div class="relative bg-white border border-coffee-200/50 p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 overflow-hidden crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>
                    <!-- Golden Crest -->
                    <div class="w-16 h-16 rounded-none bg-coffee-950 flex flex-col items-center justify-center text-amber-400 border border-amber-500/25 shrink-0 font-mono">
                        <span class="text-[8px] font-bold tracking-widest leading-none text-coffee-400">GRADE</span>
                        <span class="text-xl font-bold leading-tight mt-0.5">{{ number_format($product['sca_score'], 2) }}</span>
                    </div>
                    <div class="space-y-1 font-mono">
                        <span class="inline-block text-[8px] font-bold text-amber-800 uppercase tracking-widest bg-amber-50 px-2 py-0.5 border border-amber-200/40">SCA Official Report</span>
                        <h4 class="font-serif text-sm font-bold text-coffee-950 mt-1">Specialty Grade 1 Certification</h4>
                        <p class="text-[10px] text-coffee-600 leading-relaxed font-light">Green defect count: 0 primary. Sensory analysis logs: Clean cup index at 100%. Official evaluation stamp applied.</p>
                    </div>
                    <!-- Vintage Stamp overlay on right -->
                    <div class="absolute right-4 bottom-4 w-16 h-16 vintage-stamp hidden md:flex">
                        <span>ROASTERY</span>
                        <span>APPROVED</span>
                    </div>
                </div>
                @endif

                <!-- Agricultural Profile Cards in Editorial Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-0 border border-coffee-200/50 bg-white font-mono">
                    <div class="p-5 border-r border-b sm:border-b-0 border-coffee-200/50 text-left">
                        <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Ketinggian</span>
                        <span class="block text-xs font-bold text-coffee-950 mt-1.5">{{ $product['altitude'] }}</span>
                    </div>
                    <div class="p-5 border-r border-b sm:border-b-0 border-coffee-200/50 text-left">
                        <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Varietas</span>
                        <span class="block text-xs font-bold text-coffee-950 mt-1.5 truncate" title="{{ $product['varietal'] }}">{{ $product['varietal'] }}</span>
                    </div>
                    <div class="p-5 border-r border-coffee-200/50 text-left">
                        <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Kadar Air</span>
                        <span class="block text-xs font-bold text-coffee-950 mt-1.5">{{ $product['moisture'] }}</span>
                    </div>
                    <div class="p-5 text-left">
                        <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Kerapatan</span>
                        <span class="block text-xs font-bold text-coffee-950 mt-1.5">{{ $product['density'] }}</span>
                    </div>
                </div>

                <!-- Custom SVG Radar Chart Panel -->
                <div class="bg-white p-8 rounded-none border border-coffee-200/50 shadow-sm crop-marks-wrap" id="radar-chart-container">
                    <div class="crop-marks-wrap-inner"></div>
                    <div class="flex items-center justify-between pb-4 border-b border-coffee-150 mb-6">
                        <h3 class="font-serif text-base font-bold text-coffee-950">Flavor Profile Wheel</h3>
                        <span class="text-[8px] text-coffee-400 uppercase tracking-wider font-bold">Specification Diagram</span>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center justify-around gap-8">
                        <!-- Radar Graph -->
                        <div class="w-60 h-60 shrink-0">
                            <svg viewBox="0 0 240 240" class="w-full h-full overflow-visible">
                                <!-- Background Concentric Pentagons (Grid) -->
                                @for($i = 1; $i <= 4; $i++)
                                    @php
                                        $curr_r = $max_r * ($i / 4);
                                        $x0 = $cx; $y0 = $cy - $curr_r;
                                        $x1 = $cx + $curr_r * cos(deg2rad(-18)); $y1 = $cy + $curr_r * sin(deg2rad(-18));
                                        $x2 = $cx + $curr_r * cos(deg2rad(54));  $y2 = $cy + $curr_r * sin(deg2rad(54));
                                        $x3 = $cx + $curr_r * cos(deg2rad(126)); $y3 = $cy + $curr_r * sin(deg2rad(126));
                                        $x4 = $cx + $curr_r * cos(deg2rad(198)); $y4 = $cy + $curr_r * sin(deg2rad(198));
                                    @endphp
                                    <polygon points="{{ "$x0,$y0 $x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4" }}" fill="none" stroke="#e8dcc4" stroke-width="0.8" stroke-dasharray="2" />
                                @endfor
                                
                                <!-- Axis Lines -->
                                @foreach([ -90, -18, 54, 126, 198 ] as $angle)
                                    <line x1="{{ $cx }}" y1="{{ $cy }}" x2="{{ $cx + $max_r * cos(deg2rad($angle)) }}" y2="{{ $cy + $max_r * sin(deg2rad($angle)) }}" stroke="#e8dcc4" stroke-width="1" />
                                @endforeach
                                
                                <!-- Active Data Polygon (Animated via GSAP scale) -->
                                <polygon id="radar-polygon" points="{{ $points }}" fill="rgba(113, 78, 48, 0.15)" stroke="rgb(113, 78, 48)" stroke-width="1.5" />
                                
                                <!-- Active Data Points -->
                                <circle cx="{{ $p0_x }}" cy="{{ $p0_y }}" r="3" fill="rgb(113, 78, 48)" />
                                <circle cx="{{ $p1_x }}" cy="{{ $p1_y }}" r="3" fill="rgb(113, 78, 48)" />
                                <circle cx="{{ $p2_x }}" cy="{{ $p2_y }}" r="3" fill="rgb(113, 78, 48)" />
                                <circle cx="{{ $p3_x }}" cy="{{ $p3_y }}" r="3" fill="rgb(113, 78, 48)" />
                                <circle cx="{{ $p4_x }}" cy="{{ $p4_y }}" r="3" fill="rgb(113, 78, 48)" />
                                
                                <!-- Labels -->
                                <text x="{{ $cx }}" y="{{ $cy - $max_r - 12 }}" text-anchor="middle" font-family="monospace" font-weight="bold" font-size="8" fill="#422d1b" class="tracking-wider uppercase">Aroma</text>
                                <text x="{{ $cx + $max_r + 28 }}" y="{{ $cy + $max_r * sin(deg2rad(-18)) + 3 }}" text-anchor="start" font-family="monospace" font-weight="bold" font-size="8" fill="#422d1b" class="tracking-wider uppercase">Acidity</text>
                                <text x="{{ $cx + $max_r * cos(deg2rad(54)) + 8 }}" y="{{ $cy + $max_r * sin(deg2rad(54)) + 12 }}" text-anchor="start" font-family="monospace" font-weight="bold" font-size="8" fill="#422d1b" class="tracking-wider uppercase">Body</text>
                                <text x="{{ $cx + $max_r * cos(deg2rad(126)) - 8 }}" y="{{ $cy + $max_r * sin(deg2rad(126)) + 12 }}" text-anchor="end" font-family="monospace" font-weight="bold" font-size="8" fill="#422d1b" class="tracking-wider uppercase">Sweetness</text>
                                <text x="{{ $cx - $max_r - 28 }}" y="{{ $cy + $max_r * sin(deg2rad(198)) + 3 }}" text-anchor="end" font-family="monospace" font-weight="bold" font-size="8" fill="#422d1b" class="tracking-wider uppercase">Clean Cup</text>
                            </svg>
                        </div>
                        
                        <!-- Description legend (Monospace) -->
                        <div class="space-y-4 w-full font-mono text-[10px]">
                            <div class="flex justify-between items-center border-b border-coffee-100 pb-2">
                                <span class="text-coffee-500">Aroma & Fragrance</span>
                                <span class="font-bold text-coffee-950">{{ $aroma }} / 100</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-coffee-100 pb-2">
                                <span class="text-coffee-500">Kekuatan Asam (Acidity)</span>
                                <span class="font-bold text-coffee-955">{{ $acidity }} / 100</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-coffee-100 pb-2">
                                <span class="text-coffee-500">Kepekatan di Mulut (Body)</span>
                                <span class="font-bold text-coffee-955">{{ $body }} / 100</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-coffee-100 pb-2">
                                <span class="text-coffee-500">Kemanisan Buah (Sweetness)</span>
                                <span class="font-bold text-coffee-955">{{ $sweetness }} / 100</span>
                            </div>
                            <div class="flex justify-between items-center pb-1">
                                <span class="text-coffee-500">Kejernihan Rasa (Clean Cup)</span>
                                <span class="font-bold text-coffee-955">{{ $clean }} / 100</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Order Configurator Panel -->
            <div class="lg:col-span-6 space-y-8">
                <div class="bg-white p-8 md:p-10 rounded-none border border-coffee-200/50 shadow-sm space-y-6 crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>
                    <!-- Title Block -->
                    <div>
                        <div class="flex items-center gap-1.5 text-[10px] font-mono font-bold text-coffee-500 mb-2">
                            <span class="text-coffee-950">{{ $product['rating'] }}/5</span>
                            <span>• {{ $product['reviews_count'] }} Ulasan</span>
                        </div>
                        <h1 class="font-serif text-3xl md:text-4xl font-bold text-coffee-950 mb-3">{{ $product['name'] }}</h1>
                        <span class="text-[9px] font-mono text-coffee-400 uppercase tracking-widest block">Asal Wilayah: {{ $product['origin'] }}</span>
                    </div>

                    <!-- Visual Roast Level Meter -->
                    <div class="pt-4 border-t border-coffee-100 space-y-4">
                        <div>
                            <span class="block text-[8px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-2">PROFIL SANGRAI (ROAST DEPTH):</span>
                            <div class="space-y-1">
                                <div class="roast-meter-ruler">
                                    @php
                                        $roast_val = strtolower($product['roast']);
                                        $left_pos = '50%'; // default medium
                                        if (str_contains($roast_val, 'light') && str_contains($roast_val, 'medium')) $left_pos = '30%';
                                        elseif (str_contains($roast_val, 'light')) $left_pos = '15%';
                                        elseif (str_contains($roast_val, 'medium') && str_contains($roast_val, 'dark')) $left_pos = '70%';
                                        elseif (str_contains($roast_val, 'dark')) $left_pos = '85%';
                                    @endphp
                                    <div class="roast-meter-marker" style="left: {{ $left_pos }};"></div>
                                </div>
                                <div class="flex justify-between text-[8px] font-mono text-coffee-400 tracking-wider">
                                    <span>LIGHT</span>
                                    <span>MEDIUM</span>
                                    <span>DARK</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <span class="block text-[8px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-1.5">METODE PROSES:</span>
                            <span class="text-[9px] font-mono uppercase tracking-wider px-2 py-0.5 bg-coffee-50 border border-coffee-200 text-coffee-900 inline-block">
                                {{ $product['process'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Short description -->
                    <p class="text-xs text-coffee-700 leading-relaxed font-light">
                        {{ $product['description'] }}
                    </p>

                    <!-- Flavor Notes -->
                    <div>
                        <span class="block text-[8px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-3">Karakter Rasa (Tasting Notes):</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach(explode(', ', $product['notes']) as $note)
                            <span class="px-3 py-1 bg-coffee-955 text-coffee-100 rounded-none text-[10px] font-mono uppercase tracking-wide">
                                {{ $note }}
                            </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Option Selection Panel -->
                    @if($product['category'] !== 'ready-to-drink')
                    <div class="space-y-6 bg-coffee-50/50 p-6 border border-coffee-200/50">
                        <!-- Package Size -->
                        <div>
                            <label class="block text-[8px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-3">Ukuran Kemasan Biji Kopi:</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button @click="size = 250" :class="size === 250 ? 'bg-coffee-955 text-white border border-coffee-955' : 'bg-white text-coffee-800 border border-coffee-200 hover:bg-coffee-50'" class="py-2.5 text-[9px] font-mono font-bold rounded-none transition duration-200 cursor-pointer focus:outline-none">
                                    250 GRAM
                                </button>
                                <button @click="size = 500" :class="size === 500 ? 'bg-coffee-955 text-white border border-coffee-955' : 'bg-white text-coffee-800 border border-coffee-200 hover:bg-coffee-50'" class="py-2.5 text-[9px] font-mono font-bold rounded-none transition duration-200 cursor-pointer focus:outline-none">
                                    500 GRAM
                                </button>
                            </div>
                        </div>

                        <!-- Grind size selection (Tactile Grid Selectors) -->
                        <div>
                            <label class="block text-[8px] font-mono font-bold text-coffee-400 uppercase tracking-widest mb-3">Jenis Gilingan (Alat Seduh):</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button @click="grind = 'Biji Utuh'" :class="grind === 'Biji Utuh' ? 'bg-coffee-955 text-white' : 'bg-white text-coffee-800 border border-coffee-200 hover:bg-coffee-50'" class="py-2.5 px-3 text-[9px] font-mono font-bold rounded-none cursor-pointer focus:outline-none transition duration-150">
                                    BIJI UTUH
                                </button>
                                <button @click="grind = 'Giling Kasar'" :class="grind === 'Giling Kasar' ? 'bg-coffee-955 text-white' : 'bg-white text-coffee-800 border border-coffee-200 hover:bg-coffee-50'" class="py-2.5 px-3 text-[9px] font-mono font-bold rounded-none cursor-pointer focus:outline-none transition duration-150">
                                    GILING KASAR
                                </button>
                                <button @click="grind = 'Giling Sedang'" :class="grind === 'Giling Sedang' ? 'bg-coffee-955 text-white' : 'bg-white text-coffee-800 border border-coffee-200 hover:bg-coffee-50'" class="py-2.5 px-3 text-[9px] font-mono font-bold rounded-none cursor-pointer focus:outline-none transition duration-150">
                                    GILING SEDANG
                                </button>
                                <button @click="grind = 'Giling Halus'" :class="grind === 'Giling Halus' ? 'bg-coffee-955 text-white' : 'bg-white text-coffee-800 border border-coffee-200 hover:bg-coffee-50'" class="py-2.5 px-3 text-[9px] font-mono font-bold rounded-none cursor-pointer focus:outline-none transition duration-150">
                                    GILING HALUS
                                </button>
                            </div>
                            <div class="mt-2.5 text-[9px] font-mono text-coffee-400 italic" x-text="'TIPS: ' + 
                                (grind === 'Biji Utuh' ? 'Giling sesaat sebelum seduh untuk menjaga aroma.' : 
                                 grind === 'Giling Kasar' ? 'Metode French Press atau Cold Brew.' : 
                                 grind === 'Giling Sedang' ? 'Metode V60, Pour Over, atau AeroPress.' : 
                                 'Metode Espresso atau Kopi Tubruk Nusantara.')">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="hidden" x-init="size = 250; grind = 'Botol Dingin'"></div>
                    @endif

                    <!-- Price & CTA Checkout Box -->
                    <div class="pt-6 border-t border-coffee-100 flex flex-col sm:flex-row gap-6 items-center justify-between">
                        <div>
                            <span class="block text-[8px] font-mono text-coffee-400 uppercase tracking-widest font-bold">Harga Konfigurasi</span>
                            <span class="text-2xl font-serif font-bold text-coffee-950 mt-1 block" x-text="'Rp ' + getPrice().toLocaleString('id-ID')"></span>
                        </div>
                        <a :href="getWaLink()" 
                           target="_blank" 
                           class="w-full sm:w-auto text-center inline-flex items-center justify-center px-8 py-3.5 border border-coffee-950 bg-coffee-950 text-white hover:bg-white hover:text-coffee-955 transition-all duration-300 text-xs font-bold rounded-none cursor-pointer">
                            PESAN VIA WHATSAPP &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stories & Reviews Section (Interactive Tabs) -->
        <div class="mt-16 bg-white rounded-none border border-coffee-200/50 shadow-sm p-8 md:p-12 crop-marks-wrap" x-data="{ activeTab: 'story' }">
            <div class="crop-marks-wrap-inner"></div>
            <!-- Tabs Headers (Monospaced Print Menu) -->
            <div class="flex flex-wrap border-b border-coffee-100 pb-4 mb-8 gap-6 font-mono text-[9px] font-bold tracking-widest">
                <button @click="activeTab = 'story'" 
                        :class="activeTab === 'story' ? 'text-coffee-950 border-b-2 border-coffee-950 font-bold' : 'text-coffee-400 hover:text-coffee-700'" 
                        class="pb-2 uppercase focus:outline-none transition cursor-pointer">
                    01 / STORY
                </button>
                <button @click="activeTab = 'roast_profile'" 
                        :class="activeTab === 'roast_profile' ? 'text-coffee-950 border-b-2 border-coffee-950 font-bold' : 'text-coffee-400 hover:text-coffee-700'" 
                        class="pb-2 uppercase focus:outline-none transition cursor-pointer">
                    02 / ROAST PROFILE
                </button>
                <button @click="activeTab = 'brew'" 
                        :class="activeTab === 'brew' ? 'text-coffee-950 border-b-2 border-coffee-950 font-bold' : 'text-coffee-400 hover:text-coffee-700'" 
                        class="pb-2 uppercase focus:outline-none transition cursor-pointer">
                    03 / BREWING GUIDE
                </button>
                <button @click="activeTab = 'reviews'" 
                        :class="activeTab === 'reviews' ? 'text-coffee-950 border-b-2 border-coffee-950 font-bold' : 'text-coffee-400 hover:text-coffee-700'" 
                        class="pb-2 uppercase focus:outline-none transition cursor-pointer">
                    04 / REVIEWS ({{ count($product['reviews']) }})
                </button>
            </div>

            <!-- Tabs Content -->
            <div>
                <!-- Story Tab -->
                <div x-show="activeTab === 'story'" x-transition:enter="transition duration-200" class="space-y-4">
                    <h3 class="font-serif text-lg font-bold text-coffee-955">Menghargai Jerih Payah Petani Mitra</h3>
                    <p class="text-xs text-coffee-700 leading-relaxed font-light">
                        {{ $product['story'] }}
                    </p>
                </div>

                <!-- Roast Profile Tab -->
                <div x-show="activeTab === 'roast_profile'" x-cloak class="space-y-4">
                    <h3 class="font-serif text-lg font-bold text-coffee-955">Detail Proses Penyangraian (Roast Details)</h3>
                    <p class="text-xs text-coffee-700 leading-relaxed font-light">
                        {{ $product['roast_profile'] }}
                    </p>
                </div>

                <!-- Brew Guide Tab -->
                <div x-show="activeTab === 'brew'" x-cloak class="space-y-4 bg-coffee-50/50 p-6 border border-coffee-200/50">
                    <h3 class="font-serif text-base font-bold text-coffee-955 mb-2">Rekomendasi Seduh Presisi Barista</h3>
                    <p class="text-xs text-coffee-700 leading-relaxed font-light">
                        {{ $product['brew_guide'] }}
                    </p>
                </div>

                <!-- Reviews Tab -->
                <div x-show="activeTab === 'reviews'" x-cloak class="space-y-6">
                    @foreach($product['reviews'] as $review)
                    <div class="border-b border-coffee-100 pb-6 last:border-b-0 last:pb-0 font-mono text-xs">
                        <div class="flex items-center justify-between mb-2">
                            <div>
                                <span class="font-bold text-coffee-900 block text-xs">{{ $review['user'] }}</span>
                                <span class="text-[8px] text-coffee-400 mt-0.5 block">Diulas pada {{ date('d F Y', strtotime($review['date'])) }}</span>
                            </div>
                            <div class="font-mono text-[9px] text-coffee-600 tracking-wider">
                                {{ $review['stars'] }}/5
                            </div>
                        </div>
                        <p class="text-xs text-coffee-600 leading-relaxed font-light italic">
                            "{{ $review['content'] }}"
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // SVG Radar Chart Scale and Fade Animation
        gsap.fromTo('#radar-polygon', 
            { scale: 0, transformOrigin: '120px 125px' }, 
            { 
                scale: 1, 
                duration: 1.5, 
                ease: 'power4.out', 
                scrollTrigger: {
                    trigger: '#radar-chart-container',
                    start: 'top 85%'
                }
            }
        );
        
        gsap.from('#radar-chart-container circle', {
            opacity: 0,
            scale: 0,
            stagger: 0.1,
            duration: 0.8,
            transformOrigin: '50% 50%',
            ease: 'back.out(1.7)',
            scrollTrigger: {
                trigger: '#radar-chart-container',
                start: 'top 85%'
            }
        });
    });
</script>
@endsection
