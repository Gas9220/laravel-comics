@php
    $links = [
        'characters' => [
            'text' => 'Characters',
            'destination' => 'characters',
        ],
        'comics' => [
            'text' => 'Comics',
            'destination' => 'comics',
        ],
        'movies' => [
            'text' => 'Movies',
            'destination' => 'movies',
        ],
        'tv' => [
            'text' => 'Tv',
            'destination' => 'tv',
        ],
        'games' => [
            'text' => 'Games',
            'destination' => 'games',
        ],
        'collectibles' => [
            'text' => 'Collectibles',
            'destination' => 'collectibles',
        ],
        'videos' => [
            'text' => 'Videos',
            'destination' => 'videos',
        ],
        'fans' => [
            'text' => 'Fans',
            'destination' => 'fans',
        ],
        'news' => [
            'text' => 'News',
            'destination' => 'news',
        ],
        'shop' => [
            'text' => 'Shop',
            'destination' => 'shop',
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
