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
								@for ($i = 2017; $i >= 1900; $i--)
									<option value="{$i}}" @if($i == $selectYear) selected @endif>{{ $i }}</option>
								@endfor
							</select>
						</div>

						<div class="form-group">
							<label for="brand">Marca</label>
							<select id="select-brand" class="form-control input-sm" name="brand_id">
								<option value="">Seleccionar...</option>
								@foreach($brands as $brand)
									<option value="{{ $brand->id }}" @if($brand->id == $selectBrand) selected @endif>
                                        {{ $brand->name }}
                                    </option>
								@endforeach

							</select>
						</div>

						<div class="form-group">
							<label for="model">Modelo</label>
							<select id="select-model" class="form-control input-sm" name="model_id">
								<option value="">Seleccionar...</option>
								@foreach($models as $model)
									<option value="{{ $model->id }}" @if ($model->id == $selectModel) selected @endif>
                                        {{ $model->name }}
                                    </option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="model">Texto</label>
							<input id="select-model" class="form-control input-sm" name="q" value="{{$selectQ}}">
						</div>

						<button id="btn-filter" type="submit" name="button" class="btn btn-warning btn-sm btn-block"><i class="fa fa-search" aria-hidden="true"></i> Filtrar</button>
					</form>
					

				</div><!-- /#filter -->

			</div><!-- /.col -->

			<div class="col-md-10">
                @foreach($cars as $car)
                    <div class="car" >
                        <img src="{{ Storage::url($car->photo) }}" />
                        <h3>
                            {{ $car->model->brand->name }}  {{ $car->model->name }}
                            <span >
							(USD {{ $car->price }})
						</span>
                        </h3>
                        <p>
                            {{ $car->description }}
                        </p>
                        <div class="car-footer">
                            <a href="/reservar/{{$car->id}}" name="button" class="btn btn-success btn-sm">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Reservar</a>
                        </div>
                    </div><!-- /.car -->
                @endforeach

                @if(count($cars) == 0)
                    <div class="alert alert-warning hidden" role="alert">
                        Lo sentimos, no hay autos para el criterio de búsqueda seleccionado.
                    </div>
                @endif





			</div><!-- /.col -->

		</div><!-- /.row -->

	</div><!-- /.container -->
</div><!-- /#sales -->

@endsection