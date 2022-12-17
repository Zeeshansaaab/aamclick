@extends($activeTemplate.'layouts.master')
@section('content')
<div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('user.installments.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">@lang('Name')</label>
                                <div class="input-group">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control form--control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('Phone')</label>
                                <div class="input-group">
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control form--control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('Email')</label>
                                <div class="input-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form--control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('total Amount')</label>
                                <div class="input-group">
                                    <input type="number" step="0.1" name="amount" value="{{ old('amount') }}" class="form-control form--control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('Image')</label>
                                <div class="input-group">
                                    <input type="file" step="any" name="screenshot" value="{{ old('screenshot') }}" class="form-control form--control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('Address')</label>
                                <div class="input-group">
                                    <input type="text" step="any" name="address" value="{{ old('address') }}" class="form-control form--control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn--base w-100 mt-3">@lang('Submit')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
    (function ($) {
            "use strict";
            $('select[name=method_code]').change(function(){
                if(!$('select[name=method_code]').val()){
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=method_code] option:selected').data('resource');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                var toFixedDigit = 2;
                $('.min').text(parseFloat(resource.min_limit).toFixed(2));
                $('.max').text(parseFloat(resource.max_limit).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());
                if (!amount) {
                    amount = 0;
                }
                if(amount <= 0){
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                $('.preview-details').removeClass('d-none');

                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                if (resource.currency != '{{ $general->cur_text }}') {
                    var rateElement = `<span>@lang('Conversion Rate')</span> <span class="fw-bold">1 {{__($general->cur_text)}} = <span class="rate">${rate}</span>  <span class="base-currency">${resource.currency}</span></span>`;
                    $('.rate-element').html(rateElement);
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                }else{
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                var receivable = parseFloat((parseFloat(amount) - parseFloat(charge))).toFixed(2);
                $('.receivable').text(receivable);
                var final_amo = parseFloat(parseFloat(receivable)*rate).toFixed(toFixedDigit);
                $('.final_amo').text(final_amo);
                $('.base-currency').text(resource.currency);
                $('.method_currency').text(resource.currency);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input',function(){
                var data = $('select[name=method_code]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
</script>
@endpush
