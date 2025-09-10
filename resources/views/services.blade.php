@extends('layouts.app')

@section('title', 'Layanan Massage - Spa Bali')
@section('description', 'Berbagai pilihan layanan massage profesional di Bali. Body massage, Java massage, full body treatment, dan totok wajah dengan harga terjangkau.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Layanan Massage</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Pilih layanan massage yang sesuai dengan kebutuhan Anda. 
                Semua treatment dilakukan oleh terapis profesional dan berpengalaman.
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Service 1 - Body Massage -->
            <div class="card hover:shadow-xl transition duration-300">
                <div class="flex items-start space-x-6">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-4xl">💆‍♀️</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Body Massage</h3>
                                <p class="text-gray-600">60 menit</p>
                            </div>
                            <div class="text-right">
                                <p class="text-3xl font-bold text-primary-600">Rp 198.000</p>
                                <p class="text-sm text-gray-500">per sesi</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Pijat tradisional yang fokus pada relaksasi otot dan melancarkan peredaran darah. 
                            Cocok untuk menghilangkan stres dan kelelahan sehari-hari.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Relaksasi otot seluruh tubuh</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Melancarkan peredaran darah</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Mengurangi stres dan ketegangan</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Minyak aromaterapi pilihan</span>
                            </div>
                        </div>
                        <a href="{{ route('booking') }}" class="btn-primary w-full text-center">Booking Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Service 2 - Java Massage -->
            <div class="card hover:shadow-xl transition duration-300">
                <div class="flex items-start space-x-6">
                    <div class="w-20 h-20 bg-secondary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-4xl">🔥</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Java Massage</h3>
                                <p class="text-gray-600">90 menit</p>
                            </div>
                            <div class="text-right">
                                <p class="text-3xl font-bold text-primary-600">Rp 245.000</p>
                                <p class="text-sm text-gray-500">per sesi</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Teknik pijat tradisional Jawa yang menggabungkan pijat panas dan dingin untuk 
                            memberikan sensasi relaksasi yang mendalam.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Kombinasi pijat panas & dingin</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Teknik tradisional Jawa</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Relaksasi mendalam</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Herbal tradisional</span>
                            </div>
                        </div>
                        <a href="{{ route('booking') }}" class="btn-primary w-full text-center">Booking Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Service 3 - Full Body Treatment -->
            <div class="card hover:shadow-xl transition duration-300">
                <div class="flex items-start space-x-6">
                    <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-4xl">✨</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Full Body Treatment</h3>
                                <p class="text-gray-600">120 menit</p>
                            </div>
                            <div class="text-right">
                                <p class="text-3xl font-bold text-primary-600">Rp 350.000</p>
                                <p class="text-sm text-gray-500">per sesi</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Paket lengkap perawatan tubuh yang mencakup pijat, scrub, dan masker untuk 
                            memberikan pengalaman spa yang komprehensif.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Pijat tubuh lengkap</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Body scrub alami</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Masker tubuh</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Aromaterapi premium</span>
                            </div>
                        </div>
                        <a href="{{ route('booking') }}" class="btn-primary w-full text-center">Booking Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Service 4 - Totok Wajah -->
            <div class="card hover:shadow-xl transition duration-300">
                <div class="flex items-start space-x-6">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-4xl">👤</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Totok Wajah</h3>
                                <p class="text-gray-600">45 menit</p>
                            </div>
                            <div class="text-right">
                                <p class="text-3xl font-bold text-primary-600">Rp 150.000</p>
                                <p class="text-sm text-gray-500">per sesi</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Perawatan wajah tradisional dengan teknik totok untuk merelaksasi otot wajah, 
                            melancarkan peredaran darah, dan memberikan efek glowing.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Teknik totok tradisional</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Relaksasi otot wajah</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Melancarkan peredaran darah</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-green-500">✓</span>
                                <span class="text-sm text-gray-600">Efek glowing alami</span>
                            </div>
                        </div>
                        <a href="{{ route('booking') }}" class="btn-primary w-full text-center">Booking Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Layanan Tambahan</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Pilihan layanan tambahan untuk melengkapi pengalaman spa Anda
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Additional Service 1 -->
            <div class="card text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🦶</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Reflexology</h3>
                <p class="text-gray-600 mb-4">30 menit</p>
                <p class="text-2xl font-bold text-primary-600 mb-4">Rp 80.000</p>
                <p class="text-sm text-gray-600 mb-6">
                    Pijat kaki dengan teknik reflexology untuk merangsang titik-titik akupresur.
                </p>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Tambah ke Booking</a>
            </div>
            
            <!-- Additional Service 2 -->
            <div class="card text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🧘‍♀️</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Meditation Session</h3>
                <p class="text-gray-600 mb-4">20 menit</p>
                <p class="text-2xl font-bold text-primary-600 mb-4">Rp 50.000</p>
                <p class="text-sm text-gray-600 mb-6">
                    Sesi meditasi singkat untuk menenangkan pikiran dan jiwa.
                </p>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Tambah ke Booking</a>
            </div>
            
            <!-- Additional Service 3 -->
            <div class="card text-center">
                <div class="w-16 h-16 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🌿</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Herbal Compress</h3>
                <p class="text-gray-600 mb-4">15 menit</p>
                <p class="text-2xl font-bold text-primary-600 mb-4">Rp 40.000</p>
                <p class="text-sm text-gray-600 mb-6">
                    Kompres herbal hangat untuk relaksasi dan detoksifikasi.
                </p>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Tambah ke Booking</a>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Cara Kerja Layanan Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Proses sederhana untuk mendapatkan layanan massage terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    1
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pilih Layanan</h3>
                <p class="text-gray-600 text-sm">
                    Pilih jenis massage dan durasi yang sesuai dengan kebutuhan Anda
                </p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    2
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Booking Online</h3>
                <p class="text-gray-600 text-sm">
                    Isi form booking dengan detail waktu dan lokasi yang diinginkan
                </p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    3
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Konfirmasi</h3>
                <p class="text-gray-600 text-sm">
                    Tim kami akan menghubungi untuk konfirmasi dan detail terapis
                </p>
            </div>
            
            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    4
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Nikmati Layanan</h3>
                <p class="text-gray-600 text-sm">
                    Terapis datang tepat waktu dan memberikan layanan terbaik
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Jawaban untuk pertanyaan umum tentang layanan kami
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ 1 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah terapis sudah bersertifikat?</h3>
                <p class="text-gray-600">
                    Ya, semua terapis kami telah melalui pelatihan intensif dan memiliki sertifikat resmi. 
                    Mereka juga telah melalui background check untuk memastikan keamanan dan profesionalisme.
                </p>
            </div>
            
            <!-- FAQ 2 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Berapa lama waktu yang dibutuhkan untuk booking?</h3>
                <p class="text-gray-600">
                    Untuk booking reguler, kami membutuhkan minimal 2 jam sebelum waktu yang diinginkan. 
                    Untuk booking mendesak, silakan hubungi langsung ke nomor WhatsApp kami.
                </p>
            </div>
            
            <!-- FAQ 3 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah ada area yang tidak dilayani?</h3>
                <p class="text-gray-600">
                    Kami melayani seluruh area Bali dan sekitarnya. Untuk area yang sangat jauh, 
                    mungkin ada biaya transportasi tambahan yang akan dikomunikasikan sebelumnya.
                </p>
            </div>
            
            <!-- FAQ 4 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagaimana cara pembayaran?</h3>
                <p class="text-gray-600">
                    Pembayaran dapat dilakukan secara tunai saat terapis datang, atau transfer bank. 
                    Kami juga menerima pembayaran melalui e-wallet untuk kemudahan transaksi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Siap Merasakan Relaksasi Terbaik?</h2>
        <p class="text-xl mb-8 opacity-90">
            Pilih layanan yang sesuai dan nikmati pengalaman spa profesional di kenyamanan rumah Anda.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('booking') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition duration-300">
                Booking Sekarang
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-medium py-3 px-8 rounded-lg transition duration-300">
                Konsultasi Gratis
            </a>
        </div>
    </div>
</section>
@endsection
