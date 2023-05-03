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

@section('page.main')
    {{-- Jumbo --}}
    <section class="jumbo"></section>
    {{-- /Jumbo --}}

    {{-- Comics --}}
    <section class="comics">
        <div class="container pb-3">
            <div class="primary-button d-flex align-items-center justify-content-center fw-bold text-white shift">CURRENT SERIES</div>

            <div class="comics-list">
            </div>
            <div class="primary-button d-flex align-items-center justify-content-center fw-bold text-white m-auto">LOAD MORE</div>
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





{{-- 
<section class="comics-area">
    <div class="container">
        <section class="comics-list">
            <div class="series">
                <div class="primary-button">CURRENT SERIES</div>
            </div>
            <div>
                @foreach ($comics as $comic)
                    <div class="comics-item">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
            <div class="primary-button">LOAD MORE...</div>
        </section>

    </div>
    <section class="features">

    </section>
</section> --}}
