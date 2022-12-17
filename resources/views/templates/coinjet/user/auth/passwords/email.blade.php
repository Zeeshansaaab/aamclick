@extends($activeTemplate.'layouts.front')
@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-7">
                <div class="card p-5">
                    <div class="password-area">
                        <h3 class="title mb-2 card-title">{{ __($pageTitle) }}</h3>
                        <div class="card-body">
                            <div class="mb-4">
                                <p style="color:black;">@lang('To recover your account please provide your email or username to find your account.')</p>
                            </div>
                            <form method="POST" action="{{ route('user.password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" style="color:black;">@lang('Email or Username')</label>
                                    <input type="text" class="form-control form--control" name="value" value="{{ old('value') }}" required autofocus="off">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn--base w-100">@lang('Submit')</button>
                                    <p class="mt-20 mt-3"><a href="{{ route('user.login') }}" style="color:black;">@lang('Back to login')</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
