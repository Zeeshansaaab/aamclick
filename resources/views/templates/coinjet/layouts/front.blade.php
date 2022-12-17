<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
    <head>
        <!-- Basic Page Needs -->
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>{{ $general->siteName(__($pageTitle)) }}</title>

        @include('partials.seo')

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Boostrap style -->
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'stylesheet/bootstrap.min.css') }}">

        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'revolution/css/settings.css') }}">

        <!-- Fancy box -->
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'stylesheet/fancybox.css') }}">

        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'stylesheet/style.css') }}">

        <!-- Colors -->
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'stylesheet/colors/color1.css') }}" id="colors">  

        <!-- Reponsive -->
        <link rel="stylesheet" type="text/css" href="{{ asset($activeTemplateTrue . 'stylesheet/responsive.css') }}">

        <!-- Favicon and touch icons  -->
        <link href="{{ asset($activeTemplateTrue . 'icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed">
        <link href="{{ asset($activeTemplateTrue . 'icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
        <link href="{{ asset($activeTemplateTrue . 'icon/favicon.png') }}" rel="shortcut icon">

        {{-- Calenders Library --}}
            <!-- FullCalendar -->
        <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/fullcalendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>
        @stack('styles')
    </head>
    <body>
        
    @include(activeTemplate().'partials.notify')
        <div class="boxed">
            @include($activeTemplate . 'partials.header')
            @yield('content')
            @include($activeTemplate . 'partials.footer')
        </div>
    
    
    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/jquery.easing.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/jquery-countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/kinetic.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/slider_v1.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($activeTemplateTrue . 'revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/moment/moment.js') }}" ></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/fullcalendar/fullcalendar.min.js') }}">
    @stack('javascript')
</body>
</html>