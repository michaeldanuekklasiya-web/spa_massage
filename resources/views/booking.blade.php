@extends('layouts.app')

@section('title', 'Booking Layanan - Spa Bali')
@section('description', 'Booking layanan pijat panggilan 24 jam di Bali. Pilih terapis, waktu, dan lokasi sesuai kebutuhan Anda.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-secondary-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Booking Layanan</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Pilih layanan, terapis, dan waktu yang sesuai dengan kebutuhan Anda. 
                Kami akan menghubungi Anda untuk konfirmasi.
            </p>
        </div>
    </div>
</section>

<!-- Booking Form -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="card">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Form Booking</h2>
                
                <form class="space-y-8">
                    <!-- Step 1: Personal Information -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">1</span>
                            Informasi Personal
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                                <input type="text" id="full_name" name="full_name" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon *</label>
                                <input type="tel" id="phone" name="phone" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Usia</label>
                                <input type="number" id="age" name="age" min="18" max="80"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Service Selection -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">2</span>
                            Pilih Layanan
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Service 1 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer service-option">
                                <div class="flex items-center space-x-4">
                                    <input type="radio" id="service1" name="service" value="body_massage" class="text-primary-600">
                                    <div class="flex-1">
                                        <label for="service1" class="cursor-pointer">
                                            <h4 class="font-semibold text-gray-900">Body Massage</h4>
                                            <p class="text-sm text-gray-600">60 menit - Rp 198.000</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 2 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer service-option">
                                <div class="flex items-center space-x-4">
                                    <input type="radio" id="service2" name="service" value="java_massage" class="text-primary-600">
                                    <div class="flex-1">
                                        <label for="service2" class="cursor-pointer">
                                            <h4 class="font-semibold text-gray-900">Java Massage</h4>
                                            <p class="text-sm text-gray-600">90 menit - Rp 245.000</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 3 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer service-option">
                                <div class="flex items-center space-x-4">
                                    <input type="radio" id="service3" name="service" value="full_body" class="text-primary-600">
                                    <div class="flex-1">
                                        <label for="service3" class="cursor-pointer">
                                            <h4 class="font-semibold text-gray-900">Full Body Treatment</h4>
                                            <p class="text-sm text-gray-600">120 menit - Rp 350.000</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 4 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer service-option">
                                <div class="flex items-center space-x-4">
                                    <input type="radio" id="service4" name="service" value="totok_wajah" class="text-primary-600">
                                    <div class="flex-1">
                                        <label for="service4" class="cursor-pointer">
                                            <h4 class="font-semibold text-gray-900">Totok Wajah</h4>
                                            <p class="text-sm text-gray-600">45 menit - Rp 150.000</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Therapist Selection -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">3</span>
                            Pilih Terapis (Opsional)
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Therapist 1 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer therapist-option">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                                        <span class="text-2xl">👩‍⚕️</span>
                                    </div>
                                    <input type="radio" id="therapist1" name="therapist" value="niken" class="text-primary-600">
                                    <label for="therapist1" class="cursor-pointer">
                                        <h4 class="font-semibold text-gray-900 text-sm">Niken</h4>
                                        <p class="text-xs text-gray-600">Senior Therapist</p>
                                    </label>
                                </div>
                            </div>

                            <!-- Therapist 2 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer therapist-option">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                                        <span class="text-2xl">👩‍⚕️</span>
                                    </div>
                                    <input type="radio" id="therapist2" name="therapist" value="carissa" class="text-primary-600">
                                    <label for="therapist2" class="cursor-pointer">
                                        <h4 class="font-semibold text-gray-900 text-sm">Carissa</h4>
                                        <p class="text-xs text-gray-600">Master Therapist</p>
                                    </label>
                                </div>
                            </div>

                            <!-- Therapist 3 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer therapist-option">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-accent-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                                        <span class="text-2xl">👩‍⚕️</span>
                                    </div>
                                    <input type="radio" id="therapist3" name="therapist" value="angel" class="text-primary-600">
                                    <label for="therapist3" class="cursor-pointer">
                                        <h4 class="font-semibold text-gray-900 text-sm">Angel</h4>
                                        <p class="text-xs text-gray-600">Facial Specialist</p>
                                    </label>
                                </div>
                            </div>

                            <!-- Therapist 4 -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-primary-500 hover:bg-primary-50 transition cursor-pointer therapist-option">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                                        <span class="text-2xl">👩‍⚕️</span>
                                    </div>
                                    <input type="radio" id="therapist4" name="therapist" value="sherly" class="text-primary-600">
                                    <label for="therapist4" class="cursor-pointer">
                                        <h4 class="font-semibold text-gray-900 text-sm">Sherly</h4>
                                        <p class="text-xs text-gray-600">Lead Therapist</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-4">* Jika tidak memilih terapis, kami akan menugaskan yang tersedia</p>
                    </div>

                    <!-- Step 4: Date & Time -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">4</span>
                            Tanggal & Waktu
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal *</label>
                                <input type="date" id="date" name="date" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="time" class="block text-sm font-medium text-gray-700 mb-2">Waktu *</label>
                                <select id="time" name="time" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                    <option value="">Pilih waktu</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5: Location -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">5</span>
                            Lokasi
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap *</label>
                                <textarea id="address" name="address" rows="3" required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                          placeholder="Masukkan alamat lengkap termasuk nama hotel/apartemen jika ada"></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="area" class="block text-sm font-medium text-gray-700 mb-2">Area</label>
                                    <select id="area" name="area"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                        <option value="">Pilih area</option>
                                        <option value="ubud">Ubud & Sekitarnya</option>
                                        <option value="seminyak">Seminyak & Canggu</option>
                                        <option value="nusa_dua">Nusa Dua & Jimbaran</option>
                                        <option value="sanur">Sanur & Denpasar</option>
                                        <option value="bedugul">Bedugul & Munduk</option>
                                        <option value="candidasa">Candidasa & Amed</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="location_type" class="block text-sm font-medium text-gray-700 mb-2">Jenis Lokasi</label>
                                    <select id="location_type" name="location_type"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                        <option value="rumah">Rumah</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="apartemen">Apartemen</option>
                                        <option value="villa">Villa</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6: Additional Information -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">6</span>
                            Informasi Tambahan
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label for="special_requests" class="block text-sm font-medium text-gray-700 mb-2">Permintaan Khusus</label>
                                <textarea id="special_requests" name="special_requests" rows="3"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                          placeholder="Masukkan permintaan khusus atau catatan untuk terapis"></textarea>
                            </div>
                            <div>
                                <label for="health_conditions" class="block text-sm font-medium text-gray-700 mb-2">Kondisi Kesehatan</label>
                                <textarea id="health_conditions" name="health_conditions" rows="2"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                          placeholder="Informasikan kondisi kesehatan yang perlu diperhatikan (opsional)"></textarea>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="terms" name="terms" required class="text-primary-600">
                                <label for="terms" class="text-sm text-gray-700">
                                    Saya menyetujui <a href="#" class="text-primary-600 hover:underline">syarat dan ketentuan</a> layanan
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-6">
                        <button type="submit" class="btn-primary text-lg px-12 py-4">
                            Kirim Booking
                        </button>
                        <p class="text-sm text-gray-500 mt-4">
                            Tim kami akan menghubungi Anda dalam 30 menit untuk konfirmasi
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Butuh Bantuan?</h2>
            <p class="text-lg text-gray-600">Hubungi kami untuk pertanyaan atau bantuan booking</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <!-- Phone -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">📞</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Telepon</h3>
                <p class="text-gray-600 mb-4">0896 7580 9909</p>
                <a href="tel:0896758099909" class="btn-outline">Hubungi Sekarang</a>
            </div>
            
            <!-- WhatsApp -->
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">💬</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">WhatsApp</h3>
                <p class="text-gray-600 mb-4">0896 7580 9909</p>
                <a href="https://wa.me/6289675809909" class="btn-outline">Chat Sekarang</a>
            </div>
            
            <!-- Email -->
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-3xl">📧</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                <p class="text-gray-600 mb-4">info@spabali.com</p>
                <a href="mailto:info@spabali.com" class="btn-outline">Kirim Email</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Siap Merasakan Relaksasi Terbaik?</h2>
        <p class="text-xl mb-8 opacity-90">
            Booking sekarang dan nikmati pengalaman pijat profesional di kenyamanan rumah Anda.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0896758099909" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition duration-300">
                📞 Hubungi Langsung
            </a>
            <a href="https://wa.me/6289675809909" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-medium py-3 px-8 rounded-lg transition duration-300">
                💬 WhatsApp
            </a>
        </div>
    </div>
</section>

<script>
// Service selection styling
document.querySelectorAll('.service-option').forEach(option => {
    option.addEventListener('click', function() {
        // Remove active class from all options
        document.querySelectorAll('.service-option').forEach(opt => {
            opt.classList.remove('border-primary-500', 'bg-primary-50');
            opt.classList.add('border-gray-200');
        });
        
        // Add active class to clicked option
        this.classList.remove('border-gray-200');
        this.classList.add('border-primary-500', 'bg-primary-50');
        
        // Check the radio button
        const radio = this.querySelector('input[type="radio"]');
        radio.checked = true;
    });
});

// Therapist selection styling
document.querySelectorAll('.therapist-option').forEach(option => {
    option.addEventListener('click', function() {
        // Remove active class from all options
        document.querySelectorAll('.therapist-option').forEach(opt => {
            opt.classList.remove('border-primary-500', 'bg-primary-50');
            opt.classList.add('border-gray-200');
        });
        
        // Add active class to clicked option
        this.classList.remove('border-gray-200');
        this.classList.add('border-primary-500', 'bg-primary-50');
        
        // Check the radio button
        const radio = this.querySelector('input[type="radio"]');
        radio.checked = true;
    });
});

// Form submission
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    
    // Show success message (in real app, this would submit to server)
    alert('Booking berhasil dikirim! Tim kami akan menghubungi Anda dalam 30 menit untuk konfirmasi.');
    
    // Reset form
    this.reset();
    
    // Reset styling
    document.querySelectorAll('.service-option, .therapist-option').forEach(option => {
        option.classList.remove('border-primary-500', 'bg-primary-50');
        option.classList.add('border-gray-200');
    });
});
</script>
@endsection
