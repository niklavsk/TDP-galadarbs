@extends('section')

@section('hero-image')
    @if(app()->getLocale() == 'lv')
        <img src="{{ url('/images/hero/skatlogs.jpg') }}" alt="">
    @else
        <img src="{{ url('/images/hero/skatlogs_en.jpg') }}" alt="">
    @endif
@endsection

@section('color')
    red
@endsection

@section('image-1')
    <img src="{{ url('/images/content/skatlogs/1.jpg') }}" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/skatlogs/2.jpg') }}" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/skatlogs/3.jpg') }}" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/skatlogs/4.jpg') }}" class="vertical" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/skatlogs/5.jpg') }}" class="vertical" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/skatlogs/6.jpg') }}" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/skatlogs/7.jpg') }}" class="vertical" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/skatlogs/8.jpg') }}" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/skatlogs/9.jpg') }}" alt="">
@endsection

@section('title')
    {{ __('content.text-title-skatlogs') }}
@endsection

@section('about-name')
    {{ __('content.text-name-skatlogs') }}
@endsection

@section('about-section')
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    <br><br>
    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
    <br><br>
    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
@endsection

@section('button-previous')
    <a href="{{ route('brauciens', app()->getLocale()) }}"><h5><span class="prev-icon"><</span> {{ __('content.text-title-brauciens') }}</h5></a>
@endsection

@section('button-next')
    <a href="{{ route('galastacija', app()->getLocale()) }}"><h5>{{ __('content.text-title-galastacija-1') }} {{ __('content.text-title-galastacija-2') }} <span class="next-icon">></span></h5></a>
@endsection
