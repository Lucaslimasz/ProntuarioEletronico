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
	<form method="post" action="/medico">
		{{ csrf_field() }}
		
		<p>Nome: <input type="text" name="nome"></p>
		<p>CRM: <input type="text" name="crm"></p>
		<p>Sexo: <input type="text" name="sexo"></p>
		<p> <input type="submit" value="Enviar" class="aves-effect waves-light btn-small"> </p>
		
	</form>
	</div>

</body>
</html>