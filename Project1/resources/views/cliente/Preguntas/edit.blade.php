@extends('layouts.preg')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Preguntas/{{$pregunta->id}}" method="post">
    @csrf
	@method('PUT')
    Pregunta:<br>
    <input type="text" name="pregunta" value="{{$pregunta->pregunta}}">
    <br>
    Respuesta:<br>
    <input type="text" name="respuesta" >
    <br>
    <br><input type="submit" class="btn btn-primary" value="Responder">
</form>

@endsection