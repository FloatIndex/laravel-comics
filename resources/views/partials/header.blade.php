<nav class="container">
            
    <a class="logo" href="{{route('home')}}">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
    </a>

    <ul>
        <li>
            <a class="{{Request::route()->getName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">home</a>
        </li>
        <li>
            <a class="{{Request::route()->getName() == 'comics' ||  Request::route()->getName() == 'comic' ? 'active' : ''}}" href="{{route('comics')}}">comics</a>
        </li>
        <li>
            <a href="#">characters</a>
        </li>
        <li>
            <a href="#">movies</a>
        </li>
        <li>
            <a href="#">tv</a>
        </li>
        <li>
            <a href="#">games</a>
        </li>
        <li>
            <a href="#">collectibles</a>
        </li>
        <li>
            <a href="#">videos</a>
        </li>
        <li>
            <a href="#">fans</a>
        </li>
        <li>
            <a href="#">news</a>
        </li>
        <li>
            <a href="#">shop</a>
        </li>
    </ul>
    
</nav>