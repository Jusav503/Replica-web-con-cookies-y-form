<header>
    <div class="container">
        <nav>
            <figure>
                <a href="{{route('inntuyo.home')}}" title="ir a inicio"><img src="images/inntuyo-logo.svg" alt="Inntuyo tickets" class="img-fluid"></a>
            </figure>
            @include('partials.headerNav')
        </nav>
        @yield('headerText')
    </div>
</header>