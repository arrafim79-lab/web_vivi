@extends('layouts.app')

@section('content')

<!-- BUTTON MOBILE -->
<button id="menuBtn" onclick="toggleSidebar()" 
class="md:hidden fixed top-4 left-4 z-[9999] bg-white text-black px-3 py-2 rounded shadow">
☰
</button>

<div class="flex">

    <!-- SIDEBAR -->
    <div id="sidebar"
         class="w-64 bg-[#0f172a] text-white p-6 fixed md:static top-0 left-0 h-full md:h-screen flex flex-col z-50 transform -translate-x-full md:translate-x-0 transition duration-300">

        <!-- CLOSE BTN -->
        <button onclick="toggleSidebar()" 
        class="md:hidden absolute top-4 right-4 text-white text-2xl">
        ✖
        </button>

        <!-- FOTO + NAMA -->
        <div class="text-center mb-8">
            <img src="{{ asset('images/profile.jpeg') }}"
                 class="w-24 h-24 rounded-lg mx-auto object-cover border-4 border-gray-700 shadow-lg mb-4">

            <h2 class="text-lg font-bold">Vivi Ramadhani</h2>
            <p class="text-sm text-gray-400">
                Web Kegiatan Ramadhan & Lebaran 🌙
            </p>
        </div>

        <!-- SOSMED -->
        <div class="flex justify-center space-x-3 mb-8">

            <a href="https://facebook.com" target="_blank"
               class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-blue-500 transition">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://instagram.com/_vivirmdhni" target="_blank"
               class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-pink-500 transition">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://youtube.com" target="_blank"
               class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-red-500 transition">
                <i class="fab fa-youtube"></i>
            </a>

            <a href="https://tiktok.com/@vhiii015" target="_blank"
               class="w-10 h-10 flex items-center justify-center bg-gray-700 rounded-full hover:bg-white hover:text-black transition">
                <i class="fab fa-tiktok"></i>
            </a>

        </div>

        <!-- MENU -->
        <div class="space-y-2">

            <a href="#welcome" onclick="toggleSidebar()"
               class="flex items-center space-x-3 p-2 rounded hover:bg-blue-500 transition">
                <i class="fas fa-home"></i>
                <span>Rumah</span>
            </a>

            <a href="#dashboard" onclick="toggleSidebar()"
               class="flex items-center space-x-3 p-2 rounded hover:bg-blue-500 transition">
                <i class="fas fa-book"></i>
                <span>Halaman Cerita</span>
            </a>

            <a href="#profil" onclick="toggleSidebar()"
               class="flex items-center space-x-3 p-2 rounded hover:bg-blue-500 transition">
                <i class="fas fa-images"></i>
                <span>Galeri</span>
            </a>

            <a href="#sosmed" onclick="toggleSidebar()"
               class="flex items-center space-x-3 p-2 rounded hover:bg-blue-500 transition">
                <i class="fas fa-user"></i>
                <span>Profil</span>
            </a>

        </div>

    </div>

    <!-- SCROLL AREA -->
    <div class="w-full md:ml-64 h-screen overflow-y-scroll scroll-smooth snap-y snap-mandatory">

        <!-- WELCOME -->
        <section id="welcome" class="h-screen snap-start relative">

            <img src="{{ asset('images/profile2.jpeg') }}"
                 class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-black/50"></div>

            <div class="absolute inset-0 flex flex-col justify-center px-6 md:px-16 text-white">

                <h1 class="text-3xl md:text-6xl font-bold leading-tight">
                    Jejak <br> Ramadhan & Lebaran 🌙
                </h1>

                <p class="mt-6 text-xl border-b-2 inline-block w-fit pb-1">
                    Saya | seorang mahasiswa
                </p>

            </div>

        </section>

        <!-- DASHBOARD -->
        <section id="dashboard" class="h-screen snap-start bg-[#020617] flex flex-col justify-center px-10 text-white">

            <h1 class="text-4xl font-bold text-center mb-10 text-cyan-400">
                Cerita Lebaran Saya
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- CARD 1 -->
                <div class="bg-[#0f172a] p-4 rounded-xl shadow-lg">
                    <h2 class="text-lg font-semibold mb-3">Lebaran Pertama</h2>

                    <img src="{{ asset('images/1.jpeg') }}"
                         class="w-full h-48 object-cover rounded-lg mb-4">

                    <button onclick="openModal('modal1')"
                            class="w-full py-2 bg-cyan-500 rounded hover:bg-cyan-600 transition">
                        Detail
                    </button>
                </div>

                <!-- CARD 2 -->
                <div class="bg-[#0f172a] p-4 rounded-xl shadow-lg">
                    <h2 class="text-lg font-semibold mb-3">Lebaran Kedua</h2>

                    <img src="{{ asset('images/2.jpeg') }}"
                         class="w-full h-48 object-cover rounded-lg mb-4">

                    <button onclick="openModal('modal2')"
                            class="w-full py-2 bg-purple-500 rounded hover:bg-purple-600 transition">
                        Detail
                    </button>
                </div>

                <!-- CARD 3 -->
                <div class="bg-[#0f172a] p-4 rounded-xl shadow-lg">
                    <h2 class="text-lg font-semibold mb-3">Lebaran Ketiga</h2>

                    <img src="{{ asset('images/3.jpeg') }}"
                         class="w-full h-48 object-cover rounded-lg mb-4">

                    <button onclick="openModal('modal3')"
                            class="w-full py-2 bg-green-500 rounded hover:bg-green-600 transition">
                        Detail
                    </button>
                </div>

            </div>

        </section>

        <!-- GALERI -->
        <section id="profil" class="h-screen snap-start bg-[#020617] flex flex-col justify-center text-white overflow-hidden">

            <h1 class="text-4xl font-bold text-center mb-10 text-cyan-400">
                Galeri Saya
            </h1>

            <div class="relative w-full overflow-hidden">
                <div class="flex gap-6 animate-scroll">

                    <img src="{{ asset('images/a.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/b.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/c.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/d.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/e.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/f.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/g.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/h.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">

                    <!-- DUPLIKAT -->
                    <img src="{{ asset('images/a.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/b.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/c.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/d.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/e.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/f.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/g.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">
                    <img src="{{ asset('images/h.jpeg') }}" class="w-72 h-48 object-cover rounded-xl">

                </div>
            </div>

        </section>

        <!-- PROFIL -->
        <section id="sosmed" class="h-screen snap-start bg-[#020617] flex items-center text-white px-6 md:px-16">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full">

                <div class="flex justify-center">
                    <img src="{{ asset('images/profile.jpeg') }}"
                         class="w-72 h-72 object-cover rounded-full border-4 border-cyan-400">
                </div>

                <div>
                    <h1 class="text-4xl font-bold mb-6 text-cyan-400">Tentang Saya</h1>

                    <h2 class="text-xl font-semibold mb-4">
                        Saya <span class="text-cyan-400">Vivi Ramadhani</span>, Mahasiswa
                    </h2>

                    <p class="text-gray-300 mb-6">
                        Saya adalah seorang mahasiswa yang memiliki minat dalam dunia teknologi,
                        khususnya dalam pembuatan website.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-purple-600 p-4 rounded-lg">Jambi</div>
                        <div class="bg-green-500 p-4 rounded-lg">vivi@gmail.com</div>
                        <div class="bg-pink-500 p-4 rounded-lg">+6285832015997</div>
                        <div class="bg-orange-500 p-4 rounded-lg">Mahasiswi</div>
                    </div>
                </div>

            </div>

        </section>

    </div>

</div>

<!-- SCRIPT -->
<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
}

document.addEventListener('click', function(e) {
    const sidebar = document.getElementById('sidebar');
    const openBtn = document.getElementById('menuBtn');

    if (!sidebar.contains(e.target) && !openBtn.contains(e.target)) {
        sidebar.classList.add('-translate-x-full');
    }
});
</script>

@endsection