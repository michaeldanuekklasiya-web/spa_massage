<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Spa Bali - Pijat Panggilan 24 Jam')</title>
    <meta name="description" content="@yield('description', 'Layanan pijat panggilan 24 jam di Bali dengan terapis profesional dan berpengalaman. Nikmati relaksasi di rumah, hotel, atau apartemen Anda.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        accent: {
                            50: '#fefce8',
                            100: '#fef9c3',
                            200: '#fef08a',
                            300: '#fde047',
                            400: '#facc15',
                            500: '#eab308',
                            600: '#ca8a04',
                            700: '#a16207',
                            800: '#854d0e',
                            900: '#713f12',
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
                        'serif': ['Playfair Display', 'ui-serif', 'Georgia'],
                    },
                }
            }
        }
    </script>
    <style>
        .btn-primary {
            @apply bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300 ease-in-out;
        }
        
        .btn-secondary {
            @apply bg-secondary-600 hover:bg-secondary-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300 ease-in-out;
        }
        
        .btn-outline {
            @apply border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-medium py-3 px-6 rounded-lg transition duration-300 ease-in-out;
        }
        
        .card {
            @apply bg-white rounded-xl shadow-lg p-6;
        }
        
        .section-padding {
            @apply py-16 px-4;
        }
    </style>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-white sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-red-600 text-white py-3">
            <div class="container mx-auto px-4 flex justify-between items-center text-sm">
                <div class="flex items-center space-x-6">
                    <span class="flex items-center">
                        <span class="mr-2">📞</span>
                        <span class="font-semibold">0896 7580 9909</span>
                    </span>
                    <span class="flex items-center">
                        <span class="mr-2">🕒</span>
                        <span>Layanan 24 Jam</span>
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-red-200 transition">📱 WhatsApp</a>
                    <a href="#" class="hover:text-red-200 transition">📧 Email</a>
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->
        <nav class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xl">C</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Caisar Massage</h1>
                        <p class="text-sm text-gray-600">Surabaya</p>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Tentang Kami</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Massage</a>
                    <a href="{{ route('therapists') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Terapis</a>
                    <a href="{{ route('blog') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Blog</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Kontak</a>
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300">Booking Sekarang</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4 border-t border-gray-200">
                <div class="flex flex-col space-y-4 pt-4">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Tentang Kami</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Massage</a>
                    <a href="{{ route('therapists') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Terapis</a>
                    <a href="{{ route('blog') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Blog</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-600 font-medium transition">Kontak</a>
                    <a href="{{ route('booking') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 text-center">Booking Sekarang</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-xl">C</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Caisar Massage</h3>
                            <p class="text-sm text-gray-400">Surabaya</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Layanan jasa pijat panggilan 24 jam area Surabaya dan sekitarnya. 
                        Anda bebas pilih foto terapis.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">📱</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">📧</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">📘</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">📷</a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">massage treatment</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Totok Wajah</a></li>
                        <li><a href="#" class="hover:text-white transition">Traditional Massage</a></li>
                        <li><a href="#" class="hover:text-white transition">Body Massage</a></li>
                        <li><a href="#" class="hover:text-white transition">Full Body Treatment</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">kontak</h4>
                    <div class="space-y-2 text-gray-300">
                        <p>📍 Genteng Kali, Surabaya – Jawa Timur</p>
                        <p>📞 0822 2831 5230</p>
                        <p>📞 0822 2831 5230</p>
                    </div>
                </div>
            </div>
            
            <!-- Info Terbaru -->
            <div class="border-t border-gray-800 mt-8 pt-8">
                <h4 class="text-lg font-semibold mb-4">info terbaru</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-300">
                    <div>
                        <p class="text-sm text-gray-500">13 Februari 2025</p>
                        <p class="hover:text-white transition cursor-pointer">Pijat Panggilan Surabaya 24 Jam</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">13 Februari 2025</p>
                        <p class="hover:text-white transition cursor-pointer">Layanan Body Massage Surabaya</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Caisar Massage Surabaya. All Rights Reserved. Published by www.asain.co.id</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-primary-600 text-white p-3 rounded-full shadow-lg hover:bg-primary-700 transition duration-300 opacity-0 invisible">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
