@extends('master')

@section('scripts')
    <script>
        $(document).ready(function() {
            var slidePosition = 1;
            SlideShow(slidePosition);

            $('.menu-item').click(function() {
                $('.menu-item').removeClass('active');
                $('.menu-item').removeClass('lowered');


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

            <div style="text-align:center">
                <span class="dots" onclick="currentSlide(1)"></span>
                <span class="dots" onclick="currentSlide(2)"></span>
                <span class="dots" onclick="currentSlide(3)"></span>
                <span class="dots" onclick="currentSlide(4)"></span>
                <span class="dots" onclick="currentSlide(5)"></span>
                <span class="dots" onclick="currentSlide(6)"></span>
                <span class="dots" onclick="currentSlide(7)"></span>
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
