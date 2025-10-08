@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Aktivitas</h1>
        <a href="{{ route('activities.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Form Tambah Aktivitas -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Nama Aktivitas -->
                <div class="form-group">
                    <label for="name">Nama Aktivitas</label>
                    <input type="text" name="name" id="name" 
                           class="form-control" placeholder="Masukkan nama aktivitas" required>
                </div>

                <!-- Deskripsi -->
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" 
                              class="form-control" placeholder="Tuliskan deskripsi aktivitas..." required></textarea>
                </div>

                <!-- Kategori -->
                <div class="form-group">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Lokasi -->
                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" name="location" id="location" 
                           class="form-control" placeholder="Masukkan lokasi aktivitas">
                </div>

                <!-- Fasilitas -->
                <div class="form-group">
                    <label for="facilities">Fasilitas</label>
                    <input type="text" name="facilities" id="facilities" 
                           class="form-control" placeholder="Pisahkan dengan koma, contoh: Wifi, Parkir, Toilet">
                </div>

                <!-- Upload Gambar -->
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>

</div>
@endsection

