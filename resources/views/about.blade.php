@extends('layouts.app')

@section('title', 'Tentang Kami | Kopi Kita - Keberlanjutan & Kualitas')

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
            Origin Logbook — Issue 2026
        </span>
        <h1 class="font-serif text-4xl sm:text-5xl font-bold mt-6 mb-4">Cerita Kopi Kita</h1>
        <p class="text-xs sm:text-sm text-coffee-300 max-w-xl mx-auto font-light leading-relaxed">
            Mengenal komitmen kami dalam menghadirkan biji kopi kualitas terbaik Nusantara seraya memberdayakan petani kopi lokal.
        </p>
    </div>
</section>

<!-- Company Profile Story -->
<section class="py-28 bg-coffee-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Story Image (Generated Plantation Image) with Crop Marks -->
            <div class="relative reveal-element crop-marks-wrap">
                <div class="crop-marks-wrap-inner"></div>
                <div class="relative rounded-none overflow-hidden border border-coffee-200/50 aspect-square img-editorial-wrap">
                    <img src="{{ asset('images/plantation_coffee.png') }}" alt="Petani Kopi Kopi Kita" class="w-full h-full object-cover img-editorial">
                </div>
            </div>

            <!-- Story Content -->
            <div class="reveal-element [transition-delay:200ms] space-y-6">
                <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Bagaimana Kami Memulai — Section 01</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-coffee-955 mt-3 mb-6">Menghubungkan Petani Nusantara ke Cangkir Seduhan Anda</h2>
                
                <div class="space-y-6 text-xs sm:text-sm text-coffee-650 leading-relaxed font-light">
                    <p>
                        Kopi Kita didirikan pada tahun 2021 berawal dari keprihatinan kami terhadap rantai pasok kopi lokal yang seringkali merugikan para petani kecil di pegunungan Nusantara. Kami bermimpi menciptakan sebuah platform yang tidak hanya menjual produk premium, melainkan juga mengangkat martabat para petani kopi lokal.
                    </p>
                    <p>
                        Melalui sistem <strong class="text-coffee-950 font-medium">Direct Trade (Perdagangan Langsung)</strong>, kami mendatangi kebun-kebun di Flores, Bali, Sulawesi, dan Sumatra. Kami membeli buah kopi matang (ceri merah) secara langsung dari petani dengan harga yang layak—jauh di atas rata-rata pasar korporasi besar.
                    </p>
                    <p>
                        Langkah ini memberikan kestabilan finansial bagi para petani mitra kami, sekaligus menstimulasi mereka untuk selalu mengolah tanaman kopi secara organik dan memanen kopi hanya saat buahnya benar-benar matang sempurna.
                    </p>
                </div>

                <div class="mt-8 grid grid-cols-3 gap-0 border border-coffee-200/50 bg-white text-center font-mono">
                    <div class="p-6 border-r border-coffee-200/50">
                        <span class="block text-2xl sm:text-3xl font-serif font-bold text-coffee-955">12+</span>
                        <span class="block text-[8px] text-coffee-400 mt-1.5 uppercase tracking-wider font-bold">Mitra Tani</span>
                    </div>
                    <div class="p-6 border-r border-coffee-200/50">
                        <span class="block text-2xl sm:text-3xl font-serif font-bold text-coffee-955">100%</span>
                        <span class="block text-[8px] text-coffee-400 mt-1.5 uppercase tracking-wider font-bold">Kopi Asli</span>
                    </div>
                    <div class="p-6">
                        <span class="block text-2xl sm:text-3xl font-serif font-bold text-coffee-955">30k+</span>
                        <span class="block text-[8px] text-coffee-400 mt-1.5 uppercase tracking-wider font-bold">Seduhan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Sourcing & Farmer Profiles (Alpine-based Tabs) -->
