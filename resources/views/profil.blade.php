@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <div class="w-64 bg-black text-white p-6">
        <div class="mt-10 space-y-4">
            <a href="/" class="block hover:text-blue-400">Welcome</a>
            <a href="/dashboard" class="block hover:text-blue-400">Dashboard</a>
            <a href="/profil" class="block text-blue-400">Profil</a>
            <a href="/sosmed" class="block hover:text-blue-400">Sosmed</a>
        </div>
    </div>

    <!-- ISI -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold">Profil Saya</h1>
        <p class="mt-4">Nama: Rafi</p>
        <p>Hobi: Ngoding, Traveling</p>
    </div>

</div>

@endsection