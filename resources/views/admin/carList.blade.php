@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Listado de autos</div>
		        <div class="panel-body">
			        <table class="table table-striped">
			        	<thead>
			        		<tr>
			        			<th>Id</th>
								<th>Imagen</th>
			        			<th>Marca</th>
			        			<th>Modelo</th>
			        			<th>Acciones</th>
			        		</tr>
			        	</thead>
			        	<tbody>
							@foreach($cars as $car)
								<tr>
									<td>{{ $car->id }}</td>
									<td><img src="{{ asset($car->photo) }}" alt="" style="max-height:50px; max-width:50px"></td>
									<td>{{ $car->model->brand->name }}</td>
									<td>{{ $car->model->name }}</td>
									<td>
										<a href="/admin/autos/{{$car->id}}" class="btn btn-primary btn-sm">
											Editar
										</a>
										<a href="/admin/autos/{{$car->id}}/eliminar" class="btn btn-danger btn-sm">
											Eliminar
										</a>
									</td>
								</tr>
							@endforeach
			        	</tbody>
			        </table>
		        </div>
			</div>
		</div>
	</div>
</div>

@endsection