@include('pages.layouts.header')

    <body>
        <div class="wrapper">
            @include('pages.layouts.sidebar')
            <div class="main">
                @include('pages.layouts.navbar')
                @yield('content')
                @include('pages.layouts.footer')

            </div>
        </div>
        @include('pages.layouts.scripts')
    </body>
