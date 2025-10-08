@extends('layouts.auth')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #4e73df, #224abe);">
    <div class="card shadow-lg border-0 rounded-4 p-4" style="width: 420px; background: #ffffffee;">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-primary mb-2">BUNI HAYU</h3>
            <h5 class="text-secondary">Buat Akun Baru</h5>
        </div>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama -->
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                       class="form-control rounded-pill @error('name') is-invalid @enderror" placeholder="Masukkan nama anda">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                       class="form-control rounded-pill @error('email') is-invalid @enderror" placeholder="Masukkan email anda">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" id="password" name="password" required
                       class="form-control rounded-pill @error('password') is-invalid @enderror" placeholder="Masukkan password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                       class="form-control rounded-pill" placeholder="Ulangi password anda">
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill shadow-sm py-2 fw-semibold">
                <i class="fas fa-user-plus me-1"></i> Daftar
            </button>
        </form>

        <div class="text-center mt-4">
            <p class="text-muted mb-0">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">Login Sekarang</a>
            </p>
        </div>
    </div>
</div>
@endsection
