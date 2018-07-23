{{-- NavBar --}}
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">后台</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('backend.home') }}"><i class="material-icons">home</i></a></li>
                <li><a href="#!"><i class="material-icons">notifications</i></a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" >
                       <i class="material-icons" style="width: 24px">exit_to_app_back</i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

            <a href="#" data-target="slide-out" class="sidenav-trigger button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>

        </div>
    </nav>
</div>
