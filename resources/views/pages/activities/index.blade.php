@extends('layouts.app') {{-- sesuaikan dengan layout utama kamu --}}

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Aktivitas</h1>
        <a href="{{ route('activities.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Aktivitas
        </a>
    </div>

    <!-- Tabel Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Aktivitas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Aktivitas</th>
                            <th>Kategori</th>
                            <th>Lokasi</th>
                            <th>Fasilitas</th>
                            <th>Description</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($activities as $index => $activity)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $activity->name }}</td>
                                <td>{{ $activity->category->name ?? '-' }}</td>
                                <td>{{ $activity->location ?? '-' }}</td>
                                <td>{{ $activity->description}}</td>

                                <td>
                                    @if(is_array($activity->facilities))
                                        {{ implode(', ', $activity->facilities) }}
                                    @else
                                        {{ $activity->facilities }}
                                    @endif
                                </td>
                                <td>
            @if ($activity->image)
                <img src="{{ asset('storage/' . $activity->image) }}" width="80" alt="Gambar">
            @else
                <span class="text-muted">Tidak ada</span>
            @endif
        </td>

                                <td class="text-center">
                                    <!-- Tombol Lihat -->
                                    <a href="{{ route('activities.show', $activity->id) }}" 
                                       class="btn btn-info btn-sm" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <!-- Tombol Edit -->
                                    <a href="{{ route('activities.edit', $activity->id) }}" 
                                       class="btn btn-warning btn-sm" title="Edit Data">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('activities.destroy', $activity->id) }}" 
                                          method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Yakin ingin menghapus aktivitas ini?')" 
                                                title="Hapus Data">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada data aktivitas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
