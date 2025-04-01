@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<div class="container">
    <!-- Hasil Ditemukan -->
    <div class="mb-5">
        <h1 class="mb-4">Dipyo</h1>
        <div class="term-card bg-white p-4 mb-4 shadow-sm">
            <h2 class="text-primary">Dipyo <small class="text-muted">/dip-yo/</small></h2>
            <p class="mt-3">Dipyo atau Undip Tayo merupakan bus kampus Universitas Diponegoro. Diluncurkan pada Oktober 2022, Bus Kampus hadir sebagai solusi transportasi yang nyaman, ramah lingkungan, dan bebas biaya bagi para mahasiswa dan dosen.</p>
        </div>
    </div>

    <!-- Hasil Tidak Ditemukan -->
    <div class="alert alert-warning p-4">
        <h1 class="alert-heading">Apakah patung sapi FPP berkeliaran</h1>
        <hr>
        <p class="mb-0">Pencarian 'Apakah patung sapi FPP berkeliaran' tidak ditemukan!</p>
    </div>
</div>
@endsection
