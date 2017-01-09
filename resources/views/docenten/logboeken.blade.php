@extends('docenten.layouts.app')
@include('docenten.components.includes')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Logboeken</h1>
        </div>
    </div><!--/.row-->
    <h2 class="page">Vakken</h2>
    <div class="row">
        @yield('vakken')
    </div><!--/.row-->

    <h2>Klassen</h2>
    <div class="row">
        @yield('klassen')
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Advanced Table</div>
                <div class="panel-body">
                    <table>
                        <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">Leerling nummer</th>
                            <th data-field="name" data-sortable="true">Naam</th>
                            <th data-field="price" data-sortable="true">Laatst ingeleverd</th>
                            <th>
                                -
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
@endsection