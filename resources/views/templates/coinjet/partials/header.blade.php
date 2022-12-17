<!-- Preloader -->
<div id="loading-overlay">
    <div class="loader"></div>
</div>

<div class="themesflat-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="flat-infomation">
                    <li class="email"><a href="mailto:themesflat@gmail.com" title="email">Email: {{$general->website_email}}</a></li>
                    <li class="phone"><a href="+61383766284" title="phone">Call Us: {{$general->website_phone}}</a></li>
                </ul>
                <!-- /.flat-infomation -->
                <!-- <ul class="box-account">
                  
                </ul> -->
                <!-- /.box-account -->
                <div class="clearfix"></div><!-- /.clearfix -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.themesflat-top -->

<header id="header" class="header bg-color">
    <div class="container">
        <div class="row">
            <div class="header-wrap">
                <div id="logos" class="logos" style="display:inline-block!important; margin-top:20px!important;">
                    <a href="{{route('home')}}" title="">
                        <img src="https://aamclick.com/assets/templates/coinjet/images/logo.png" alt="Aamclick Logo" style="height: 42px; width: 262px; object-fit: scale-down; padding-bottom: 10px;"/>
                    </a>
                </div><!-- /#logo -->
                <div class="flat-show-search">
                    <div class="show-search">
                        <i class="fa fa-search"></i>                                             
                    </div>
                    <div class="top-search">                        
                        <form action="#" id="searchform-all" method="get">
                            <div>
                                <input type="text" id="s" class="sss" placeholder="Search...">
                                <input type="submit" value="" id="searchsubmit">
                            </div>
                        </form>
                    </div> <!-- /.top-search -->
                </div>	<!-- /.flat-show-search -->
                
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="active">
                                <a href="{{route('home')}}" title="">HOME</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="index.html" title="">Home 01</a></li>
                                    <li><a href="index-02.html" title="">Home 02</a></li>
                                    <li><a href="index-03.html" title="">Home 03</a></li>
                                    <li><a href="index-04.html" title="">Home 04</a></li>
                                    <li class="active"><a href="index-05.html" title="">Home 05</a></li>
                                </ul><!-- /.sub-menu --> --}}
                            </li>
                            <li>
                                <a href="#about-us" title="">ABOUT</a>
                            </li>
                           
                            <li>
                                <a href="#pricing" title="">Pricing</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="support.html" title="">Customer Support</a></li>
                                    <li><a href="pricing.html" title="">Our Pricing</a></li>
                                    <li><a href="market-data.html" title="">Market Data</a></li>
                                    <li><a href="faqs.html" title="">FAQs</a></li>
                                    <li><a href="404.html" title="">404 page</a></li>
                                </ul><!-- /.sub-menu --> --}}
                            </li>
                            <li>
                                <a href="#blog" title="">BLOG</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="blog.html" title="">Blog Sidebar</a></li>
                                    <li><a href="blog-list.html" title="">Blog List</a></li>
                                    <li><a href="blog-2-column.html" title="">Blog 2 Columns</a></li>
                                    <li><a href="blog-3-column.html" title="">Blog 3 Columns</a></li>
                                    <li><a href="blog-single.html" title="">Blog Single</a></li>
                                </ul><!-- /.sub-menu --> --}}
                            </li>
                            <li>
                                <a href="#" title="">CONTACT</a>
                            </li>
                            
                              @guest
                                @if(Route::has('user.login'))
                                    <li class="login">
                                        <a href="{{route('user.login')}}" title="">Login</a>
                                    </li>
                                @endif
                                @if (Route::has('user.register'))
                                    <li class="sign-in">
                                        <a href="{{route('user.register')}}" title="">Signup</a>
                                    </li>
                                @endif
                                @else
                                    <li class="sign-in">
                                        <a href="{{ route('user.home') }}" title="">Dashboard</a>
                                    </li>
                            @endguest
                        </ul><!-- /.menu -->
                    </nav><!-- /#mainnav -->
                </div><!-- /.nav-wrap -->
            </div><!-- /.header-wrap -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /#header -->
<style>
@media only screen and (max-width: 991px)
.logos {
    display: inline-block;
    float: left;
}
}

.logos {
    display:inline-block!important;
}
li a{
    display:block;
}

</style>