
<nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top">
    <div class="container">

        <a class="navbar-brand logo" href="{{ url('/') }}">

            <img src={{ asset('imgs/logoPage.png') }} width="40px" height="40px" alt="logo">
            {{ config('app.name', 'Shopco') }}

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav  main mr-auto w-100 d-flex justify-content-end">
                <li class="nav-item">
                    <a class="nav-link p-0" href="/" data-section="header" class="active" >home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="/posts" >Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="/posts/create" >Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="" data-section=".timeline">timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="" data-section=".my-features">featurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="" data-section=".contact-Us">contact-Us</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav d-flex justify-content-start " style="width: 28%">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white p-0 mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white p-0 " href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link d-inline-block p-0 dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

{{-- <!-- Start Landing page -->
<nav>
    <div class="logo "> <a href=""><img src="imgs/logoPage.png" width="40px" height="40px" alt="logo"> WedBee</a> </div>
    <i class="fa fa-bars fa-2x colapps"></i>
    <ul class="">
        <li > <a href="" data-section="header" class="active" >Home </a> </li>
        <li> <a href="" data-section=".about-us">About Us </a> </li>
        <li> <a href="" data-section=".skills">Skills </a> </li>
        <li> <a href="" data-section=".timeline">Experiance</a> </li>
        <li> <a href="" data-section=".my-features">Features</a> </li>
        <li> <a href="" data-section=".contact-Us">Contact US</a> </li>
    </ul>
</nav> --}}
<!-- start setting box -->
<div class="setting-box">
    <i class="fas  fa-cog icon"></i>
    <div class="settings-container">
        <div class="box-options">
            <h4>Theams</h4>
            <ul class="colors-list">
                <li class="color-item active" data-color = "#5ab8eb"></li>
                <li class="color-item" data-color = "#8860d0"></li>
                <li class="color-item" data-color = "#84ceeb"></li>
                <li class="color-item" data-color = "#5aeb86"></li>
                <li class="color-item" data-color = "#e873cf"></li>
            </ul>
            <h4>stop chang bg</h4>
            <span class="stop-bg"><i class="fas fa-circle"></i></span>
        </div>
    </div>
</div>
<!-- end setting box -->
