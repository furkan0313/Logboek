<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 2-12-2016
 * Time: 14:59
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Logboek </span>Docenten dashboard</a>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <li><a href="vakken.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Vakken</a></li>
        <li><a href="grafieken.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Grafieken</a></li>
        <li><a href="logboeken.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Logboeken</a></li>
        <li><a href="trajecten.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Trajecten</a></li>
        <li><a href="meldingen.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Meldingen &amp; berichten</a></li>
        <li role="presentation" class="divider"></li>
        <li><a href="logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Uitloggen</a></li>
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <!-- Actieve pagina toevoegen -->
            <li class="active">Active page.</li>
        </ol>
    </div><!--/.row-->

