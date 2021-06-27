@extends('layouts.preg')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<table class="table" border="0">
<thead class="thead-dark">
	<th scope="col">Número de pregunta</th>
	<th scope="col">Descripción</th>
	<th scope="col">Fecha de creación</th>
	<th scope="col">Acción</th>
</thead>
<tbody>
<div class="container"> 
<div class="row">  
		@forelse ($preguntas as $pregunta)
			<tr>
				
				<td>{{$pregunta->id}}</td>
				<td>{{$pregunta->pregunta}}</td>
				<td>{{$pregunta->created_at}}</td>

				<td>
					<a href="/Preguntas/{{$pregunta->id}}/edit" class="btn btn-success">Responder</a>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3">sin registro</td>
			</tr>
		@endforelse
		</div>
</div>
</tbody>
</table>

@endsection