@extends('utils.layout.main')

<style>
    .pixelated-bg {
        image-rendering: pixelated;
    }
</style>

@section('content')
<!-- Navbar -->
@include('utils.layout.navbar')

<!-- Hero Section -->
<section class="relative bg-cover bg-opacity-85 bg-center text-white text-center py-52"
    style="background-image: url('https://i.pinimg.com/originals/0a/b8/ce/0ab8ce6d94dc4bd5183e953ad6ef797d.gif'); opacity: 0.9;">
    <div class="container mx-auto">
        <h1 class="text-6xl font-extrabold text-shadow-lg">Sewa PlayStation Mudah & Cepat</h1>
        <p class="mt-4 text-lg max-w-2xl mx-auto">Pesan unit PS favoritmu, bayar dengan QRIS, dan nikmati bermain tanpa
            ribet! Ayo mulai petualanganmu sekarang!</p>
        <a href="#"
            class="mt-6 inline-block bg-pink-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-pink-600 transition-all">
            Booking Sekarang
        </a>
    </div>
</section>

<!-- Fitur Utama -->
<section class="mx-auto py-16 px-12 flex items-center bg-black pixelated-bg">
    <div class="w-full md:w-1/2">
        <h2 class="text-left text-4xl font-extrabold text-white mb-8 pixel-font">Kenapa Memilih Kami?</h2>
        <div class="grid md:grid-cols-1 gap-8">
            <!-- First Feature: Game Icon -->
            <div
                class="p-6 bg-gradient-to-br from-pink-500 to-indigo-800 rounded-lg shadow-lg hover:scale-105 transition-all transform">
                <i class="fas fa-gamepad text-5xl text-yellow-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-white">Banyak Pilihan Game</h3>
                <p class="mt-2 text-gray-300">Mainkan berbagai game terbaru dan favoritmu di PS4 & PS5.</p>
            </div>
            <!-- Second Feature: Payment Icon -->
            <div
                class="p-6 bg-gradient-to-br from-pink-500 to-indigo-800 rounded-lg shadow-lg hover:scale-105 transition-all transform">
                <i class="fas fa-wallet text-5xl text-yellow-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-white">Pembayaran Mudah</h3>
                <p class="mt-2 text-gray-300">Bayar dengan QRIS, bebas repot tanpa harus membawa uang tunai.</p>
            </div>
            <!-- Third Feature: Support Icon -->
            <div
                class="p-6 bg-gradient-to-br from-pink-500 to-indigo-800 rounded-lg shadow-lg hover:scale-105 transition-all transform">
                <i class="fas fa-headset text-5xl text-yellow-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-white">Layanan Cepat</h3>
                <p class="mt-2 text-gray-300">Tim kami siap membantu dan memastikan pengalaman bermain terbaik.</p>
            </div>
        </div>
    </div>

    <div class="w-1/2 ml-16">
        <img src="https://cdn.pixabay.com/animation/2024/05/16/21/45/21-45-34-3_512.gif" alt="Interactive GIF"
            class="max-w-full h-auto" />
    </div>
</section>

<hr class="text-white mx-3 px-3">
</hr>

<!-- Interactive Mini-Game (Coin Drop Effect) -->
<section class="text-center py-16 bg-gradient-to-r from-indigo-900 via-purple-800 to-blue-700 text-white">
    <h2 class="text-4xl font-bold">Siap Bermain Sekarang?</h2>
    <p class="mt-4 text-lg">Pesan unitmu dan nikmati keseruan bermain di MyRental-App!</p>
    <div class="mt-3">
        <div class="inline-block pixel-animate">
            <img src="https://i.pinimg.com/originals/ed/f2/54/edf254eea0ca51397e883b6908ad57cb.gif" alt="Coin"
                class="w-16 h-16 mx-auto" />
        </div>
    </div>
    <a href="#"
        class="mt-6 inline-block bg-pink-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-pink-600 transition-all">
        Booking Sekarang
    </a>

</section>
@endsection