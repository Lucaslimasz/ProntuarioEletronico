<nav>
  
    <div class="nav-wrapper blue">
    	<div class="container">	
      		<a class="brand-logo">Sistema Prontuario</a>
      		<ul class="right hide-on-med-and-down">
            
            @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @else
       			<li><a href="/">home</a></li>
        		<li><a href="/paciente">Pacientes</a></li>
        		<li><a href="/medico">Médicos</a></li>
        		<li><a href="/marcar"> Consultas</a></li>
            
             <!-- Authentication Links -->
                        
                            <li class="dropdown">
                                

                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                
                            </li>
                        @endif



            </ul>

    	</div>
	</div>

  </nav>
  @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>

