<!doctype html>
<html class="no-js" lang="es" data-ng-app="adminApp">
<head>
    <title>Titulo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <menu-nav></menu-nav>
    </nav>
</header>
<main class="container">
    <div class="row">
        <div class="col-md-12">
            <ng-view></ng-view>
        </div>
    </div>
</main>
</body>
<script src="js/app/bundle.js"></script>
</html>