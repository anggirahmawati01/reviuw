@extends('layouts.app')

@section('content')
<h3 class="fw-bold mb-4">Tambah Destinasi</h3>

<form action="{{ route('destinations.store') }}" 
      method="POST" 
      enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Destinasi</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Lokasi</label>
        <input type="text" name="location" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Gambar Destinasi</label>
        <input type="file" 
               name="image" 
               class="form-control" 
               accept="image/*"
               onchange="previewImage(event)"
               required>

        <img id="preview" class="mt-3 rounded" width="200" style="display:none;">
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Kembali</a>
</form>

<script>
function previewImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.style.display = 'block';
}
</script>
@endsection
