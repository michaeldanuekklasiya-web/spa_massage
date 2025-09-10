@extends('layouts.app')

@section('title', 'Terapis Profesional - Spa Bali')
@section('description', 'Pilih terapis profesional dan berpengalaman untuk layanan massage terbaik. Semua terapis bersertifikat dan telah melalui pelatihan intensif.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Terapis Kami</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Tim terapis profesional dan berpengalaman yang siap memberikan layanan terbaik 
                untuk pengalaman relaksasi yang tak terlupakan.
            </p>
        </div>
    </div>
</section>

<!-- Therapists Grid -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Therapist 1 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Profesional
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Niken</h3>
                <p class="text-primary-600 font-semibold mb-3">Senior Therapist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(4.9)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    5+ tahun pengalaman dalam berbagai teknik massage tradisional dan modern.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Body Massage</span>
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Reflexology</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Aromatherapy</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 2 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-secondary-100 to-accent-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Expert
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Carissa</h3>
                <p class="text-primary-600 font-semibold mb-3">Master Therapist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(5.0)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    7+ tahun pengalaman dengan spesialisasi dalam teknik pijat tradisional Jawa dan Bali.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Java Massage</span>
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Bali Massage</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Hot Stone</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 3 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-accent-100 to-primary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-accent-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Specialist
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Angel</h3>
                <p class="text-primary-600 font-semibold mb-3">Facial Specialist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(4.8)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    4+ tahun pengalaman dengan fokus pada perawatan wajah dan totok tradisional.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Totok Wajah</span>
                        <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Facial Care</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Acupressure</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 4 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-primary-100 to-accent-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Master
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Sherly</h3>
                <p class="text-primary-600 font-semibold mb-3">Lead Therapist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(5.0)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    8+ tahun pengalaman dengan keahlian dalam full body treatment dan terapi relaksasi.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Full Body</span>
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Deep Tissue</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Swedish</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 5 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-secondary-100 to-primary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👨‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Senior
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Budi</h3>
                <p class="text-primary-600 font-semibold mb-3">Senior Therapist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(4.9)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    6+ tahun pengalaman dengan spesialisasi dalam pijat olahraga dan terapi cedera.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Sports Massage</span>
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Injury Therapy</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Cupping</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 6 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-accent-100 to-secondary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-accent-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Junior
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Maya</h3>
                <p class="text-primary-600 font-semibold mb-3">Junior Therapist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(4.7)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    2+ tahun pengalaman dengan fokus pada pijat relaksasi dan aromaterapi.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Relaxation</span>
                        <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Aromatherapy</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Gentle Touch</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 7 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-primary-100 to-accent-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👨‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Expert
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Rizky</h3>
                <p class="text-primary-600 font-semibold mb-3">Expert Therapist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(4.9)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    5+ tahun pengalaman dengan keahlian dalam pijat tradisional Indonesia dan Thailand.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Thai Massage</span>
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Traditional</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Energy Work</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>

            <!-- Therapist 8 -->
            <div class="card text-center group hover:shadow-xl transition duration-300">
                <div class="relative mb-6">
                    <div class="w-48 h-48 bg-gradient-to-br from-secondary-100 to-primary-100 rounded-full mx-auto flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">👩‍⚕️</span>
                    </div>
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-secondary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Specialist
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Sari</h3>
                <p class="text-primary-600 font-semibold mb-3">Wellness Specialist</p>
                <div class="flex justify-center items-center space-x-1 mb-4">
                    <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    <span class="text-sm text-gray-600">(4.8)</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">
                    4+ tahun pengalaman dengan fokus pada wellness dan terapi holistik.
                </p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Wellness</span>
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Holistic</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Meditation</span>
                    </div>
                </div>
                <a href="{{ route('booking') }}" class="btn-outline w-full">Pilih Terapis</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Therapists -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Terapis Kami?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Keunggulan yang membuat terapis kami berbeda dan terpercaya
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🎓</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bersertifikat</h3>
                <p class="text-gray-600 text-sm">
                    Semua terapis telah melalui pelatihan intensif dan memiliki sertifikat resmi
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">⭐</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Berpengalaman</h3>
                <p class="text-gray-600 text-sm">
                    Minimal 2+ tahun pengalaman dengan berbagai teknik massage
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🛡️</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Terpercaya</h3>
                <p class="text-gray-600 text-sm">
                    Semua terapis telah melalui background check dan screening ketat
                </p>
            </div>
            
            <!-- Feature 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">❤️</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Profesional</h3>
                <p class="text-gray-600 text-sm">
                    Menjaga etika kerja dan memberikan pelayanan dengan hati
                </p>
            </div>
            
            <!-- Feature 5 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🔄</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Terus Belajar</h3>
                <p class="text-gray-600 text-sm">
                    Mengikuti pelatihan berkala untuk meningkatkan keahlian
                </p>
            </div>
            
            <!-- Feature 6 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">🎯</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Spesialisasi</h3>
                <p class="text-gray-600 text-sm">
                    Setiap terapis memiliki keahlian khusus dalam teknik tertentu
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Therapist Selection Process -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Cara Memilih Terapis</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Proses sederhana untuk memilih terapis yang sesuai dengan kebutuhan Anda
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    1
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Lihat Profil</h3>
                <p class="text-gray-600 text-sm">
                    Baca profil dan keahlian setiap terapis untuk memahami spesialisasi mereka
                </p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    2
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pilih Terapis</h3>
                <p class="text-gray-600 text-sm">
                    Klik "Pilih Terapis" pada profil yang sesuai dengan preferensi Anda
                </p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    3
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Booking Layanan</h3>
                <p class="text-gray-600 text-sm">
                    Isi form booking dengan detail waktu, lokasi, dan layanan yang diinginkan
                </p>
            </div>
            
            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full mx-auto mb-4 flex items-center justify-center text-2xl font-bold">
                    4
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Konfirmasi</h3>
                <p class="text-gray-600 text-sm">
                    Tim kami akan menghubungi untuk konfirmasi dan detail pertemuan
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Testimoni Klien</h2>
            <p class="text-xl text-gray-600">Pengalaman klien dengan terapis kami</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="card">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👨</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Rizky A</h4>
                        <p class="text-sm text-gray-600">Terapis: Niken</p>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Niken sangat profesional dan pijatannya sangat nyaman. 
                    Saya langsung merasa rileks dan segar setelah sesi massage."
                </p>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="card">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-secondary-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👩</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Indah</h4>
                        <p class="text-sm text-gray-600">Terapis: Carissa</p>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Carissa ahli dalam Java massage. Tekniknya sangat bagus dan 
                    saya merasakan perbedaan yang signifikan setelah treatment."
                </p>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="card">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-xl">👨</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Haikal</h4>
                        <p class="text-sm text-gray-600">Terapis: Sherly</p>
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Sherly sangat berpengalaman dan tahu bagaimana memberikan 
                    pijatan yang tepat sesuai kebutuhan saya. Highly recommended!"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Pilih Terapis Favorit Anda</h2>
        <p class="text-xl mb-8 opacity-90">
            Temukan terapis yang sesuai dengan kebutuhan dan preferensi Anda untuk pengalaman terbaik.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('booking') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition duration-300">
                Booking Sekarang
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-medium py-3 px-8 rounded-lg transition duration-300">
                Konsultasi Terapis
            </a>
        </div>
    </div>
</section>
@endsection
