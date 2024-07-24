@extends('layouts.app')

@section('title', 'Beranda - SMK PEJU')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white mt-20">
    <div class="mt-20">
        <section class="bg-white">
          <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 grid-cols-1 md:grid-cols-12">
            <!-- Gambar muncul pertama pada mobile dengan margin bawah untuk ruang -->
            <div class="md:col-span-5 lg:col-span-5 lg:mt-0 order-first md:order-none mb-8 md:mb-0">
              <img src="images/1.png" alt="mockup" class="mx-auto md:mx-0 w-full md:w-auto">
            </div>
            <!-- Teks muncul setelah gambar pada mobile -->
            <div class="md:col-span-7 lg:col-span-7 place-self-center text-center md:text-left">
              <h1 class="max-w-2xl mx-auto md:mx-0 mb-4 text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-none text-black">Solusi Pembayaran Terpadu untuk Sekolah</h1>
              <p class="max-w-xl mx-auto md:mx-0 mb-6 font-light text-gray-700 text-base md:text-lg lg:text-xl">Atur pembayaran SPP, seragam, dan kegiatan sekolah dengan mudah dalam satu sistem. Efisien dan minim kesalahan.</p>
              <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Daftar Sekarang<svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
        </section>
      </div>
    </section>

    <!-- Jurusan Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-10">
    <div>
        <section class="py-20 px-4 sm:px-6 lg:px-10">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-10">JURUSAN <br> SMK PEMUDA JUARA</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Department Card 1 -->
                    <div class="bg-white p-10 rounded-lg shadow-lg">
                        <img src="images/jurusan1.png" alt="Icon" class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Teknologi Informatika</h5>
                        <p>Teknologi informasi (TI) adalah penggunaan komputer, penyimpanan, jaringan, dan perangkat
                            fisik lainnya...</p>
                    </div>
                    <!-- Department Card 2 -->
                    <div class="bg-white p-10 rounded-lg shadow-lg">
                        <img src="images/jurusan2.png" alt="Icon" class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Manajemen</h5>
                        <p>Manajemen adalah proses pengorganisasian, pengaturan, pengelolaan SDM, sampai dengan
                            pengendalian...</p>
                    </div>
                    <!-- Department Card 3 -->
                    <div class="bg-white p-10 rounded-lg shadow-lg">
                        <img src="images/jurusan3.png" alt="Icon" class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Sistem Informatika</h5>
                        <p>Sistem informasi merupakan suatu sistem yang mengkombinasikan cara aktivitas manusia dan
                            penggunaan teknologi...</p>
                    </div>
                    <!-- Department Card 4 -->
                    <div class="bg-white p-10 rounded-lg shadow-lg">
                        <img src="images/Jurusan4.png" alt="Icon" class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Desain Komunikasi Visual</h5>
                        <p>Desain komunikasi visual adalah studi yang mempelajari ilmu tentang penyampaian pesan dengan
                            menggunakan elemen desain grafis...</p>
                    </div>
                    <!-- Department Card 5 -->
                    <div class="bg-white p-10 rounded-lg shadow-lg">
                        <img src="images/Jurusan5.png" alt="Icon" class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Fakultas Bahasa & Seni</h5>
                        <p>Fakultas Bahasa dan Seni (FBS) ini dirancang untuk menghasilkan sumber daya manusia yang
                            berkualitas tinggi...</p>
                    </div>
                    <!-- Department Card 6 -->
                    <div class="bg-white p-10 rounded-lg shadow-lg">
                        <img src="images/Jurusan6.png" alt="Icon" class="mb-4">
                        <h5 class="text-xl font-bold mb-2">Fakultas Ilmu Sosial</h5>
                        <p>FISIP adalah fakultas yang memiliki berbagai program studi atau jurusan yang berkaitan dengan
                            ilmu sosial dan ilmu politik...</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="container mx-auto px-4">
    <section class="bg-white">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 grid-cols-1 md:grid-cols-12">
                <!-- Gambar muncul pertama pada mobile dan di kanan pada desktop -->
                <div class="md:col-span-5 lg:col-span-5 lg:mt-0 order-first md:order-none mb-8 md:mb-0">
                    <img src="images/2.png" alt="mockup" class="mx-auto md:mx-0 w-full md:w-auto">
                </div>
                <!-- Teks muncul setelah gambar pada mobile dan di kiri pada desktop -->
                <div class="md:col-span-7 lg:col-span-7 place-self-center text-center md:text-left">
                    <h1 class="max-w-2xl mx-auto md:mx-0 mb-4 text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-none text-black">
                        SMK PEJU adalah Sekolah Menengah Keatas
                    </h1>
                    <p class="max-w-2xl mx-auto md:mx-0 mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl">
                        SMK PEJU berkomitmen menjadi Mitra IT bagi sekolah dalam rangka membantu percepatan digitalisasi sekolah yang menjadi rekomendasi Kemendikbud untuk mewujudkan kurikulum Merdeka Belajar.
                    </p>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Kontak Kami
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </section>

    <!-- Keuntungan Section -->
    <section class="py-20">
    <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10" data-aos="fade-up">KEUNTUNGAN MASUK KE
                <br><span>SMK PEMUDA JUARA</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
                <div class="flex flex-col items-center p-6 bg-white rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" data-aos="fade-up">
                    <div class="text-4xl mb-4 text-indigo-500">🏢</div>
                    <p class="text-lg font-semibold text-gray-700">Peluang Membuka Usaha Lebih Mudah</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-white rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-4 text-indigo-500">🔗</div>
                    <p class="text-lg font-semibold text-gray-700">Pembelajaran berwawasan Link-and-Match</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-white rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-4 text-indigo-500">🏞️</div>
                    <p class="text-lg font-semibold text-gray-700">TEMPAT YANG NYAMAN</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-white rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-4 text-indigo-500">🏢</div>
                    <p class="text-lg font-semibold text-gray-700">Tempat Prakerin</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-white rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl mb-4 text-indigo-500">🎉</div>
                    <p class="text-lg font-semibold text-gray-700">Kegiatan ekstra yang menarik</p>
                </div>
                <div class="flex flex-col items-center p-6 bg-white rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-4xl mb-4 text-indigo-500">🏫</div>
                    <p class="text-lg font-semibold text-gray-700">Fasilitas yang memadai</p>
                </div>
            </div>
        </div>
    </section>
@endsection