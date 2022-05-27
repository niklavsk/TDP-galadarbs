@extends('master')

@section('scripts')
    <script>
        var slidePosition = 1;

        function moveSlides(n) {
            slidePosition += n;

            if (slidePosition > 9) {
                slidePosition = 1;

            } else if (slidePosition < 1) {
                slidePosition = 9;
            }

            $('.image-wrapper').removeClass('selected');
            $('.dot > .dot-image-container > img').removeClass('selected');

            $('#image-' + slidePosition).addClass('selected');
            $('#image-thumbnail-' + slidePosition + ' > .dot-image-container > img').addClass('selected');
        }

        $(document).ready(function() {
            $('#image-1').addClass('selected');
            $('#image-thumbnail-1 > .dot-image-container > img').addClass('selected');


            $('.dot').click(function() {
                $('.image-wrapper').removeClass('selected');
                $('.dot > .dot-image-container > img').removeClass('selected');
            });

            $('#image-thumbnail-1').click(function() {
                slidePosition = 1;
                $('#image-1').addClass('selected');
                $('#image-thumbnail-1 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-2').click(function() {
                slidePosition = 2;
                $('#image-2').addClass('selected');
                $('#image-thumbnail-2 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-3').click(function() {
                slidePosition = 3;
                $('#image-3').addClass('selected');
                $('#image-thumbnail-3 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-4').click(function() {
                slidePosition = 4;
                $('#image-4').addClass('selected');
                $('#image-thumbnail-4 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-5').click(function() {
                slidePosition = 5;
                $('#image-5').addClass('selected');
                $('#image-thumbnail-5 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-6').click(function() {
                slidePosition = 6;
                $('#image-6').addClass('selected');
                $('#image-thumbnail-6 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-7').click(function() {
                slidePosition = 7;
                $('#image-7').addClass('selected');
                $('#image-thumbnail-7 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-8').click(function() {
                slidePosition = 8;
                $('#image-8').addClass('selected');
                $('#image-thumbnail-8 > .dot-image-container > img').addClass('selected');
            });

            $('#image-thumbnail-9').click(function() {
                slidePosition = 9;
                $('#image-9').addClass('selected');
                $('#image-thumbnail-9 > .dot-image-container > img').addClass('selected');
            });
        });
    </script>
@endsection

@section('content')
    <div class="hero-image-container">
        @yield('hero-image')
    </div>

    <div class="image-carousel-container">
            <div class="image-container">
                <div class="image-wrapper" id="image-1">
                    @yield('image-1')
                </div>

                <div class="image-wrapper" id="image-2">
                    @yield('image-2')
                </div>

                <div class="image-wrapper" id="image-3">
                    @yield('image-3')
                </div>

                <div class="image-wrapper" id="image-4">
                    @yield('image-4')
                </div>

                <div class="image-wrapper" id="image-5">
                    @yield('image-5')
                </div>

                <div class="image-wrapper" id="image-6">
                    @yield('image-6')
                </div>

                <div class="image-wrapper" id="image-7">
                    @yield('image-7')
                </div>

                <div class="image-wrapper" id="image-8">
                    @yield('image-8')
                </div>

                <div class="image-wrapper" id="image-9">
                    @yield('image-9')
                </div>

                <a class="back" onclick="moveSlides(-1)">&#10094;</a>
                <a class="forward" onclick="moveSlides(1)">&#10095;</a>
            </div>

            <div class="image-carousel-dots">
                <div class="dot" id="image-thumbnail-1">
                    <div class="dot-image-container">
                        @yield('image-1')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-2">
                    <div class="dot-image-container">
                        @yield('image-2')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-3">
                    <div class="dot-image-container">
                        @yield('image-3')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-4">
                    <div class="dot-image-container">
                        @yield('image-4')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-5">
                    <div class="dot-image-container">
                        @yield('image-5')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-6">
                    <div class="dot-image-container">
                        @yield('image-6')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-7">
                    <div class="dot-image-container">
                        @yield('image-7')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-8">
                    <div class="dot-image-container">
                        @yield('image-8')
                    </div>
                </div>

                <div class="dot" id="image-thumbnail-9">
                    <div class="dot-image-container">
                        @yield('image-9')
                    </div>
                </div>
            </div>
    </div>

    <div class="section-content">
        <div class="section-text">
            <div class="section-title">
                <h2>@yield('title')</h2>
            </div>

            <div class="row first-row">
                <div class="col-left">
                    <p>
                        @yield('about-name')
                    </p>
                </div>

                <div class="col-right">
                    <h4>{{ __('content.title-par-nosaukumu') }}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-left">
                    <h4 class="text-right">{{ __('content.title-vairak-par-vietu') }}</h4>
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
