@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pesan Kontak</h1>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Card Detail -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Pesan</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="25%">ID</th>
                    <td>{{ $contact->id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $contact->phone }}</td>
                </tr>
                <tr>
                    <th>Pesan</th>
                    <td>{{ $contact->message }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dikirim</th>
                    <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>
@endsection
