@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row g-4">

        @foreach ($destinations as $destination)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm border-0">

                <img src="{{ asset('images/' . $destination->image) }}"
                     class="card-img-top"
                     height="180"
                     style="object-fit: cover;">

                <div class="card-body">
                    <h6 class="fw-bold mb-1">{{ $destination->name }}</h6>
                    <small class="text-warning">{{ $destination->location }}</small>

                    <p class="small text-muted mt-2">
                        {{ Str::limit($destination->description, 70) }}
                    </p>
                </div>

                <!-- BUTTON HORIZONTAL -->
                <div class="card-footer bg-white border-0">
                    <div class="d-flex gap-2">
                        <a href="{{ route('destinations.show', $destination->id) }}"
                           class="btn btn-outline-primary btn-sm w-100">
                            View
                        </a>

                        <a href="{{ route('destinations.edit', $destination->id) }}"
                           class="btn btn-outline-warning btn-sm w-100">
                            Edit
                        </a>

                        <form action="{{ route('destinations.destroy', $destination->id) }}"
                              method="POST" class="w-100">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm w-100"
                                    onclick="return confirm('Yakin hapus destinasi ini?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
