@extends('section')

@section('hero-image')
    @if(app()->getLocale() == 'lv')
        <img src="{{ url('/images/hero/durvis.jpg') }}" alt="">
    @else
        <img src="{{ url('/images/hero/durvis_en.jpg') }}" alt="">
    @endif
@endsection

@section('color')
    dark-blue
@endsection

@section('image-1')
    <img src="{{ url('/images/content/durvis/1.jpg') }}" class="vertical" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/durvis/2.jpg') }}" class="vertical" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/durvis/3.jpg') }}" class="vertical" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/durvis/4.jpg') }}" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/durvis/5.jpg') }}" class="vertical" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/durvis/6.jpg') }}" class="vertical" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/durvis/7.jpg') }}" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/durvis/8.jpg') }}" class="vertical" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/durvis/9.jpg') }}" alt="">
@endsection

@section('title')
    {{ __('content.text-title-durvis') }}
@endsection

@section('about-name')
    {{ __('content.text-name-durvis') }}
@endsection

@section('about-section')
    {{ __('content.text-description-durvis') }}
@endsection

@section('button-previous')
    <a href="{{ route('krustojums', app()->getLocale()) }}"><h5><span class="prev-icon"><</span> {{ __('content.text-title-krustojums') }}</h5></a>
@endsection
