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

                    <li class="nav-item">
                      <a class="btn btn-primary" href="{{route('posts.create')}}">Aggiungi un post</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

</header>

<main class="margin-top-90">
    <div class="container">
      @yield('content')
    </div>
</main>

<footer>

</footer>
 @yield('script')


@include('layouts.partials._footer')
