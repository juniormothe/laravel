<!DOCTYPE html>
<html class="no-js h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @component('components.header.header')
    @endcomponent
    @livewireStyles
</head>

<body class="h-100">
    <div class="container-fluid">
        <div class="row">
            @component('components.menu.menu-side')
            @endcomponent
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    @component('components.menu.menu-top')
                    @endcomponent
                </div>
                <div class="main-content-container container-fluid px-4">
                    @yield('content')
                </div>
                <footer class="main-footer d-flex p-2 px-3 bg-white border-top">

                    <span class="copyright ml-auto my-auto mr-2">Copyright
                    </span>
                </footer>
            </main>
        </div>
    </div>
    @livewireScripts
    @component('components.footer.footer')
    @endcomponent
</body>

</html>
