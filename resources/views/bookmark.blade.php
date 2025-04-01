@extends('layouts.app')

@section('title', 'Markah')

@section('content')
<div class="container">
    <h1 class="mb-4">Markah</h1>

    <!-- Markah Kosong -->
    <div class="text-center py-5 bg-light rounded">
        <i class="fas fa-bookmark fa-4x text-muted mb-3"></i>
        <p class="fs-5 text-muted">Kamu belum menambahkan istilah pada markah!</p>
    </div>

    <!-- Markah Terisi -->
    <div>
        <div class="term-card bg-white p-4 mb-3">
            <h3 class="fw-bold">IPS <small class="text-muted">/i-pe-es/</small></h3>
        </div>
        <div class="term-card bg-white p-4 mb-3">
            <h3 class="fw-bold">SIAP <small class="text-muted">/si-ap/</small></h3>
        </div>
        <div class="term-card bg-white p-4 mb-3">
            <h3 class="fw-bold">Ganeo <small class="text-muted">/ga-ne-o/</small></h3>
            <p class="mt-2">Ganeo atau Garuda Diponegoro melambangkan Diponegoro Muda menjunjung tinggi semangat pancasila yang bervisi berbeda-beda tetapi satu tetap satu dan berjuang untuk Indonesia.</p>
        </div>
    </div>
</div>
@endsection
