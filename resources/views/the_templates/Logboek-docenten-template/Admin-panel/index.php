<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/menu.php'; ?>
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
		</div><!--/.row-->

        <div class="row">
            <!-- De vakken -->
            <?php include 'includes/vakken.php'; ?>
        </div><!--/.row-->

        <div class="row">
            <?php include 'includes/klassen.php'; ?>
        </div><!--/.row-->

		<div class="row">
<?php include 'includes/percentages.php'; ?>
		</div><!--/.row-->
								
		<div class="row">
			<?php include 'includes/meldingen.php'; ?>

			</div><!--/.col-->
			
			<div class="col-md-4">
			<?php include 'includes/to-do.php'; ?>
			</div><!--/.col-->
		</div><!--/.row-->
<?php include 'includes/footer.php'; ?>
</body>

</html>
