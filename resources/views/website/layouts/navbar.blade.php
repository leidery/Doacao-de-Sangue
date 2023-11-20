
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Doação de Sangue</a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="float-end me-5">
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('login') }}">Agendar doação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/requisitos-para-doacao') }}">Requisitos para doação</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Institucional
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('/') }}">Home</a></li>
              <li><a class="dropdown-item" href="{{ url('/sobre-nos') }}">Sobre nós</a></li>
              <li><a class="dropdown-item" href="{{ url('/politica-de-privacidade') }}">Política de privacidade</a></li>
              <li><hr class="dropdown-divider"></li>
              @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="dropdown-item">Login</a>
  
                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                      @endif
                  @endauth
              @endif
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>