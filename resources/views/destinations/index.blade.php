@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Data Destinasi</h3>
    <a href="{{ route('destinations.create') }}" class="btn btn-primary">
        + Tambah Destinasii
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($destinations->count())
<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Gambar</th>
            <th width="220">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($destinations as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->location }}</td>
            <td>
                @if($item->image)
                    <img src="{{ asset('storage/'.$item->image) }}"
                         width="100"
                         class="rounded shadow-sm">
                @else
                    <span class="text-muted">Tidak ada gambar</span>
                @endif
            </td>
            <td>
                <a href="{{ route('destinations.show', $item->id) }}"
                   class="btn btn-info btn-sm mb-1">View</a>

                <a href="{{ route('destinations.edit', $item->id) }}"
                   class="btn btn-warning btn-sm mb-1">Edit</a>

                <form action="{{ route('destinations.destroy', $item->id) }}"
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data ini?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <div class="alert alert-info">
        Belum ada data destinasi.
    </div>
@endif
@endsection
