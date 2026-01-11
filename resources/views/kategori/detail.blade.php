@extends('layouts.app')

@section('content')

@php
    /**
     * NORMALISASI SLUG
     * contoh:
     * rumah_adat  -> rumah-adat
     * wisata_buatan -> wisata-buatan
     */
    $slug = strtolower(str_replace('_', '-', $slug));

    $data = [
        'pantai' => [
            'title' => 'Wisata Pantai di NTB',
            'image' => 'images/2.jpg',
            'desc'  => 'NTB memiliki pantai-pantai eksotis dengan pasir putih, air laut jernih,
                        serta panorama matahari terbenam yang memukau. Pantai di Lombok dan
                        Sumbawa menjadi destinasi favorit wisatawan lokal maupun mancanegara.',
            'icon'  => '🌊',
            'nuansa' => 'Bahari & Santai'
        ],
        'gunung' => [
            'title' => 'Wisata Gunung di NTB',
            'image' => 'images/3.jpg',
            'desc'  => 'Gunung di NTB terkenal dengan jalur pendakian yang menantang dan
                        keindahan alam yang luar biasa. Gunung Rinjani merupakan ikon wisata
                        alam dan pendakian paling populer di Nusa Tenggara Barat.',
            'icon'  => '⛰️',
            'nuansa' => 'Petualangan & Alam'
        ],
        'air-terjun' => [
            'title' => 'Wisata Air Terjun di NTB',
            'image' => 'images/1.jpg',
            'desc'  => 'Air terjun di NTB menawarkan suasana sejuk dan alami, tersembunyi
                        di tengah hutan dengan air yang jernih serta pemandangan yang
                        menenangkan. Cocok untuk wisata alam dan relaksasi.',
            'icon'  => '💧',
            'nuansa' => 'Sejuk & Alami'
        ],
        'rumah-adat' => [
            'title' => 'Rumah Adat NTB',
            'image' => 'images/5.jpg',
            'desc'  => 'Rumah adat merupakan warisan budaya yang mencerminkan filosofi hidup,
                        adat istiadat, serta nilai-nilai luhur masyarakat Nusa Tenggara Barat.
                        Setiap bangunan memiliki bentuk unik yang disesuaikan dengan kondisi
                        alam dan kepercayaan setempat.',
            'icon'  => '🛖',
            'nuansa' => 'Budaya & Tradisi'
        ],
        'wisata-buatan' => [
            'title' => 'Wisata Buatan di NTB',
            'image' => 'images/4.jpg',
            'desc'  => 'Wisata buatan adalah destinasi yang dirancang oleh manusia untuk
                        rekreasi dan hiburan. Mulai dari taman wisata, wahana permainan,
                        hingga spot foto modern yang nyaman untuk keluarga dan wisatawan.',
            'icon'  => '🎡',
            'nuansa' => 'Modern & Rekreasi'
        ],
    ];
@endphp

{{-- VALIDASI SLUG --}}
@if(!isset($data[$slug]))
    <div class="container my-5">
        <div class="alert alert-danger text-center shadow-sm rounded-4">
            <h5 class="fw-bold mb-2">Kategori Tidak Ditemukan</h5>
            <p class="mb-3">Kategori wisata yang Anda cari tidak tersedia.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">
                Kembali ke Home
            </a>
        </div>
    </div>
@else

<!-- HERO SECTION -->
<div class="position-relative">
    <img src="{{ asset($data[$slug]['image']) }}"
         class="w-100"
         style="height:65vh; object-fit:cover;">

    <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-4"
         style="background: rgba(0,0,0,0.6); padding:45px; border-radius:22px; max-width:700px;">
        <h1 class="fw-bold display-5 mb-2">
            {{ $data[$slug]['icon'] }} {{ $data[$slug]['title'] }}
        </h1>
        <p class="lead mb-0">{{ $data[$slug]['nuansa'] }}</p>
    </div>
</div>

<!-- DETAIL CONTENT -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-5 text-center">

                    <p class="fs-5 text-muted mb-4" style="line-height:1.8">
                        {{ $data[$slug]['desc'] }}
                    </p>

                    <div class="row text-center mt-4">
                        <div class="col-md-4">
                            <div class="p-3">
                                <h5 class="fw-bold">📍 Lokasi</h5>
                                <p class="text-muted mb-0">Nusa Tenggara Barat</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3">
                                <h5 class="fw-bold">🌿 Nuansa</h5>
                                <p class="text-muted mb-0">{{ $data[$slug]['nuansa'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3">
                                <h5 class="fw-bold">⭐ Daya Tarik</h5>
                                <p class="text-muted mb-0">Keunikan & Panorama</p>
                            </div>
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
