@extends('section')

@section('hero-image')
    <img src="{{ url('/images/hero/gaidisana.jpg') }}" alt="">
@endsection

@section('color')
    light-orange
@endsection

@section('image-1')
    <img src="{{ url('/images/content/gaidisana/1.jpg') }}" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/gaidisana/2.jpg') }}" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/gaidisana/3.jpg') }}" class="vertical" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/gaidisana/4.jpg') }}" class="vertical" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/gaidisana/5.jpg') }}" class="vertical" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/gaidisana/6.jpg') }}" class="vertical" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/gaidisana/7.jpg') }}" class="vertical" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/gaidisana/8.jpg') }}" class="vertical" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/gaidisana/9.jpg') }}" alt="">
@endsection

@section('title')
    Gaidīšana
@endsection

@section('about-name')
    {{ __('content.text-name-gaidisana') }}
@endsection

@section('about-section')
    {{ __('content.text-description-gaidisana-1') }}
    <br/><br/>
    {{ __('content.text-description-gaidisana-2') }}
@endsection

@section('button-previous')
    <a href="{{ url('/pasteiga') }}"><h5><span class="prev-icon"><</span> Pasteiga</h5></a>
@endsection

@section('button-next')
    <a href="{{ url('/brauciens') }}"><h5>Brauciens <span class="next-icon">></span></h5></a>
@endsection
