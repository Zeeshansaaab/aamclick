<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache" />

    <title>{{ $general->siteName(__($pageTitle)) }}</title>
    @include('partials.seo')

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/styles/style.min.css') }}">
  
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/fonts/themify-icons/themify-icons.css') }}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/waves/waves.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/sweet-alert/sweetalert.css') }}">
    
    <!-- Percent Circle -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/percircle/css/percircle.css') }}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/chart/chartist/chartist.min.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>
  <style>
        
.btn--base{
	background-color: blue;
	color: white;
	font-weight: 600;
}
.card{
    width: 90%;
    margin-top: 10px;
    margin-right: auto;
    -webkit-box-shadow: 0 0 30px rgb(198, 198, 198);
    /* box-shadow: 0 0 30px rgba(184, 184, 184, 0.536); */
    border-radius: 10px;
    padding: 15px;
}

.form--select{
    padding: 10px;
    display: block;
    width: 100%;
}
.container{
    width:100%;
}
textarea.form-control {
    /* margin: auto; */
    /* width: 95%; */
}
    @media only screen and (max-width: 600px) {
        .card{
            width: 100%;
        }
    }
    </style>
    @stack('style')
</head>

<body>
    @stack('fbComment')
    @yield('panel')


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="{{ asset($activeTemplateTrue . 'assets/script/html5shiv.min.js') }}"></script>
        <script src="{{ asset($activeTemplateTrue . 'assets/script/respond.min.js') }}"></script>
    <![endif]-->
    <!-- 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset($activeTemplateTrue . 'assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/scripts/modernizr.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/waves/waves.min.js') }}"></script>
    <!-- Sparkline Chart -->
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/chart/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/scripts/chart.sparkline.init.min.js') }}"></script>

    <!-- Percent Circle -->
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/percircle/js/percircle.js') }}"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Chartist Chart -->
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/chart/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/scripts/jquery.chartist.init.min.js') }}"></script>

    <!-- FullCalendar -->
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/moment/moment.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'assets/scripts/fullcalendar.init.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue . 'assets/scripts/main.min.js') }}"></script>
    @stack('script')
</body>
</html>