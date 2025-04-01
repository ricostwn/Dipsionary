@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-primary">DIPSIONARY</h1>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">NIM/NIP/e-mail official Undip</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control">
                        </div>
                        <button class="btn btn-primary w-100">Masuk</button>
                        <p class="text-center mt-3 mb-0">Masuk sebagai pengunjung</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
