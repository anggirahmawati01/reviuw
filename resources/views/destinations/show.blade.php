@extends('layouts.app')

@section('content')
<div class="container">

    <!-- HEADER DESTINASI -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-3 mb-lg-0">
            <div class="position-relative">
                <img src="{{ asset('storage/' . $destination->image) }}"
                     class="img-fluid rounded-4 shadow w-100"
                     style="max-height:420px; object-fit:cover;">
            </div>
        </div>

        <div class="col-lg-6">
            <span class="badge bg-warning text-dark mb-2">
                {{ $destination->location }}
            </span>

            <h2 class="fw-bold mt-2">
                {{ $destination->name }}
            </h2>

            <p class="text-muted mt-3" style="line-height:1.7">
                {{ $destination->description }}
            </p>

            <a href="{{ route('destinations.index') }}"
               class="btn btn-outline-secondary btn-sm mt-2">
                ← Kembali ke Destinasi
            </a>
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
                        <div class="d-flex align-items-center mb-2">
                            <div class="bg-primary text-white rounded-circle d-flex
                                        align-items-center justify-content-center"
                                 style="width:38px; height:38px;">
                                {{ strtoupper(substr($comment->name, 0, 1)) }}
                            </div>

                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold">
                                    {{ $comment->name }}
                                </h6>
                                <small class="text-muted">
                                    Pengunjung
                                </small>
                            </div>
                        </div>

                        <p class="mb-0 text-muted">
                            {{ $comment->message }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="alert alert-light border text-muted">
                    Belum ada komentar untuk destinasi ini.
                </div>
            @endforelse

        </div>
    </div>

</div>
@endsection
