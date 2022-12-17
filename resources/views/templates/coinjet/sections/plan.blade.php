@php
    $planCaption = getContent('plan.content',true);
    $plans = App\Models\Plan::with('referrlas')->where('status',1)->get();
@endphp
<section class="flat-pricing bg-browse" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>{{ __($planCaption->data_values->heading) }}</h2>
                    <p>{{ __($planCaption->data_values->subheading) }}</p>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            @foreach($plans as $plan)
            <div class="col-md-3 mt-3" >
						<div class="card-premium px-3">
							<div class="card-header @if($loop->index == 1) header-basic @elseif($loop->index==2) header-standard @elseif($loop->index==3) header-premium @endif">
								<h1>{{$plan->name}}</h1>
							</div>
							<div class="card-body">
								<p>
								<h3>{{getAmount($plan->min_price)}} to {{getAmount($plan->max_price)}} {{$general->cur_sym}}</h3>
								</p>
								<div class="card-element-hidden-premium">
									<ul>
										<li class="font-weight-bold text-success"><span class="fs1" aria-hidden="true" data-icon="N"></span> Est Profit : {{$plan->min_profit_percent}}% to {{$plan->max_profit_percent}}%</li>
										<li class="border-l font-weight-bold"><span class="fs1" aria-hidden="true"></span>Deposit Commission</li>

											<li>
											    @foreach($plan->referrlas as $referral)
											        @if($referral->commission_type == 'deposit_commission')
												        <p class="fs1" style="margin-left:20px;" aria-hidden="true" data-icon="N">Level {{$referral->level}} : {{$referral->percent}}%</p>
												    @endif
											    @endforeach
											</li>
										
										<li class="border-l font-weight-bold"><span class="fs1" aria-hidden="true"></span>Profit Bonus</li>
										<li>
											@foreach($plan->referrlas as $referral)
										        @if($referral->commission_type == 'profit_bonus')
											        <p class="fs1" style="margin-left:20px;" aria-hidden="true" data-icon="N">Level {{$referral->level}} : {{$referral->percent}}%</p>
											    @endif
											  @endforeach
										</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Amount Return : {{$plan->amount_return}} Months </li>
									{{--	<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Validity : {{$plan->validity == 0 ? 'Unlimited' : $plan->validity.' Days' }} </li> --}}
										
									</ul>
									
								</div>
							</div>
						</div>
					</div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-pricing -->
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
<style>
    .border-c{
    border: 1px solid orange;
}
p{
    display: block;
}
.li-width{
    width: fit-content;
}
.price-wrapper {
    transition:  300ms opacity, 300ms transform;
    box-shadow: 13px 3px 8px 5px rgb(233 231 231);
    border-radius: 2px;

}
.price-wrapper:hover > * {
   
    
}
body{
    color:rgb(73, 73, 73)
}

@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}




main {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.card-basic,
.card-premium,
.card-standard {
  margin: 0 2rem 1rem 0;
  padding: 0 0 0.5rem 0;
  /* width: 15rem; */
  background: #fff;
  color: #444;
  text-align: center;
  border-radius: 1rem;
  box-shadow: 0.5rem 0.5rem 1rem rgba(51, 51, 51, 0.2);
  overflow: hidden;
  transition: all 0.1ms ease-in-out;
}
.card-basic:hover,
.card-premium:hover,
.card-standard:hover {
  transform: scale(1.02);
}

.card-header {
  height: 5rem;
  text-transform: uppercase;
  font-weight: 700;
  font-size: 0.8rem;
  padding: 1rem 0;
  color: #fff;
  clip-path: polygon(0 0, 100% 0%, 100% 85%, 0% 100%);
}

.header-basic,
.btn-basic {
  background: linear-gradient(135deg, rgb(0, 119, 238), #06c766);
}

.header-standard,
.btn-standard {
  background: linear-gradient(135deg, #b202c9, #cf087c);
}

.header-premium,
.btn-premium {
  background: linear-gradient(135deg, #eea300, #ee5700);
}
.header-free{
    background: linear-gradient(135deg, #eea300, #ee5700);
}

.card-body {
  padding: 0.5rem 0;
}
.card-body h2 {
  font-size: 2rem;
  font-weight: 700;
}

.card-element-container {
  color: #444;
  list-style: none;
}

.btn {
  margin: 0.5rem 0;
  padding: 0.7rem 1rem;
  outline: none;
  border-radius: 1rem;
  font-size: 1rem;
  font-weight: 700;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: all 0.1ms ease-in-out;
}

.btn:hover {
  transform: scale(0.95);
}

.btn:active {
  transform: scale(1);
}

.card-element-hidden {
  display: none;
}
h3{
    border-bottom: 2px solid orange;
    padding: 15px;
}
.card-element-hidden-premium{
    padding-top: 15px;
}
li{
    color: rgb(97, 97, 97);
    padding-top: 5px;
    padding-bottom: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
}
.border-l{
    border-top: 1px solid orange;
    border-bottom: 1px solid orange;
    
}
.card-premium{
    margin:0%;
}

</style>
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
