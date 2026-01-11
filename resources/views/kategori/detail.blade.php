@extends('layouts.app')

@section('content')
@php
    use Illuminate\Support\Str;

    /**
     * NORMALISASI SLUG (AMAN)
     * rumah_adat, Rumah Adat, rumah-adat → rumah-adat
     */
    $slug = Str::slug($slug);

    /**
     * DATA KATEGORI (FINAL)
     */
    $categories = [
        'pantai' => [
            'title' => 'Wisata Pantai di NTB',
            'image' => 'images/2.jpg',
            'desc'  => 'NTB memiliki pantai-pantai eksotis dengan pasir putih, air laut jernih,
                        serta panorama matahari terbenam yang memukau. Pantai di Lombok dan
                        Sumbawa menjadi destinasi favorit wisatawan.',
            'icon'  => '🌊',
            'nuansa'=> 'Bahari & Santai',
        ],
        'gunung' => [
            'title' => 'Wisata Gunung di NTB',
            'image' => 'images/3.jpg',
            'desc'  => 'Gunung di NTB terkenal dengan jalur pendakian menantang dan panorama
                        alam luar biasa. Gunung Rinjani menjadi ikon wisata alam NTB.',
            'icon'  => '⛰️',
            'nuansa'=> 'Petualangan & Alam',
        ],
        'air-terjun' => [
            'title' => 'Wisata Air Terjun di NTB',
            'image' => 'images/1.jpg',
            'desc'  => 'Air terjun di NTB menawarkan suasana sejuk dan alami, tersembunyi
                        di tengah hutan dengan air jernih serta pemandangan menenangkan.',
            'icon'  => '💧',
            'nuansa'=> 'Sejuk & Alami',
        ],
        'rumah-adat' => [
            'title' => 'Rumah Adat NTB',
            'image' => 'images/5.jpg',
            'desc'  => 'Rumah adat merupakan warisan budaya yang mencerminkan filosofi hidup,
                        adat istiadat, serta nilai luhur masyarakat NTB.',
            'icon'  => '🛖',
            'nuansa'=> 'Budaya & Tradisi',
        ],
        'wisata-buatan' => [
            'title' => 'Wisata Buatan di NTB',
            'image' => 'images/4.jpg',
            'desc'  => 'Wisata buatan adalah destinasi yang dirancang untuk rekreasi dan hiburan,
                        seperti taman wisata, wahana permainan, dan spot foto modern.',
            'icon'  => '🎡',
            'nuansa'=> 'Modern & Rekreasi',
        ],
    ];
@endphp

{{-- ===================== VALIDASI KATEGORI ===================== --}}
@if (!array_key_exists($slug, $categories))

<div class="container my-5">
    <div class="alert alert-danger text-center shadow rounded-4 py-4">
        <h4 class="fw-bold mb-2">Kategori Tidak Ditemukan</h4>
        <p class="text-muted mb-3">
            Kategori wisata yang Anda cari tidak tersedia.
        </p>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Kembali ke Home
        </a>
    </div>
</div>

@else
@php $cat = $categories[$slug]; @endphp

{{-- ===================== HERO SECTION ===================== --}}
<div class="position-relative">
    <img src="{{ asset($cat['image']) }}"
         class="w-100"
         style="height:65vh; object-fit:cover;">

    <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-4"
         style="background:rgba(0,0,0,.65); padding:45px; border-radius:22px; max-width:720px;">
        <h1 class="fw-bold display-5 mb-2">
            {{ $cat['icon'] }} {{ $cat['title'] }}
        </h1>
        <p class="lead mb-0">{{ $cat['nuansa'] }}</p>
    </div>
</div>

{{-- ===================== DETAIL SECTION ===================== --}}
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-5 text-center">

                    <p class="fs-5 text-muted mb-4" style="line-height:1.8">
                        {{ $cat['desc'] }}
                    </p>

                    <div class="row text-center mt-4">
                        <div class="col-md-4 mb-3">
                            <h6 class="fw-bold">📍 Lokasi</h6>
                            <p class="text-muted mb-0">Nusa Tenggara Barat</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <h6 class="fw-bold">🌿 Nuansa</h6>
                            <p class="text-muted mb-0">{{ $cat['nuansa'] }}</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <h6 class="fw-bold">⭐ Daya Tarik</h6>
                            <p class="text-muted mb-0">Keunikan & Panorama</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ route('destinations.index') }}"
                           class="btn btn-primary btn-lg px-4 shadow">
                            Lihat Semua Destinasi
                        </a>

                        <a href="{{ route('home') }}"
                           class="btn btn-outline-secondary btn-lg px-4">
                            Kembali ke Home
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endif
@endsection
