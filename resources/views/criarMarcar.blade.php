<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

	 <!--Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!--Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body background="{{ asset('imagens/fundo.jpg') }}">
<body >
	@include('nav')
	<div class="container">
	<form method="post" action="/marcar">
		{{ csrf_field() }}
			<br>
			<select name="nomeMedico" class="browser-default">
				<option value=""> Select Doctor </option>
				@foreach ($medicos as $medico)
				<option value="{{ $medico->nome }}"> {{ $medico->nome }} </option>
				@endforeach
			</select><br>
		<select name="nomePaciente" class="browser-default"> 
			<option value=""> select the patient </option>
			@foreach ($pacientes as $paciente)
			<option value="{{ $paciente->nome }}"> {{ $paciente->nome }}</option>
			@endforeach
		</option>
		</select>
		<br>		
		<p>Data da consulta: <input type="date" name="dataConsulta"></p>
		<p>Horário da consulta: <input type="text" name="horaConsulta"></p>
		<p>Causa da consulta: <input type="text" name="causa"></p>
		<p> <input type="submit" value="Enviar" class="waves-effect waves-light btn-small"> </p>
	</form>
	</div>
</body>
</html>