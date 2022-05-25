@extends('master')

@section('scripts')
    <script>
        $(document).ready(function() {
            var slidePosition = 1;
            SlideShow(slidePosition);

            $('#image-1').click(function() {
                currentSlide(1);
            });

            $('#image-2').click(function() {
                currentSlide(2);
            });

            $('#image-3').click(function() {
                currentSlide(3);
            });

            $('#image-4').click(function() {
                currentSlide(4);
            });

            $('#image-5').click(function() {
                currentSlide(5);
            });

            $('#image-6').click(function() {
                currentSlide(6);
            });

            $('#image-7').click(function() {
                currentSlide(7);
            });

            $('#image-8').click(function() {
                currentSlide(8);
            });

            $('#image-9').click(function() {
                currentSlide(9);
            });
        });

        function plusSlides(n) {
            SlideShow(slidePosition += n);
        }

        function currentSlide(n) {
            SlideShow(slidePosition = n);
        }

        function SlideShow(n) {
            var i;
            var slides = document.getElementsByClassName("image-wrapper");
            var circles = document.getElementsByClassName("dots");
            if (n > slides.length) {slidePosition = 1}
            if (n < 1) {slidePosition = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            $('.dots').removeClass('enable');
            slides[slidePosition-1].style.display = "block";
            circles[slidePosition-1].className += " enable";
        }
    </script>
@endsection

@section('content')
    <div class="hero-image-container">
        @yield('hero-image')
    </div>

    <div class="image-carousel-container">
            <div class="image-container fade">
                <div class="image-wrapper">
                    @yield('image-1')
                </div>

                <div class="image-wrapper">
                    @yield('image-2')
                </div>

                <div class="image-wrapper">
                    @yield('image-3')
                </div>

                <div class="image-wrapper">
                    @yield('image-4')
                </div>

                <div class="image-wrapper">
                    @yield('image-5')
                </div>

                <div class="image-wrapper">
                    @yield('image-6')
                </div>

                <div class="image-wrapper">
                    @yield('image-7')
                </div>

                <a class="back" onclick="plusSlides(-1)">&#10094;</a>
                <a class="forward" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <div class="image-carousel-dots" style="text-align:center">
                <div class="dot" id="image-1">
                    <div class="dot-image-container">
                        @yield('image-1')
                    </div>
                </div>

                <div class="dot" id="image-2">
                    <div class="dot-image-container">
                        @yield('image-2')
                    </div>
                </div>

                <div class="dot" id="image-3" onclick="currentSlide(3)">
                    <div class="dot-image-container">
                        @yield('image-3')
                    </div>
                </div>

                <div class="dot" id="image-4" onclick="currentSlide(4)">
                    <div class="dot-image-container">
                        @yield('image-4')
                    </div>
                </div>

                <div class="dot" id="image-5" onclick="currentSlide(5)">
                    <div class="dot-image-container">
                        @yield('image-5')
                    </div>
                </div>

                <div class="dot" id="image-6" onclick="currentSlide(6)">
                    <div class="dot-image-container">
                        @yield('image-6')
                    </div>
                </div>

                <div class="dot" id="image-7" onclick="currentSlide(7)">
                    <div class="dot-image-container">
                        @yield('image-7')
                    </div>
                </div>

                <div class="dot" id="image-8" onclick="currentSlide(8)">
                    <div class="dot-image-container">
                        @yield('image-8')
                    </div>
                </div>

                <div class="dot" id="image-9" onclick="currentSlide(9)">
                    <div class="dot-image-container">
                        @yield('image-9')
                    </div>
                </div>
            </div>
    </div>

    <div class="section-content">
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