<section class="py-28 bg-coffee-100/60 reveal-element border-t border-b border-coffee-200/30 crop-marks-wrap">
    <div class="crop-marks-wrap-inner"></div>
    <!-- CMYK Targets -->
    <div class="absolute top-4 left-4 cmyk-targets hidden md:inline-flex">
        <span class="cmyk-dot cmyk-cyan"></span>
        <span class="cmyk-dot cmyk-magenta"></span>
        <span class="cmyk-dot cmyk-yellow"></span>
        <span class="cmyk-dot cmyk-key"></span>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeFarmer: 0 }">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Jaringan Kemitraan — Section 02</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-coffee-955 mt-3 mb-4">Petani Hebat di Balik Biji Kopi Kita</h2>
            <p class="text-xs sm:text-sm text-coffee-600 font-light leading-relaxed">Klik wilayah asal kopi untuk membaca cerita petani mitra kami yang mendedikasikan hidupnya menjaga kualitas tanah dan tanaman kopi kita.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Tabs Menu -->
            <div class="lg:col-span-1 space-y-3">
                @foreach($farmers as $index => $farmer)
                <button @click="activeFarmer = {{ $index }}" 
                        :class="activeFarmer === {{ $index }} ? 'bg-coffee-950 text-white border-coffee-955' : 'bg-white text-coffee-800 border border-coffee-200/60 hover:bg-coffee-50'" 
                        class="w-full text-left p-5 rounded-none transition-all duration-300 flex items-center justify-between group cursor-pointer focus:outline-none">
                    <div class="font-mono">
                        <span class="block text-[8px] font-bold uppercase tracking-wider" :class="activeFarmer === {{ $index }} ? 'text-coffee-300' : 'text-coffee-400'">Wilayah Asal</span>
                        <span class="block font-serif text-base font-bold mt-1.5" :class="activeFarmer === {{ $index }} ? 'text-white' : 'text-coffee-950'">{{ $farmer['region'] }}</span>
                    </div>
                    <span class="w-8 h-8 rounded-none flex items-center justify-center text-xs font-mono font-bold bg-coffee-50 text-coffee-900 group-hover:scale-105 transition" :class="activeFarmer === {{ $index }} ? 'bg-coffee-900 text-white' : ''">
                        &rarr;
                    </span>
                </button>
                @endforeach
            </div>

            <!-- Tabs Content Detail Card -->
            <div class="lg:col-span-2">
                @foreach($farmers as $index => $farmer)
                <div x-show="activeFarmer === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-350" 
                     x-transition:enter-start="opacity-0 translate-y-4" 
                     x-transition:enter-end="opacity-100 translate-y-0" 
                     class="bg-white p-8 md:p-12 rounded-none border border-coffee-200/50 shadow-sm h-full flex flex-col justify-between crop-marks-wrap"
                     x-cloak>
                    <div class="crop-marks-wrap-inner"></div>
                    <div>
                        <div class="flex items-center justify-between border-b border-coffee-100 pb-6 mb-6">
                            <div>
                                <span class="text-[8px] font-mono font-bold text-coffee-400 uppercase tracking-widest">Nama Petani Mitra</span>
                                <h3 class="font-serif text-2xl font-bold text-coffee-950 mt-1">{{ $farmer['name'] }}</h3>
                            </div>
                            <span class="px-4 py-1 border border-coffee-200/50 text-[8px] font-mono font-bold uppercase tracking-widest bg-coffee-50 text-coffee-800">
                                {{ $farmer['coords'] }}
                            </span>
                        </div>
                        
                        <p class="text-xs sm:text-sm text-coffee-700 leading-relaxed font-light mb-8 italic">
                            "{{ $farmer['story'] }}"
                        </p>
                    </div>

                    <!-- Highlight Info -->
                    <div class="bg-coffee-50/50 p-6 flex flex-col sm:flex-row gap-6 justify-between border border-coffee-200/30 font-mono">
                        <div>
                            <span class="block text-[8px] uppercase tracking-wider font-bold mb-1.5 text-coffee-400">Dukungan Kopi Kita:</span>
                            <span class="block text-xs font-semibold text-coffee-950">Subsidi Pupuk & Pelatihan Organik</span>
                        </div>
                        <div>
                            <span class="block text-[8px] uppercase tracking-wider font-bold mb-1.5 text-coffee-400">Skema Pembelian:</span>
                            <span class="block text-xs font-semibold text-coffee-955">Hingga 35% di atas Harga Pasar</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Roasting & Processing Timeline Section -->
