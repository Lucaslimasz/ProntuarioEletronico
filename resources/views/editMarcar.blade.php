<!DOCTYPE html>
<html>
<head>
	<title>Edite</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body background="{{ asset('imagens/fundo.jpg') }}">
<body >
	@include('nav')
	<div class="container">
	<form method="post" action="/marcar/{{ $marcar->id }}">
		{{ csrf_field() }}

		{{ method_field('PUT') }}

		<p>Nome do Paciente: <input type="hidden" value="{{ $marcar->nomePaciente }}"name="nomePaciente" >{{ $marcar->nomePaciente }}</p>
		<p>Nome do Medico: <input type="hidden" value="{{ $marcar->nomeMedico }}" name="nomeMedico" >{{ $marcar->nomeMedico }}</p>
		<p>Data da consulta: <input type="date" value="{{ $marcar->dataConsulta }}" name="dataConsulta"></p>
		<p>Horário da consulta: <input type="text" value="{{ $marcar->horaConsulta }}" name="horaConsulta"></p>
		<p>Causa da consulta: <input type="text" value="{{ $marcar->causa }}" name="causa"></p>
		<p> <input type="submit" value="Editar" class="waves-effect waves-light btn-small"> </p>

	</form>

		<form action="/marcar/{{ $marcar->id }}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Excluir" class="waves-effect waves-light btn-small">
        </form>
    </div>
</body>
</html>