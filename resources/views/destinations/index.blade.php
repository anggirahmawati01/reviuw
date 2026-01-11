@extends('layouts.app')

@section('content')
<div class="container">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Data Destinasi</h3>
            <small class="text-muted">Kelola data destinasi wisata NTB</small>
        </div>
        <a href="{{ route('destinations.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-lg"></i> Tambah Destinasi
        </a>
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- CARD TABLE -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            @if($destinations->count())
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Destinasi</th>
                            <th>Lokasi</th>
                            <th>Gambar</th>
                            <th class="text-center" width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($destinations as $item)
                        <tr>
                            <td class="fw-semibold">{{ $item->name }}</td>
                            <td class="text-muted">{{ $item->location }}</td>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}"
                                         width="80"
                                         height="60"
                                         class="rounded shadow-sm"
                                         style="object-fit: cover;">
                                @else
                                    <span class="badge bg-secondary">No Image</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('destinations.show', $item->id) }}"
                                   class="btn btn-outline-info btn-sm">
                                    View
                                </a>

                                <a href="{{ route('destinations.edit', $item->id) }}"
                                   class="btn btn-outline-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('destinations.destroy', $item->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data ini?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <!-- EMPTY STATE -->
                <div class="text-center py-5">
                    <h5 class="text-muted">Belum ada data destinasi</h5>
                    <p class="text-muted mb-3">
                        Silakan tambahkan destinasi wisata baru
                    </p>
                    <a href="{{ route('destinations.create') }}" class="btn btn-primary">
                        Tambah Destinasi
                    </a>
                </div>
            @endif

        </div>
    </div>

</div>
@endsection
