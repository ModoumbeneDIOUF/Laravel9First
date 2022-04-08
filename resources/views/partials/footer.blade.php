<footer>
    &copy; Copyright {{ date('Y') }}

    @if(Route::is('home'))
      &middot; <a href="{{ route('about') }}"> About Us</a>
    @endif

</footer>
