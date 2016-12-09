@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="/css/user.css">
@endsection
@section('content')
    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup"><img src="/img/iphone.svg" class="device">
                        <div class="screen"></div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1 style="font-size:42px;">Bekijk de nieuwe Aventus logboek App</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque. </p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="#">Lorem ipsum</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">Lorem ipsum</h2>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
            <footer>Lorem ipsum</footer>
        </blockquote>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Wat kan deze app</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.&nbsp; </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-pencil"></i>
                            <p>Cloud-ready </p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-education"></i>
                            <p>Saves You Money</p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-user"></i>
                            <p>Fire Proof</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Mobile App © 2016</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
@endsection