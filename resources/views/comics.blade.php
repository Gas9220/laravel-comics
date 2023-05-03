@php
    $features = [
        [
            'icon' => '/resources/img/features/buy-comics-digital-comics.png',
            'text' => 'Digital Comics',
        ],
        [
            'icon' => 'resources/img/features/buy-comics-merchandise.png',
            'text' => 'DC Merchandise',
        ],
        [
            'icon' => 'resources/img/features/buy-comics-subscriptions.png',
            'text' => 'Subscription',
        ],
        [
            'icon' => 'resources/img/features/buy-comics-shop-locator.png',
            'text' => 'Comics Shop Locator',
        ],
        [
            'icon' => 'resources/img/features/buy-dc-power-visa.svg',
            'text' => 'DC Power Visa',
        ],
    ];
@endphp

@extends('layouts.app')

{{-- Page title --}}
@section('page.title')
Comics
@endsection

{{-- Page contents --}}
@section('page.main')
    {{-- Jumbo --}}
    <section class="jumbo"></section>
    {{-- /Jumbo --}}

    {{-- Comics --}}
    <section class="comics">
        <div class="container pb-3">
            <div class="primary-button d-flex align-items-center justify-content-center fw-bold text-white shift">CURRENT
                SERIES</div>

            <div class="comics-list d-flex flex-wrap justify-content-center gap-3">
                @foreach ($comics as $comic)
                    <div class="comics-item">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <h5 class="mt-2">{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
            <div class="primary-button d-flex align-items-center justify-content-center fw-bold text-white m-auto mt-2">LOAD MORE
            </div>
        </div>
    </section>
    {{-- ⁄Comics --}}

    {{-- Features --}}
    <section class="features">
        <div class="container d-flex justify-content-center flex-wrap p-4">
            @foreach ($features as $feature)
                <div class="feature d-flex align-items-center p-2">
                    <img src="{{ Vite::asset($feature['icon']) }}" alt="{{ $feature['text'] }}">
                    <h4 class="text-white ms-2 fs-5">{{ $feature['text'] }}</h4>
                </div>
            @endforeach
        </div>
    </section>
    {{-- /Features --}}
@endsection
