<div class="navigation">
			<h5 class="title">@lang('Dashboard')</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{ route('user.home') }}"><i class="menu-icon ti-dashboard"></i><span>@lang('Dashboard')</span></a>
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
			<h5 class="title">@lang('Committee')</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-blackboard"></i><span>@lang('Committee')</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{ route('committeePlans') }}">@lang('Committee Plans')</a></li>
						<li><a href="{{ route('user.committee.history') }}">@lang('Committee History')</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			</ul>
			<!-- /.menu js__accordion -->
      
      <h5 class="title">@lang('Installments')</h5>
      
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{ route('user.installments.create') }}"><i class="menu-icon ti-dashboard"></i><span>@lang('Apply for installments')</span></a>
				</li>
				<li>
					<a class="waves-effect" href="{{ route('user.installments.index') }}"><i class="menu-icon ti-dashboard"></i><span>@lang('Installment history')</span></a>
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
