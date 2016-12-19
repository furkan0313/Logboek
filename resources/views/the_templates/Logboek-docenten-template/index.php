<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pagina</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/PUSH---Bootstrap-Button-Pack1.css">
    <link rel="stylesheet" href="assets/css/PUSH---Bootstrap-Button-Pack3.css">
    <link rel="stylesheet" href="assets/css/PUSH---Bootstrap-Button-Pack2.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/PUSH---Bootstrap-Button-Pack.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background:#f1f7fc;">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"> <img src="assets/img/logo.png" style="height:145%;margin-top:-5px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <button class="btn btn-primary btn-sm navbar-btn navbar-right" type="button" style="position:inherit;">Inloggen </button>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#">First Item</a></li>
                    <li role="presentation"><a href="#">Second Item</a></li>
                    <li role="presentation"><a href="#">Third Item</a></li>
                    <li role="presentation">
                        <a href="#"> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="login-clean" style="padding-top:15%;">
        <!-- Het formulier heeft nu een action naar index.html,
            Deze moet natuurlijk door de backend nog aangepast worden.
            -->
        <form method="post" action="Admin-panel/index.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/aventuslogo.png" style="max-height:155px;"></div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>