<!-- Tailwind Extra Styling -->
<style>
    /* Glowing Effect */
    .group:hover .nav-glow {
        width: 100%;
    }

    .nav-glow {
        position: absolute;
        bottom: -4px;
        left: 0;
        height: 3px;
        width: 0;
        background: #00f2ff;
        transition: width 0.3s ease-in-out;
    }
</style>

<nav class="bg-black text-white py-4 shadow-lg fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Logo -->
        <a href="#" class="text-lg font-extrabold text-purple-400 tracking-widest pixel-font hover:animate-pulse">
            MyRental-App
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-6 text-lg">
            <li><a href="/" class="relative group">Beranda <span class="nav-glow"></span></a></li>
            <li><a href="/booking" class="relative group">Booking <span class="nav-glow"></span></a></li>
            <li><a href="#" class="relative group">Daftar Harga <span class="nav-glow"></span></a></li>
            <li><a href="#" class="relative group">Testimoni <span class="nav-glow"></span></a></li>
            <li><a href="#" class="relative group">Hubungi Kami <span class="nav-glow"></span></a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="nav-toggle" class="md:hidden text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="nav-menu" class="hidden flex-col space-y-4 p-6 bg-black text-white text-center md:hidden">
        <li><a href="/" class="hover:text-blue-400">Beranda</a></li>
        <li><a href="/booking" class="hover:text-blue-400">Booking</a></li>
        <li><a href="#" class="hover:text-blue-400">Daftar Harga</a></li>
        <li><a href="#" class="hover:text-blue-400">Testimoni</a></li>
        <li><a href="#" class="hover:text-blue-400">Hubungi Kami</a></li>
    </ul>
</nav>

<!-- JavaScript for Mobile Menu -->
<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        document.getElementById('nav-menu').classList.toggle('hidden');
    });
</script>