@extends('layout')

@section('header')
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
                <h3 class="widget-title">
                    <span>Latest news</span>
                </h3>
            </div>
        </div>

    </div>
@stop