@extends('layouts.app')

@section('title', 'Hubungi Kami & FAQ | Kopi Kita')

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
            Contact Directory — Reg. 509
        </span>
        <h1 class="font-serif text-4xl sm:text-5xl font-bold mt-6 mb-4">Kontak & Lokasi</h1>
        <p class="text-xs sm:text-sm text-coffee-300 max-w-xl mx-auto font-light leading-relaxed">
            Punya pertanyaan seputar produk kami atau ingin berkolaborasi? Hubungi kami langsung atau baca FAQ di bawah ini.
        </p>
    </div>
</section>

<!-- Contact Form & Details Section -->
<section class="py-24 bg-coffee-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Side: Details & Styled Map -->
            <div class="lg:col-span-5 space-y-8">
                <div class="bg-white p-8 rounded-none border border-coffee-200/50 shadow-sm crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>
                    <div class="flex items-center justify-between border-b border-coffee-100 pb-3 mb-6">
                        <h2 class="font-serif text-xl font-bold text-coffee-950">Roastery & Kedai Utama</h2>
                        <span class="text-[8px] uppercase tracking-widest font-medium text-coffee-500">Official Site</span>
                    </div>
                    
                    <div class="space-y-6 font-mono">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-none bg-coffee-50 border border-coffee-200/50 flex items-center justify-center text-coffee-700 shrink-0 mt-0.5">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Alamat Lengkap</span>
                                <p class="text-xs text-coffee-700 mt-1.5 font-light leading-relaxed">Jl. Kopi Harum No. 45, Coblong, Kota Bandung, Jawa Barat 40135</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-none bg-coffee-50 border border-coffee-200/50 flex items-center justify-center text-coffee-700 shrink-0 mt-0.5">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Jam Kunjungan Roastery</span>
                                <p class="text-xs text-coffee-700 mt-1.5 font-light leading-relaxed">
                                    Setiap Hari: 09.00 - 22.00 WIB
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-none bg-coffee-50 border border-coffee-200/50 flex items-center justify-center text-coffee-700 shrink-0 mt-0.5">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-[8px] font-bold text-coffee-400 uppercase tracking-widest">Kontak & Hubungan Bisnis</span>
                                <p class="text-xs text-coffee-700 mt-1.5 font-light leading-relaxed">
                                    WA: +62 812-3456-7890 <br>
                                    Email: halo@kopikita.id
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Styled Mock Map Panel -->
                <div class="rounded-none overflow-hidden border border-coffee-200/60 shadow-sm aspect-[4/3] bg-coffee-200 relative img-editorial-wrap crop-marks-wrap">
                    <div class="crop-marks-wrap-inner"></div>
                    <div class="absolute inset-0 bg-coffee-50 flex flex-col items-center justify-center p-6 text-center">
                        <span class="text-2xl mb-3">📍</span>
                        <h4 class="font-serif font-bold text-coffee-950 mb-1">Bandung Roastery Café</h4>
                        <p class="text-xs text-coffee-600 max-w-xs mb-4 font-light">Gunakan Google Maps untuk navigasi langsung ke kedai dan melihat aktivitas Roastery langsung kami.</p>
                        <a href="https://maps.google.com" target="_blank" class="inline-flex items-center justify-center px-6 py-2 border border-coffee-950 bg-white text-coffee-800 hover:bg-coffee-950 hover:text-white transition-all duration-300 text-xs font-mono font-bold rounded-none">
                            BUKA GOOGLE MAPS &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form (with simulated success state) -->
            <div class="lg:col-span-7">
                <div class="bg-white p-8 md:p-10 rounded-none border border-coffee-200/50 shadow-sm relative overflow-hidden crop-marks-wrap" 
                     x-data="{ 
                        name: '', 
                        email: '', 
                        phone: '', 
                        message: '', 
                        submitted: false 
                     }">
                    <div class="crop-marks-wrap-inner"></div>
                    
                    <!-- Form Header -->
                    <div class="mb-8 border-b border-coffee-100 pb-4 flex items-center justify-between">
                        <div>
                            <h3 class="font-serif text-2xl font-bold text-coffee-955">Kirim Pesan</h3>
                            <p class="text-xs text-coffee-500 mt-1 font-light">Kami akan membaca pesan Anda dan membalasnya sesegera mungkin.</p>
                        </div>
                        <span class="text-[8px] uppercase tracking-widest font-medium text-coffee-500">Mailbox Log</span>
                    </div>

                    <!-- Main Form Elements -->
                    <form @submit.prevent="submitted = true" x-show="!submitted" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[8px] font-mono font-bold text-coffee-450 uppercase tracking-widest mb-2">Nama Lengkap *</label>
                                <input type="text" required x-model="name" class="w-full bg-white border border-coffee-250 rounded-none text-xs px-4 py-3 text-coffee-900 focus:outline-none focus:border-coffee-800 transition duration-200" placeholder="Contoh: Budi Santoso">
                            </div>
                            <div>
                                <label class="block text-[8px] font-mono font-bold text-coffee-450 uppercase tracking-widest mb-2">Alamat Email *</label>
                                <input type="email" required x-model="email" class="w-full bg-white border border-coffee-250 rounded-none text-xs px-4 py-3 text-coffee-900 focus:outline-none focus:border-coffee-800 transition duration-200" placeholder="Contoh: budi@email.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-[8px] font-mono font-bold text-coffee-450 uppercase tracking-widest mb-2">Nomor WhatsApp / Telepon</label>
                            <input type="tel" x-model="phone" class="w-full bg-white border border-coffee-250 rounded-none text-xs px-4 py-3 text-coffee-900 focus:outline-none focus:border-coffee-800 transition duration-200" placeholder="Contoh: 0812xxxxxxxx">
                        </div>

                        <div>
                            <label class="block text-[8px] font-mono font-bold text-coffee-450 uppercase tracking-widest mb-2">Pesan Anda *</label>
                            <textarea required x-model="message" rows="5" class="w-full bg-white border border-coffee-250 rounded-none text-xs px-4 py-3 text-coffee-900 focus:outline-none focus:border-coffee-800 transition duration-200 resize-none font-light" placeholder="Tuliskan pertanyaan, saran, atau minat kolaborasi Anda di sini..."></textarea>
                        </div>

                        <div class="flex items-center border-t border-coffee-100 pt-6">
                            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 border border-coffee-950 text-xs font-bold text-white bg-coffee-950 hover:bg-white hover:text-coffee-955 transition-all duration-300 rounded-none cursor-pointer">
                                KIRIM PESAN &rarr;
                            </button>
                        </div>
                    </form>

                    <!-- Success Glassmorphic State Overlay -->
                    <div x-show="submitted" 
                         x-transition:enter="transition ease-out duration-350" 
                         x-transition:enter-start="opacity-0 translate-y-4" 
                         x-transition:enter-end="opacity-100 translate-y-0" 
                         class="text-center py-12 px-4"
                         x-cloak>
                        <div class="w-12 h-12 rounded-none bg-coffee-50 border border-coffee-200/50 text-coffee-850 flex items-center justify-center text-xl mx-auto mb-6">
                            ✓
                        </div>
                        <h4 class="font-serif text-2xl font-bold text-coffee-950 mb-4">Pesan Berhasil Terkirim!</h4>
                        <p class="text-xs sm:text-sm text-coffee-600 max-w-md mx-auto leading-relaxed mb-8 font-light">
                            Halo <strong x-text="name"></strong>, terima kasih telah menghubungi Kopi Kita. Salinan pesan konfirmasi telah disimulasikan terkirim ke <strong x-text="email"></strong>. Tim kami akan segera menanggapi dalam waktu 1x24 jam.
                        </p>
                        <button @click="submitted = false; name = ''; email = ''; phone = ''; message = ''" class="inline-flex items-center justify-center px-6 py-2.5 border border-coffee-300 text-xs font-bold rounded-none text-coffee-800 bg-white hover:bg-coffee-950 hover:text-white hover:border-coffee-950 transition duration-300 cursor-pointer">
                            Kirim Pesan Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ Section) -->
