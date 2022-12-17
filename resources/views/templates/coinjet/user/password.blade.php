@extends($activeTemplate.'layouts.master')
@section('content')
<div class="row small-spacing">
	<div class="col-md-12 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>{{ $pageTitle }}</h4>
							<div class="card-content">
								<form action="" method="post">
									@csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('Current Password')</label>
												<input type="password" class="form-control form--control" name="current_password" required autocomplete="current-password">
											</div>
										</div>
									</div>
									<!-- /.row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('Password')</label>
												<input type="password" class="form-control form--control" name="password" required autocomplete="current-password">
				                                @if($general->secure_password)
				                                    <div class="input-popup">
				                                      <p class="error lower">@lang('1 small letter minimum')</p>
				                                      <p class="error capital">@lang('1 capital letter minimum')</p>
				                                      <p class="error number">@lang('1 number minimum')</p>
				                                      <p class="error special">@lang('1 special character minimum')</p>
				                                      <p class="error minimum">@lang('6 character password')</p>
				                                    </div>
				                                @endif
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('Confirm Password')</label>
												<input type="password" class="form-control form--control" name="password_confirmation" required autocomplete="current-password">
											</div>
										</div>
									</div>
									<!-- /.row -->
										<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">@lang('Submit')</button>
								</form>
							</div>
							<!-- /.card-content -->
						</div>
						<!-- /.box-content card -->
					</div>
				</div>
			</div>
</div>
@endsection