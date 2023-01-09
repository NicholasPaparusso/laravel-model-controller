<header>
    <div class="container d-flex align-items-center">

        <div class="title">
            <h1>
                Laravel Movie Database
            </h1>
        </div>

        <div class="navbar">
            <ul>
                <li><a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}"> <i class="fa-solid fa-house"></i> Home</a></li>

                <li><a class="{{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}"> <i class="fa-solid fa-address-card"></i> About</a></li>

                <li><a class="{{Route::currentRouteName() === 'contact' ? 'active' : ''}}" href="{{route('contact')}}"> <i class="fa-solid fa-film"></i> contact</a></li>

            </ul>
        </div>

    </div>
</header>
