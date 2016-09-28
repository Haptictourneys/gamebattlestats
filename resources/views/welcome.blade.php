@extends('layout')

@section('header')
    <div class="container search-nav">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <a href="#">
                <span class="glyphicon glyphicon-search"></span>
            </a>
            <a href="#">
                <span class="glyphicon glyphicon-user"></span>
            </a>
        </div>
    </div>

    <nav class="navbar header-bg">
        <div class="container">
            <div class="navbar-header col-md-4">
                <a href="#"><img src="templates/gbs/images/logo.png" alt="" class="img-responsive logo"></a>
            </div>

            <div class="col-md-6 col-md-offset-2">
                <ul class="nav navbar-nav text-center">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Tournaments</a></li>
                    <li><a href="#">Ladders</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="templates/gbs/images/slides/doom.jpg" alt="">
                </div>
                <div class="item">
                    <img src="templates/gbs/images/slides/mirrorsedge.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="platform">
                    <h3>PC</h3>
                    <a href="#">Ladders</a>
                    <span>|</span>
                    <a href="#">Tournaments</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="platform">
                    <h3>PS 4</h3>
                    <a href="#">Ladders</a>
                    <span>|</span>
                    <a href="#">Tournaments</a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="platform">
                    <h3>XBOX</h3>
                    <a href="#">Ladders</a>
                    <span>|</span>
                    <a href="#">Tournaments</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="platform">
                    <h3>Wii</h3>
                    <a href="#">Ladders</a>
                    <span>|</span>
                    <a href="#">Tournaments</a>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-title">
                    <h3>Latest news</h3>
                </div>
            </div>
        </div>

    </div>
@stop