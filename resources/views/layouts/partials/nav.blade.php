<nav id="site-navigation" class="main-navigation"  style="text-align: center;>
    <div class="menu-menu-1-container">
        <ul id="menu-menu-1" class="menu"">
            <li><a href="{{'/'}}">Home</a></li>
            <li><a href="#pageintro">About</a></li>
            <li><a href="#portfolio">Companies</a></li>
            <li>
                @if (Route::has('login'))
                <p class="mb-0 register-link">
                    @auth
                   <a href="{{ url('home') }}">Home</a>
                    @else
                   <a href="{{ route('login') }}">Login</a>
                   @endauth
                </p>
                @endif
            </li>
        </ul>
    </div>
</nav>
