<div class="main-menu">
	<header class="header">
        <a href="{{ route('home') }}" class="logo"><img
                        src="{{ asset('assets/images/logoIcon/logo.png') }}"
                        alt="site-logo" width="150px"><span class="logo-icon"></a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
    </header>
    <!-- /.header -->
	<div class="content">
		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{ route('user.home') }}"><i class="menu-icon ti-dashboard"></i><span>@lang('Dashboards')</span></a>
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">@lang('Deposit')</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-layers"></i><span>@lang('Deposit')</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('user.deposit') }}">@lang('Deposit Now')</a></li>
						<li><a href="{{ route('user.deposit.history') }}">@lang('Deposit History')</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">@lang('Withdraw')</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-blackboard"></i><span>@lang('Withdraw')</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('user.withdraw') }}">@lang('Withdraw Now')</a></li>
						<li><a href="{{ route('user.withdraw.history') }}">@lang('Withdraw History')</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{ route('plans') }}"><i class="menu-icon ti-dashboard"></i><span>@lang('Plans')</span></a>
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{ route('user.transactions') }}"><i class="menu-icon ti-dashboard"></i><span>@lang('Transactions')</span></a>
				</li>
			</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">@lang('Referral')</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-flag"></i><span>@lang('Referral')</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('user.commissions') }}">@lang('Commissions')</a></li>
						<li><a href="{{ route('user.referred') }}">@lang('Referred Users')</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			</ul>
            <!-- /.menu js__accordion -->

						<h5 class="title">@lang('Referral')</h5>
						<!-- /.title -->
						<ul class="menu js__accordion">
							<li>
								<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-flag"></i><span>@lang('Referral')</span><span class="menu-arrow fa fa-angle-down"></span></a>
								<ul class="sub-menu js__content">
									<li><a href="{{ route('user.commissions') }}">@lang('Commissions')</a></li>
									<li><a href="{{ route('user.referred') }}">@lang('Referred Users')</a></li>
								</ul>
								<!-- /.sub-menu js__content -->
							</li>
						</ul>
			<!-- /.menu js__accordion -->
			<h5 class="title">@lang('Account')</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-user"></i><span>@lang('Account')</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('user.profile.setting') }}">@lang('Profile')</a></li>
						<li><a href="{{ route('user.change.password') }}">@lang('Change
                                        Password')</a></li>
						<li><a href="{{ route('user.transfer.balance') }}">@lang('Balance Transfer')</a></li>
						<li><a href="{{ route('ticket') }}">@lang('Support Ticket')</a></li>
						<li><a href="{{ route('user.twofactor') }}">@lang('Two Factor')</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->


<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item ti-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="ti-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item ti-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item ti-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
		<div class="ico-item">
			<i class="ti-user"></i>
			<ul class="sub-ico-item">
				<li><a href="#">Settings</a></li>
				<li><a class="js__logout" href="#">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
