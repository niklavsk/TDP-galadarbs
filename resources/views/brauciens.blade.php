@extends('section')

@section('hero-image')
    <img src="{{ url('/images/hero/brauciens.jpg') }}" alt="">
@endsection

@section('color')
    orange
@endsection

@section('image-1')
    <img src="{{ url('/images/content/brauciens/1.jpg') }}" alt="">
@endsection

@section('image-2')
    <img src="{{ url('/images/content/brauciens/2.jpg') }}" alt="">
@endsection

@section('image-3')
    <img src="{{ url('/images/content/brauciens/3.jpg') }}" alt="">
@endsection

@section('image-4')
    <img src="{{ url('/images/content/brauciens/4.jpg') }}" alt="">
@endsection

@section('image-5')
    <img src="{{ url('/images/content/brauciens/5.jpg') }}" alt="">
@endsection

@section('image-6')
    <img src="{{ url('/images/content/brauciens/6.jpg') }}" alt="">
@endsection

@section('image-7')
    <img src="{{ url('/images/content/brauciens/7.jpg') }}" alt="">
@endsection

@section('image-8')
    <img src="{{ url('/images/content/brauciens/8.jpg') }}" class="vertical" alt="">
@endsection

@section('image-9')
    <img src="{{ url('/images/content/brauciens/9.jpg') }}" alt="">
@endsection

@section('title')
    Brauciens
@endsection

@section('about-name')
    {{ __('content.text-name-brauciens') }}
@endsection

@section('about-section')
    {{ __('content.text-description-brauciens-1') }}
    <br/><br/>
    {{ __('content.text-description-brauciens-2') }}
@endsection

@section('button-previous')
    <a href="{{ url('/gaidisana') }}"><h5><span class="prev-icon"><</span> Gaidīšana</h5></a>
@endsection

@section('button-next')
    <a href="{{ url('/skatlogs') }}"><h5>Skatlogs <span class="next-icon">></span></h5></a>
@endsection
