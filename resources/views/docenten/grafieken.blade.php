@extends('docenten.layouts.app')
@include('docenten.components.includes')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Statistieken</h1>
    </div>
</div><!--/.row-->
<div class="row">
    @yield('vakken')
</div><!--/.row-->

<div class="row">
    @yield('klassen')
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Line Chart</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Bar Chart</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="bar-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-md-6"><!--Doughnut Chart-->
        <div class="panel panel-default">
            <div class="panel-heading">Doughnut Chart</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="chart" id="doughnut-chart"></canvas>
                </div>
            </div>
        </div>
    </div><!--/.Doughnut Chart-->
    <div class="col-xs-6 col-md-3"><!--Persentage Chart blauw-->
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Label:</h4>
                <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
                </div>
            </div>
        </div>
    </div><!--/.Persentage Chart blauw-->
    <div class="col-xs-6 col-md-3"><!--Persentage Chart oranje-->
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Label:</h4>
                <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
                </div>
            </div>
        </div>
    </div><!--/.Persentage Chart oranje-->
    <div class="col-xs-6 col-md-3"><!--Persentage Chart teal-->
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Label:</h4>
                <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
                </div>
            </div>
        </div>
    </div><!--/.Persentage Chart teal-->
    <div class="col-xs-6 col-md-3"><!--Persentage Chart rood-->
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Label:</h4>
                <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
                </div>
            </div>
        </div>
    </div><!--/.Persentage Chart rood-->
</div><!--/.row-->

<div class="row">

</div><!--/.row-->
@endsection