@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="fw-bold mb-4">Edit Destinasi</h3>

    <div class="card shadow-sm rounded-4 p-4">

        <form action="{{ route('destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Destinasi -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Destinasi</label>
                <input type="text" name="name" class="form-control" 
                       value="{{ old('name', $destination->name) }}" required>
            </div>

            <!-- Lokasi -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Lokasi</label>
                <input type="text" name="location" class="form-control" 
                       value="{{ old('location', $destination->location) }}" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $destination->description) }}</textarea>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Ganti Gambar Destinasi</label>
                <input type="file" name="image" class="form-control">

                <!-- Preview gambar lama -->
                @if($destination->image)
                    <div class="mt-2">
                        <small>Gambar saat ini:</small>
                        <img src="{{ asset('storage/' . $destination->image) }}" 
                             alt="Preview Gambar" 
                             class="img-fluid rounded mt-1" 
                             style="max-height:150px;">
                    </div>
                @endif
            </div>

            <!-- TOMBOL -->
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-primary shadow-sm">
                    Update Destinasi
                </button>
                <a href="{{ route('destinations.index') }}" class="btn btn-outline-secondary shadow-sm">
                    Kembali
                </a>
            </div>
        </form>

    </div>
</div>
@endsection
