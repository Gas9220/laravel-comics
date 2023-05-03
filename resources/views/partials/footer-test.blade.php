<footer>
    <div class="footer-top">
        <div class="container">
            <div class="links">
                <div class="left">
                    <div class="link-list">
                        <h3>DC COMIC</h3>
                        <ul>
                            @foreach ($dcComicsLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="link-list">
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ($shopLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="link-list">
                        <h3>DC</h3>
                        <ul>
                            @foreach ($dcLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="link-list">
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ($sitesLinks as $item)
                                <li><a href="#"> {{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
        </div>
    </div>
    <section>
        <div class="container">
            <a href="#">SIGN-UP NOW!</a>
            <div class="social">
                <h4>FOLLOW US</h4>
                <ul>
                    @foreach ($socialIcons as $socialIcon)
                        <li>
                            <img src="{{ Vite::asset($socialIcon['img']) }}" alt="{{ $socialIcon['name'] }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</footer>