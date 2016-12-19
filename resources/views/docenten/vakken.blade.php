@extends('docenten.layouts.app')
@include('docenten.components.includes')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vakken</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        @yield('vakken')
    </div><!--/.row-->

    <div class="row">
        @yield('klassen')
    </div><!--/.row-->


    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Trajecten
                </div>
                <!--
                    Door middel van een koppeling van de vakken en klassen die een docent heeft zal de dropdown opgevuld worden
                -->
                <div class="panel-body">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kies uw vak
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kies uw klas
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </div>
                </div>
                <!--
                 Selectie weergave van de dropdowns, de trajecten (logboeken) en des betreffende lessen.
                -->
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Trajecten</div>
                            <div class="panel-body">
                                <table width="100%">
                                    <thead>
                                    <tr>
                                        <th data-field="name">Traject</th>
                                        <th data-field="name">Opdracht</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td data-field="name">Traject 1</td>
                                        <td data-field="name">Java 3</td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">Traject 2</td>
                                        <td data-field="name">Java 4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vanwege de opbouw van de pagina is dit helaas geen include -->
            <div class="panel panel-default chat">
                <div class="panel-heading" id="accordion"> Meldingen</div>
                <div class="panel-body">
                    <ul>
                        <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Leerling 1</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
								<span class="chat-img pull-right">
									<img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="pull-left primary-font">Leerling 2</strong> <small class="text-muted">6 mins ago</small>
                                </div>
                                <p>
                                    Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Leerling 3</strong> <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div><!--/.col-->

        <div class="col-md-4">
            <!--
             Kalender voor de docenten
             Docenten kunnen hierin deadlines zien die zijn ingevoerd van trajecten als dit mogelijk is.
            -->
            <div class="panel panel-red">
                <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
                <div class="panel-body">
                    <div id="calendar">

                    </div>
                </div>
            </div>
            @yield('to-do')

        </div><!--/.col-->
    </div><!--/.row-->
@endsection