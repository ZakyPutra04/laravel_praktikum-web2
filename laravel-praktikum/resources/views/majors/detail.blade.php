@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Detail Jurusan</h1>

    <div class="bg-white p-6 rounded shadow">
        <div class="mb-4">
            <h2 class="text-lg font-semibold">Nama Jurusan:</h2>
            <p class="text-gray-800">{{ $major->nama_jurusan }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-semibold">Deskripsi:</h2>
            <p class="text-gray-800">{{ $major->deskripsi }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('majors.index') }}" class="text-blue-600 hover:underline">← Kembali ke daftar jurusan</a>
    </div>
</div>
@endsection
