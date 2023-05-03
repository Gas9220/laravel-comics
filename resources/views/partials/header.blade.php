@php
    $links = [
        'characters' => [
            'text' => 'Characters',
            'destination' => '#',
        ],
        'comics' => [
            'text' => 'Comics',
            'destination' => '#',
        ],
        'movies' => [
            'text' => 'Movies',
            'destination' => '#',
        ],
        'tv' => [
            'text' => 'Tv',
            'destination' => '#',
        ],
        'games' => [
            'text' => 'Games',
            'destination' => '#',
        ],
        'collectibles' => [
            'text' => 'Collectibles',
            'destination' => '#',
        ],
        'videos' => [
            'text' => 'Videos',
            'destination' => '#',
        ],
        'fans' => [
            'text' => 'Fans',
            'destination' => '#',
        ],
        'news' => [
            'text' => 'News',
            'destination' => '#',
        ],
        'shop' => [
            'text' => 'Shop',
            'destination' => '#',
        ],
    ];
@endphp

{{-- Header --}}
<header class="container d-flex align-items-center justify-content-center">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="main-logo" class="main-logo p-3">
    <nav class="d-flex flex-wrap">
        @foreach ($links as $link)
            <a href="{{ $link['destination'] }}" class="p-3 fw-bold text-decoration-none">{{ $link['text'] }}</a>
        @endforeach
    </nav>
</header>
{{-- /Header --}}
