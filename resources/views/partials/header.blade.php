
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item {{ (Request::route()->getName() == 'home') ? 'active' : '' }}">
        <a class="nav-link " href=" {{ route('home') }} ">Home</a>
      </li>
      <li class="nav-item {{ (Request::route()->getName() == 'shop') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('shop') }}">Prodotti</a>
      </li>
      <li class="nav-item {{ (Request::route()->getName() == 'contatti') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
      </li>
    </ul>
  </nav>