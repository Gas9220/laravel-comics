@php
    $links = [
        'characters' => [
            'text' => 'Characters',
            'destination' => 'default',
        ],
        'comics' => [
            'text' => 'Comics',
            'destination' => 'comics',
        ],
        'movies' => [
            'text' => 'Movies',
            'destination' => 'default',
        ],
        'tv' => [
            'text' => 'Tv',
            'destination' => 'default',
        ],
        'games' => [
            'text' => 'Games',
            'destination' => 'default',
        ],
        'collectibles' => [
            'text' => 'Collectibles',
            'destination' => 'default',
        ],
        'videos' => [
            'text' => 'Videos',
            'destination' => 'default',
        ],
        'fans' => [
            'text' => 'Fans',
            'destination' => 'default',
        ],
        'news' => [
            'text' => 'News',
            'destination' => 'default',
        ],
        'shop' => [
            'text' => 'Shop',
            'destination' => 'default',
        ],
    ];
@endphp

{{-- Header --}}
<header class="container d-flex align-items-center justify-content-center">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="main-logo" class="main-logo p-3">
    <nav class="d-flex flex-wrap">
        @foreach ($links as $link)
            <a href="{{ route($link['destination']) }}" class="p-3 fw-bold text-decoration-none {{ Str::startsWith(Route::currentRouteName(), $link['destination']) ? 'selected' : '' }}">{{ $link['text'] }}</a>
        @endforeach
    </nav>
</header>
{{-- /Header --}}
