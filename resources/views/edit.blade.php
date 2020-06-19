<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
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
	<form method="post" action="/paciente/{{ $paciente->id }}">
		{{ csrf_field() }}

		{{ method_field('PUT') }}
		
		<p>Nome: <input type="text" value="{{ $paciente->nome }}" name="nome"></p>
		<p>CPF: <input type="text" value=" {{ $paciente->cpf }} " name="cpf"></p>
		<p>Sexo: <input type="text" value="{{ $paciente->sexo }}" name="sexo"></p>

		<p> <input type="submit" value="Editar" class="waves-effect waves-light btn-small"> </p>
		
		

	</form>

	<form action="/paciente/{{ $paciente->id }}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Excluir" class="waves-effect waves-light btn-small">
        </form>
		
    </div>
</body>
</html>