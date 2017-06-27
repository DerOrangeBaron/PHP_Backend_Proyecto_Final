@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Listado de marcas</div>
		        <div class="panel-body">
			        <table class="table table-striped">
			        	<thead>
			        		<tr>
			        			<th>Id</th>
			        			<th>Nombre</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        		@foreach($brands as $b)
			        		<tr>
			        			<td>{{ $b->id }}</td>
			        			<td>{{ $b->name }}</td>
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