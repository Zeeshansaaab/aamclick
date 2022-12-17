@extends($activeTemplate.'layouts.app')
@section('panel')
@include(activeTemplate().'partials.notify')
<div class="main-menu">
    @include($activeTemplate.'partials.user.header')
    <div class="content">
        @include($activeTemplate.'partials.user.sidebar')
        
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

@include($activeTemplate.'partials.user.topmenu')
<div id="wrapper">
    <div class="main-content">
        @yield('content')
        @include($activeTemplate.'partials.user.footer')
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
@endsection
