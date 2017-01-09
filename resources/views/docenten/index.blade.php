@extends('docenten.layouts.app')
@include('docenten.components.includes')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Home</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Overzicht</div>
                <div class="panel-body">
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="100" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @include('vakken')
        </div>
        <div class="row">
            @include('klassen')
        </div>
        <div class="row">
            @include('percentages')
        </div>

        <div class="row">
            @include('meldingen')
        </div>

        <div class="col-md-4">
            @include('to-do')
        </div>
    </div>
@endsection
