@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Kategori</h1>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Detail Kategori -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Kategori</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="25%">ID</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th>Nama Kategori</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $category->created_at ? $category->created_at->format('d M Y H:i') : '-' }}</td>
                </tr>
                <tr>
                    <th>Terakhir Diperbarui</th>
                    <td>{{ $category->updated_at ? $category->updated_at->format('d M Y H:i') : '-' }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Daftar Aktivitas yang Terkait -->
    @if($category->activities && $category->activities->count() > 0)
        <div class="card shadow mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Aktivitas dalam Kategori Ini</h6>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($category->activities as $activity)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $activity->name }}
                            <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info btn-sm text-white">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @else
        <div class="alert alert-info mt-4">
            Tidak ada aktivitas yang terkait dengan kategori ini.
        </div>
    @endif

</div>
@endsection
