@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <div class="w-64 bg-black text-white p-6">
        <div class="mt-10 space-y-4">
            <a href="/" class="block hover:text-blue-400">Welcome</a>
            <a href="/dashboard" class="block text-blue-400">Dashboard</a>
            <a href="/profil" class="block hover:text-blue-400">Profil</a>
            <a href="/sosmed" class="block hover:text-blue-400">Sosmed</a>
        </div>
    </div>

    <!-- ISI -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold">Dashboard Cerita</h1>

        <div class="mt-6 bg-white p-4 rounded shadow">
            <h2 class="font-semibold">Hari 1</h2>
            <p>Pergi ke pantai dan menikmati sunset.</p>
        </div>

        <div class="mt-4 bg-white p-4 rounded shadow">
            <h2 class="font-semibold">Hari 2</h2>
            <p>Jalan-jalan ke tempat wisata dan kuliner.</p>
        </div>
    </div>

</div>

@endsection