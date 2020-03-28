@include('layouts.partials._header')


<header >

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="https://www.calculoid.com/images/Landing_page/235x80xWordPress_logo_calculoid.png.pagespeed.ic.kTgQTwtU5A.png" alt="Worldpress" class="logo_img"></a>
            <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav justify-content-around" style="width:50%;">
                    <li class="nav-item {{(Route::currentRouteName() == 'home') ? "active":""}}">
                        <a class="btn btn-outline-primary" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item d-flex">
                      <a class="btn btn-outline-success" href="{{route('posts.index')}}">Post</a><p><-no relations with entity</p>
                    </li>
                    
                    <li class="nav-item">
                      <a class="btn btn-outline-success" href="{{route('photos.index')}}">Photo</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="btn btn-outline-success" href="{{route('users.index')}}">User</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

</header>

<main class="margin-top-90">
  @if (session('delete'))
    <div class="alert alert-danger" role="alert">Hai cancellato il record {{session('delete')->id}}</div>
  @endif

  @if (session('insert'))
    <div class="alert alert-primary" role="alert">Hai inserito un nuovo record id:{{session('insert')->id}}</div>
  @endif

  @if (session('update'))
    <div class="alert alert-success" role="alert">Hai aggiornato il record {{session('update')->id}}</div>
  @endif
    <div class="container">
      @yield('content')
    </div>
</main>

<footer>

</footer>
 @yield('script')


@include('layouts.partials._footer')
