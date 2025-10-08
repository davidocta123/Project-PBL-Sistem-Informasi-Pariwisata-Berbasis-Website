@extends('layouts.auth')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #4e73df, #224abe);">
    <div class="card shadow-lg border-0 rounded-4 p-4" style="width: 400px; background: #ffffffee;">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-primary mb-2">BUNI HAYU</h3>
            <h5 class="text-secondary">Login ke Akun Anda</h5>
        </div>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                       class="form-control rounded-pill @error('email') is-invalid @enderror" placeholder="Masukkan email anda">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" id="password" name="password" required
                       class="form-control rounded-pill @error('password') is-invalid @enderror" placeholder="Masukkan password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="text-muted small">Ingat saya</label>
                </div>
                <a href="#" class="small text-primary text-decoration-none">Lupa Password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill shadow-sm py-2 fw-semibold">
                <i class="fas fa-sign-in-alt me-1"></i> Login
            </button>
        </form>

        <div class="text-center mt-4">
            <p class="text-muted mb-0">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-primary fw-semibold text-decoration-none">Daftar Sekarang</a>
            </p>
        </div>
    </div>
</div>
@endsection
