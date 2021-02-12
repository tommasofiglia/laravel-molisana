  <nav class="d-flex justify-center align-center">
    <div class="navlinks_container">
      <a href="{{ route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active_page' : '' }}">home</a>
      <a href="{{ route('prodotti')}}" class="{{Route::currentRouteName() === 'prodotti' ? 'active_page' : '' }}">prodotti</a>
      <a href="{{ route('contatti')}}" class="{{Route::currentRouteName() === 'contatti' ? 'active_page' : '' }}">contatti</a>
    </div>
  </nav>
</header>
