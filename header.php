<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sunday
 */

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sundays</title>
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap.min.css"';?>>
    <link rel="stylesheet" href=<?php echo '"'.get_stylesheet_directory_uri() . '/static/css/font-awesome.min.css"';?>>
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <span class="sr-only"></span>
                            <span class="glyphicon glyphicon-menu-hamburger"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse col-sm-6" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index_catalogue.html">Catalog</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="product.html">Stores</a></li>
                            <li><a href="panier.html">Blog</a></li>
                        </ul>
                    </div>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <div class="col-xs-10">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="col-xs-2">
                                <i class="glyphicon glyphicon-search"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
            </div>
            </div>
        </nav>
        <h1>sundays</h1>
        <p>We craft ocean<br> friendly apparel</p>
        <button type="button" name="button" class="btn btn-lg btn-success center-block">Browse our Products</button>
    </header>
