@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Glamping</h1>
        <a href="{{ route('glamping.create') }}" class="btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Glamping
        </a>
    </div>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel Data Glamping -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Glamping</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Kapasitas</th>
                            <th>Lokasi</th>
                            <th>Ketersediaan</th>
                            <th>Rating</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($glampings as $index => $glamping)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $glamping->name }}</td>
                                <td>{{ Str::limit($glamping->description, 50, '...') }}</td>
                                <td>Rp {{ number_format($glamping->price, 0, ',', '.') }}</td>
                                <td>{{ $glamping->capacity }} orang</td>
                                <td>{{ $glamping->location }}</td>
                                <td class="text-center">
                                    @if($glamping->is_availability)
                                        <span class="badge bg-success text-white">Tersedia</span>
                                    @else
                                        <span class="badge bg-danger text-white">Penuh</span>
                                    @endif
                                </td>
                                <td class="text-center">{{ number_format($glamping->rating, 1) }}</td>
                                <td class="text-center">
                                    @if ($glamping->image)
                                        <img src="{{ asset('storage/' . $glamping->image) }}" width="80" alt="Gambar">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('glamping.show', $glamping->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('glamping.edit', $glamping->id) }}" class="btn btn-warning btn-sm text-white">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('glamping.destroy', $glamping->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center text-muted">Belum ada data glamping.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
