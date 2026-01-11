@extends('layouts.app')

@section('content')
<div class="container">

    <!-- HEADER DESTINASI -->
    <div class="row align-items-center mb-5">

        <!-- IMAGE -->
        <div class="col-lg-6 mb-3 mb-lg-0">
            <img src="{{ asset('storage/' . $destination->image) }}"
                 class="img-fluid rounded-4 shadow w-100"
                 style="max-height:420px; object-fit:cover;">
        </div>

        <!-- INFO -->
        <div class="col-lg-6">

            <!-- ACTION BUTTON -->
            <div class="d-flex justify-content-end gap-2 mb-3">
                <a href="{{ route('destinations.create') }}"
                   class="btn btn-primary btn-sm">
                    + Tambah Destinasi
                </a>

                <a href="{{ route('destinations.index') }}"
                   class="btn btn-outline-secondary btn-sm">
                    ← Kembali
                </a>
            </div>

            <span class="badge bg-warning text-dark mb-2">
                {{ $destination->location }}
            </span>

            <h2 class="fw-bold mt-2">
                {{ $destination->name }}
            </h2>

            <p class="text-muted mt-3" style="line-height:1.7">
                {{ $destination->description }}
            </p>

        </div>
    </div>

    <!-- KOMENTAR -->
    <div class="row">
        <div class="col-lg-8">

            <h5 class="fw-bold mb-4">
                💬 Komentar Pengunjung
            </h5>

            @forelse ($destination->comments as $comment)
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">
                            {{ $comment->name }}
                        </h6>
                        <p class="mb-0 text-muted">
                            {{ $comment->message }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="alert alert-light border text-muted">
                    Belum ada komentar.
                </div>
            @endforelse

        </div>
    </div>

</div>
@endsection
