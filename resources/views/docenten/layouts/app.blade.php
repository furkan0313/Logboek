<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logboek Docenten dashboard</title>

        <link href="/css/docenten/bootstrap.min.css" rel="stylesheet">
        <link href="/css/docenten/datepicker3.css" rel="stylesheet">
        <link href="/css/docenten/styles.css" rel="stylesheet">

        <!--Icons-->
        <script src="/js/docenten/lumino.glyphs.js"></script>

    </head>
    <body>
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
            <li class="active"><a href="{{url('/docent')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
            <li><a href="{{url('/docent/vakken')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Vakken</a></li>
            <li><a href="{{url('/docent/grafieken')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Grafieken</a></li>
            <li><a href="{{url('/docent/logboeken')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Logboeken</a></li>
            <li><a href="{{url('/docent/trajecten')}}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Trajecten</a></li>
            <li><a href="{{url('/docent/meldingen')}}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Meldingen &amp; berichten</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{{url('/logout')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Uitloggen</a></li>
        </ul>

    </div><!--/.sidebar-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <!-- Actieve pagina toevoegen -->
                <li class="active">Active page.</li>
            </ol>
        </div>
    @yield('content')
    </body>
    <script src="/js/docenten/jquery-1.11.1.min.js"></script>
    <script src="/js/docenten/chart.min.js"></script>
    <script src="/js/docenten/chart-data.js"></script>
    <script src="/js/docenten/easypiechart.js"></script>
    <script src="/js/docenten/easypiechart-data.js"></script>
    <script src="/js/docenten/bootstrap-datepicker.js"></script>
    <script>
        $('#calendar').datepicker({});

        !function ($) {
            $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
</html>