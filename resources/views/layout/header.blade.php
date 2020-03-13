<nav class="navbar navbar-expand-lg" style="background: black;">
    <a style="color:white;" class="navbar-brand" href="/">
        <img src="https://www.thegoldteamny.com/wp-content/uploads/sites/294/2019/06/logo.png" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="https://www.thegoldteamny.com/wp-content/uploads/sites/294/2019/06/logo.png" width="30" height="30">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a style="color:white;" class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a style="color:white;" class="nav-link" href="qui-sommes-nous">Qui-sommes nous ?</a>
            </li>
            <li class="nav-item">
                <a style="color:white;" class="nav-link" href="pronostiques">Nos pronostiques</a>
            </li>
            <li class="nav-item">
                <a style="color:white;" class="nav-link" href="contact">Nous contactez</a>
            </li>
            <li class="nav-item">
                <a style="color:white;" class="nav-link" href="blog">Blog</a>
            </li>

            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" style="text-decoration: none;color: white" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" style="text-decoration: none;color: white" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="admin">
                         Zone Admin
                     </a>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
