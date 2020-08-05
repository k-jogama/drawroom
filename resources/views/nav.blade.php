<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/">drawroom</a>

  <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ config('const.DRAW') }}</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ config('const.DRAWREQUEST') }}</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ config('const.LOGIN') }}</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home.create') }}"><i class="fas fa-pen mr-1"></i>{{ config('const.TOPOST') }}</a>
    </li>
    @endauth

    @auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button" onclick="location.href=''">
          {{ config('const.MYPAGE') }}
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          {{ config('const.LOGOUT') }}
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
      @csrf
    </form>
    @endauth
  </ul>
</nav>