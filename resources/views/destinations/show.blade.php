@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row g-4">
        @foreach ($destinations as $destination)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm border-0">

                <!-- IMAGE -->
                <img src="{{ asset('storage/' . $destination->image) }}"
                     class="card-img-top"
                     style="height: 180px; object-fit: cover;">

                <!-- BODY -->
                <div class="card-body">
                    <h6 class="fw-bold mb-1">{{ $destination->name }}</h6>
                    <small class="text-warning d-block">
                        {{ $destination->location }}
                    </small>

                    <p class="small text-muted mt-2 mb-0">
                        {{ Str::limit($destination->description, 70) }}
                    </p>
                </div>

                <!-- ACTION BUTTONS (HORIZONTAL) -->
                <div class="card-footer bg-white border-0 pt-0">
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
                            <button type="submit"
                                    class="btn btn-outline-danger btn-sm w-100"
                                    onclick="return confirm('Yakin hapus destinasi ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    {{-- OPTIONAL: Pagination agar tetap 4 × 2 --}}
    {{-- <div class="mt-4 d-flex justify-content-center">
        {{ $destinations->links() }}
    </div> --}}

</div>
@endsection
