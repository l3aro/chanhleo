<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
                <div id="fh5co-logo"><a href="{{ route('home') }}">Wedding<strong>.</strong></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Trang Chủ</a>
                    </li>
                    <li class="{{ request()->routeIs('story') ? 'active' : '' }}">
                        <a href="{{ route('story') }}">Tặng Quà</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>
