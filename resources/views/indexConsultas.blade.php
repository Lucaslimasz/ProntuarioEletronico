<!DOCTYPE html>
<html>
<head>
	<title>Paciente</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    

</head>
<body background="{{ asset('imagens/fundo.jpg') }}">
<body >
	@include('nav');

    <!-- <img src="{{ asset('imagens\fundo.jpg') }}">-->
	
	<div class="container">
		<ul class="collection with-header">

        	<li class="collection-header" align="center"><h4>Consultas Marcadas</h4></li>
        	@foreach ($Consultas as $Consulta)
        	<li class="collection-item" value="{{ $Consulta->nomePaciente }}"><div>Paciente: {{ $Consulta->nomePaciente }} &nbsp; |  &nbsp;  Médico: {{ $Consulta->nomeMedico }}  &nbsp; | &nbsp;  Dia: {{$Consulta->dataConsulta}} &nbsp; | &nbsp; Hora: {{ $Consulta->horaConsulta }}<a href="/marcar/{{ $Consulta->id }}/edit" class="secondary-content"><i class="material-icons">Editar</i></a></div></li>
        	@endforeach
        
      	</ul>
      	<a class="waves-effect waves-light btn-small" href="/marcar/create">Nova Consulta</a>
    </div>
    

        

</body>
</html>