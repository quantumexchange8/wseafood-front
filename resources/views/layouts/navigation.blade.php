<!-- preloader start -->
<div id="preloader-wrapper">
    <div class="preloader-wave-effect"></div>
</div>
<!-- preloader end -->

<!-- header area start -->
<header>
<div class="menu-area {{ request()->is('/') ? 'home-background' : '' }}">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 text-right">
                    <!-- main menu start -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="/terms_and_conditions">Terms & Conditions</a></li>
                                <li><a href="/privacy_policy">Privacy Policy</a></li>
                                @if(request()->is('/'))
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#works">How It Works</a></li>
                                    <li><a href="#screenshots">Screenshots</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!-- main menu end -->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
