@extends('layouts.app')

@section('title', 'Riwayat Pencarian')

@section('content')
<div class="container">
    <h1 class="mb-4">Riwayat</h1>

    <!-- Riwayat Kosong -->
    <div class="text-center py-5 bg-light rounded">
        <i class="fas fa-inbox fa-4x text-muted mb-3"></i>
        <p class="fs-5 text-muted">Kamu belum melakukan pencarian!</p>
    </div>

    <!-- Riwayat Terisi -->
    <div>
        <h2 class="mt-5 mb-3">Hari ini</h2>
        <div class="term-card bg-white p-4 mb-3">
            <h3 class="fw-bold">Dipyo <small class="text-muted">/dip-yo/</small></h3>
        </div>

        <h2 class="mt-5 mb-3">Kemarin</h2>
        <div class="term-card bg-white p-4 mb-3">
            <h3 class="fw-bold">IPS <small class="text-muted">/i-pe-es/</small></h3>
            <p class="mt-2">Tingkat keberhasilan seorang mahasiswa dalam suatu program semester. IP diukur dari jumlah nilai kredit mata kuliah yang diambil, dikalikan dengan bobot masing-masing mata kuliah, dibagi dengan jumlah nilai kredit mata kuliah.</p>
        </div>
    </div>
</div>
@endsection
