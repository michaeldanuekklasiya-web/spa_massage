@extends('layouts.app')

@section('title', 'Tentang Kami - Spa Bali')
@section('description', 'Pelajari lebih lanjut tentang Spa Bali, layanan pijat panggilan 24 jam dengan terapis profesional dan berpengalaman di Bali.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Tentang Kami</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Komitmen kami untuk memberikan layanan pijat terbaik dengan standar profesional 
                dan kenyamanan maksimal untuk setiap klien.
            </p>
        </div>
    </div>
</section>

<!-- Company Story -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Cerita Kami</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Spa Bali didirikan dengan visi untuk menghadirkan pengalaman relaksasi dan terapi kesehatan 
                    yang dapat diakses kapan saja dan dimana saja. Kami memahami bahwa di era modern ini, 
                    waktu menjadi komoditas yang sangat berharga.
                </p>
                <p class="text-gray-600 mb-6">
                    Oleh karena itu, kami menghadirkan layanan pijat panggilan yang memungkinkan Anda 
                    menikmati manfaat pijat profesional tanpa harus meninggalkan kenyamanan rumah, 
                    hotel, atau apartemen Anda.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">500+</div>
                        <p class="text-gray-600">Klien Puas</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                        <p class="text-gray-600">Layanan</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-primary-100 to-secondary-100 rounded-2xl p-8">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-primary-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="text-6xl text-white">🏆</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Terpercaya & Profesional</h3>
                        <p class="text-gray-600">
                            Setiap terapis kami telah melalui pelatihan intensif dan memiliki sertifikat 
                            resmi untuk memastikan kualitas layanan terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Mission -->
            <div class="card text-center">
                <div class="w-20 h-20 bg-primary-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-4xl">🎯</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
                <p class="text-gray-600 leading-relaxed">
                    Menyediakan layanan pijat profesional yang dapat diakses 24 jam dengan standar 
                    kualitas tertinggi, memberikan pengalaman relaksasi yang tak terlupakan, dan 
                    membantu klien mencapai keseimbangan fisik dan mental.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="card text-center">
                <div class="w-20 h-20 bg-secondary-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-4xl">👁️</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi penyedia layanan pijat panggilan terdepan di Bali dengan reputasi 
                    yang diakui secara nasional, dikenal karena profesionalisme, kualitas layanan, 
                    dan komitmen terhadap kepuasan klien.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nilai-Nilai Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Prinsip-prinsip yang menjadi fondasi dalam setiap layanan yang kami berikan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Professionalism -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-primary-100 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-4xl">👔</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Profesionalisme</h3>
                <p class="text-gray-600">
                    Setiap terapis kami berkomitmen untuk memberikan layanan dengan standar 
                    profesional tertinggi dan etika kerja yang baik.
                </p>
            </div>
            
            <!-- Quality -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-secondary-100 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-4xl">⭐</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Kualitas</h3>
                <p class="text-gray-600">
                    Kami tidak pernah berkompromi dengan kualitas layanan, menggunakan teknik 
                    terbaik dan peralatan yang higienis.
                </p>
            </div>
            
            <!-- Trust -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-accent-100 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-4xl">🤝</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Kepercayaan</h3>
                <p class="text-gray-600">
                    Membangun kepercayaan melalui transparansi, kejujuran, dan komitmen 
                    untuk menjaga privasi serta keamanan klien.
                </p>
            </div>
            
            <!-- Innovation -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-primary-100 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-4xl">💡</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Inovasi</h3>
                <p class="text-gray-600">
                    Terus mengembangkan teknik dan layanan baru untuk memberikan pengalaman 
                    yang lebih baik bagi klien.
                </p>
            </div>
            
            <!-- Care -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-secondary-100 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-4xl">❤️</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Kepedulian</h3>
                <p class="text-gray-600">
                    Memahami kebutuhan unik setiap klien dan memberikan perhatian personal 
                    yang tulus dalam setiap sesi.
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-accent-100 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-4xl">🏆</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Keunggulan</h3>
                <p class="text-gray-600">
                    Berusaha untuk menjadi yang terbaik dalam setiap aspek layanan, 
                    dari booking hingga follow-up.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Tim Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Para profesional berpengalaman yang siap melayani Anda dengan sepenuh hati
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="card text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-5xl">👨‍💼</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Budi Santoso</h3>
                <p class="text-primary-600 font-semibold mb-3">Founder & CEO</p>
                <p class="text-gray-600 text-sm">
                    15+ tahun pengalaman di industri wellness dan spa. 
                    Memiliki sertifikasi internasional dalam terapi pijat.
                </p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="card text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-secondary-100 to-accent-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-5xl">👩‍💼</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Sari Dewi</h3>
                <p class="text-primary-600 font-semibold mb-3">Head of Operations</p>
                <p class="text-gray-600 text-sm">
                    Ahli dalam manajemen operasional dan quality control. 
                    Memastikan setiap layanan memenuhi standar tertinggi.
                </p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="card text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-accent-100 to-primary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-5xl">👨‍⚕️</span>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Agus Wijaya</h3>
                <p class="text-primary-600 font-semibold mb-3">Medical Advisor</p>
                <p class="text-gray-600 text-sm">
                    Dokter spesialis rehabilitasi medik yang memberikan 
                    konsultasi medis untuk layanan terapi kami.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Keunggulan yang membuat kami berbeda dari layanan pijat lainnya
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🕒</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">24 Jam Non-Stop</h3>
                <p class="text-gray-600 text-sm">
                    Layanan tersedia kapan saja, termasuk malam hari dan akhir pekan
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🏠</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Datang ke Lokasi</h3>
                <p class="text-gray-600 text-sm">
                    Kami datang ke rumah, hotel, atau apartemen Anda
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">👥</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pilih Terapis</h3>
                <p class="text-gray-600 text-sm">
                    Bebas memilih terapis sesuai preferensi Anda
                </p>
            </div>
            
            <!-- Feature 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🛡️</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Aman & Terpercaya</h3>
                <p class="text-gray-600 text-sm">
                    Semua terapis telah melalui background check dan pelatihan
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Siap Merasakan Pengalaman Terbaik?</h2>
        <p class="text-xl mb-8 opacity-90">
            Hubungi kami sekarang dan nikmati layanan pijat profesional di kenyamanan rumah Anda.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('booking') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition duration-300">
                Booking Sekarang
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-medium py-3 px-8 rounded-lg transition duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>
@endsection
