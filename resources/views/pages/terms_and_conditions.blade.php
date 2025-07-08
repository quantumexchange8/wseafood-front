<x-app-layout>
    <!--terms and condition area start -->
    <div class="page-section-padding" style="height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="section-title">
                        <h2>{{ __('public.terms_conditions_heading') }}</h2>
                        <h5>{{ __('public.terms_conditions_intro') }}</h5>
                        @php
                            $termsKeys = ['membership', 'points', 'modification', 'misuse', 'law'];
                        @endphp

                        @foreach ($termsKeys as $key)
                            <p>
                                <h4>{{ $loop->iteration }}. {{ __('public.terms_' . $key . '_title') }}</h4>
                                <d>{{ __('public.terms_' . $key . '_content') }}</d>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--terms and condition area end -->
</x-app-layout>