<section class="py-24 bg-coffee-100/60 border-t border-coffee-200/30 crop-marks-wrap relative">
    <div class="crop-marks-wrap-inner"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-coffee-500 text-[10px] uppercase tracking-widest font-medium">Pertanyaan Umum — Section 04</span>
            <h2 class="font-serif text-3xl font-bold text-coffee-955 mt-3 mb-3">FAQ Seputar Seduhan Kopi Kita</h2>
            <p class="text-xs sm:text-sm text-coffee-600 font-light leading-relaxed">Jawaban cepat untuk pertanyaan yang paling sering diajukan pelanggan kami.</p>
        </div>

        <!-- FAQs Accordions List -->
        <div class="space-y-4" x-data="{ activeFAQ: null }">
            @foreach($faqs as $index => $faq)
            <div class="bg-white rounded-none border border-coffee-200/50 shadow-sm overflow-hidden transition-all duration-300">
                <!-- Question Title Toggle -->
                <button @click="activeFAQ = (activeFAQ === {{ $index }} ? null : {{ $index }})" 
                        class="w-full text-left px-6 py-5 flex items-center justify-between focus:outline-none cursor-pointer">
                    <span class="font-serif font-bold text-coffee-950 text-base md:text-lg">{{ $faq['question'] }}</span>
                    <span class="w-6 h-6 rounded-none bg-coffee-50 border border-coffee-200/30 flex items-center justify-center text-[10px] font-mono font-bold text-coffee-600 transition-all duration-300"
                          :class="activeFAQ === {{ $index }} ? 'rotate-180 bg-coffee-850 text-white' : ''">
                        ▼
                    </span>
                </button>

                <!-- Answer Content -->
                <div x-show="activeFAQ === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-200" 
                     class="px-6 pb-6 text-xs sm:text-sm text-coffee-650 leading-relaxed font-light"
                     x-cloak>
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
