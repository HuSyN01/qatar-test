
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Jakiro home full width</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google font-->
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendor/font-elegan/style.css')}}" rel="stylesheet" type="text/css"/>
    <!--End google font-->
    <link href="{{asset('assets/vendor/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendor/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/vendor/animate.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/vendor/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/jquery.fancybox.css')}}" media="screen">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>

    @yield('styles')

</head>
<body>
<div class="wrapper ver1">
    @include('components.header')
    <section>
        <div class="main_content">
            <div class="container-full">
               @yield('content')
            </div>
        </div>
    </section>
    @include('components.footer')
</div>
<script src="{{asset('assets/js/jquery.2.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/vendor/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/vendor/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/vendor/jquery.fancybox-media.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendor/owlcarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/engo-plugins.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('assets/js/store.js')}}" type="text/javascript"></script>

@yield('scripts')
</body>

</html>
