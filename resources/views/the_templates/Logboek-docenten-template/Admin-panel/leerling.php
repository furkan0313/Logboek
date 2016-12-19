<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/menu.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Leerling</div>
            <div class="panel-body">
        <div class="formulier">
            <!--
                Hieronder staat het formulier.
                Alles is readonly, deze data moet worden ingeladen door een api.
            -->
            <form>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Initiale:</label>
                    <div class="col-sm-10"><input type="text" name="initiale" placeholder="Initiale" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Roepnaam:</label>
                    <div class="col-sm-10"><input type="text" name="roepnaam" placeholder="Roepnaam" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Voornaam:</label>
                    <div class="col-sm-10"><input type="text" name="voornaam" placeholder="Voornaam" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tussenvoegsel:</label>
                    <div class="col-sm-10"><input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Achternaam:</label>
                    <div class="col-sm-10"><input type="text" name="achternaam" placeholder="Achternaam" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Geslacht:</label>
                    <div class="col-sm-10"><input type="text" name="geslacht" placeholder="Geslacht" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Geboortedatum:</label>
                    <div class="col-sm-10"><input type="text" name="geboortedatum" placeholder="Geboortedatum" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Geboorteplaats:</label>
                    <div class="col-sm-10"><input type="text" name="geboorteplaats" placeholder="Geboorteplaats" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Geboorteland:</label>
                    <div class="col-sm-10"><input type="text" name="geboorteland" placeholder="Geboorteland" readonly></div><br>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Geboortegemeente:</label>
                    <div class="col-sm-10"><input type="text" name="geboortegemeente" placeholder="Geboortegemeente" readonly></div><br>
                </div>
            </form>
        </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

    </div>
</div><!--/.row-->


<?php include 'includes/footer.php'; ?>
</body>

</html>