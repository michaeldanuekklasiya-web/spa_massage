@extends('layouts.app')

@section('title', 'Kontak & Booking - Spa Bali')
@section('description', 'Hubungi kami untuk booking layanan pijat panggilan 24 jam. Kami siap melayani Anda di seluruh area Bali dengan terapis profesional.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Kontak & Booking</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hubungi kami untuk booking layanan pijat panggilan 24 jam. 
                Kami siap melayani Anda di seluruh area Bali.
            </p>
        </div>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi Kontak</h2>
                
                <div class="space-y-6">
                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">📞</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Telepon & WhatsApp</h3>
                            <p class="text-gray-600 mb-2">0896 7580 9909</p>
                            <p class="text-sm text-gray-500">Layanan 24 jam setiap hari</p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-secondary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">📧</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600 mb-2">info@spabali.com</p>
                            <p class="text-sm text-gray-500">Respon dalam 2 jam</p>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">📍</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Alamat</h3>
                            <p class="text-gray-600 mb-2">Ubud, Bali - Indonesia</p>
                            <p class="text-sm text-gray-500">Melayani seluruh area Bali</p>
                        </div>
                    </div>
                    
                    <!-- Hours -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">🕒</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Jam Operasional</h3>
                            <p class="text-gray-600 mb-2">24 Jam Setiap Hari</p>
                            <p class="text-sm text-gray-500">Termasuk weekend dan hari libur</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center hover:bg-primary-200 transition">
                            <span class="text-xl">📘</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center hover:bg-primary-200 transition">
                            <span class="text-xl">📷</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center hover:bg-primary-200 transition">
                            <span class="text-xl">🐦</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center hover:bg-primary-200 transition">
                            <span class="text-xl">📱</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="card">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                        <select id="subject" name="subject" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <option value="">Pilih subjek</option>
                            <option value="booking">Booking Layanan</option>
                            <option value="inquiry">Pertanyaan Umum</option>
                            <option value="complaint">Keluhan</option>
                            <option value="suggestion">Saran</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="4" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                  placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Quick Booking -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Booking Cepat</h2>
            <p class="text-lg text-gray-600">Pilih layanan dan booking langsung</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Quick Booking 1 -->
                <div class="card text-center hover:shadow-lg transition duration-300 cursor-pointer group">
                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <span class="text-3xl">💆‍♀️</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Body Massage</h3>
                    <p class="text-gray-600 mb-3">60 menit</p>
                    <p class="text-2xl font-bold text-primary-600 mb-4">Rp 198.000</p>
                    <button class="btn-outline w-full group-hover:bg-primary-600 group-hover:text-white transition">
                        Booking Sekarang
                    </button>
                </div>
                
                <!-- Quick Booking 2 -->
                <div class="card text-center hover:shadow-lg transition duration-300 cursor-pointer group">
                    <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <span class="text-3xl">🔥</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Java Massage</h3>
                    <p class="text-gray-600 mb-3">90 menit</p>
                    <p class="text-2xl font-bold text-primary-600 mb-4">Rp 245.000</p>
                    <button class="btn-outline w-full group-hover:bg-primary-600 group-hover:text-white transition">
                        Booking Sekarang
                    </button>
                </div>
                
                <!-- Quick Booking 3 -->
                <div class="card text-center hover:shadow-lg transition duration-300 cursor-pointer group">
                    <div class="w-16 h-16 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <span class="text-3xl">✨</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Full Body Treatment</h3>
                    <p class="text-gray-600 mb-3">120 menit</p>
                    <p class="text-2xl font-bold text-primary-600 mb-4">Rp 350.000</p>
                    <button class="btn-outline w-full group-hover:bg-primary-600 group-hover:text-white transition">
                        Booking Sekarang
                    </button>
                </div>
                
                <!-- Quick Booking 4 -->
                <div class="card text-center hover:shadow-lg transition duration-300 cursor-pointer group">
                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <span class="text-3xl">👤</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Totok Wajah</h3>
                    <p class="text-gray-600 mb-3">45 menit</p>
                    <p class="text-2xl font-bold text-primary-600 mb-4">Rp 150.000</p>
                    <button class="btn-outline w-full group-hover:bg-primary-600 group-hover:text-white transition">
                        Booking Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Area Layanan</h2>
            <p class="text-lg text-gray-600">Kami melayani seluruh area Bali dan sekitarnya</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Area 1 -->
            <div class="card text-center">
                <div class="w-12 h-12 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-2xl">🏖️</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Ubud & Sekitarnya</h3>
                <p class="text-gray-600 text-sm">Termasuk Tegallalang, Payangan, dan Gianyar</p>
            </div>
            
            <!-- Area 2 -->
            <div class="card text-center">
                <div class="w-12 h-12 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-2xl">🌊</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Seminyak & Canggu</h3>
                <p class="text-gray-600 text-sm">Termasuk Kerobokan, Berawa, dan Batu Belig</p>
            </div>
            
            <!-- Area 3 -->
            <div class="card text-center">
                <div class="w-12 h-12 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-2xl">🏨</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Nusa Dua & Jimbaran</h3>
                <p class="text-gray-600 text-sm">Termasuk Tanjung Benoa dan Pecatu</p>
            </div>
            
            <!-- Area 4 -->
            <div class="card text-center">
                <div class="w-12 h-12 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-2xl">🌋</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Sanur & Denpasar</h3>
                <p class="text-gray-600 text-sm">Termasuk Renon, Sanur, dan Kuta</p>
            </div>
            
            <!-- Area 5 -->
            <div class="card text-center">
                <div class="w-12 h-12 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-2xl">🏔️</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bedugul & Munduk</h3>
                <p class="text-gray-600 text-sm">Termasuk Singaraja dan Lovina</p>
            </div>
            
            <!-- Area 6 -->
            <div class="card text-center">
                <div class="w-12 h-12 bg-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-2xl">🌺</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Candidasa & Amed</h3>
                <p class="text-gray-600 text-sm">Termasuk Padang Bai dan Tulamben</p>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <p class="text-gray-600 mb-4">Tidak yakin area Anda dilayani?</p>
            <a href="tel:089675809909" class="btn-primary">Hubungi Kami</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-lg text-gray-600">Jawaban untuk pertanyaan umum tentang layanan kami</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ 1 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Berapa lama waktu yang dibutuhkan untuk booking?</h3>
                <p class="text-gray-600">
                    Untuk booking reguler, kami membutuhkan minimal 2 jam sebelum waktu yang diinginkan. 
                    Untuk booking mendesak, silakan hubungi langsung ke nomor WhatsApp kami di 0896 7580 9909.
                </p>
            </div>
            
            <!-- FAQ 2 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah ada area yang tidak dilayani?</h3>
                <p class="text-gray-600">
                    Kami melayani seluruh area Bali dan sekitarnya. Untuk area yang sangat jauh, 
                    mungkin ada biaya transportasi tambahan yang akan dikomunikasikan sebelumnya.
                </p>
            </div>
            
            <!-- FAQ 3 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagaimana cara pembayaran?</h3>
                <p class="text-gray-600">
                    Pembayaran dapat dilakukan secara tunai saat terapis datang, atau transfer bank. 
                    Kami juga menerima pembayaran melalui e-wallet untuk kemudahan transaksi.
                </p>
            </div>
            
            <!-- FAQ 4 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah terapis sudah bersertifikat?</h3>
                <p class="text-gray-600">
                    Ya, semua terapis kami telah melalui pelatihan intensif dan memiliki sertifikat resmi. 
                    Mereka juga telah melalui background check untuk memastikan keamanan dan profesionalisme.
                </p>
            </div>
            
            <!-- FAQ 5 -->
            <div class="card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bisakah saya memilih terapis?</h3>
                <p class="text-gray-600">
                    Tentu saja! Anda dapat memilih terapis sesuai preferensi Anda. 
                    Lihat profil terapis kami di halaman "Terapis" untuk mengetahui keahlian masing-masing.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Siap Merasakan Layanan Terbaik?</h2>
        <p class="text-xl mb-8 opacity-90">
            Hubungi kami sekarang dan nikmati pengalaman pijat profesional di kenyamanan rumah Anda.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:089675809909" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition duration-300">
                📞 0896 7580 9909
            </a>
            <a href="https://wa.me/6289675809909" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-medium py-3 px-8 rounded-lg transition duration-300">
                💬 WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
