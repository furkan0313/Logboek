@extends('layouts.app')

@section('stylesheets')
    <link href="/css/home/styles.css" rel="stylesheet">
    <link href="/css/home/Hero-Technology.css" rel="stylesheet">
@endsection

@section('content')
    <div class="jumbotron hero-technology">
        <h1 class="hero-title">PHP </h1>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lessen </a></p>
    </div>
    <div class="jumbotron hero-technology" id="nederlands" style="background:url('/img/nederland.jpg');background-size:cover;background-position:center;">
        <h1 class="hero-title">Nederlands </h1>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lessen </a></p>
    </div>
    <div class="jumbotron hero-technology" id="engels" style="background:url('/img/engels.jpg');background-size:cover;background-position:center;">
        <h1 class="hero-title">Engels </h1>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lessen </a></p>
    </div>
    <div class="jumbotron hero-technology" id="engels" style="background:url('/img/project.jpg');background-size:cover;background-position:center;">
        <h1 class="hero-title">Project </h1>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lessen </a></p>
    </div>
    <div class="jumbotron hero-technology" id="loopbaan" style="background:url('/img/loopbaan.jpg');background-size:cover;background-position:center;">
        <h1 class="hero-title">Loopbaan &amp; Burgerschap</h1>
        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lessen </a></p>
    </div>
@endsection

{{--@section('test')--}}
    {{--@foreach($courses as $course)--}}
        {{--{{$course}}--}}
    {{--@endforeach--}}
{{--@endsection--}}