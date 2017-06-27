@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Listado de modelos</div>
		        <div class="panel-body">
			        <table class="table table-striped">
			        	<thead>
			        		<tr>
			        			<th>Id</th>
			        			<th>Marca</th>
			        			<th>Nombre modelo</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        		@foreach($models as $m)
			        		<tr>
			        			<td>{{ $m->id }}</td>
			        			<td>{{ $m->brand->name }}</td>
			        			<td>{{ $m->name }}</td>
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