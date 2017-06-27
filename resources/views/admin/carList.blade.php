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
			        			<th>Marca</th>
			        			<th>Modelo</th>
			        			<th>Acciones</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        		<tr>
			        			<td>1</td>
			        			<td>Audi</td>
			        			<td>Q6</td>
			        			<td>
			        				<a class="btn btn-primary btn-sm" href="">Editar</a>
			        				<a class="btn btn-danger btn-sm" href="">Eliminar</a>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>1</td>
			        			<td>Audi</td>
			        			<td>Q6</td>
			        			<td>
			        				<a class="btn btn-primary btn-sm" href="">Editar</a>
			        				<a class="btn btn-danger btn-sm" href="">Eliminar</a>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>1</td>
			        			<td>Audi</td>
			        			<td>Q6</td>
			        			<td>
			        				<a class="btn btn-primary btn-sm" href="">Editar</a>
			        				<a class="btn btn-danger btn-sm" href="">Eliminar</a>
			        			</td>
			        		</tr>
			        	</tbody>
			        </table>
		        </div>
			</div>
		</div>
	</div>
</div>

@endsection