@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Aktivitas</h2>

    <form action="{{ route('activities.update', $activity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Aktivitas</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $activity->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $activity->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $activity->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" name="location" class="form-control" value="{{ old('location', $activity->location) }}">
        </div>

        <div class="mb-3">
            <label for="facilities" class="form-label">Fasilitas (pisahkan dengan koma)</label>
            <input type="text" name="facilities" class="form-control"
                value="{{ is_array($activity->facilities) ? implode(',', $activity->facilities) : $activity->facilities }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label><br>
            @if ($activity->image)
                <img src="{{ asset('storage/' . $activity->image) }}" alt="Gambar" width="150" class="mb-2 rounded">
            @endif
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
