<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - MyListing</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

     <!-- Font Awesome -->
    <link type="text/css" href="{{ asset('assets/backend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Themify Icons -->
    <link type="text/css" href="{{ asset('assets/backend/fonts/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <!-- Core CSS with all styles -->
    <link type="text/css" href="{{ asset('assets/backend/css/styles.css') }}" rel="stylesheet">

    <!-- Code Prettifier -->
    <link type="text/css" href="{{ asset('assets/backend/plugins/codeprettifier/prettify.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link type="text/css" href="{{ asset('assets/backend/plugins/iCheck/skins/minimal/blue.css') }}" rel="stylesheet">

    <!--[if lt IE 10]>
    <script type="text/javascript" src="assets/js/media.match.min.js"></script>
    <script type="text/javascript" src="assets/js/respond.min.js"></script>
    <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

    @yield('page-styles')
    @yield('inline-style')
</head>
<body>
    @include('nonSubscriber.partials.header')
    <div id="wrapper">
        <div id="layout-static">
            @if (!Request::is('noncust-ads*'))
                {{-- include sidebar menu blade --}}
                @include('nonSubscriber.partials.sidebar-menu')
            @endif

            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">

                        @yield('content')
                        
                        <footer role="contentinfo">
                            <div class="clearfix">
                                <ul class="list-unstyled list-inline pull-left">
                                    <li><h6 style="margin: 0;">&copy; 2015 MyListing. POWERED BY <a href="http://digirookstudio.com" target="_blank">DIGIROOK STUDIO</a></h6></li>
                                </ul>
                                <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Load site level scripts -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <!-- Load jQuery -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/jquery-1.10.2.min.js') }}"></script>
    <!-- Load jQueryUI -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/jqueryui-1.10.3.min.js') }}"></script>
    <!-- Load Bootstrap -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <!-- Load Enquire -->
    <script type="text/javascript" src="{{ asset('assets/backend/js/enquire.min.js') }}"></script>

    <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/velocityjs/velocity.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/velocityjs/velocity.ui.min.js') }}"></script>

    <!-- Wijet -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/wijets/wijets.js') }}"></script>

    <!-- Code Prettifier  -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/codeprettifier/prettify.js') }}"></script>
    <!-- Swith/Toggle Button -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script>

    <!-- Bootstrap Tabdrop -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>

    <!-- iCheck -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/iCheck/icheck.min.js') }}"></script>

    <!-- nano scroller -->
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/backend/js/application.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/demo/demo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/demo/demo-switcher.js') }}"></script>

    <!-- End loading site level scripts -->
    @yield('page-scripts')

    @yield('inline-script')
</body>
</html>