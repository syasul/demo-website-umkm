<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getProducts()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'Flores Bajawa Arabica',
                'category' => 'single-origin',
                'category_label' => 'Single Origin',
                'description' => 'Kopi Arabika khas Flores dengan aroma bunga yang manis, rasa cokelat sedang, dan keasaman seimbang.',
                'price' => 55000,
                'notes' => 'Floral, Chocolate, Caramel',
                'roast' => 'Medium Roast',
                'origin' => 'Bajawa, Flores (1.200 - 1.400 mdpl)',
                'process' => 'Full Wash',
                'rating' => 4.9,
                'reviews_count' => 42,
                'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&q=80&w=600',
                // Detailed metrics for non-AI professional look
                'altitude' => '1.350 mdpl',
                'varietal' => 'Lini S795 & Bourbon',
                'moisture' => '11.8%',
                'density' => '710 g/L',
                'roast_profile' => 'Suhu awal 200°C dengan waktu development 15% (Agtron 65). Mempertahankan kemanisan cokelat susu dan keasaman buah sedang.',
                'taste_chart' => [
                    'acidity' => 65,
                    'body' => 60,
                    'sweetness' => 85,
                    'aftertaste' => 75
                ],
                'story' => 'Ditanam oleh kelompok tani koperasi Inerie di lereng Gunung Inerie, Flores. Melalui proses Full Wash yang bersih, buah ceri merah dipetik secara manual, difermentasi selama 12 jam, kemudian dicuci bersih untuk menghasilkan rasa yang bersih (clean cup) dengan aroma floral bunga kopi yang khas.',
                'brew_guide' => 'Disarankan diseduh dengan metode V60. Gunakan suhu air 91°C, rasio 1:15, dan grind size medium-coarse. Total waktu ekstraksi 2 menit 20 detik.',
                'reviews' => [
                    ['user' => 'Hendra Wijaya', 'date' => '2026-05-28', 'stars' => 5, 'content' => 'Clarity rasa cokelatnya luar biasa bersih. Kemanisannya tahan lama di tenggorokan.'],
                    ['user' => 'Lina Marlina', 'date' => '2026-05-15', 'stars' => 5, 'content' => 'Kopi favorit harian keluarga. Tidak terlalu asam, aromanya memenuhi seisi rumah saat diseduh.'],
                    ['user' => 'Doni Pratama', 'date' => '2026-04-30', 'stars' => 4, 'content' => 'Roasting-nya merata sekali. Sangat direkomendasikan untuk pecinta filter coffee.']
                ],
                // Exclusive Specialty Coffee Attributes
                'sca_score' => 86.75,
                'badge' => 'Micro-Lot Reserve',
                'cupping_log' => [
                    'aroma' => 86,
                    'acidity' => 78,
                    'body' => 80,
                    'sweetness' => 88,
                    'clean_cup' => 90
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Aceh Gayo Arabica',
                'category' => 'single-origin',
                'category_label' => 'Single Origin',
                'description' => 'Kopi Gayo legendaris dengan body tebal, aroma rempah yang harum, dan tingkat keasaman rendah.',
                'price' => 60000,
                'notes' => 'Spicy, Herbal, Dark Cocoa',
                'roast' => 'Medium-Dark Roast',
                'origin' => 'Takengon, Aceh (1.300 - 1.600 mdpl)',
                'process' => 'Wet Hulled (Giling Basah)',
                'rating' => 4.8,
                'reviews_count' => 67,
                'image' => 'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&q=80&w=600',
                // Detailed metrics
                'altitude' => '1.450 mdpl',
                'varietal' => 'Catimor & Ateng Super',
                'moisture' => '12.0%',
                'density' => '730 g/L',
                'roast_profile' => 'Disangrai dengan profil Medium-Dark (Agtron 55) untuk memunculkan body tebal alami dan meminimalkan asam sitrus, memperkuat rasa cocoa.',
                'taste_chart' => [
                    'acidity' => 40,
                    'body' => 90,
                    'sweetness' => 70,
                    'aftertaste' => 80
                ],
                'story' => 'Kopi Gayo kami berasal dari kebun yang dikelola oleh Ibu Maria dan kelompok tani wanita Gayo di Takengon. Diproses dengan metode Giling Basah tradisional (Wet Hulled) yang merupakan kekhasan Indonesia, memberikan karakteristik body yang tebal, rasa rempah herbal yang eksotis, dan tingkat asam yang sangat ramah lambung.',
                'brew_guide' => 'Sangat cocok untuk metode Syphon atau Kopi Tubruk klasik. Air mendidih 94°C membantu ekstraksi senyawa aromatik rempah jahe dan kayu manis khas Gayo.',
                'reviews' => [
                    ['user' => 'Agus Setiawan', 'date' => '2026-06-01', 'stars' => 5, 'content' => 'Body tebal mantap. Sedikit asam namun aftertaste cokelatnya pekat. Mantap untuk tubruk.'],
                    ['user' => 'Rini Astuti', 'date' => '2026-05-20', 'stars' => 5, 'content' => 'Aroma rempahnya sangat tercium jelas. Sangat nikmat diminum pagi hari tanpa gula.'],
                    ['user' => 'Yusuf Hakim', 'date' => '2026-05-02', 'stars' => 4, 'content' => 'Biji kopinya besar-besar dan utuh. Pengiriman cepat dan kemasan aluminiumnya rapi.']
                ],
                // Exclusive Specialty Coffee Attributes
                'sca_score' => 85.50,
                'badge' => 'SCA Grade 1',
                'cupping_log' => [
                    'aroma' => 82,
                    'acidity' => 70,
                    'body' => 92,
                    'sweetness' => 78,
                    'clean_cup' => 88
                ]
            ],
            3 => [
                'id' => 3,
                'name' => 'Bali Kintamani Arabica',
                'category' => 'single-origin',
                'category_label' => 'Single Origin',
                'description' => 'Kopi Arabika Kintamani yang segar dengan sentuhan rasa jeruk sitrus alami dan keasaman manis yang jernih.',
                'price' => 58000,
                'notes' => 'Citrusy, Orange Peel, Brown Sugar',
                'roast' => 'Light-Medium Roast',
                'origin' => 'Kintamani, Bali (1.100 - 1.300 mdpl)',
                'process' => 'Natural Process',
                'rating' => 4.7,
                'reviews_count' => 31,
                'image' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&q=80&w=600',
                // Detailed metrics
                'altitude' => '1.250 mdpl',
                'varietal' => 'USDA 762 & Kartika',
                'moisture' => '11.2%',
                'density' => '690 g/L',
                'roast_profile' => 'Light-Medium roast (Agtron 75) untuk mempertahankan keasaman sitrus buah jeruk segar yang merupakan ciri khas Kintamani.',
                'taste_chart' => [
                    'acidity' => 85,
                    'body' => 45,
                    'sweetness' => 80,
                    'aftertaste' => 70
                ],
                'story' => 'Bermitra dengan Subak Abian di Kintamani, Bali. Tanaman kopi tumbuh di samping pohon jeruk lokal dalam sistem tumpang sari tradisional. Diproses secara Natural (ceri kopi dijemur utuh beserta kulitnya), memberikan rasa manis buah jeruk matang (orange peel) dan aroma tebu alami.',
                'brew_guide' => 'Sangat direkomendasikan menggunakan es (Japanese Iced Coffee). Keasaman jeruk sitrusnya akan terasa sangat segar dan manis di siang hari.',
                'reviews' => [
                    ['user' => 'Sarah Wijaya', 'date' => '2026-06-03', 'stars' => 5, 'content' => 'Seperti meminum teh buah! Keasaman jeruknya sangat menyegarkan di lidah.'],
                    ['user' => 'Taufik Hidayat', 'date' => '2026-05-18', 'stars' => 4, 'content' => 'Unik sekali karakternya. Untuk penyuka kopi asam buah, ini adalah surga.'],
                    ['user' => 'Adit Nugroho', 'date' => '2026-04-25', 'stars' => 5, 'content' => 'Proses naturalnya bersih, tidak ada rasa fermentasi yang mengganggu. Top!']
                ],
                // Exclusive Specialty Coffee Attributes
                'sca_score' => 86.25,
                'badge' => 'Specialty Grade',
                'cupping_log' => [
                    'aroma' => 88,
                    'acidity' => 88,
                    'body' => 72,
                    'sweetness' => 84,
                    'clean_cup' => 92
                ]
            ],
            4 => [
                'id' => 4,
                'name' => 'Toraja Kalosi Arabica',
                'category' => 'single-origin',
                'category_label' => 'Single Origin',
                'description' => 'Kopi Toraja bercita rasa pekat dengan nuansa rasa tanah basah yang eksotis dan aftertaste manis madu.',
                'price' => 62000,
                'notes' => 'Earthy, Spicy, Dark Honey',
                'roast' => 'Medium-Dark Roast',
                'origin' => 'Toraja, Sulawesi Selatan (1.400 - 1.700 mdpl)',
                'process' => 'Wet Hulled',
                'rating' => 4.9,
                'reviews_count' => 58,
                'image' => 'https://images.unsplash.com/photo-1587960301182-d3918a0ffbe2?auto=format&fit=crop&q=80&w=600',
                // Detailed metrics
                'altitude' => '1.550 mdpl',
                'varietal' => 'S795 & Lini S',
                'moisture' => '11.9%',
                'density' => '725 g/L',
                'roast_profile' => 'Suhu akhir sangrai mencapai 218°C (Agtron 58) untuk menghadirkan body penuh dan rasa manis madu yang tebal.',
                'taste_chart' => [
                    'acidity' => 45,
                    'body' => 85,
                    'sweetness' => 75,
                    'aftertaste' => 85
                ],
                'story' => 'Ditanam di dataran tinggi Toraja Utara yang sejuk. Dipanen dari varietas pusaka S795. Proses semi-wash (wet hulled) memberikan nuansa earthy tanah basah pegunungan Sulawesi yang eksotis, dipadu manisnya madu hutan liar.',
                'brew_guide' => 'Cocok diseduh menggunakan Mokapot atau French Press untuk memperkuat konsistensi minyak kopi yang manis dan pekat.',
                'reviews' => [
                    ['user' => 'Reza Pahlevi', 'date' => '2026-05-30', 'stars' => 5, 'content' => 'Terbaik! Ada sensasi rasa madu hitam di akhir seduhan. Sangat berkarakter.'],
                    ['user' => 'Farah Nabila', 'date' => '2026-05-10', 'stars' => 5, 'content' => 'Kopinya pekat tapi tidak bikin kembung. Body-nya tebal sekali, cocok dicampur susu.'],
                    ['user' => 'Bayu Segara', 'date' => '2026-04-20', 'stars' => 4, 'content' => 'Salah satu single origin terbaik dari Sulawesi. Sangat direkomendasikan.']
                ],
                // Exclusive Specialty Coffee Attributes
                'sca_score' => 85.75,
                'badge' => 'Limited Micro-Lot',
                'cupping_log' => [
                    'aroma' => 84,
                    'acidity' => 76,
                    'body' => 88,
                    'sweetness' => 82,
                    'clean_cup' => 88
                ]
            ],
            5 => [
                'id' => 5,
                'name' => 'Senja Espresso Blend',
                'category' => 'blend',
                'category_label' => 'Espresso Blend',
                'description' => 'Perpaduan seimbang 70% Arabika Flores dan 30% Robusta Temanggung. Sangat cocok untuk kopi susu kekinian.',
                'price' => 45000,
                'notes' => 'Caramel, Nutty, Creamy Body',
                'roast' => 'Medium-Dark Roast',
                'origin' => 'Multi-Region (Nusantara)',
                'process' => 'Mixed Process',
                'rating' => 5.0,
                'reviews_count' => 110,
                'image' => 'https://images.unsplash.com/photo-1610632380989-680fe40816c6?auto=format&fit=crop&q=80&w=600',
                // Detailed metrics
                'altitude' => '1.000 - 1.400 mdpl',
                'varietal' => 'Arabika Bourbon & Robusta Tugusari',
                'moisture' => '12.1%',
                'density' => '740 g/L',
                'roast_profile' => 'Medium-Dark roast (Agtron 50) yang optimal untuk konsistensi espresso. Minim asam dengan crema yang tebal.',
                'taste_chart' => [
                    'acidity' => 30,
                    'body' => 95,
                    'sweetness' => 80,
                    'aftertaste' => 85
                ],
                'story' => 'Senja Espresso Blend diformulasikan khusus untuk kedai kopi dan pecinta kopi susu di rumah. Memadukan body tebal Robusta Temanggung proses Wash dan kemanisan Arabika Flores Bajawa proses Full Wash. Menghasilkan rasa karamel, kacang panggang, serta body yang sangat creamy.',
                'brew_guide' => 'Gunakan mesin espresso rumahan atau Mokapot. Rasio ekstraksi: 18 gram bubuk kopi menghasilkan 36-40 gram cairan espresso dalam waktu 25-28 detik.',
                'reviews' => [
                    ['user' => 'Kevin Sanjaya', 'date' => '2026-06-02', 'stars' => 5, 'content' => 'Untuk es kopi susu kekinian ini juaranya. Kopinya tetap terasa bold meskipun dicampur susu banyak.'],
                    ['user' => 'Anita Rahma', 'date' => '2026-05-25', 'stars' => 5, 'content' => 'Kemasannya aman dengan zip lock. Crema espresso-nya tebal dan beraroma cokelat karamel.'],
                    ['user' => 'Riko Hartono', 'date' => '2026-05-12', 'stars' => 5, 'content' => 'Pembelian kiloan untuk kafe kami selalu konsisten rasanya. Roaster-nya profesional.']
                ],
                // Exclusive Specialty Coffee Attributes
                'sca_score' => 84.25,
                'badge' => 'Roaster Signature',
                'cupping_log' => [
                    'aroma' => 82,
                    'acidity' => 68,
                    'body' => 94,
                    'sweetness' => 80,
                    'clean_cup' => 86
                ]
            ],
            6 => [
                'id' => 6,
                'name' => 'Kopi Susu Gula Aren (RTD)',
                'category' => 'ready-to-drink',
                'category_label' => 'Ready to Drink',
                'description' => 'Cold brew espresso dicampur susu segar premium dan sirup gula aren murni. Disajikan dingin dan botolan.',
                'price' => 25000,
                'notes' => 'Sweet Aren, Creamy, Bold Coffee',
                'roast' => 'Espresso Roast',
                'origin' => 'House Blend',
                'process' => 'Cold Brewed',
                'rating' => 4.9,
                'reviews_count' => 189,
                'image' => 'https://images.unsplash.com/photo-1553909489-cd47e0907980?auto=format&fit=crop&q=80&w=600',
                // Detailed metrics
                'altitude' => 'House Blend',
                'varietal' => 'Espresso Blend',
                'moisture' => 'N/A',
                'density' => 'N/A',
                'roast_profile' => 'Mengekstraksi kopi blend khusus menggunakan metode tetesan air dingin (cold brew extraction) selama 12 jam untuk keasaman sangat rendah dan rasa halus.',
                'taste_chart' => [
                    'acidity' => 20,
                    'body' => 80,
                    'sweetness' => 90,
                    'aftertaste' => 80
                ],
                'story' => 'Kopi Susu Gula Aren botolan kami diseduh segar setiap pagi. Kami menggunakan cold brew concentrate berasam rendah dari House Blend Arabica-Robusta Kopi Kita, dicampur dengan susu cair segar (fresh milk) berkualitas tinggi dan gula aren cair murni hasil sadapan petani aren lokal di Jawa Barat.',
                'brew_guide' => 'Cukup simpan di dalam kulkas dan sajikan dingin menggunakan es batu. Kocok dahulu sebelum diminum. Sebaiknya dikonsumsi dalam 3 hari.',
                'reviews' => [
                    ['user' => 'Beni Chandra', 'date' => '2026-06-02', 'stars' => 5, 'content' => 'Sangat segar dan manis aren-nya pas tidak bikin enek. Rasa kopinya tetap keluar.'],
                    ['user' => 'Mega Pertiwi', 'date' => '2026-05-22', 'stars' => 5, 'content' => 'Botol kemasannya tebal dan bersih. Selalu pesan ini untuk stok di kulkas kantor.'],
                    ['user' => 'Dimas Wibowo', 'date' => '2026-05-09', 'stars' => 4, 'content' => 'Creamy sekali! Rasa kopinya tidak hilang. Lebih enak diminum pakai es batu lagi.']
                ],
                // Exclusive Specialty Coffee Attributes
                'sca_score' => null,
                'badge' => 'Freshly Bottled',
                'cupping_log' => [
                    'aroma' => 76,
                    'acidity' => 60,
                    'body' => 82,
                    'sweetness' => 92,
                    'clean_cup' => 85
                ]
            ]
        ];
    }

    public function home()
    {
        $products = collect($this->getProducts())->take(3);
        
        $testimonials = [
            [
                'name' => 'Budi Santoso',
                'role' => 'Home Brewer & Coffee Enthusiast',
                'content' => 'Kopi Flores Bajawa dari Kopi Kita adalah salah satu yang terbaik yang pernah saya seduh di rumah. Aromanya harum sekali, dan roasting-nya sangat konsisten.',
                'stars' => 5
            ],
            [
                'name' => 'Siti Aminah',
                'role' => 'Pencinta Kopi Susu',
                'content' => 'Senja Blend sangat cocok dicampur susu dan gula aren. Rasanya bold tapi tetap ada notes manis caramel-nya. Pelayanannya juga sangat ramah!',
                'stars' => 5
            ],
            [
                'name' => 'Rian Hidayat',
                'role' => 'Owner Kafe Lokal',
                'content' => 'Kami menggunakan biji kopi dari Kopi Kita untuk menu filter coffee di kafe kami. Pelanggan sangat suka dengan kejelasan rasa (clarity) dari Bali Kintamani-nya.',
                'stars' => 5
            ]
        ];

        return view('home', compact('products', 'testimonials'));
    }

    public function about()
    {
        $farmers = [
            [
                'region' => 'Bajawa, Flores',
                'name' => 'Pak Yosep',
                'story' => 'Bekerja sama sejak 2021 dengan kelompok tani di lereng Gunung Inerie untuk memproduksi ceri kopi organik berkualitas tinggi dengan sistem Full Wash.',
                'coords' => 'Flores, NTT'
            ],
            [
                'region' => 'Takengon, Aceh Gayo',
                'name' => 'Ibu Maria',
                'story' => 'Mendukung pemberdayaan petani wanita di Dataran Tinggi Gayo untuk mengolah kopi dengan metode Giling Basah tradisional yang menghasilkan body tebal khas Gayo.',
                'coords' => 'Gayo, Aceh'
            ],
            [
                'region' => 'Kintamani, Bali',
                'name' => 'Pak Wayan',
                'story' => 'Mengembangkan kopi proses Natural bersama Subak Abian Kintamani, memanfaatkan tumpang sari pohon jeruk untuk rasa kopi sitrus yang segar.',
                'coords' => 'Kintamani, Bali'
            ]
        ];

        return view('about', compact('farmers'));
    }

    public function products()
    {
        $products = $this->getProducts();
        return view('products', compact('products'));
    }

    public function show($id)
    {
        $products = $this->getProducts();
        
        if (!isset($products[$id])) {
            abort(404);
        }
        
        $product = $products[$id];
        return view('products.show', compact('product'));
    }

    public function contact()
    {
        $faqs = [
            [
                'question' => 'Bagaimana cara memesan produk kopi di Kopi Kita?',
                'answer' => 'Anda bisa memilih produk melalui menu Katalog Produk kami, memilih ukuran dan jenis gilingan, lalu mengeklik "Pesan via WhatsApp". Sistem kami akan mengarahkan Anda ke WhatsApp dengan format pesan otomatis berisi detail pesanan Anda.'
            ],
            [
                'question' => 'Apakah Kopi Kita melayani pengiriman ke luar kota?',
                'answer' => 'Ya, kami melayani pengiriman biji kopi kemasan ke seluruh wilayah Indonesia menggunakan jasa ekspedisi terpercaya (JNE, J&T, SiCepat, dll.).'
            ],
            [
                'question' => 'Apakah saya bisa meminta biji kopi digiling langsung?',
                'answer' => 'Tenu saja! Kami menyediakan beberapa pilihan gilingan gratis: Biji Utuh (untuk disimpan lama/espresso giling sendiri), Kasar (untuk French Press/Cold Brew), Sedang (untuk V60/Aeropress), dan Halus (untuk Espresso/Kopi Tubruk).'
            ],
            [
                'question' => 'Di mana lokasi kedai fisik Kopi Kita?',
                'answer' => 'Kedai dan Roastery kami berlokasi di Jl. Kopi Harum No. 45, Bandung, Jawa Barat. Kami buka setiap hari pukul 09.00 - 22.00 WIB.'
            ]
        ];

        return view('contact', compact('faqs'));
    }
}
