<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand ml-5" href="/">ReJob</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="navbar-collapse collapse" id="navbarsExample04" style="">
      <form class="form-inline ml-5 my-2 my-md-0">
        <input class="form-control " type="text" placeholder="Search">
      </form>
      <ul class="navbar-nav ml-auto mr-5">
        {{-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
        @if (Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="/reviews">Отзывы</a>
        </li>
         <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="/myreviews">Мои отзывы</a>
            <a class="dropdown-item" href="/profile">Мой профиль</a>
            <a class="dropdown-item" href="/logout">Выйти</a>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="/reviews">Отзывы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myreviews">Мои отзывы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Мой профиль</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Выйти</a>
        </li> --}}
        @else
        <li class="nav-item">
          <a class="nav-link" href="/reviews">Отзывы</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/login">Войти</a>
        </li>
        @endif         
      </ul>
      
      
    </div>
  </nav>