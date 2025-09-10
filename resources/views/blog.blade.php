@extends('layouts.app')

@section('title', 'Blog & Artikel - Spa Bali')
@section('description', 'Tips kesehatan, informasi tentang massage, dan artikel menarik seputar wellness dan relaksasi dari Spa Bali.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Blog & Artikel</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Tips kesehatan, informasi tentang massage, dan artikel menarik seputar wellness 
                dan relaksasi untuk hidup yang lebih sehat dan seimbang.
            </p>
        </div>
    </div>
</section>

<!-- Featured Article -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-block bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium mb-4">
                    Featured Article
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Manfaat Pijat Panggilan untuk Kesehatan Mental dan Fisik
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Pijat panggilan tidak hanya memberikan relaksasi fisik, tetapi juga memiliki 
                    dampak positif yang signifikan terhadap kesehatan mental. Dalam artikel ini, 
                    kita akan membahas berbagai manfaat pijat panggilan yang mungkin belum Anda ketahui.
                </p>
                <div class="flex items-center space-x-4 mb-6">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="text-sm">👨‍💼</span>
                        </div>
                        <span class="text-sm text-gray-600">Dr. Agus Wijaya</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-600">📅 15 Februari 2025</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-600">⏱️ 5 min read</span>
                    </div>
                </div>
                <a href="#" class="btn-primary">Baca Selengkapnya</a>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-primary-100 to-secondary-100 rounded-2xl p-8">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-primary-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="text-6xl text-white">💆‍♀️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Tips Sehat</h3>
                        <p class="text-gray-600">
                            Dapatkan tips dan informasi terbaru seputar kesehatan dan wellness 
                            langsung di inbox Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Kategori Artikel</h2>
            <p class="text-lg text-gray-600">Pilih kategori yang menarik minat Anda</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="#" class="card text-center hover:shadow-lg transition duration-300 group">
                <div class="w-12 h-12 bg-primary-100 rounded-full mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-2xl">💆‍♀️</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Massage Tips</h3>
                <p class="text-sm text-gray-600">12 artikel</p>
            </a>
            
            <a href="#" class="card text-center hover:shadow-lg transition duration-300 group">
                <div class="w-12 h-12 bg-secondary-100 rounded-full mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-2xl">❤️</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Kesehatan</h3>
                <p class="text-sm text-gray-600">8 artikel</p>
            </a>
            
            <a href="#" class="card text-center hover:shadow-lg transition duration-300 group">
                <div class="w-12 h-12 bg-accent-100 rounded-full mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-2xl">🧘‍♀️</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Wellness</h3>
                <p class="text-sm text-gray-600">6 artikel</p>
            </a>
            
            <a href="#" class="card text-center hover:shadow-lg transition duration-300 group">
                <div class="w-12 h-12 bg-primary-100 rounded-full mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition duration-300">
                    <span class="text-2xl">💡</span>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Tips & Tricks</h3>
                <p class="text-sm text-gray-600">10 artikel</p>
            </a>
        </div>
    </div>
</section>

<!-- Recent Articles -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Artikel Terbaru</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Kumpulan artikel terbaru seputar kesehatan, wellness, dan tips massage
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="card hover:shadow-xl transition duration-300 group">
                <div class="relative mb-4">
                    <div class="w-full h-48 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-lg flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">💆‍♀️</span>
                    </div>
                    <div class="absolute top-4 left-4 bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Massage Tips
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                        Teknik Pijat Tradisional Bali yang Ampuh Redakan Stres
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pelajari teknik pijat tradisional Bali yang telah turun temurun digunakan 
                        untuk meredakan stres dan ketegangan otot...
                    </p>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center">
                                <span class="text-xs">👨‍💼</span>
                            </div>
                            <span class="text-sm text-gray-600">Dr. Agus</span>
                        </div>
                        <span class="text-sm text-gray-500">13 Feb 2025</span>
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="card hover:shadow-xl transition duration-300 group">
                <div class="relative mb-4">
                    <div class="w-full h-48 bg-gradient-to-br from-secondary-100 to-accent-100 rounded-lg flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">❤️</span>
                    </div>
                    <div class="absolute top-4 left-4 bg-secondary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Kesehatan
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                        5 Manfaat Pijat Rutin untuk Kesehatan Jantung
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Penelitian terbaru menunjukkan bahwa pijat rutin dapat memberikan 
                        manfaat signifikan untuk kesehatan jantung dan sistem kardiovaskular...
                    </p>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 bg-secondary-100 rounded-full flex items-center justify-center">
                                <span class="text-xs">👩‍⚕️</span>
                            </div>
                            <span class="text-sm text-gray-600">Dr. Sari</span>
                        </div>
                        <span class="text-sm text-gray-500">12 Feb 2025</span>
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="card hover:shadow-xl transition duration-300 group">
                <div class="relative mb-4">
                    <div class="w-full h-48 bg-gradient-to-br from-accent-100 to-primary-100 rounded-lg flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">🧘‍♀️</span>
                    </div>
                    <div class="absolute top-4 left-4 bg-accent-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Wellness
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                        Kombinasi Pijat dan Meditasi untuk Relaksasi Maksimal
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Temukan cara menggabungkan pijat dengan teknik meditasi untuk 
                        mencapai tingkat relaksasi yang lebih dalam dan menyeluruh...
                    </p>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 bg-accent-100 rounded-full flex items-center justify-center">
                                <span class="text-xs">👨‍⚕️</span>
                            </div>
                            <span class="text-sm text-gray-600">Budi S</span>
                        </div>
                        <span class="text-sm text-gray-500">11 Feb 2025</span>
                    </div>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="card hover:shadow-xl transition duration-300 group">
                <div class="relative mb-4">
                    <div class="w-full h-48 bg-gradient-to-br from-primary-100 to-accent-100 rounded-lg flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">💡</span>
                    </div>
                    <div class="absolute top-4 left-4 bg-primary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Tips & Tricks
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                        Persiapan Sebelum Pijat Panggilan di Rumah
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Tips lengkap untuk mempersiapkan ruangan dan diri Anda sebelum 
                        sesi pijat panggilan agar mendapatkan hasil yang optimal...
                    </p>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center">
                                <span class="text-xs">👩‍💼</span>
                            </div>
                            <span class="text-sm text-gray-600">Sari Dewi</span>
                        </div>
                        <span class="text-sm text-gray-500">10 Feb 2025</span>
                    </div>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="card hover:shadow-xl transition duration-300 group">
                <div class="relative mb-4">
                    <div class="w-full h-48 bg-gradient-to-br from-secondary-100 to-primary-100 rounded-lg flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">🌿</span>
                    </div>
                    <div class="absolute top-4 left-4 bg-secondary-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Kesehatan
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                        Manfaat Aromaterapi dalam Sesi Pijat
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Eksplorasi berbagai minyak esensial dan manfaatnya dalam meningkatkan 
                        pengalaman pijat dan memberikan efek terapeutik...
                    </p>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 bg-secondary-100 rounded-full flex items-center justify-center">
                                <span class="text-xs">👩‍⚕️</span>
                            </div>
                            <span class="text-sm text-gray-600">Angel</span>
                        </div>
                        <span class="text-sm text-gray-500">9 Feb 2025</span>
                    </div>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="card hover:shadow-xl transition duration-300 group">
                <div class="relative mb-4">
                    <div class="w-full h-48 bg-gradient-to-br from-accent-100 to-secondary-100 rounded-lg flex items-center justify-center group-hover:scale-105 transition duration-300">
                        <span class="text-6xl">🏃‍♀️</span>
                    </div>
                    <div class="absolute top-4 left-4 bg-accent-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Wellness
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                        Pijat untuk Atlet: Recovery dan Performance
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Bagaimana pijat dapat membantu atlet dalam proses recovery dan 
                        meningkatkan performa olahraga mereka...
                    </p>
                    <div class="flex items-center justify-between pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 bg-accent-100 rounded-full flex items-center justify-center">
                                <span class="text-xs">👨‍⚕️</span>
                            </div>
                            <span class="text-sm text-gray-600">Rizky</span>
                        </div>
                        <span class="text-sm text-gray-500">8 Feb 2025</span>
                    </div>
                </div>
            </article>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="btn-primary">Lihat Semua Artikel</a>
        </div>
    </div>
</section>

<!-- Popular Articles -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Artikel Populer</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Artikel yang paling banyak dibaca dan direkomendasikan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Popular Article 1 -->
            <div class="card hover:shadow-lg transition duration-300">
                <div class="flex space-x-4">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-3xl">💆‍♀️</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Massage Tips</span>
                            <span class="text-xs text-gray-500">🔥 Trending</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            10 Teknik Pijat Dasar yang Bisa Dipelajari di Rumah
                        </h3>
                        <p class="text-sm text-gray-600 mb-3">
                            Pelajari teknik pijat dasar yang aman untuk dipraktikkan di rumah...
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">15 Feb 2025</span>
                            <span class="text-sm text-gray-500">👁️ 2.5k views</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Article 2 -->
            <div class="card hover:shadow-lg transition duration-300">
                <div class="flex space-x-4">
                    <div class="w-24 h-24 bg-gradient-to-br from-secondary-100 to-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-3xl">❤️</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-xs bg-secondary-100 text-secondary-800 px-2 py-1 rounded-full">Kesehatan</span>
                            <span class="text-xs text-gray-500">⭐ Popular</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Mengatasi Insomnia dengan Pijat Relaksasi
                        </h3>
                        <p class="text-sm text-gray-600 mb-3">
                            Solusi alami untuk mengatasi masalah tidur dengan teknik pijat...
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">14 Feb 2025</span>
                            <span class="text-sm text-gray-500">👁️ 1.8k views</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Article 3 -->
            <div class="card hover:shadow-lg transition duration-300">
                <div class="flex space-x-4">
                    <div class="w-24 h-24 bg-gradient-to-br from-accent-100 to-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-3xl">🧘‍♀️</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-xs bg-accent-100 text-accent-800 px-2 py-1 rounded-full">Wellness</span>
                            <span class="text-xs text-gray-500">💎 Editor's Choice</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Pijat untuk Meredakan Stres Kerja
                        </h3>
                        <p class="text-sm text-gray-600 mb-3">
                            Teknik pijat khusus untuk mengatasi stres dan ketegangan akibat kerja...
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">13 Feb 2025</span>
                            <span class="text-sm text-gray-500">👁️ 3.2k views</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Article 4 -->
            <div class="card hover:shadow-lg transition duration-300">
                <div class="flex space-x-4">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-3xl">💡</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Tips & Tricks</span>
                            <span class="text-xs text-gray-500">🔥 Trending</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            Kapan Waktu Terbaik untuk Pijat?
                        </h3>
                        <p class="text-sm text-gray-600 mb-3">
                            Panduan lengkap untuk menentukan waktu optimal untuk pijat...
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">12 Feb 2025</span>
                            <span class="text-sm text-gray-500">👁️ 2.1k views</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Dapatkan Tips Terbaru</h2>
        <p class="text-xl mb-8 opacity-90">
            Berlangganan newsletter kami untuk mendapatkan tips kesehatan dan wellness terbaru
        </p>
        <div class="max-w-md mx-auto">
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Masukkan email Anda" 
                       class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <button class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-6 rounded-lg transition duration-300">
                    Berlangganan
                </button>
            </div>
            <p class="text-sm opacity-75 mt-4">
                Kami tidak akan mengirim spam. Batalkan kapan saja.
            </p>
        </div>
    </div>
</section>
@endsection
