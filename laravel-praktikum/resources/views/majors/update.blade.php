@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Edit Jurusan</h1>

    <form action="{{ route('majors.update', $major->id) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" value="{{ old('nama_jurusan', $major->nama_jurusan) }}" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full p-2 border rounded">{{ old('deskripsi', $major->deskripsi) }}</textarea>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('majors.index') }}" class="text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection
