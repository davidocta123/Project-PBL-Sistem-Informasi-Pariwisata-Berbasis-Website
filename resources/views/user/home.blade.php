<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home - User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 30px;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        img {
            width: 300px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h2>🌿 Daftar Glamping</h2>

    @foreach($produk as $item)
        <div class="card">
            <h3>{{ $item->name }}</h3>
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
            <p><strong>Harga:</strong> Rp{{ number_format($item->price, 0, ',', '.') }}</p>
            <p><strong>Deskripsi:</strong> {{ $item->description }}</p>
            <p><strong>Fasilitas:</strong> 
                {{ is_array($item->facilities) ? implode(', ', $item->facilities) : $item->facilities }}
            </p>
            <p><strong>Rating:</strong> ⭐{{ $item->rating }}</p>
            <p><strong>Lokasi:</strong> {{ $item->location }}</p>
            <p><strong>Status:</strong> {{ $item->is_availability ? 'Tersedia' : 'Tidak Tersedia' }}</p>
        </div>
    @endforeach
</body>
</html>
