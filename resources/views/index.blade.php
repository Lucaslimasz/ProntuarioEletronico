<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    

  	<style>
    	body{
    		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
         	
        	
        	background-repeat: no-repeat;
        	

    		}
    </style>
            
</head>
<body background="{{ asset('imagens/fundo.jpg') }}">

@include('nav')
<div class="container">
@if (Auth::guest())
  
  <div class="row">
    <div class="col s12 m6">
      <div class="card white darken-1">
        <div class="card-content black-text">
          <span class="card-title" align="center">Registre-se ou faça seu login!</span>
          <p align="center">Através do login você terá acesso a consultas e cadastramentos!</p>
        </div>
      </div>
    </div>
  </div>
</div>  
@else




  
 <div class="row">
    <div class="col s12 m6">
      <div class="card white darken-1">
        <div class="card-content black-text">
          <span class="card-title">Clínica São Lucas</span>
          <p>Cadastramento de médicos e pacientes</p>
        </div>
        <div class="card-action ">
          <a href="/paciente">Cadastrar Paciente</a>
          <a href="/medico">Cadastrar Médico</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m6">
      <div class="card white darken-1">
        <div class="card-content black-text">
          <span class="card-title"></span>
          <p>Marcar consultas</p>
        </div>
        <div class="card-action">
          <a href="/marcar">Marcar Consulta</a>          
        </div>
      </div>
    </div>
  </div>


@endif


 
</body>
</html>