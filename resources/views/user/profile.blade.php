<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - Buni Hayu</title>

    {{-- ✅ Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- ✅ Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- ✅ Custom Style --}}
    <style>
        body {
            background: linear-gradient(135deg, #c2e9fb 0%, #a1c4fd 100%);
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border-radius: 20px;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            font-weight: 600;
        }
        .btn-success {
            background: linear-gradient(135deg, #28a745, #56d364);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-success:hover {
            transform: scale(1.03);
            background: linear-gradient(135deg, #20c997, #38ef7d);
        }
        img.rounded-circle {
            border: 3px solid #f8f9fa;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.15);
        }
        h4 {
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0">
                    <div class="card-header text-white text-center py-3">
                        <h4 class="mb-0"><i class="bi bi-person-circle me-2"></i>Edit Profil</h4>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Nama --}}
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name" 
                                    value="{{ old('name', $user->name) }}"
                                    placeholder="Masukkan nama Anda">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Foto Profil --}}
                            <div class="mb-3">
                                <label for="image" class="form-label fw-semibold">Foto Profil</label>
                                <div class="text-center mb-3">
                                    @if($user->image)
                                        <img src="{{ asset('storage/' . $user->image) }}" 
                                             alt="Foto Profil" 
                                             class="rounded-circle shadow-sm" 
                                             width="120" height="120"
                                             style="object-fit: cover;">
                                    @else
                                        <img src="{{ asset('images/default-avatar.png') }}" 
                                             alt="Default Avatar" 
                                             class="rounded-circle shadow-sm" 
                                             width="120" height="120"
                                             style="object-fit: cover;">
                                    @endif
                                </div>
                                <input 
                                    type="file" 
                                    name="image" 
                                    class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tombol Simpan --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg rounded-pill fw-semibold">
                                    <i class="bi bi-check-circle me-1"></i> Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ✅ Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
