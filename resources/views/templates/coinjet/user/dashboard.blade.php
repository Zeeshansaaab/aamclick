@extends($activeTemplate.'layouts.master')
@section('content')
<div id="root">
    <div class="container pt-5" style="width:100%">
      <div class="row">
        <div class="c-dashboardInfo col-lg-3 col-md-6">
            <div class="wrap">
              <a href="{{ route('user.deposit.history') }}" class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Deposit<svg
                  class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                  </path>
                </svg>
                <span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym}}{{getAmount(auth()->user()->balance,2)}}</span>
              </a>
                <div class="d-flex justify-content-between">
                    <small class="mr-auto"> {{ getAmount(auth()->user()->balance * 65, 2) }} INR </small> 
                     <small class="ml-auto"> {{ getAmount(auth()->user()->balance * 180, 2) }} PKR </small>
                </div> 
            </div>
        </div>

        <div class="c-dashboardInfo col-lg-3 col-md-6" >
              <div class="wrap " style="background-image: linear-gradient(to right, #F46B41, #EA9163, #CC9C66, #C19339);">
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title" style="font-weight: bold; color:white; font-size: 20px;"></h4><span class="hind-font caption-12 c-dashboardInfo__count"><font style="font-weight: bold; color:black; font-size:16px;">Coming Soon</font></span>
              </div>
          </div>

        <a href="{{ route('committeePlans') }}">
          <div class="c-dashboardInfo col-lg-3 col-md-6" >
              <div class="wrap " style="background-image: linear-gradient(to right, #F46B30, #EA9152, #CC9C55, #C19328);">
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title" style="font-weight: bold; color:white; font-size: 20px;">Committee</h4><span class="hind-font caption-12 c-dashboardInfo__count"><font style="font-weight: bold; color:black; font-size:16px;">{{ $general->cur_sym }}{{ showAmount($totalAmount) }}</font></span>
              </div>
          </div>
        </a>

        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <a href="{{ route('user.profit-balance') }}" class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Profit Balance<svg
                class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                </path>
              </svg></a>
              <span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym}}{{getAmount(auth()->user()->user_profit_bonus,2)}}</span>
          </div>
        </div>

        <div class="c-dashboardInfo col-lg-3 col-md-6" >
            <div class="wrap " style="background-image: linear-gradient(to right, #002400, #005700, #008a00, #52B152, #83C783, #b4ddb4, #b4ddb4, #83C783, #52B152, #008a00, #005700, #002400);">
              <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title" style="font-weight: bold; color:white; font-size: 20px;">Instalment</h4><span class="hind-font caption-12 c-dashboardInfo__count"><font style="font-weight: bold; color:black; font-size:16px;">Get Installment</font></span>
            </div>
        </div>

        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <a href="{{ route('user.commissions') }}" class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Referral income<svg
                class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                </path>
              </svg><span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym}}{{getAmount(auth()->user()->profit_bonus,2)}}</span>
            </a>
              {{-- <span class="hind-font caption-12 c-dashboardInfo__subInfo">Last month: €30</span> --}}
          </div>
        </div>
        
        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Referral Deposit<svg
                class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                </path>
              </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym}}{{getAmount(auth()->user()->deposit_commission,2)}}</span>
          </div>
        </div>

        <div class="c-dashboardInfo col-lg-3 col-md-6">
            <div class="wrap">
              <a href="{{ route('user.withdraw.history') }}" class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Bonus Withdraw<svg
                  class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                  </path>
                </svg><span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym}} 0 </span>
              </a>
            </div>
        </div>
        <div class="c-dashboardInfo col-lg-3 col-md-6">
            <div class="wrap">
              <a href="{{ route('user.withdraw.history') }}?type=user_profit_bonus" class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Profit Withdraw<svg
                  class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                  </path>
                </svg><span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym }} {{ getAmount(auth()->user()->withdrawals()->sum('amount')) }} </span>
              </a>
            </div>
        </div>
        <div class="c-dashboardInfo col-lg-6 col-md-6" >
            <div class="wrap " style="background-image: linear-gradient(to right, #726f71, #877380, #9c7790, #b17a9f, #c77cae, #c585c4, #bd90d9, #b09cee, #7eaff9, #55bef1, #53c7de, #72cdc7);">
              <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title" style="font-weight: bold; color:white; font-size:24px; letter-spacing:8px;">YOUR PLAN<svg
                  class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                  </path>
                </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count" style="font-weight: bold; color:black; font-size:24px; letter-spacing:8px;">{{auth()->user()->plan->name}}</span>
            </div>
        </div>
        <div class="c-dashboardInfo col-lg-6 col-md-6">
            <div class="wrap">
              <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">User ID<svg
                  class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                  </path>
                </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{auth()->user()->aam_id}}</span>
            </div>
        </div>
        


      </div>
    </div>
    <div class="container pt-5" style="width: 100%;">
        <div class="row">
            <div class="row small-spacing">
                <div class="col-lg-4 col-xs-12">
                    <div class="c-dashboardInfo">
                        <div class="wrap">
                          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Team Members<svg
                              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                              <path fill="none" d="M0 0h24v24H0z"></path>
                              <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                              </path>
                            </svg></h4>
                            <span class="hind-font caption-12 c-dashboardInfo__count">{{$teamMembers['total']}}</span>
                        </div>
                    </div>
            
                    <div class="c-dashboardInfo">
                        <div class="wrap">
                          <a href="{{ route('user.commissions') }}?remark=deposit_commission" class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Team Members Deposit<svg
                              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                              <path fill="none" d="M0 0h24v24H0z"></path>
                              <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                              </path>
                            </svg></h><span class="hind-font caption-12 c-dashboardInfo__count">{{$general->cur_sym}}{{$teamMembers['balance']}}</span>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 col-xs-12 -->
    
                <div class="col-lg-8 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Transactions</h4>
                        <!-- /.box-title -->
                        {{-- <div class="dropdown js__drop_down">
                            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div> --}}
                        <!-- /.dropdown js__dropdown -->
                        <table class="table table-striped margin-bottom-10">
                            <thead>
                                <tr>
                                    <th>@lang('Transacted')</th>
                                    <th>@lang('Amount')</th>
                                    <th>@lang('Post Balance')</th>
                                    <th style="width:20%;">@lang('Detail')</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php
                              $transactions = auth()->user()->transactions->paginate(2);
                              @endphp
                                @forelse($transactions as $trx)
                                <tr>
                                    <td>{{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}</td>
                                    <td>
                                                    {{ $trx->trx_type }} {{showAmount($trx->amount)}} {{ $general->cur_text }}
                                        
                                    </td>
                                    <td >{{ showAmount($trx->post_balance) }} {{ __($general->cur_text) }}</td>
                                    <td >{{ __($trx->details) }}</td>   
                                </tr>
                                @empty
                                    No Recent Activity
                                @endforelse
                            </tbody>
                        </table>
                        {{$transactions->links()}}
                        <!-- /.table -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-xs-12 -->
            </div>
        </div>
    </div>
  </div>
@endsection
@push('style')
<style>
#root .container .row .c-dashboardInfo .wrap .heading, #root .container .row .c-dashboardInfo .wrap .hind-font{
    /* font-family: 'Lobster', cursive!important; */
}
.c-dashboardInfo {
  margin-bottom: 15px;
}
.c-dashboardInfo .wrap {
  background: #ffffff;
  box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  text-align: center;
  position: relative;
  overflow: hidden;
  padding: 40px 25px 20px;
  height: 100%;
}
.c-dashboardInfo__title,
.c-dashboardInfo__subInfo {
  color: #6c6c6c;
  font-size: 1.18em;
}
.c-dashboardInfo span {
  display: block;
}
.c-dashboardInfo__count {
  font-weight: 600;
  font-size: 2.5em;
  line-height: 64px;
  color: #323c43;
}
.c-dashboardInfo .wrap:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  content: "";
}

.c-dashboardInfo:nth-child(1) .wrap:after {
  background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(4) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(6) .wrap:after {
  background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
}
.c-dashboardInfo:nth-child(7) .wrap:after {
    background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(8) .wrap:after {
    background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(9) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(11) .wrap:after {
    background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo__title svg {
  color: #d7d7d7;
  margin-left: 5px;
}
.MuiSvgIcon-root-19 {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 24px;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  user-select: none;
  flex-shrink: 0;
}

</style>
@endpush