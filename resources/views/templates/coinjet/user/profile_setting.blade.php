@extends($activeTemplate.'layouts.master')
@section('content')
<div class="row small-spacing">
	<div class="col-md-12 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>@lang('About')</h4>
							<div class="card-content">
								<form action="" method="post" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('First Name')</label>
												<input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" required>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('Last Name')</label>
												<input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" required>
											</div>
										</div>
									</div>
									<!-- /.row -->

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>@lang('E-mail Address')</label>
												<input type="text" class="form-control" value="{{$user->email}}" readonly>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label>@lang('Username')</label>
												<input type="text" class="form-control" value="{{$user->name}}" readonly>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label>@lang('Mobile Number')</label>
												<input type="text" class="form-control" value="{{$user->mobile}}" readonly>
											</div>
										</div>
									</div>
									<!-- /.row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('Address')</label>
												<input type="text" class="form-control" name="address" value="{{@$user->address->address}}">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>@lang('State')</label>
												<input type="text" class="form-control" name="state" value="{{@$user->address->state}}">
											</div>
										</div>
									</div>
									<!-- /.row -->

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">@lang('Zip Code')</label>
												<input type="text" class="form-control" name="zip" value="{{@$user->address->zip}}">
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">@lang('City')</label>
												<input type="text" class="form-control" name="city" value="{{@$user->address->city}}">
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">@lang('Country')</label>
												<input type="text" class="form-control" name="city" value="{{@$user->address->country}}">
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