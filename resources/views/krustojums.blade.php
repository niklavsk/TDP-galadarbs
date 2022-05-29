@extends('section')

@section('hero-image')
    @if(app()->getLocale() == 'lv')
        <img src="{{ url('/images/hero/krustojums.jpg') }}" alt="">
    @else
        <img src="{{ url('/images/hero/krustojums_en.jpg') }}" alt="">
    @endif
@endsection

@section('color')
    blue
@endsection

@section('image-1')
    <img src="{{ url('/images/content/krustojums/1.jpg') }}" class="vertical" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/krustojums/2.jpg') }}" class="vertical" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/krustojums/3.jpg') }}" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/krustojums/4.jpg') }}" class="vertical" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/krustojums/5.jpg') }}" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/krustojums/6.jpg') }}" class="vertical" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/krustojums/7.jpg') }}" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/krustojums/8.jpg') }}" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/krustojums/9.jpg') }}" class="vertical" alt="">
@endsection

@section('title')
    {{ __('content.text-title-krustojums') }}
@endsection

@section('about-name')
    {{ __('content.text-name-krustojums') }}
@endsection

@section('about-section')
    {{ __('content.text-description-krustojums') }}
@endsection

@section('button-previous')
    <a href="{{ route('galastacija', app()->getLocale()) }}"><h5><span class="prev-icon"><</span> {{ __('content.text-title-galastacija-1') }} {{ __('content.text-title-galastacija-2') }}</h5></a>
@endsection

@section('button-next')
    <a href="{{ route('durvis', app()->getLocale()) }}"><h5>{{ __('content.text-title-durvis') }} <span class="next-icon">></span></h5></a>
@endsection
