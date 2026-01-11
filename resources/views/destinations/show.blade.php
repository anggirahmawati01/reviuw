@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row g-4">

        @foreach ($destinations as $destination)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm">

                <img src="{{ asset('images/' . $destination->image) }}"
                     class="card-img-top"
                     height="200"
                     style="object-fit: cover;">

                <div class="card-body">
                    <h5 class="fw-bold">{{ $destination->name }}</h5>
                    <p class="text-warning mb-1">{{ $destination->location }}</p>

                    <p class="small text-muted">
                        {{ Str::limit($destination->description, 80) }}
                    </p>
                </div>

                <div class="card-footer bg-white border-0">
                    <a href="{{ route('destinations.show', $destination->id) }}"
                       class="btn btn-primary btn-sm w-100">
                        Detail
                    </a>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
