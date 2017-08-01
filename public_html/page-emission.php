<?php

require_once 'functions.php';

$config=read_config();
$chain=@$_GET['chain'];

if (strlen($chain))
    $name=@$config[$chain]['name'];
else
    $name='';


if (isset($_POST['qty'])) {
    echo "{\"emission\": \"true\", \"count\": \"{$_POST['qty']}\", \"result\": \"ok\"}";
    die;
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="description" content="">
    <meta name="keywords" content="ticket, event">
    <meta name="author" content="Sergey Miletskiy">
    <meta name="copyright" content="Inmar"/>
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="theme-color" content="#ffffff">
    <title>TransparentFuture</title><!-- Le styles -->
    <link rel="stylesheet" type="text/css" media="all" href="bootstrap.min.css">
    <!-- This file store project specific CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--></head>
<body class="body"><!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/en/">TransparentFuture</a></div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="page-request.php">Запрос на товар</a></li>
                <li class=""><a href="page-emission.php">Эмиссия</a></li>
                <li class=""><a href="page-move.php">Перемещение</a></li>
                <li class=""><a href="page-sell.php">Продажа</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-wrapper">

    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
        <div class="form-group">
            <label for="from" class="col-sm-2 control-label">Запрос от производителя:</label>
            <div class="col-sm-9">
                <select class="form-control col-sm-6" name="from" id="from">
                    <option value="1RTu2b1mXC2U7UWKmbC9DoPQkWbaMAtn6wNyc6">milk Producer (1RTu2b1mXC2U7UWKmbC9DoPQkWbaMAtn6wNyc6, local)</option>
                    <option value="1YunzEQ4xK8gpeC3XSLSnMfsgLz8iLZCS3D5pg">Producer 1 (1YunzEQ4xK8gpeC3XSLSnMfsgLz8iLZCS3D5pg, local)</option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="qty" class="col-sm-2 control-label">Количество:</label>
            <div class="col-sm-9">
                <input class="form-control" name="qty" id="qty" placeholder="1000.0">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <input class="btn btn-default" type="submit" name="issueasset" value="Выпустить квоту">
            </div>
        </div>
    </form>

</div>
<footer class="footer">
    <div class="container"><p class="text-muted">&copy; TransparentFuture 2017 </p></div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
