@extends('layouts.app')

{{-- Page title --}}
@section('page.title')
    Comics Detail
@endsection

{{-- Page contents --}}
@section('page.main')
    <section class="jumbo"></section>
    {{-- TODO UI --}}
    <section class="comics-cover">
        <div class="container">
            <img class="shift-80" src="{{ $comics['thumb'] }}" alt="cover">
        </div>
    </section>
    <section class="comics-overview">
        <div class="container">
            <div class="row pt-2 pb-2">
                <div class="col-8">
                    <h2>{{ $comics['title'] }}</h2>
                    <div class="price-area d-flex justify-content-between align-items-center p-3 mt-2 mb-2">
                        <h4 class="custom-white mb-0">US PRICE <strong class="text-white">{{ $comics['price'] }}</strong>
                        </h4>
                        <h4 class="custom-white mb-0 ms-auto">AVAILABLE</h4>
                        <div class="vr ms-2 me-2"></div>
                        <h5 class="text-white mb-0">Check availability</h5>
                    </div>
                    <p>{{ $comics['description'] }}</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <div class="col-4 p-2 text-end">
                    <h6>ADVERTISEMENT</h6>
                    <img src="{{ Vite::asset('/resources/img/sponsor.jpg')}}" alt="adv">
                </div>
            </div>
        </div>
    </section>
@endsection
