@extends('layouts.master')

@section('title')
Reservar auto
@endsection

@section('content')

<div id="about-us">
	<div class="container">

		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Reservar auto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <img class="thumbnail img-responsive" src="/img/audi_1.jpg" alt="">
                <h3>Audi A1</h3>
                <h4>USD 56.000</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            </div>
            <div class="col-md-7">
                    
                    <div class="row">
                        <div class="col-md-12">

                            <div class="alert alert-success alert-dismissible fade in" role="alert"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span></button> 
                                <p>
                                    <b>Reserva realizada.</b>
                                </p> 
                                <p>
                                    Se han enviado sus datos de contacto correctamente. Un agente se contactará a la brevedad.
                                </p>
                            </div>

                            <form method="POST" action="" class="jumbotron"> 
                                <h4 class="text-center">Completa tus datos para reservar</h4>
                                <div class="form-group">
                                    <label>Nombre completo</label>
                                    <input type="text" name="" class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="" class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" name="" class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Enviar" class="btn btn-primary btn-md">
                                </div>
                            </form>
                        </div>
                    </div>
                
				
            </div>
        </div><!-- /.row -->


	</div><!-- /.container -->
</div><!-- /#about-us -->

@endsection