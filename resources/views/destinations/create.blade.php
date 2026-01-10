@extends('layouts.app')

@section('content')
<h3 class="fw-bold mb-4">Tambah Destinasi</h3>

<form action="{{ route('destinations.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Destinasi</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Lokasi</label>
        <input type="text" name="location" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label>Nama File Gambar</label>
        <input type="text" name="image" class="form-control" placeholder="contoh.jpg" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
