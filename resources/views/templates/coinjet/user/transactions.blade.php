@extends($activeTemplate.'layouts.master')
@section('content')
		<div class="row small-spacing">
			<div class="col-lg-12 col-xc-12">
				<div class="show-filter mb-3 text-end">
                    <button type="button" class="btn btn--base showFilterBtn btn-sm"><i class="las la-filter"></i> @lang('Filter')</button>
                </div>
                <div class="card responsive-filter-card mb-4">
                    <div class="card-body">
                        <form action="">
                            <div class="d-flex flex-wrap gap-4">
                                <div class="flex-grow-1">
                                    <label>@lang('Transaction Number')</label>
                                    <input type="text" name="search" value="{{ request()->search }}" class="form-control">
                                </div>
                                <div class="flex-grow-1">
                                    <label>@lang('Type')</label>
                                    <select name="type" class="form-select form--select">
                                        <option value="">@lang('All')</option>
                                        <option value="+" @selected(request()->type == '+')>@lang('Plus')</option>
                                        <option value="-" @selected(request()->type == '-')>@lang('Minus')</option>
                                    </select>
                                </div>
                                <div class="flex-grow-1">
                                    <label>@lang('Remark')</label>
                                    <select class="form-select form--select" name="remark">
                                        <option value="">@lang('Any')</option>
                                        @foreach($remarks as $remark)
                                        <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>{{ __(keyToTitle($remark->remark)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex-grow-1 align-self-end">
                                    <button class="btn btn--base w-100"><i class="las la-filter"></i> @lang('Filter')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">{{ $pageTitle }}</h4>
					
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th style="width:40%;">@lang('Trx')</th>
								<th>@lang('Transacted')</th>
								<th>@lang('Amount')</th>
								<th>@lang('Post Balance')</th>
								<th style="width:5%;">@lang('Detail')</th>
							</tr>
						</thead>
						<tbody>
							@forelse($transactions as $trx)
							<tr>
								<td data-label="@lang('Trx')"><strong>{{ $trx->trx }}</strong></td>
								<td data-label="@lang('Transacted')">{{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}</td>
								<td data-label="@lang('Amount')" class="budget">
									<span class="fw-bold @if($trx->trx_type == '+')text--success @else text--danger @endif">
                                                {{ $trx->trx_type }} {{showAmount($trx->amount)}} {{ $general->cur_text }}
									</span>
								</td>
								<td data-label="@lang('Post Balance')" class="budget text-success">{{ showAmount($trx->post_balance) }} {{ __($general->cur_text) }}</td>
								<td data-label="@lang('Detail')">{{ __($trx->details) }}</td>
							</tr>
							@empty
								<tr>
									<td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
								</tr>
							@endforelse
							
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
				<div class="d-flex justify-content-end mt-4">
                    {{ $transactions->links() }}
                </div>
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row -->
@endsection