@extends('layouts.app')

@section('content')
<h3 class="fw-bold mb-4">Edit Destinasi</h3>

<form action="{{ route('destinations.update',$destination->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Destinasi</label>
        <input type="text" name="name" class="form-control"
               value="{{ $destination->name }}" required>
    </div>

    <div class="mb-3">
        <label>Lokasi</label>
        <input type="text" name="location" class="form-control"
               value="{{ $destination->location }}" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" rows="4" required>{{ $destination->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Nama File Gambar</label>
        <input type="text" name="image" class="form-control"
               value="{{ $destination->image }}" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
