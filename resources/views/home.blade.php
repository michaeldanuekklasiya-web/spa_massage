@extends('layouts.app')

@section('title', 'Caisar Massage Surabaya - Pijat Panggilan 24 Jam')
@section('description', 'Layanan pijat panggilan 24 jam di Surabaya dengan terapis profesional dan berpengalaman. Nikmati relaksasi di rumah, hotel, atau apartemen Anda.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-red-50 to-orange-50 min-h-screen flex items-center">
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div class="text-center lg:text-left">
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Welcome to
                    <span class="text-red-600">Caisar Massage</span>
                    <span class="block text-4xl text-gray-700">Surabaya</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Rasakan pijatan yang menenangkan untuk menghilangkan stres, melancarkan peredaran darah, 
                    dan mengembalikan energi tubuh Anda.
                </p>
                
                <!-- Features -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🏠</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Panggil ke Rumah/Hotel</h3>
                            <p class="text-sm text-gray-600">Layanan datang ke lokasi</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">⏰</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Layanan Ready 24 Jam</h3>
                            <p class="text-sm text-gray-600">Kapan saja Anda butuh</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">👥</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Bebas Pilih Foto Terapis</h3>
                            <p class="text-sm text-gray-600">Pilih terapis favorit Anda</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300 text-center">Booking Sekarang</a>
                    <a href="{{ route('services') }}" class="border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white font-medium py-3 px-6 rounded-lg transition duration-300 text-center">Lihat Layanan</a>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform rotate-3 hover:rotate-0 transition duration-500">
                    <div class="bg-gradient-to-br from-red-100 to-orange-100 rounded-xl p-8 text-center">
                        <div class="w-32 h-32 bg-red-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="text-6xl text-white">💆‍♀️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Nikmati Kemewahan Relaksasi</h3>
                        <p class="text-gray-600 mb-6">
                            Kami menghadirkan pengalaman relaksasi dan terapi kesehatan langsung ke lokasi Anda.
                        </p>
                        <div class="flex justify-center space-x-4 text-sm text-gray-500">
                            <span>⭐ 4.9/5 Rating</span>
                            <span>👥 99% Happy Client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Nikmati Kemewahan Relaksasi di Rumah Anda
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Kami menghadirkan pengalaman relaksasi dan terapi kesehatan langsung ke lokasi Anda. 
                    Kami memahami bahwa tubuh yang sehat dan rileks adalah kunci utama untuk menjalani kehidupan 
                    yang lebih baik, itulah sebabnya kami hadir untuk memberikan pelayanan terbaik dengan 
                    terapis berpengalaman dan bersertifikat.
                </p>
                <p class="text-gray-600 mb-8">
                    Layanan yang kami berikan dilakukan secara profesional dengan menjaga kenyamanan dan 
                    keamanan pelanggan.
                </p>
                <a href="{{ route('about') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300">read more</a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div class="bg-red-50 rounded-xl p-6 text-center">
                        <div class="text-4xl mb-3">🏆</div>
                        <h3 class="font-semibold text-gray-900">Terapis Profesional</h3>
                        <p class="text-sm text-gray-600">Bersertifikat & Berpengalaman</p>
                    </div>
                    <div class="bg-orange-50 rounded-xl p-6 text-center">
                        <div class="text-4xl mb-3">🛡️</div>
                        <h3 class="font-semibold text-gray-900">Aman & Nyaman</h3>
                        <p class="text-sm text-gray-600">Layanan Terpercaya</p>
                    </div>
                </div>
                <div class="space-y-4 mt-8">
                    <div class="bg-yellow-50 rounded-xl p-6 text-center">
                        <div class="text-4xl mb-3">⭐</div>
                        <h3 class="font-semibold text-gray-900">Rating Tinggi</h3>
                        <p class="text-sm text-gray-600">4.9/5 dari Klien</p>
                    </div>
                    <div class="bg-red-50 rounded-xl p-6 text-center">
                        <div class="text-4xl mb-3">🚀</div>
                        <h3 class="font-semibold text-gray-900">Layanan Cepat</h3>
                        <p class="text-sm text-gray-600">Respon dalam 30 menit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Area -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Melayani Area Surabaya</h2>
        <p class="text-lg text-gray-600 mb-8">
            Kami siap melayani Anda kapan saja, baik pagi, siang, maupun malam hari.
        </p>
        <div class="bg-white rounded-xl shadow-lg p-8 max-w-2xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Caisar Massage</h3>
            <h4 class="text-xl font-semibold text-red-600 mb-6">Pijat Panggilan 24 Jam</h4>
            <div class="flex items-center justify-center space-x-4 mb-6">
                <span class="text-2xl">📞</span>
                <span class="text-lg font-semibold">0896 7580 9909</span>
            </div>
            <p class="text-gray-600 mb-6">
                Nikmati layanan massage panggilan Surabaya 24 jam dengan terapis profesional dan berpengalaman. 
                Kami hadir untuk memberikan pijatan relaksasi di rumah, hotel, atau apartemen Anda dengan berbagai pilihan terapi.
            </p>
            <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300">booking</a>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-3xl">💆‍♀️</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Body Massage</h3>
                    <p class="text-gray-600 mb-4">60 menit</p>
                    <p class="text-2xl font-bold text-red-600 mb-4">Rp 198.000</p>
                    <p class="text-sm text-gray-500 mb-4">deskripsi</p>
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 w-full block text-center">book now</a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-3xl">🔥</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Java massage HOT AND COLL</h3>
                    <p class="text-gray-600 mb-4">90 menit</p>
                    <p class="text-2xl font-bold text-red-600 mb-4">Rp 245.000</p>
                    <p class="text-sm text-gray-500 mb-4">deskripsi</p>
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 w-full block text-center">book now</a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-3xl">💆‍♀️</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Body Massage</h3>
                    <p class="text-gray-600 mb-4">120 menit</p>
                    <p class="text-2xl font-bold text-red-600 mb-4">Rp 350.000</p>
                    <p class="text-sm text-gray-500 mb-4">deskripsi</p>
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 w-full block text-center">book now</a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300 border border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-3xl">✨</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Full Body Treatment</h3>
                    <p class="text-gray-600 mb-4">120 menit</p>
                    <p class="text-2xl font-bold text-red-600 mb-4">Rp 350.000</p>
                    <p class="text-sm text-gray-500 mb-4">deskripsi</p>
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 w-full block text-center">book now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Therapists Preview -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">**Terapis** Kami</h2>
            <p class="text-xl text-gray-600">Bebas Pilih Foto Terapis</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Therapist 1 -->
            <div class="text-center group">
                <div class="relative mb-4">
                    <div class="w-48 h-48 bg-gradient-to-br from-red-100 to-orange-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        terapis - 1
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">##### Niken</h3>
            </div>
            
            <!-- Therapist 2 -->
            <div class="text-center group">
                <div class="relative mb-4">
                    <div class="w-48 h-48 bg-gradient-to-br from-orange-100 to-yellow-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-orange-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        terapis - 2
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">##### Carissa</h3>
            </div>
            
            <!-- Therapist 3 -->
            <div class="text-center group">
                <div class="relative mb-4">
                    <div class="w-48 h-48 bg-gradient-to-br from-yellow-100 to-red-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-yellow-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        terapis - 3
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">##### Angel</h3>
            </div>
            
            <!-- Therapist 4 -->
            <div class="text-center group">
                <div class="relative mb-4">
                    <div class="w-48 h-48 bg-gradient-to-br from-red-100 to-pink-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-pink-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        terapis - 4
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">##### Sherly</h3>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('therapists') }}" class="text-red-600 hover:text-red-700 font-medium">lihat semua</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Testimoni</h2>
            <p class="text-xl text-gray-600">Apa Kata Klien Kami?</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👨</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Rizky A</h4>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Saya sangat puas dengan layanan Caisar Massage! Terapisnya datang tepat waktu, 
                    pijatannya sangat nyaman, dan saya langsung merasa lebih rileks. 
                    Layanan pijat panggilan terbaik di Surabaya!"
                </p>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👩</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Indah</h4>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Biasanya saya harus ke spa untuk pijat, tapi sekarang cukup panggil Caisar Massage, 
                    mereka datang ke rumah! Terapisnya ramah dan pijatannya bikin badan langsung segar. 
                    Pasti akan pesan lagi!"
                </p>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👨</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Haikal</h4>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Saya coba full body treatment, dan hasilnya luar biasa! Otot yang tegang langsung rileks, 
                    badan lebih ringan, dan saya bisa tidur lebih nyenyak. Recommended banget!"
                </p>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👩</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Maya</h4>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Saya suka pijat tradisional, dan Caisar Massage benar-benar ahli dalam tekniknya. 
                    Terapisnya sangat profesional dan tahu titik-titik yang tepat untuk mengurangi pegal-pegal. 100% puas!"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-red-600 to-orange-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Pijat Kapan Saja, Dimana Saja,<br>Kami Datang untuk Anda!</h2>
        <div class="flex justify-center items-center space-x-8 mb-8">
            <div class="text-center">
                <div class="text-4xl font-bold">99%</div>
                <div class="text-sm opacity-90">Rating 4.9/5</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold">Happy Client</div>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('booking') }}" class="bg-white text-red-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition duration-300">
                Booking Sekarang
            </a>
            <a href="tel:089675809909" class="border-2 border-white text-white hover:bg-white hover:text-red-600 font-medium py-3 px-8 rounded-lg transition duration-300">
                📞 0896 7580 9909
            </a>
        </div>
    </div>
</section>

<!-- Blog Preview -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">" Sensasi yang</h2>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Merelaksasi</h2>
            <p class="text-lg text-gray-600">by Caisar Massage Surabaya</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="text-center">
                <div class="text-2xl mb-2">🕒</div>
                <h3 class="text-lg font-semibold text-gray-900">Ready 24 Jam</h3>
            </div>
            <div class="text-center">
                <div class="text-2xl mb-2">👥</div>
                <h3 class="text-lg font-semibold text-gray-900">Bebas Pilih Foto Terapis</h3>
            </div>
        </div>
        
        <div class="text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Blog & Artikel</h3>
            <h4 class="text-xl font-semibold text-gray-700 mb-4">Recent Post</h4>
            <p class="text-gray-600 mb-8">Info seputar layanan massage kami</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-lg p-6 text-left">
                    <p class="text-sm text-gray-500 mb-2">13 Februari 2025</p>
                    <h5 class="font-semibold text-gray-900 mb-2">Pijat Panggilan Surabaya 24 Jam</h5>
                    <p class="text-sm text-gray-500">Blog 0</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-left">
                    <p class="text-sm text-gray-500 mb-2">13 Februari 2025</p>
                    <h5 class="font-semibold text-gray-900 mb-2">Layanan Body Massage Surabaya</h5>
                    <p class="text-sm text-gray-500">Blog 0</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-left">
                    <p class="text-sm text-gray-500 mb-2">13 Februari 2025</p>
                    <h5 class="font-semibold text-gray-900 mb-2">Totok wajah surabaya</h5>
                    <p class="text-sm text-gray-500">Blog 0</p>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="{{ route('blog') }}" class="text-red-600 hover:text-red-700 font-medium">Lihat Semua</a>
            </div>
        </div>
    </div>
</section>
@endsection
