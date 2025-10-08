@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Glamping</h1>
        <a href="{{ route('glamping.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Card Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Glamping</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('glamping.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Nama Glamping --}}
                <div class="form-group mb-3">
                    <label for="name">Nama Glamping</label>
                    <input type="text" name="name" id="name" 
                           class="form-control @error('name') is-invalid @enderror" 
                           value="{{ old('name') }}" placeholder="Masukkan nama glamping">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Deskripsi --}}
                <div class="form-group mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" 
                              class="form-control @error('description') is-invalid @enderror" 
                              placeholder="Masukkan deskripsi glamping">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Harga --}}
                <div class="form-group mb-3">
                    <label for="price">Harga (Rp)</label>
                    <input type="number" name="price" id="price" 
                           class="form-control @error('price') is-invalid @enderror" 
                           value="{{ old('price') }}" placeholder="Masukkan harga">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Kapasitas --}}
                <div class="form-group mb-3">
                    <label for="capacity">Kapasitas (orang)</label>
                    <input type="number" name="capacity" id="capacity" 
                           class="form-control @error('capacity') is-invalid @enderror" 
                           value="{{ old('capacity') }}" placeholder="Masukkan kapasitas">
                    @error('capacity')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Lokasi --}}
                <div class="form-group mb-3">
                    <label for="location">Lokasi</label>
                    <input type="text" name="location" id="location" 
                           class="form-control @error('location') is-invalid @enderror" 
                           value="{{ old('location') }}" placeholder="Masukkan lokasi glamping">
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Fasilitas --}}
                <div class="form-group mb-3">
                    <label for="facilities">Fasilitas</label>
                    <textarea name="facilities" id="facilities" rows="2"
                              class="form-control @error('facilities') is-invalid @enderror"
                              placeholder="Pisahkan dengan koma, contoh: Wifi, Kolam Renang, BBQ">{{ old('facilities') }}</textarea>
                    @error('facilities')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Rating --}}
                <div class="form-group mb-3">
                    <label for="rating">Rating (0 - 5)</label>
                    <input type="number" step="0.1" name="rating" id="rating"
                           class="form-control @error('rating') is-invalid @enderror"
                           value="{{ old('rating', 0) }}" placeholder="Masukkan rating">
                    @error('rating')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Gambar --}}
                <div class="form-group mb-3">
                    <label for="image">Upload Gambar</label>
                    <input type="file" name="image" id="image"
                           class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Ketersediaan --}}
                <div class="form-group mb-3">
                    <label for="is_availability">Ketersediaan</label>
                    <select name="is_availability" id="is_availability" class="form-control">
                        <option value="1" {{ old('is_availability') == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ old('is_availability') == 0 ? 'selected' : '' }}>Penuh</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('glamping.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

</div>
@endsection
