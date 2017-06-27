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
					<form method="POST" action="">
						<div class="form-group">
							<label for="year">Año</label>
							<select id="select-year" class="form-control input-sm" name="year">
								<option value="">Seleccionar...</option>
								@for ($i = 2017; $i >= 1900; $i--)
								<option value="{$i}}">{{ $i }}</option>
								@endfor
							</select>
						</div>

						<div class="form-group">
							<label for="brand">Marca</label>
							<select id="select-brand" class="form-control input-sm" name="brand">
								<option value="">Seleccionar...</option>
							</select>
						</div>

						<div class="form-group">
							<label for="model">Modelo</label>
							<select id="select-model" class="form-control input-sm" name="model">
								<option value="">Seleccionar...</option>
							</select>
						</div>

						<button id="btn-filter" type="submit" name="button" class="btn btn-warning btn-sm btn-block"><i class="fa fa-search" aria-hidden="true"></i> Filtrar</button>
					</form>
					

				</div><!-- /#filter -->

			</div><!-- /.col -->

			<div class="col-md-10">

				<div class="alert alert-warning hidden" role="alert" v-show="!cars_filtered.length">
					Lo sentimos, no hay autos para el criterio de búsqueda seleccionado.
				</div>

				<div class="car" v-for="item in cars_filtered">
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
						<button type="button" name="button" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</button>
						<button type="button" name="button" class="btn btn-default btn-sm">Más información</button>
						<button type="button" name="button" class="btn btn-default btn-sm">Comparar</button>
					</div>
				</div><!-- /.car -->



			</div><!-- /.col -->

		</div><!-- /.row -->

	</div><!-- /.container -->
</div><!-- /#sales -->

@endsection