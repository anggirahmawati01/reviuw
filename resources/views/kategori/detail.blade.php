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
            'icon'  => '🌊'
        ],
        'gunung' => [
            'title' => 'Wisata Gunung di NTB',
            'image' => 'images/3.jpg',
            'desc'  => 'Gunung di NTB terkenal dengan jalur pendakian yang menantang dan
                        keindahan alam yang luar biasa. Gunung Rinjani merupakan ikon wisata
                        alam dan pendakian paling populer di Nusa Tenggara Barat.',
            'icon'  => '⛰️'
        ],
        'air-terjun' => [
            'title' => 'Wisata Air Terjun di NTB',
            'image' => 'images/1.jpg',
            'desc'  => 'Air terjun di NTB menawarkan suasana sejuk dan alami, tersembunyi
                        di tengah hutan dengan air yang jernih serta pemandangan yang
                        menenangkan. Cocok untuk wisata alam dan relaksasi.',
            'icon'  => '💧'
        ]
    ];
@endphp

@if(isset($data[$slug]))

<!-- HERO -->
<div class="position-relative">
    <img src="{{ asset($data[$slug]['image']) }}"
         class="w-100"
         style="height:60vh; object-fit:cover;">

    <div class="position-absolute top-50 start-50 translate-middle text-center text-white"
         style="background: rgba(0,0,0,0.55); padding:40px; border-radius:20px;">
        <h1 class="fw-bold display-5">
            {{ $data[$slug]['icon'] }} {{ $data[$slug]['title'] }}
        </h1>
    </div>
</div>

<!-- CONTENT -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-5 text-center">

                    <p class="text-muted fs-5">
                        {{ $data[$slug]['desc'] }}
                    </p>

                    <hr class="my-4">

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="p-3">
                                <h5 class="fw-bold">📍 Lokasi</h5>
                                <p class="text-muted">Nusa Tenggara Barat</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3">
                                <h5 class="fw-bold">🌿 Nuansa</h5>
                                <p class="text-muted">Alam & Petualangan</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3">
                                <h5 class="fw-bold">⭐ Daya Tarik</h5>
                                <p class="text-muted">Panorama & Keunikan</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="{{ route('destinations.index') }}" class="btn btn-primary btn-lg px-4">
                            Lihat Semua Destinasi
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-lg px-4 ms-2">
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
