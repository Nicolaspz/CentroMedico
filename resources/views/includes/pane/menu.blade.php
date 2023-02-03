<ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="./index.html">
        <i class="ni ni-tv-2 text-primary"></i> Relatórios
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/icons.html">
        <i class="ni ni-planet text-blue"></i> Vagas
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/maps.html">
        <i class="far fa-newspaper text-orange"></i> Candidatos
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/profile.html">
        <i class="ni ni-single-02 text-yellow"></i>Perfil de Usuário
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('logout')}}"
        onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
      >
        <i class="fas fa-sign-in-alt"></i> Sair
      </a>
      <form action="{{route('logout')}}" method="POST" style="display: none;" id="formLogout">
        @csrf
    </form>
    </li>
  </ul>