<section class="py-28 bg-coffee-50 reveal-element relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Alur Pengolahan — Section 03</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-coffee-955 mt-3 mb-4">Langkah Pengolahan Kopi Kami</h2>
            <p class="text-xs sm:text-sm text-coffee-600 font-light leading-relaxed">Proses panjang dari perkebunan hingga dikemas higienis demi menyajikan secangkir kebahagiaan untuk Anda.</p>
        </div>

        <!-- Editorial Timeline Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-0 border border-coffee-200/50 bg-white">
            <!-- Timeline Item 1 -->
            <div class="p-8 border-b md:border-b-0 md:border-r border-coffee-200/50 text-center flex flex-col items-center crop-marks-wrap">
                <div class="crop-marks-wrap-inner"></div>
                <span class="w-10 h-10 rounded-none bg-coffee-950 text-white font-mono font-bold text-xs flex items-center justify-center mb-6">1</span>
                <h3 class="font-serif text-base font-bold text-coffee-950 mb-2">Pemetikan Selektif</h3>
                <p class="text-xs text-coffee-600 leading-relaxed font-light">
                    Petani memilah secara manual dan hanya memetik ceri kopi yang telah berwarna merah sempurna (red cherry selection).
                </p>
            </div>

            <!-- Timeline Item 2 -->
            <div class="p-8 border-b md:border-b-0 md:border-r border-coffee-200/50 text-center flex flex-col items-center crop-marks-wrap">
                <div class="crop-marks-wrap-inner"></div>
                <span class="w-10 h-10 rounded-none bg-coffee-955 text-white font-mono font-bold text-xs flex items-center justify-center mb-6">2</span>
                <h3 class="font-serif text-base font-bold text-coffee-955 mb-2">Pengolahan Biji</h3>
                <p class="text-xs text-coffee-600 leading-relaxed font-light">
                    Pengupasan kulit basah diikuti fermentasi dan penjemuran alami di bawah sinar matahari menggunakan rak penjemuran khusus.
                </p>
            </div>

            <!-- Timeline Item 3 -->
            <div class="p-8 border-b md:border-b-0 md:border-r border-coffee-200/50 text-center flex flex-col items-center crop-marks-wrap">
                <div class="crop-marks-wrap-inner"></div>
                <span class="w-10 h-10 rounded-none bg-coffee-955 text-white font-mono font-bold text-xs flex items-center justify-center mb-6">3</span>
                <h3 class="font-serif text-base font-bold text-coffee-955 mb-2">Roasting Presisi</h3>
                <p class="text-xs text-coffee-600 leading-relaxed font-light">
                    Biji kopi hijau disangrai oleh Roaster ahli kami untuk memunculkan kompleksitas rasa asal tanah nusantara.
                </p>
            </div>

            <!-- Timeline Item 4 -->
            <div class="p-8 text-center flex flex-col items-center crop-marks-wrap">
                <div class="crop-marks-wrap-inner"></div>
                <span class="w-10 h-10 rounded-none bg-coffee-955 text-white font-mono font-bold text-xs flex items-center justify-center mb-6">4</span>
                <h3 class="font-serif text-base font-bold text-coffee-955 mb-2">Pengemasan Valve</h3>
                <p class="text-xs text-coffee-600 leading-relaxed font-light">
                    Biji kopi dikemas dalam aluminium foil premium dengan one-way degassing valve untuk mencegah oksidasi dan menjaga keaslian rasa.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
