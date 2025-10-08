@extends('layouts.app')

@section('content')

<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Detail Testimoni</h2>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center space-x-4">
            @if ($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}"
                     class="w-24 h-24 rounded-full object-cover">
            @else
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-gray-500">
                    No Image
                </div>
            @endif

            <div>
                <h3 class="text-xl font-semibold">{{ $testimonial->name }}</h3>
                <p class="text-yellow-500">⭐ {{ $testimonial->rating }}</p>
            </div>
        </div>

        <p class="mt-4 text-gray-700">{{ $testimonial->message }}</p>

        <div class="mt-4 text-sm text-gray-500">
            <strong>Tanggal:</strong> {{ $testimonial->created_at->format('d M Y') }}
        </div>

        <a href="{{ route('testimonial.index') }}" 
           class="inline-block mt-6 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
           ← Kembali ke daftar
        </a>
    </div>
</div>
@endsection
