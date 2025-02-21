@extends('utils.layout.main')

<style>
    /* Custom Styling */
    .pixelated-bg {
        image-rendering: pixelated;
    }

    .pixel-font {
        font-family: 'Press Start 2P', cursive;
    }

    .neon-text {
        text-shadow: 0px 0px 10px #00f2ff, 0px 0px 20px #00f2ff;
    }

    .btn-neon {
        background: linear-gradient(45deg, #4f46e5, #3b82f6);
        box-shadow: 0 0 10px #3b82f6;
    }

    .btn-neon:hover {
        box-shadow: 0 0 20px #4f46e5;
    }

    .pixel-animate {
        animation: float 2s infinite ease-in-out alternate;
    }

    @keyframes float {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-10px);
        }
    }
</style>

@section('content')
@include('utils.layout.navbar')

<!-- Hero Section -->
<section class="relative bg-cover bg-center text-white text-center py-52"
    style="background-image: url('https://i.pinimg.com/originals/0a/b8/ce/0ab8ce6d94dc4bd5183e953ad6ef797d.gif');">
    <div class="container mx-auto">
        <h1 class="text-6xl font-extrabold neon-text pixel-font">Sewa PlayStation Mudah & Cepat</h1>
        <p class="mt-4 text-lg max-w-2xl mx-auto text-gray-300">Pesan unit PS favoritmu, bayar dengan QRIS, dan nikmati
            bermain tanpa ribet!</p>
        <a href="#"
            class="mt-6 inline-block btn-neon text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all">
            Booking Sekarang
        </a>
    </div>
</section>

<!-- Fitur Utama -->
<section class="mx-auto py-16 px-12 flex justify-center bg-black">
    <div class="w-full md:w-3/4">
        <h2 class="text-center text-4xl font-extrabold text-white mb-12 neon-text pixel-font">
            Kenapa Memilih Kami?
        </h2>
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div
                class="p-8 bg-gradient-to-br from-blue-700 to-indigo-900 rounded-lg shadow-lg hover:scale-105 transition-all transform border-2 border-cyan-400 hover:border-purple-400">
                <i class="fas fa-gamepad text-6xl text-cyan-400 mb-6"></i>
                <h3 class="text-2xl font-semibold text-white">Banyak Pilihan Game</h3>
                <p class="mt-3 text-gray-300">Mainkan berbagai game terbaru dan favoritmu di PS4 & PS5.</p>
            </div>
            <div
                class="p-8 bg-gradient-to-br from-blue-700 to-indigo-900 rounded-lg shadow-lg hover:scale-105 transition-all transform border-2 border-cyan-400 hover:border-purple-400">
                <i class="fas fa-wallet text-6xl text-cyan-400 mb-6"></i>
                <h3 class="text-2xl font-semibold text-white">Pembayaran Mudah</h3>
                <p class="mt-3 text-gray-300">Bayar dengan QRIS, bebas repot tanpa harus membawa uang tunai.</p>
            </div>
            <div
                class="p-8 bg-gradient-to-br from-blue-700 to-indigo-900 rounded-lg shadow-lg hover:scale-105 transition-all transform border-2 border-cyan-400 hover:border-purple-400">
                <i class="fas fa-headset text-6xl text-cyan-400 mb-6"></i>
                <h3 class="text-2xl font-semibold text-white">Layanan Cepat</h3>
                <p class="mt-3 text-gray-300">Tim kami siap membantu dan memastikan pengalaman bermain terbaik.</p>
            </div>
        </div>
    </div>


</section>

<hr class="mx-auto w-3/4 h-1 text-indigo-500">

<!-- Interactive Mini-Game -->
<section class="text-center py-16 bg-gradient-to-r from-black via-blue-900 to-indigo-900 text-white">
    <h2 class="text-4xl font-bold neon-text pixel-font">Siap Bermain Sekarang?</h2>
    <p class="mt-4 text-lg text-gray-300">Pesan unitmu dan nikmati keseruan bermain di MyRental-App!</p>
    <div class="mt-3">
        <div class="inline-block pixel-animate">
            <img src="https://i.pinimg.com/originals/ed/f2/54/edf254eea0ca51397e883b6908ad57cb.gif" alt="Coin"
                class="w-24 h-16 mx-auto" />
        </div>
    </div>
    <a href="#"
        class="mt-6 inline-block btn-neon text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all">
        Booking Sekarang
    </a>
</section>
@endsection