<header>
    <div class="container">
        <a href="{{route('home')}}"><img src="./images/dc-logo.png" alt="logo" /></a>
        <ul>
          <li><a class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }} " href="{{route('characters')}}">characters</a></li>
          <li><a class="{{ Route::current()->getName() == 'comics' ? 'active' : '' }} " href="{{route('comics')}}">comics</a></li>
          <li><a class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }} " href="{{route('movies')}}">movies</a></li>
          <li><a class="{{ Route::current()->getName() == 'tv' ? 'active' : '' }} " href="{{route('tv')}}">tv</a></li>
          <li><a class="{{ Route::current()->getName() == 'games' ? 'active' : '' }} " href="{{route('games')}}">games</a></li>
          <li><a class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }} " href="{{route('collectibles')}}">collectibles</a></li>
          <li><a class="{{ Route::current()->getName() == 'videos' ? 'active' : '' }} " href="{{route('videos')}}">videos</a></li>
          <li><a class="{{ Route::current()->getName() == 'fans' ? 'active' : '' }} " href="{{route('fans')}}">fans</a></li>
          <li><a class="{{ Route::current()->getName() == 'news' ? 'active' : '' }} " href="{{route('news')}}">news</a></li>
          <li><a class="{{ Route::current()->getName() == 'shop' ? 'active' : '' }} " href="{{route('shop')}}">shop</a></li>
        </ul>
    </div>
</header>