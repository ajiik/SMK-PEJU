<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Guru SMK PEJU</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        .slider-wrapper {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }
        .teacher-card {
            flex: 0 0 auto;
            width: 256px;
            margin: 0 8px;
        }
        .slider-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(59, 130, 246, 0.8);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 10;
        }
        .slider-button:hover {
            background-color: rgba(37, 99, 235, 1);
        }
        .slider-button.prev {
            left: 10px;
        }
        .slider-button.next {
            right: 10px;
        }
        .gradient-bg {
            background: linear-gradient(90deg, #60a5fa, #3b82f6, #2563eb);
        }
    </style>
</head>
<body class="bg-blue-50">
<header>
    <nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/Logo.png" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">SMK PEJU</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                    <button data-collapse-toggle="navbar-cta" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:border-gray-700">
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500">About</a>
                        </li>
                        <li>
    <a href="{{ route('teacher.gallery') }}" class="block py-2 px-3 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Galeri Guru</a>
</li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
</header>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-6">
        <a href="{{ route('home') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 bg-white px-4 py-2 rounded-full shadow-md transition duration-300 hover:shadow-lg">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali
        </a>
        </div>
        <h1 class="text-4xl font-bold text-center text-white mb-8 p-4 rounded-lg gradient-bg shadow-lg">GALERI GURU SMK PEJU</h1>
        
        <!-- Teknik Informatika -->
        <section class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-blue-400 mb-8">
            <h2 class="text-2xl font-semibold text-blue-800 mb-6">Teknik Informatika</h2>
            <div class="slider-container overflow-hidden relative">
                <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-blue-300">
                            <img src="images/adell.jpeg" alt="ADEL" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-blue-800">ADEL</h3>
                                <p class="text-blue-600">Sistem Operasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-blue-300">
                            <img src="images/agista.jpeg" alt="AGISTA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-blue-800">AGISTA</h3>
                                <p class="text-blue-600">Pemrograman Web</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-blue-300">
                            <img src="images/aji.JPG" alt="AJI" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-blue-800">AJIE</h3>
                                <p class="text-blue-600">Konsep Pemrograman</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-blue-300">
                            <img src="images/amara.JPG" alt="AMARA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-blue-800">AMARA</h3>
                                <p class="text-blue-600">Kalkulus I</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-blue-300">
                            <img src="images/andi.jpeg" alt="ANDI" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-blue-800">ANDI</h3>
                                <p class="text-blue-600">Bahasa Inggris I</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-blue-300">
                            <img src="images/andre.JPG" alt="ANDRE" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-blue-800">ANDRE</h3>
                                <p class="text-blue-600">Sistem Digital</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Manajemen -->
        <section class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-400 mb-8">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Manajemen</h2>
            <div class="slider-container overflow-hidden relative">
                <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-green-300">
                            <img src="images/anisa.jpeg" alt="ANISA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-green-800">ANISA</h3>
                                <p class="text-green-600">Manajemen Pemasaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-green-300">
                            <img src="images/arman.JPG" alt="ARMAN" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-green-800">ARMAN</h3>
                                <p class="text-green-600">Manajemen Dasar</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-green-300">
                            <img src="images/bella.jpeg" alt="BELLA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-green-800">BELLA</h3>
                                <p class="text-green-600">Perilaku Organisasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-green-300">
                            <img src="images/bilal.JPG" alt="BILAL" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-green-800">BILAL</h3>
                                <p class="text-green-600">Manajemen Perubahan</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-green-300">
                            <img src="images/bima.jpeg" alt="BIMA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-green-800">BIMA</h3>
                                <p class="text-green-600">Manajemen Keuangan</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-green-300">
                            <img src="images/cakra.jpeg" alt="CAKRA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-green-800">CAKRA</h3>
                                <p class="text-green-600">Kewirausahaan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Sistem Informasi -->
        <section class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-purple-400 mb-8">
            <h2 class="text-2xl font-semibold text-purple-800 mb-6">Sistem Informasi</h2>
            <div class="slider-container overflow-hidden relative">
                <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-purple-300">
                            <img src="images/citra.jpeg" alt="CITRA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-purple-800">CITRA</h3>
                                <p class="text-purple-600">Analisis Sistem</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-purple-300">
                            <img src="images/damar.jpeg" alt="DAMAR" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-purple-800">DAMAR</h3>
                                <p class="text-purple-600">Dasar-dasar Sistem Informasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-purple-300">
                            <img src="images/fani.JPG" alt="FANI" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-purple-800">FANI</h3>
                                <p class="text-purple-600">Keamanan Informasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-purple-300">
                            <img src="images/fitri.jpeg" alt="FITRI" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-purple-800">FITRI</h3>
                                <p class="text-purple-600">Sistem Informasi untuk e-Bisnis</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-purple-300">
                            <img src="images/gia.jpeg" alt="GIA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-purple-800">GIA</h3>
                                <p class="text-purple-600">Cloud Computing</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-purple-300">
                            <img src="images/gisel.jpeg" alt="GISEL" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-purple-800">GISEL</h3>
                                <p class="text-purple-600">User Experience (UX) Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Desain Komunikasi Visual -->
        <section class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-pink-400 mb-8">
            <h2 class="text-2xl font-semibold text-pink-800 mb-6">Desain Komunikasi Visual</h2>
            <div class="slider-container overflow-hidden relative">
                <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-pink-300">
                            <img src="images/gita.jpeg" alt="GITA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-pink-800">GITA</h3>
                                <p class="text-pink-600">Desain Grafis</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-pink-300">
                            <img src="images/hanna.jpeg" alt="HANNA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-pink-800">HANNA</h3>
                                <p class="text-pink-600">Teori Desain</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-pink-300">
                            <img src="images/hasna.jpeg" alt="HASNA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-pink-800">HASNA</h3>
                                <p class="text-pink-600">Desain Web</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-pink-300">
                            <img src="images/ilham.JPG" alt="ILHAM" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-pink-800">ILHAM</h3>
                                <p class="text-pink-600">Desain Multimedia</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-pink-300">
                            <img src="images/intan.jpeg" alt="INTAN" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-pink-800">INTAN</h3>
                                <p class="text-pink-600">Fotografi dan Videografi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-pink-300">
                            <img src="images/jelita.jpeg" alt="JELITA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-pink-800">JELITA</h3>
                                <p class="text-pink-600">Praktik Studio</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Farmasi -->
        <section class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-yellow-400 mb-8">
            <h2 class="text-2xl font-semibold text-yellow-800 mb-6">Farmasi</h2>
            <div class="slider-container overflow-hidden relative">
                <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-yellow-300">
                            <img src="images/karim.JPG" alt="KARIM" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-yellow-800">KARIM</h3>
                                <p class="text-yellow-600">Farmakologi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-yellow-300">
                            <img src="images/lestari.jpeg" alt="LESTARI" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-yellow-800">LESTARI</h3>
                                <p class="text-yellow-600">Biofarmasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-yellow-300">
                            <img src="images/michie.jpeg" alt="MICHIE" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-yellow-800">MICHIE</h3>
                                <p class="text-yellow-600">Farmasi Rumah Sakit</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-yellow-300">
                            <img src="images/nabila.jpeg" alt="NABILA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-yellow-800">NABILA</h3>
                                <p class="text-yellow-600">Teknologi Farmasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-yellow-300">
                            <img src="images/nadia.jpeg" alt="NADIA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-yellow-800">NADIA</h3>
                                <p class="text-yellow-600">Toxikologi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-yellow-300">
                            <img src="images/nindya.jpeg" alt="NINDYA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-yellow-800">NINDYA</h3>
                                <p class="text-yellow-600">Farmakoekonomi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Kedokteran -->
        <section class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-red-400 mb-8">
            <h2 class="text-2xl font-semibold text-red-800 mb-6">Kedokteran</h2>
            <div class="slider-container overflow-hidden relative">
                <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-red-300">
                            <img src="images/okta.JPG" alt="OKTA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-red-800">OKTA</h3>
                                <p class="text-red-600">Anatomi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-red-300">
                            <img src="images/rio.JPG" alt="RIO" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-red-800">RIO</h3>
                                <p class="text-red-600">Fisiologi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-red-300">
                            <img src="images/tama.JPG" alt="TAMA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-red-800">TAMA</h3>
                                <p class="text-red-600">Histologi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-red-300">
                            <img src="images/tiara.jpeg" alt="TIARA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-red-800">TIARA</h3>
                                <p class="text-red-600">Biokimia</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-red-300">
                            <img src="images/yazid.JPG" alt="YAZID" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-red-800">YAZID</h3>
                                <p class="text-red-600">Farmakologi</p>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-card flex-shrink-0 w-64 mx-2">
                        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105 border-2 border-red-300">
                            <img src="images/yudha.JPG" alt="YUDHA" class="w-full h-48 object-cover object-top">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-red-800">YUDHA</h3>
                                <p class="text-red-600">Mikrobiologi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>
    </div>

    <footer class="bg-blue-700 text-white mt-20">
<div class="container mx-auto px-6 py-10">
            <div class="flex flex-wrap justify-between">
                <div class="w-full sm:w-1/2 lg:w-1/4 mb-6">
                    <h3 class="font-bold text-xl mb-2">Tentang Kami</h3>
                    <p>SMK PEMUDA JUARA berkomitmen untuk memberikan pendidikan dan pelatihan yang berkualitas tinggi kepada para siswa, menyiapkan mereka untuk sukses di masa depan.</p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 mb-6">
                    <h3 class="font-bold text-xl mb-2">Kontak</h3>
                    <ul class="list-none">
                        <li>Jl. Pemuda No.10, Jakarta</li>
                        <li>Tel: +62 21 1234567</li>
                        <li>Email: info@smkpemudajuara.ac.id</li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 mb-6">
                    <h3 class="font-bold text-xl mb-2">Link Cepat</h3>
                    <ul class="list-none">
                        <li><a href="#" class="hover:text-blue-400">Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-blue-400">Blog</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 mb-6">
                    <h3 class="font-bold text-xl mb-2">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="pt-10 sm:flex sm:items-center sm:justify-between">
                <span class="text-sm sm:text-center">© 2024 SMK PEMUDA JUARA. All Rights Reserved.</span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-900">Terms & Conditions</a>
                </div>
            </div>
        </div>
</footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliderContainers = document.querySelectorAll('.slider-container');
        
        sliderContainers.forEach(container => {
            const wrapper = container.querySelector('.slider-wrapper');
            const prevBtn = container.querySelector('.slider-button.prev');
            const nextBtn = container.querySelector('.slider-button.next');
            let currentPosition = 0;

            function updateSliderPosition() {
                const maxPosition = -(wrapper.scrollWidth - wrapper.clientWidth);
                currentPosition = Math.max(Math.min(currentPosition, 0), maxPosition);
                wrapper.style.transform = `translateX(${currentPosition}px)`;
            }

            prevBtn.addEventListener('click', () => {
                currentPosition += 272; // Lebar kartu + margin
                updateSliderPosition();
            });

            nextBtn.addEventListener('click', () => {
                currentPosition -= 272; // Lebar kartu + margin
                updateSliderPosition();
            });
        });
    });
    </script>
</body>
</html>