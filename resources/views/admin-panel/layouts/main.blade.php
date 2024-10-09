<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('title') | {{ config('app.name') }}">

    <title>@yield('title') &mdash; {{ config('app.name') }}</title>

    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('') }}" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('adm-panel/vendor/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm-panel/vendor/fontawesome-free-5.15.4-web/css/all.min.css') }}">

    <!-- CSS Libraries -->
    @stack('css_vendor')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('preloader/preloader.css') }}" loading="lazy">
    <link rel="stylesheet" href="{{ asset('adm-panel') }}/assets/css/style-custom.css" loading="lazy">
    <link rel="stylesheet" href="{{ asset('adm-panel') }}/assets/css/style.css" loading="lazy">
    <link rel="stylesheet" href="{{ asset('adm-panel') }}/assets/css/components-custom.css" loading="lazy">
    

    @stack('css')
</head>

<body class="styleRoll">
    {{-- @include('preloader.index') --}}
    <div id="app">
        <div class="main-wrapper">
            {{-- NavBar --}}
            @include('admin-panel.layouts.navbar')

            {{-- SideBar --}}
            @include('admin-panel.layouts.sidebar')

            {{-- Main Content --}}
            <div class="main-content">
                @yield('content')
            </div>

            {{-- Footer --}}
            @include('admin-panel.layouts.footer')
        </div>
    </div>

    @yield('modal')
    {{-- Modal Logout --}}
    <div class="modal fade" id="modalLogout">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Anda yakin ingin keluar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-1">Pilih "Logout" jika anda ingin keluar</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="{{ url('logout') }}" class="btn btn-danger"><i class="fas fa-power-off mr-2"></i>
                        Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('adm-panel/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adm-panel/vendor/bootstrap-4.3.1/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('adm-panel/vendor/jquery-nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!-- JS Libraies -->
    @stack('js_vendor')

    <!-- Template JS File -->
    {{-- <script src="{{ asset('preloader/preloader.js') }}"></script> --}}
    <script src="{{ asset('adm-panel') }}/assets/js/scripts2.js"></script>

    <!-- Page Specific JS File -->
    @stack('js')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.preloader').fadeOut(300, function() {
                    $(this).hide();
                });
            }, 200);

            var $navbar = $('#navbar');
            var $navLink1 = $('#navLink1');
            var $navLink2 = $('#navLink2');

            $(window).on('scroll', function() {
                var scrollTop = $(this).scrollTop();

                if (scrollTop > 0) {
                    $navbar.addClass('glossy');
                    $navLink1.addClass('text-dark');
                    $navLink2.addClass('text-dark');
                } else {
                    $navbar.removeClass('glossy');
                    $navLink1.removeClass('text-dark');
                    $navLink2.removeClass('text-dark');
                }
            });
        });
    </script>
</body>
</html>
