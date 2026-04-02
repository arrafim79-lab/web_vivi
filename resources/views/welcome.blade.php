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

    <!-- SCROLL AREA (INI YANG DIPERBAIKI) -->
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
                    <div class="relative">
                        <div class="absolute inset-0 rounded-full blur-2xl bg-cyan-400 opacity-30"></div>
                        <img src="{{ asset('images/profile.jpeg') }}"
                             class="w-72 h-72 object-cover rounded-full border-4 border-cyan-400 relative">
                    </div>
                </div>

                <div>
                    <h1 class="text-4xl font-bold mb-6 text-cyan-400">
                        Tentang Saya
                    </h1>

                    <h2 class="text-xl font-semibold mb-4">
                        Saya <span class="text-cyan-400">Vivi Ramadhani</span>, Mahasiswa
                    </h2>

                    <p class="text-gray-300 leading-relaxed mb-6">
                        Saya adalah seorang mahasiswa yang memiliki minat dalam dunia teknologi,
                        khususnya dalam pembuatan website. Saya senang belajar hal baru dan terus
                        mengembangkan skill saya dalam bidang IT.
                    </p>

                    <p class="text-gray-300 leading-relaxed mb-8">
                        Selain itu, saya juga suka beraktivitas di luar seperti traveling dan
                        mengabadikan momen dalam bentuk foto.
                    </p>

                    <div class="grid grid-cols-2 gap-4">

                        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 p-4 rounded-lg flex items-center gap-3">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jambi, Indonesia</span>
                        </div>

                        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-4 rounded-lg flex items-center gap-3">
                            <i class="fas fa-envelope"></i>
                            <span>vivi@gmail.com</span>
                        </div>

                        <div class="bg-gradient-to-r from-pink-500 to-red-500 p-4 rounded-lg flex items-center gap-3">
                            <i class="fas fa-phone"></i>
                            <span>+6285832015997</span>
                        </div>

                        <div class="bg-gradient-to-r from-orange-500 to-yellow-500 p-4 rounded-lg flex items-center gap-3">
                            <i class="fas fa-user"></i>
                            <span>Mahasiswi S1</span>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

</div>

<!-- MODAL -->
<div id="modal1" class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">
    <div class="bg-white text-black p-6 rounded-lg w-[90%] md:w-[500px] relative">
        <button onclick="closeModal('modal1')" class="absolute top-2 right-3 text-xl">✖</button>
        <h2 class="text-xl font-bold mb-3">Lebaran Pertama</h2>
        <p>
            Hari raya pertama, saya yang pastinya bersilahturrahmi kerumah sanak saudara, bermaaf-maafan dengan keluarga dan saudara-saudara, makan bersama, bercanda, bercerita dan masih banyak lagi cerita menarik 
        </p>
    </div>
</div>

<div id="modal2" class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">
    <div class="bg-white text-black p-6 rounded-lg w-[90%] md:w-[500px] relative">
        <button onclick="closeModal('modal2')" class="absolute top-2 right-3 text-xl">✖</button>
        <h2 class="text-xl font-bold mb-3">Lebaran Kedua</h2>
        <p>
            Hari kedua lebaran saya dan keluarga, pagi-pagi sudah siap-siap untuk ke makam keluarga...
        </p>
    </div>
</div>

<div id="modal3" class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">
    <div class="bg-white text-black p-6 rounded-lg w-[90%] md:w-[500px] relative">
        <button onclick="closeModal('modal3')" class="absolute top-2 right-3 text-xl">✖</button>
        <h2 class="text-xl font-bold mb-3">Lebaran Ketiga</h2>
        <p>
            Hari ketiga saya dan keluarga pergi bersilahturrahmi ke tempat keluarga...
        </p>
    </div>
</div>

<!-- SCRIPT -->
<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
}

function openModal(id){
    document.getElementById(id).classList.remove('hidden');
    document.getElementById(id).classList.add('flex');
}

function closeModal(id){
    document.getElementById(id).classList.add('hidden');
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