@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">

            <img src="{{ asset('images/' . $destination->image) }}"
                 class="card-img-top"
                 height="400"
                 style="object-fit: cover">

            <div class="card-body">
                <h3 class="fw-bold">{{ $destination->name }}</h3>
                <p class="text-warning fw-semibold">{{ $destination->location }}</p>

                <p class="mt-3">{{ $destination->description }}</p>

                <a href="{{ route('destinations.index') }}" class="btn btn-secondary">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
