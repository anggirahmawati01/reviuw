@extends('layouts.app')

@section('content')
<div class="container my-5">

    {{-- PANTAI --}}
    @if($slug === 'pantai')
        <h2 class="fw-bold mb-3 text-center">Wisata Pantai di NTB</h2>

        <img src="{{ asset('images/2.jpg') }}" 
             class="img-fluid rounded shadow mb-4 d-block mx-auto"
             style="max-height:400px; object-fit:cover;">

        <p class="text-muted text-center">
            NTB memiliki pantai-pantai eksotis dengan pasir putih, air laut jernih,
            serta panorama matahari terbenam yang memukau.
            Pantai di Lombok dan Sumbawa menjadi destinasi favorit wisatawan lokal
            maupun mancanegara.
        </p>

    {{-- GUNUNG --}}
    @elseif($slug === 'gunung')
        <h2 class="fw-bold mb-3 text-center">Wisata Gunung di NTB</h2>

        <img src="{{ asset('images/3.jpg') }}" 
             class="img-fluid rounded shadow mb-4 d-block mx-auto"
             style="max-height:400px; object-fit:cover;">

        <p class="text-muted text-center">
            Gunung di NTB terkenal dengan jalur pendakian yang menantang
            dan keindahan alam yang luar biasa.
            Gunung Rinjani merupakan ikon wisata alam dan pendakian
            paling populer di Nusa Tenggara Barat.
        </p>

    {{-- AIR TERJUN --}}
    @elseif($slug === 'air-terjun')
        <h2 class="fw-bold mb-3 text-center">Wisata Air Terjun di NTB</h2>

        <img src="{{ asset('images/1.jpg') }}" 
             class="img-fluid rounded shadow mb-4 d-block mx-auto"
             style="max-height:400px; object-fit:cover;">

        <p class="text-muted text-center">
            Air terjun di NTB menawarkan suasana sejuk dan alami,
            tersembunyi di tengah hutan dengan air yang jernih
            serta pemandangan yang menenangkan.
            Cocok untuk wisata alam dan relaksasi.
        </p>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('destinations.index') }}" class="btn btn-primary">
            Lihat Semua Destinasi
        </a>
        <a href="{{ route('home') }}" class="btn btn-secondary ms-2">
            Kembali ke Home
        </a>
    </div>

</div>
@endsection
