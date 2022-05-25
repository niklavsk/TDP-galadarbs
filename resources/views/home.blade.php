@extends('master')

@section('color')
    dark-blue
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
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
                <h1>Mans ceļš<br>uz universitāti</h1>

                <div class="button-container">
                    <button class="button-white">Apskatīt sadaļas</button>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-menu">
        <div class="menu-item item-durvis">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Durvis</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/durvis') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-krustojums">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Krustojums</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/krustojums') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-galastacija">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Gala<br>stacija</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/galastacija') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-skatlogs">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Skatlogs</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/skatlogs') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-brauciens">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Brauciens</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/brauciens') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-gaidisana">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Gaidīšana</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/gaidisana') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item item-pasteiga active">
            <div class="item-contents">
                <div class="col-left">
                    <h3>Pasteiga</h3>
                </div>

                <div class="col-right">
                    <div class="text-container">
                        <h6>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </h6>
                    </div>

                    <div class="button-container">
                        <a href="{{ url('/pasteiga') }}" class="button-white">Lasīt vairāk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
