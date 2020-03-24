<div id="userbar" class="w-full bg-gray-800 text-white py-2 px-12 text-sm">
    @auth
        Welcome, {{ Auth::user()->name }}!
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            Log out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        Welcome, guest! <a href="{{ route('login') }}">Log in</a>
    @endauth
</div>