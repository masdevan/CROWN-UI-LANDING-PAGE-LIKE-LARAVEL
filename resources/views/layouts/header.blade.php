<header class="header-outer">
    <div class="limit">
        <div class="marginer">

            <div class="header-flex">

            <div class="header-logo">
                <a href="/"><img src="https://i.imgur.com/yKteP6D.png" alt="Logo_Website"></a>
            </div>

            <div class="header-list">
            <ul>
                <li><a href="">About</a></li>
                <li><a href="">UI Concept</a></li>
                <li><a href="">Source</a></li>
                <li><a href="">Ecosystem</a></li>
            </ul>
            </div>

            <div class="header-search">
                <form action="/search" method="get">
                <span id="drop-search"><i id="search-button" class="fa fa-magnifying-glass"></i></span>

                <div class="header-search-box" id="search-box">
                <input type="search" placeholder="Search...">
                <button type="submit"><i class="fa fa-magnifying-glass"></i></button>
                </div>
                </form>
            </div>

            <div class="header-doc">
                {{-- @dd($data); --}}
            <a href="{{ $link_box ?? '/' }}">{{ $name_box ?? 'BackHome' }}</a>
            </div>

        </div>

        </div>
    </div>
</header>
