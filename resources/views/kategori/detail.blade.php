@extends('layouts.app')

@section('content')

@php
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
        'hutan' => [
            'title' => 'Rumah Adat',
            'image' => 'images/5.jpg',
            'desc'  => 'Hutan di Nusa Tenggara Barat menyimpan keindahan alam yang asri
                        dengan pepohonan tropis, udara segar, serta keanekaragaman hayati.
                        Cocok untuk ekowisata dan wisata edukasi.',
            'icon'  => '🌿',
            'nuansa' => 'Ekowisata'
        ],
        'pulau' => [
            'title' => 'Wisata Buatan',
            'image' => 'images/4.jpg',
            'desc'  => 'NTB memiliki banyak pulau indah dengan laut biru jernih, pasir putih,
                        dan terumbu karang yang menakjubkan. Sangat cocok untuk snorkeling,
                        diving, dan wisata bahari.',
            'icon'  => '🏝️',
            'nuansa' => 'Bahari & Eksotis'
        ],
    ];
@endphp

@if(isset($data[$slug]))

<!-- HERO SECTION -->
<div class="position-relative">
    <img src="{{ asset($data[$slug]['image']) }}"
         class="w-100"
         style="height:65vh; object-fit:cover;">

    <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-4"
         style="background: rgba(0,0,0,0.6); padding:45px; border-radius:22px;">
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

                    <p class="fs-5 text-muted mb-4">
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
                                <p class="text-muted mb-0">Panorama & Keunikan</p>
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
