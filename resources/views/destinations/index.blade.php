@extends('layouts.app')

@section('content')
<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h4 class="fw-bold mb-0">Daftar Destinasi</h4>
    </div>

    <!-- EMPTY STATE -->
    @if($destinations->count() === 0)
        <div class="alert alert-light border text-center text-muted">
            Belum ada destinasi yang ditambahkan.
        </div>
    @endif

    <!-- DAFTAR DESTINASI -->
    <div class="row g-4">
        @foreach ($destinations as $destination)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 border-0 shadow-sm rounded-4">

                <!-- IMAGE -->
                <img src="{{ asset('storage/' . $destination->image) }}"
                     class="card-img-top rounded-top-4"
                     style="height:200px; object-fit:cover;">

                <!-- BODY -->
                <div class="card-body">
                    <h6 class="fw-bold mb-1">{{ $destination->name }}</h6>

                    <span class="badge bg-warning text-dark mb-2">
                        {{ $destination->location }}
                    </span>

                    <p class="small text-muted mt-2 mb-0">
                        {{ Str::limit($destination->description, 70) }}
                    </p>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="card-footer bg-white border-0 pt-3">
                    <div class="d-flex gap-2">

                        <!-- VIEW (SELALU ADA) -->
                        <a href="{{ route('destinations.show', $destination->id) }}"
                           class="btn btn-outline-primary btn-sm flex-grow-1 d-flex align-items-center justify-content-center gap-1">
                            <i class="bi bi-eye"></i> View
                        </a>

                        <!-- MANAGE MODE -->
                        @if(request()->get('manage') == 1)

                            <a href="{{ route('destinations.edit', $destination->id) }}"
                               class="btn btn-outline-warning btn-sm flex-grow-1 d-flex align-items-center justify-content-center gap-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="{{ route('destinations.destroy', $destination->id) }}"
                                  method="POST" class="flex-grow-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-outline-danger btn-sm w-100 d-flex align-items-center justify-content-center gap-1"
                                        onclick="return confirm('Yakin hapus destinasi ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>

                        @endif

                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <!-- PAGINATION -->
    <div class="mt-5 d-flex justify-content-center">
        {{ $destinations->links('vendor.pagination.custom') }}
    </div>

</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@endsection
