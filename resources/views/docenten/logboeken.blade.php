@extends('docenten.layouts.app')
@include('docenten.components.includes')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Logboeken</h1>
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
                <div class="panel-heading">Advanced Table</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <!--<th data-field="state" data-checkbox="true" >Leerling nr.</th>-->
                            <th data-field="id" data-sortable="true">Leerling nummer</th>
                            <th data-field="name"  data-sortable="true">Naam</th>
                            <th data-field="price" data-sortable="true">Laatst ingeleverd</th>
                            <th>
                                <button name="submit"><a href='{{url('/docent/leerling')}}'>Bekijken</a></button>
                                <!--Dit moet niet een button zijn. Elke row moet klikbaar zijn en naar de juiste leerling gaan in een venster net als op TP-->
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">

    </div><!--/.row-->
@endsection