@extends('section')

@section('hero-image')
    <img src="{{ url('/images/hero/pasteiga.jpg') }}" alt="">
@endsection

@section('color')
    yellow
@endsection

@section('image-1')
    <img src="{{ url('/images/content/pasteiga/1.jpg') }}" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/pasteiga/2.jpg') }}" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/pasteiga/3.jpg') }}" class="vertical" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/pasteiga/4.jpg') }}" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/pasteiga/5.jpg') }}" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/pasteiga/6.jpg') }}" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/pasteiga/7.jpg') }}" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/pasteiga/8.jpg') }}" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/pasteiga/9.jpg') }}" alt="">
@endsection

@section('title')
    {{ __('content.text-title-pasteiga') }}
@endsection

@section('about-name')
    {{ __('content.text-name-pasteiga') }}
@endsection

@section('about-section')
    {{ __('content.text-description-pasteiga-1') }}
    <br/><br/>
    {{ __('content.text-description-pasteiga-2') }}
    <br/><br/>
    {{ __('content.text-description-pasteiga-3') }}
@endsection

@section('button-next')
    <a href="{{ route('gaidisana', app()->getLocale()) }}"><h5>{{ __('content.text-title-gaidisana') }} <span class="next-icon">></span></h5></a>
@endsection
