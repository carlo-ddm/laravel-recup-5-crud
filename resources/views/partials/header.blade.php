<header>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'pizzas' ? 'active' : ''}}" href="{{route('pizzas.index')}}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pizzas.create')}}">Crea</a>
        </li>
    </ul>
</header>
