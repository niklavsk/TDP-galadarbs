@extends('master')

@section('color')
    dark-blue
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#button-sections').click(function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('.item-pasteiga').offset().top
                }, 1000);
            });

            $('.menu-item').click(function() {
                $('.menu-item').removeClass('active');
                $('.menu-item').removeClass('lowered');
            });

            $('.item-durvis').click(function() {
                $('.item-durvis').addClass('active');

                $('.item-krustojums').addClass('lowered');
                $('.item-galastacija').addClass('lowered');
                $('.item-skatlogs').addClass('lowered');
                $('.item-brauciens').addClass('lowered');
                $('.item-gaidisana').addClass('lowered');
                $('.item-pasteiga').addClass('lowered');
            });

            $('.item-krustojums').click(function() {
                $('.item-krustojums').addClass('active');

                $('.item-galastacija').addClass('lowered');
                $('.item-skatlogs').addClass('lowered');
                $('.item-brauciens').addClass('lowered');
                $('.item-gaidisana').addClass('lowered');
                $('.item-pasteiga').addClass('lowered');
            });

            $('.item-galastacija').click(function() {
                $('.item-galastacija').addClass('active');

                $('.item-skatlogs').addClass('lowered');
                $('.item-brauciens').addClass('lowered');
                $('.item-gaidisana').addClass('lowered');
                $('.item-pasteiga').addClass('lowered');
            });

            $('.item-skatlogs').click(function() {
                $('.item-skatlogs').addClass('active');

                $('.item-brauciens').addClass('lowered');
                $('.item-gaidisana').addClass('lowered');
                $('.item-pasteiga').addClass('lowered');
            });

            $('.item-brauciens').click(function() {
                $('.item-brauciens').addClass('active');

                $('.item-gaidisana').addClass('lowered');
                $('.item-pasteiga').addClass('lowered');
            });

            $('.item-gaidisana').click(function() {
                $('.item-gaidisana').addClass('active');

                $('.item-pasteiga').addClass('lowered');
            });

            $('.item-pasteiga').click(function() {
                $('.item-pasteiga').addClass('active');
            });
        });
    </script>
@endsection

@section('content')
    <div class="hero-image-container home">
        <div class="hero-image-overlay">
            <img src="{{ url('/images/content/home/hero.jpg') }}" alt="">

            <div class="hero-image-title">
                <h1>{{ __('content.title-mans-cels-uz-universitati-1') }}<br>{{ __('content.title-mans-cels-uz-universitati-2') }}</h1>

                <div class="button-container">
                    <button id="button-sections" class="button-white">{{ __('content.button-apskatit-sadalas') }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="home-route-map">
        <h2>{{ __('content.title-marsruts') }}</h2>

        <div class="map-image-container">
            <img src="{{ url('/images/content/home/route.svg') }}" alt="">
        </div>
    </div>

    <div class="accordion-menu">
        <div class="menu-item item-durvis">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-durvis') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-durvis-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('durvis', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-krustojums">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-krustojums') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-krustojums-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('krustojums', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-galastacija">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-galastacija-1') }}<br>{{ __('content.text-title-galastacija-2') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-galastacija-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('galastacija', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-skatlogs">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-skatlogs') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-skatlogs-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('skatlogs', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-brauciens">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-brauciens') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-brauciens-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('brauciens', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-gaidisana">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-gaidisana') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-gaidisana-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('gaidisana', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-pasteiga active">
            <div class="item-contents">
                <div class="col-left">
                    <h3>{{ __('content.text-title-pasteiga') }}</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            {{ __('content.text-name-pasteiga-short') }}
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ route('pasteiga', app()->getLocale()) }}" class="button-white">{{ __('content.button-lasit-vairak') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
