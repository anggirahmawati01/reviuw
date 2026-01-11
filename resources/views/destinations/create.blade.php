@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="fw-bold mb-4">Tambah Destinasi</h3>

    <div class="card shadow-sm rounded-4 p-4">

        <form action="{{ route('destinations.store') }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf

            <!-- Nama Destinasi -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Destinasi</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <!-- Lokasi -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Lokasi</label>
                <input type="text" name="location" class="form-control" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" required></textarea>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Gambar Destinasi</label>
                <input type="file" 
                       name="image" 
                       class="form-control" 
                       accept="image/*"
                       onchange="previewImage(event)"
                       required>

                <div class="mt-3">
                    <img id="preview" class="img-fluid rounded shadow-sm" 
                         style="max-height:200px; display:none;">
                </div>
            </div>

            <!-- TOMBOL -->
            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-primary shadow-sm">
                    Simpan Destinasi
                </button>
                <a href="{{ route('destinations.index') }}" class="btn btn-outline-secondary shadow-sm">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

<!-- Preview Gambar -->
<script>
function previewImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.style.display = 'block';
}
</script>
@endsection
