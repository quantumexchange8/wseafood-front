<!-- footer section start -->
<div class="footer-area {{ request()->is('/') ? 'home-footer' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-text">
                    <p>&copy; 2025 Wondering Seafood. All rights reserved.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-menu">
                    <nav>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <!-- <li><a href="{{ url('/about') }}">About</a></li> -->
                            <li><a href="{{ url('/terms_and_conditions') }}">Terms</a></li>
                            <li><a href="{{ url('/privacy_policy') }}">Privacy Policy</a></li>
                            <!-- <li><a href="{{ url('/licenses') }}">Licenses</a></li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
