@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Glamping</h1>
        <a href="{{ route('glamping.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Detail Glamping -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Glamping</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="25%">Nama</th>
                    <td>{{ $glamping->name }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $glamping->description }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>Rp {{ number_format($glamping->price, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Kapasitas</th>
                    <td>{{ $glamping->capacity }} orang</td>
                </tr>
                <tr>
                    <th>Fasilitas</th>
                    <td>
                        @if ($glamping->facilities)
                            {{ is_array($glamping->facilities) ? implode(', ', $glamping->facilities) : $glamping->facilities }}
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Lokasi</th>
                    <td>{{ $glamping->location }}</td>
                </tr>
                <tr>
                    <th>Ketersediaan</th>
                    <td>
                        @if($glamping->is_availability)
                            <span class="badge bg-success text-white">Tersedia</span>
                        @else
                            <span class="badge bg-danger text-white">Penuh</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td>{{ number_format($glamping->rating, 1) }}/5</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        @if ($glamping->image)
                            <img src="{{ asset('storage/' . $glamping->image) }}" alt="Gambar Glamping" width="200" class="rounded shadow">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" alt="Gambar Default" width="200" class="rounded shadow">
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>{{ $glamping->created_at ? $glamping->created_at->format('d M Y H:i') : '-' }}</td>
                </tr>
                <tr>
                    <th>Terakhir Diperbarui</th>
                    <td>{{ $glamping->updated_at ? $glamping->updated_at->format('d M Y H:i') : '-' }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>
@endsection
