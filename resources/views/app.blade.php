@include('pages.layouts.header')

    <body>
        <div class="wrapper">
            @if (!Request::is('login'))
                @include('pages.layouts.sidebar')
            @endif
            <div class="main">
                @if (!Request::is('login'))
                    @include('pages.layouts.navbar')
                @endif
                @yield('content')
                @if (!Request::is('login'))
                    @include('pages.layouts.footer')
                @endif

            </div>
        </div>
        @include('pages.layouts.scripts')
    </body>
