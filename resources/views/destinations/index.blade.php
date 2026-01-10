@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3 class="fw-bold">Data Destinasi</h3>
    <a href="{{ route('destinations.create') }}" class="btn btn-primary">
        + Tambah Destinasi
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead>
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
                <img src="{{ asset('images/'.$item->image) }}" width="100">
            </td>
            <td>
                <a href="{{ route('destinations.show',$item->id) }}"
                   class="btn btn-info btn-sm">View</a>

                <a href="{{ route('destinations.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('destinations.destroy',$item->id) }}"
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus data?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
