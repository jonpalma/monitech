<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Mixen">
    <link rel="shortcut icon" type="img/png" href="img/favicon.ico"/>
    <link rel="stylesheet" href="css/ekko-lightbox.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery_ui.css">
    <link rel="stylesheet" href="style.css">
    <title>Monitech</title>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery-1.12.1-ui.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll nav-logo">
            <img src="img/icons/logo.png" alt="logo" class="vertical-align">
        </a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php" class="nav-padd">
                        <span class="blue"><i class="fa fa-desktop" aria-hidden="true"></i></span> Monitoreo</a>
                </li>
                <li><a href="dispositivos.php" class="nav-padd">
                        <span class="blue"><i class="fa fa-server" aria-hidden="true"></i></span> Dispositivos</a>
                </li>
                <li><a href="graficas.php" class="nav-padd">
                        <span class="blue"><i class="fa fa-bar-chart" aria-hidden="true"></i></span> Gráficas</a>
                </li>
                <li><a href="reportes.php" class="nav-padd">
                        <span class="blue"><i class="fa fa-file-text-o" aria-hidden="true"></i></span> Reportes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>