<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{!!asset('assets/images/caredoc_sOg_icon.ico')!!}" type="image/gif" sizes="16x16">
    <title> Caredoc</title>
    <link rel="stylesheet" href="{!!asset('assets/css/fontawesome/all.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap/bootstrap.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/style_admin.css')!!}">
    <!-- Icon -->
    <script src="{!! asset("js/iconify.js?v=".time()) !!}" charset="utf-8"></script>
    <script src="{!!asset('assets/js/jquery/jquery.min.js')!!}" charset="utf-8"></script>
    @yield('bottom_lib')
</head>

<body>
    <input type="checkbox" id="check">
    <!--header -->
    @include("template.backend.header")
    <!--header akhir-->
    <!--navigasi mobile -->
    @include('template.backend.nav-mobile')
    <!--navigasi mobile akhir-->

    <!--sidebar-->
    @include('template.backend.sidebar')
    <!--sidebar akhir-->

    <div class="content">
        @yield('content')
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>
</body>

</html>