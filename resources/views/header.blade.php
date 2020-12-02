<header class="header">
    <div class="headerIn center">
        <a href="{{ route('home') }}" class="headerLogo">
            <img src="images/logo.svg" width="100%" alt="logo.svg">
        </a>
        <div class="headerOpener"></div>
        <nav class="headerMenu">
            <ul>
                <li class="{{ ( Route::currentRouteName() === 'home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ ( Route::currentRouteName() === 'about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">About us</a>
                </li>
                <li class="{{ ( Route::currentRouteName() === 'career') ? 'active' : '' }}">
                    <a href="{{ route('career') }}">Career</a>
                </li>
                <li class="{{ ( Route::currentRouteName() === 'contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Contact us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
