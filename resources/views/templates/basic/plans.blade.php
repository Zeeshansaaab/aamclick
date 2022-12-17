@extends($activeTemplate.'layouts.frontend')
@section('content')


<section class="cmn-section price">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($plans as $plan)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                <div class="single-price">
                    <div class="part-top">
                        <h3>{{ __($plan->name) }}</h3>
                        <h4>{{ __(showAmount($plan->min_price)) }} to {{ __(showAmount($plan->max_price)) }} {{$general->cur_text}}<br></h4>
                    </div>
                    <div class="part-bottom">
                        <ul>
                            <li>@lang('Plan Details')</li>
                            <li>@lang('Est Profit') : {{ $plan->min_profit_percent }}{{ __('%') }} to {{ $plan->max_profit_percent }}{{ __('%') }}</li>
                            <li>@lang('Profit Bonus') : {{ $plan->profit_bonus_percent }}{{ __('%') }}</li>
                            <li>@lang('Plan Price') : {{ __(showAmount($plan->min_price)) }} to {{ __(showAmount($plan->max_price)) }} {{$general->cur_text}}</li>
                            <li>@lang('Validity') : {{ $plan->validity }} @lang('Days')</li>
                        </ul>
                        <button class="buyBtn" data-id="{{ $plan->id }}">@lang('Subscribe Now')</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="{{ route('user.buyPlan') }}">
                @csrf
                <input type="hidden" name="id">
                <div class="modal-header">
                    <strong class="modal-title"> @lang('Confirmation')</strong>

                    <button type="button" class="close btn btn-sm" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    @auth
                    <strong>@lang('Are you sure to subscribe this plan')?</strong>
                    @else
                    <strong>@lang('Please login to subscribe plan')</strong>
                    @endauth
                </div>
                <div class="modal-footer">
                    @auth
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('No')</button>
                    <button type="submit" class="btn btn--base">@lang('Yes')</button>
                    @else
                    <a href="{{ route('user.login') }}" class="btn btn--base">@lang('Login')</a>
                    @endauth
                </div>

            </form>

        </div>
    </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
    (function($){
        "use strict";
        $('.buyBtn').click(function(){
            var modal = $('#BuyModal');
            modal.find('input[name=id]').val($(this).data('id'));
            modal.modal('show');
        });
    })(jQuery);
</script>
@endpush
