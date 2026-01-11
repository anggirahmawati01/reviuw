@extends('layouts.app')

@section('content')
<div class="container">

    <h4 class="fw-bold mb-4">Daftar Destinasi</h4>

    <div class="row g-4">
        @foreach ($destinations as $destination)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 border-0 shadow-sm">

                <img src="{{ asset('storage/' . $destination->image) }}"
                     class="card-img-top"
                     style="height:180px">

                <div class="card-body">
                    <h6 class="fw-bold mb-1">{{ $destination->name }}</h6>
                    <small class="text-warning">{{ $destination->location }}</small>

                    <p class="small text-muted mt-2">
                        {{ Str::limit($destination->description, 70) }}
                    </p>
                </div>

                <div class="card-footer bg-white border-0 pt-0">
                    <div class="d-flex gap-2">
                        <a href="{{ route('destinations.show', $destination->id) }}"
                           class="btn btn-outline-primary btn-sm w-100">View</a>

                        <a href="{{ route('destinations.edit', $destination->id) }}"
                           class="btn btn-outline-warning btn-sm w-100">Edit</a>

                        <form action="{{ route('destinations.destroy', $destination->id) }}"
                              method="POST" class="w-100">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm w-100"
                                    onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </button>
                        </form>
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
@endsection
