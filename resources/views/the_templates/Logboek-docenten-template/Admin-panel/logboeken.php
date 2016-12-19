<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/menu.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Logboeken</h1>
    </div>
</div><!--/.row-->
<div class="row">
    <?php include 'includes/vakken.php'; ?>
</div><!--/.row-->

<div class="row">
    <?php include 'includes/klassen.php'; ?>
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
                                        <button name="submit"><a href='leerling.php'>Bekijken</a></button>
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


	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
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
</body>

</html>
