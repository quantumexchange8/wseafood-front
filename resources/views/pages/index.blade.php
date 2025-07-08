<x-app-layout>
    <!--   hero area start -->
    <div class="hero-area">
        @php
            $languages = ['en' => 'EN', 'cn' => '中文'];
            $current = App::getLocale();
        @endphp

        <script>
            function toggleLangMenu() {
                const menu = document.getElementById("lang-menu");
                menu.style.display = menu.style.display === "block" ? "none" : "block";
            }

            document.addEventListener('click', function (event) {
                const menu = document.getElementById("lang-menu");
                const switcher = document.querySelector(".language-switcher");

                if (!switcher.contains(event.target)) {
                    menu.style.display = "none";
                }
            });
        </script>

        <div class="row">
            <div class="col-md-12">
                <div style="display: flex; justify-content: space-between; align-items: stretch;">
                    <div class="logo">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                    </div>

                    <div class="logo" style="display: flex; justify-content: end; align-items: center;">
                        <div class="language-switcher">
                            <button onclick="toggleLangMenu()" class="lang-btn lang-btn-active">
                                {{ $languages[$current] }}
                            </button>

                            <div id="lang-menu" class="lang-menu">
                                @foreach ($languages as $code => $name)
                                    @if ($code !== $current)
                                        <a href="{{ url('/lang/'.$code) }}" class="lang-btn">
                                            {{ $name }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="hero-text">
                            <h2 style="line-height: 1.5;">
                                <span style="display: block;">{{ __('public.slider_section_header') }}</span>
                            </h2>

                            <p style="display: flex; align-items: start; gap: 0.5rem; line-height: 2;">
                                <span style="flex-shrink: 0;">✨</span>
                                <span>{{ __('public.slider_section_caption') }}</span>
                            </p>

                            <div class="hero-btn-area">
                                <a href="#works" class="hero-btn" style="min-width: 180px; text-align: center;">{{ __('public.how_it_works') }}</a>
                                <a href="#download" class="hero-btn btn-active" style="min-width: 180px; text-align: center;">{{ __('public.get_now') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-thumb">
                        <img src="assets/img/app/slider-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  hero area end -->
    <!--service area start -->
    <div id="features" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('public.member_perks') }}</h2>
            </div>
            <div class="single-service-area">
                <div class="row single-service-row">
                    <div class="col-md-5 col-sm-6">
                        <div class="single-service">
                            <img src="assets/img/icon/exclusive_promo.png" alt="">
                            <div>
                                <h2>{{ __('public.exclusive_promos') }}</h2>
                                <p>{{ __('public.exclusive_promos_content') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-6">
                        <div class="single-service">
                            <img src="assets/img/icon/fast_rewards.png" alt="">
                            <div>
                                <h2>{{ __('public.fast_rewards') }}</h2>
                                <p>{{ __('public.fast_rewards_content') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--service area end -->
    <!-- about app start-->
    <div class="section-padding about-section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title">
                        <h2>{{ __('public.about_app_main_heading') }}</h2>
                        <h3>{{ __('public.about_app_sub_heading') }}</h3>
                        <p style="font-size: medium;">{{ __('public.about_app_paragraph_1') }}</p>
                        <p style="font-size: medium;">{{ __('public.about_app_paragraph_2') }}</p>

                        <p>
                            <ul style="list-style-type: none;">
                                <li style="font-size: medium;">{{ __('public.about_app_bullet_1') }}</li>
                                <li style="font-size: medium;">{{ __('public.about_app_bullet_2') }}</li>
                                <li style="font-size: medium;">{{ __('public.about_app_bullet_3') }}</li>
                                <li style="font-size: medium;">{{ __('public.about_app_bullet_4') }}</li>
                            </ul>
                        </p>

                        <p style="font-size: medium;">{{ __('public.about_app_paragraph_3') }}</p>
                        <div class="about-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-app">
                        <img src="assets/img/app/about-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about app end-->
    <!--how it work start-->
    <div id="works" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2>{{ __('public.how_it_works_main_heading') }}</h2>
                        <p style="font-size: medium;">{{ __('public.how_it_works_sub_heading') }}</p>
                    </div>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 20px;">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-work text-center" style="display: flex; flex-direction: column; height: 100%;">
                            <img src="assets/img/icon/register.png" alt="" style="height: 62px; width: auto; margin: 0 auto;">
                            <div style="flex-grow: 1; display: flex; flex-direction: column; justify-content: flex-start;">
                                <h2>{{ __('public.how_it_works_step_1_title') }}</h2>
                                <p>{{ __('public.how_it_works_step_1_content') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-work text-center" style="display: flex; flex-direction: column; height: 100%;">
                            <img src="assets/img/icon/earn_points.png" alt="" style="height: 62px; width: auto; margin: 0 auto;">
                            <div style="flex-grow: 1; display: flex; flex-direction: column; justify-content: flex-start;">
                                <h2>{{ __('public.how_it_works_step_2_title') }}</h2>
                                <p>{{ __('public.how_it_works_step_2_content') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="single-work text-center" style="display: flex; flex-direction: column; height: 100%;">
                            <img src="assets/img/icon/redeem_points.png" alt="" style="height: 62px; width: auto; margin: 0 auto;">
                            <div style="flex-grow: 1; display: flex; flex-direction: column; justify-content: flex-start;">
                                <h2>{{ __('public.how_it_works_step_3_title') }}</h2>
                                <p>{{ __('public.how_it_works_step_3_content') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="assets/img/bg/work-bg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--how it work end-->
    <!--feature section start-->
    <div id="features-area" class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>{{ __('public.why_loyalty_main_heading') }}</h2>
                        <p style="font-size: medium;">{{ __('public.why_loyalty_sub_heading') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-area text-center">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="assets/img/icon/feature-icon-1.png" alt="">
                            </div>
                            <h3>{{ __('public.why_loyalty_feature_1_title') }}</h3>
                            <p>{{ __('public.why_loyalty_feature_1_content') }}</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="assets/img/icon/feature-icon-2.png" alt="">
                            </div>
                            <h3>{{ __('public.why_loyalty_feature_2_title') }}</h3>
                            <p>{{ __('public.why_loyalty_feature_2_content') }}</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="assets/img/icon/feature-icon-3.png" alt="">
                            </div>
                            <h3>{{ __('public.why_loyalty_feature_3_title') }}</h3>
                            <p>{{ __('public.why_loyalty_feature_3_content') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-apps">
                        <img src="assets/img/app/feature-app.png" alt="" style="max-height: 400px;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-area text-center">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="assets/img/icon/feature-icon-4.png" alt="">
                            </div>
                            <h3>{{ __('public.why_loyalty_feature_4_title') }}</h3>
                            <p>{{ __('public.why_loyalty_feature_4_content') }}</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="assets/img/icon/feature-icon-5.png" alt="">
                            </div>
                            <h3>{{ __('public.why_loyalty_feature_5_title') }}</h3>
                            <p>{{ __('public.why_loyalty_feature_5_content') }}</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="assets/img/icon/feature-icon-6.png" alt="">
                            </div>
                            <h3>{{ __('public.why_loyalty_feature_6_title') }}</h3>
                            <p>{{ __('public.why_loyalty_feature_6_content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--feature section end-->
    <!-- download app section start-->
    <div id="download" class="section-padding download-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="app-download-title text-center">
                        <h2>{{ __('public.download_section_header') }}</h2>
                        <p style="line-height: 2;">
                            {{ __('public.download_section_caption') }}<br>
                            📱 Google Play & App Store
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center ">
                    <div class="download-btn-area">
                        <a href="#" class="download-btn">Google Store<i class="fa fa-android"></i></a>
                        <a href="#" class="download-btn">Apple Store <i class="fa fa-apple"></i></a>
                        <a href="#" class="download-btn">Windows Store<i class="fa fa-windows"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download app section end-->
</x-app-layout>