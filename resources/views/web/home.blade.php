@extends('layouts.master')

@section('title')
Inicio
@endsection

@section('content')

<div id="home">
	<!-- Home Carousel -->
    <div id="home-carousel" class="carousel slide">

		<!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
            <li data-target="#home-carousel" data-slide-to="2"></li>
			<li data-target="#home-carousel" data-slide-to="3"></li>
			<li data-target="#home-carousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/audi_1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Audi</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/volvo_1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Volvo</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/audi_2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Audi</h2>
                </div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('img/bmw_1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>BMW</h2>
                </div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('img/bentley_1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Bentley</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home-carousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#home-carousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div><!-- /#home-carousel -->


    <div class="container">

        <div class="row">

			<div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenido a <span>AUTO</span><strong>VIP</strong>
                </h1>
            </div><!-- /.col -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-car" aria-hidden="true"></i> Venta de 0km</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="ventas.html" class="btn btn-default">Ver autos</a>
                    </div>
                </div>
            </div><!-- /.col -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-bullhorn" aria-hidden="true"></i> Venta de Usados</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="ventas.html" class="btn btn-default">Ver autos</a>
                    </div>
                </div>
            </div><!-- /.col -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-file-text-o" aria-hidden="true"></i> Trámites</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Ver trámites</a>
                    </div>
                </div>
            </div><!-- /.col -->

        </div><!-- /.row -->

	</div><!-- /.container -->

</div><!-- /#home -->

@endsection