@extends('section')

@section('hero-image')
    <img src="{{ url('/images/hero/gala stacija.jpg') }}" alt="">
@endsection

@section('color')
    purple
@endsection

@section('image-1')
    <img src="{{ url('/images/content/gala stacija/1.jpg') }}" class="vertical" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/gala stacija/2.jpg') }}" class="vertical" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/gala stacija/3.jpg') }}" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/gala stacija/4.jpg') }}" class="vertical" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/gala stacija/5.jpg') }}" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/gala stacija/6.jpg') }}" class="vertical" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/gala stacija/7.jpg') }}" class="vertical" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/gala stacija/8.jpg') }}" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/gala stacija/9.jpg') }}" alt="">
@endsection

@section('title')
    Gala stacija
@endsection

@section('about-name')
    {{ __('content.text-name-galastacija') }}
@endsection

@section('about-section')
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    <br><br>
    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
    <br><br>
    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
@endsection

@section('button-previous')
    <a href="{{ url('/skatlogs') }}"><h5><span class="prev-icon"><</span> Skatlogs</h5></a>
@endsection

@section('button-next')
    <a href="{{ url('/krustojums') }}"><h5>Krustojums <span class="next-icon">></span></h5></a>
@endsection
