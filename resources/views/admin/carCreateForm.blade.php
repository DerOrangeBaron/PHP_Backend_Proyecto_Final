@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Crear un nuevo auto</div>
		        <div class="panel-body">
		        	<form method="POST" action="" enctype="multipart/form-data">
		        		
		        		<div class="form-group row">
		        			<div class="col-md-4">
		        				<label for="year">Año</label>
								<select class="form-control" name="year">
									<option value="">Seleccionar...</option>
									@for ($i = 2017; $i >= 1900; $i--)
									<option value="{$i}}">{{ $i }}</option>
									@endfor
								</select>
		        			</div>
		        			<div class="col-md-4">
		        				<label for="brand">Marca</label>
								<select class="form-control" name="brand">
									<option value="">Seleccionar...</option>
								</select>
		        			</div>
		        			<div class="col-md-4">
		        				<label for="model">Modelo</label>
								<select class="form-control" name="model">
									<option value="">Seleccionar...</option>
								</select>
		        			</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="photo">Descripción</label>
								<textarea class="form-control" name="description" rows="5"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-4">
								<label for="photo">Precio</label>
								<input type="number" name="price" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-4">
								<label for="photo">Foto</label>
								<input type="file" name="photo">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-4">
								<input type="submit" value="Guardar" class="btn btn-primary">
							</div>
						</div>

						
		        	</form>
		        </div>
			</div>
		</div>
	</div>
</div>

@endsection