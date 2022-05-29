@extends('section')

@section('hero-image')
    @if(app()->getLocale() == 'lv')
        <img src="{{ url('/images/hero/gala stacija.jpg') }}" alt="">
    @else
        <img src="{{ url('/images/hero/gala stacija_en.jpg') }}" alt="">
    @endif
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
    {{ __('content.text-title-galastacija-1') }} {{ __('content.text-title-galastacija-2') }}
@endsection

@section('about-name')
    {{ __('content.text-name-galastacija') }}
@endsection

@section('about-section')
    {{ __('content.text-description-galastacija-1') }}
    <br><br>
    {{ __('content.text-description-galastacija-1') }}
@endsection

@section('button-previous')
    <a href="{{ route('skatlogs', app()->getLocale()) }}"><h5><span class="prev-icon"><</span> {{ __('content.text-title-skatlogs') }}</h5></a>
@endsection

@section('button-next')
    <a href="{{ route('krustojums', app()->getLocale()) }}"><h5>{{ __('content.text-title-krustojums') }} <span class="next-icon">></span></h5></a>
@endsection
