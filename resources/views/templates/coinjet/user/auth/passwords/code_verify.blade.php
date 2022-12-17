@extends($activeTemplate.'layouts.front')
@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-5">
                <div class="card p-5">
                    <div class="d-flex justify-content-center">
                        <div class="verification-code-wrapper">
                            <div class="verification-area">
                                <h5 class="card-title pb-3 text-center border-bottom" style="color:black;">@lang('Verify Email Address')</h5>
                                <div class="card-body">
                                    <form action="{{ route('user.password.verify.code') }}" method="POST" class="submit-form">
                                        @csrf
                                        <p class="verification-text" style="color:black;">@lang('A 6 digit verification code sent to your email address') :  {{ showEmailAddress($email) }}</p>
                                        <input type="hidden" name="email" value="{{ $email }}">
                                        @include($activeTemplate.'partials.verification_code')
                                        <div class="form-group">
                                            <button type="submit" class="btn btn--base w-100">@lang('Submit')</button>
                                        </div>
                                        <div class="form-group" style="color:black;">
                                            @lang('Please check including your Junk/Spam Folder. if not found, you can')
                                            <a href="{{ route('user.password.request') }}" style="color:black;">@lang('Try to send again')</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
