@extends('layouts.app')

@section('stylesheets')
    <link href="/css/home/styles.css" rel="stylesheet">
    <link href="/css/home/Hero-Technology.css" rel="stylesheet">
@endsection

@section('content')
    @foreach($courses as $course)
        <div class="jumbotron hero-technology" style="background:url('{{ $course->publicImageLocation }}');">
            <h1 class="hero-title">{{$course->name}} </h1>
            <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Lessen </a></p>
        </div>
    @endforeach
@endsection