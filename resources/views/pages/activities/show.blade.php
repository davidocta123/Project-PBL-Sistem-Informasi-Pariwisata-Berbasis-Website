@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Aktivitas</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h4>{{ $activity->name }}</h4>
            <p><strong>Deskripsi:</strong> {{ $activity->description }}</p>
            <p><strong>Kategori:</strong> {{ $activity->category->name ?? 'Tidak ada kategori' }}</p>
            <p><strong>Lokasi:</strong> {{ $activity->location }}</p>
            <p><strong>Fasilitas:</strong>
                @if(is_array($activity->facilities))
                    {{ implode(', ', $activity->facilities) }}
                @else
                    {{ $activity->facilities }}
                @endif
            </p>
            
            <p><strong>Gambar:</strong></p>
            @if ($activity->image)
                <img src="{{ asset('storage/' . $activity->image) }}" alt="Gambar" width="300" class="rounded">
            @else
                <span class="text-muted">Tidak ada gambar</span>
            @endif

            <div class="mt-4">
                <a href="{{ route('activities.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
