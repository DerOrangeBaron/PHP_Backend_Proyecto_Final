@extends('layouts.master')

@section('title')
Ventas
@endsection

@section('content')

<div id="sales">
	<div class="container">
		<div class="row">
            <div class="col-xs-12">
                <h1>Ventas</h1>
            </div>
        </div>
		<hr>
		<div class="row">
			<div class="col-md-2">
				<div id="filter">
					<h4>Filtro</h4>
					<form method="GET" action="">
						<div class="form-group">
							<label for="year">Año</label>
							<select id="select-year" class="form-control input-sm" name="year">
								<option value="">Seleccionar...</option>
								@for ($i = 2017; $i >= 1980; $i--)
								<option value="{{$i}}">{{ $i }}</option>
								@endfor
							</select>
						</div>

						<div class="form-group">
							<label for="brand">Marca</label>
							<select id="select-brand" class="form-control input-sm" name="brand_id">
								<option value="">Seleccionar...</option>
							</select>
						</div>

						<div class="form-group">
							<label for="model">Modelo</label>
							<select id="select-model" class="form-control input-sm" name="model_id">
								<option value="">Seleccionar...</option>
							</select>
						</div>
                        <div class="form-group">
                            <label for="model">Texto</label>
                            <input id="text-search" class="form-control input-sm" name="q">
                        </div>

						<button id="btn-filter" type="submit" name="button" class="btn btn-warning btn-sm btn-block"><i class="fa fa-search" aria-hidden="true"></i> Filtrar</button>
					</form>
					

				</div><!-- /#filter -->

			</div><!-- /.col -->

			<div class="col-md-10">

				<div class="alert alert-warning hidden" role="alert">
					Lo sentimos, no hay autos para el criterio de búsqueda seleccionado.
				</div>

				<div class="car" >
					<img src="/img/audi_1.jpg" />
					<h3>
						Audi Q6
						<span >
							(USD 65.000)
						</span>
					</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div class="car-footer">
						<a type="button" name="button" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Reservar</a>
						<a type="button" name="button" class="btn btn-default btn-sm">Más información</a>
					</div>
				</div><!-- /.car -->



			</div><!-- /.col -->

		</div><!-- /.row -->

	</div><!-- /.container -->
</div><!-- /#sales -->

@endsection