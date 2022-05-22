@extends('master')

@section('content')
    <div class="hero-image-container">
        @yield('hero-image')
    </div>

    <div class="section-content">
        <div class="section-images">
            @yield('images')
        </div>

        <div class="section-text">
            <div class="section-title">
                <h3>@yield('title')</h3>
            </div>

            <div class="row">
                <div class="col-left">
                    <p>
                        @yield('about-name')
                    </p>
                </div>

                <div class="col-right">
                    <h4>Par nosaukumu</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-left">
                    <h4 class="text-right">Vairāk par vietu</h4>
                </div>

                <div class="col-right">
                    <p>
                        @yield('about-section')
                    </p>
                </div>
            </div>
        </div>

        <div class="navigation-button-container">
            <div class="previous">
                @yield('button-previous')
            </div>

            <div class="next">
                @yield('button-next')
            </div>
        </div>
    </div>
@endsection
