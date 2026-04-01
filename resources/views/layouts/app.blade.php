<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Liburan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS GALERI AUTO SCROLL -->
    <style>
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .animate-scroll {
            display: flex;
            width: max-content;
            animation: scroll 25s linear infinite;
        }
    </style>

</head>
<body class="bg-gray-100">

    @yield('content')

    <!-- SCRIPT TOGGLE (kalau masih dipakai) -->
    <script>
        function toggleDetail(id) {
            const el = document.getElementById(id);
            el.classList.toggle('hidden');
        }
    </script>

    <!-- SCRIPT MODAL -->
    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.getElementById(id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
            document.getElementById(id).classList.remove('flex');
        }
    </script>

</body>
</html>