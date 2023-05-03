@php
    $dcComicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
    $shopLinks = ['Shop DC', 'Shop DC Collectibles'];
    $dcLinks = ['Terms Of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    $sitesLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    
    $socialIcons = [
        'facebook' => [
            'name' => 'facebook',
            'img' => 'resources/img/social-icons/footer-facebook.png',
        ],
        'twitter' => [
            'name' => 'twitter',
            'img' => 'resources/img/social-icons/footer-twitter.png',
        ],
        'youtube' => [
            'name' => 'youtube',
            'img' => 'resources/img/social-icons/footer-youtube.png',
        ],
        'pinterest' => [
            'name' => 'pinterest',
            'img' => 'resources/img/social-icons/footer-pinterest.png',
        ],
        'periscope' => [
            'name' => 'periscope',
            'img' => 'resources/img/social-icons/footer-periscope.png',
        ],
    ];
@endphp

{{-- Footer --}}
<footer>
    {{-- Footer top --}}
    <section class="footer-top">
        <div class="container d-flex gap-5 position-relative overflow-hidden">
            {{-- Left links --}}
            <div class="left-links">
                <div class="link-list pt-3">
                    <h3 class="text-white">DC COMIC</h3>
                    <ul class="list-unstyled">
                        @foreach ($dcComicsLinks as $item)
                            <li>
                                <a class="text-decoration-none text-secondary" href="#"> {{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="link-list pt-3 pb-3">
                    <h3 class="text-white">SHOP</h3>
                    <ul class="list-unstyled">
                        @foreach ($shopLinks as $item)
                            <li>
                                <a class="text-decoration-none text-secondary" href="#"> {{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- /Left links --}}
            {{-- Right links --}}
            <div class="right-links d-flex gap-5">
                <div class="ink-list pt-3 pb-3">
                    <h3 class="text-white">DC</h3>
                    <ul class="list-unstyled">
                        @foreach ($dcLinks as $item)
                            <li><a class="text-decoration-none text-secondary" href="#"> {{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="ink-list pt-3 pb-3">
                    <h3 class="text-white">SHOP</h3>
                    <ul class="list-unstyled">
                        @foreach ($sitesLinks as $item)
                            <li><a class="text-decoration-none text-secondary" href="#"> {{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- /Right links --}}
            <img class="position-absolute footer-bg-logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
        </div>
    </section>
    {{-- /Footer top --}}

    {{-- Footer low --}}
    <section class="footer-low">
        <div class="container">

        </div>
    </section>
    {{-- /Footer low --}}
</footer>
{{-- /Footer --}}

