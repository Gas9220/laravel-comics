@extends('layouts.app')

@section('page.main')
    <section class="jumbo">
    </section>
    <section class="comics-area">
        <div class="container">
            <section class="comics-list">
                <div class="series">
                    <div class="primary-button">CURRENT SERIES</div>
                </div>
                <div>
                    @foreach ($comics as $comic)
                        <div class="comics-item">
                            <img src="" alt="">
                            <h5>{{ $comic['title'] }}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="primary-button">LOAD MORE...</div>
            </section>
        </div>
    </section>
    {{-- <MainFeatures></MainFeatures>  --}}
@endsection
