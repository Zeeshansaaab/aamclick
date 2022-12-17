@extends($activeTemplate.'layouts.master')
@section('content')
		<div class="row small-spacing">
			<div class="col-lg-12 col-xc-12">
				<div class="show-filter mb-3 text-end">
                    <button type="button" class="btn btn--base showFilterBtn btn-sm"><i class="las la-filter"></i> @lang('Filter')</button>
                </div>
                <div class="card responsive-filter-card mb-4">
                    <div class="card-body">
                        <div class="card-header border-0 py-3">
                        <form action="">
                            <div class="d-flex justify-content-end">
                                <div class="input-group w-auto">
                                    <input type="text" name="search" class="form-control" value="{{ request()->search }}" placeholder="@lang('Search by transactions')">
                                    <button class="input-group-text bg-primary border-0 text-white">
                                        <i class="las la-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">{{ $pageTitle }}</h4>
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th>@lang('Gateway | Transaction')</th>
								<th>@lang('Initiated')</th>
								<th>@lang('Amount')</th>
								<th>@lang('Conversion')</th>
								<th>@lang('Type')</th>
								<th>@lang('Status')</th>
								<th>@lang('Details')</th>
							</tr>
						</thead>
						<tbody>
							@forelse($deposits as $deposit)
							<tr>
								<td data-label="@lang('Gateway | Transaction')">
									<span class="fw-bold"> <span class="text-primary">{{ __($deposit->gateway?->name) }}</span> </span>
									<br>
									<small> {{ $deposit->trx }} </small>
								</td>
								<td data-label="@lang('Initiated')">
									{{ showDateTime($deposit->created_at) }}<br>{{ diffForHumans($deposit->created_at) }}
								</td>
								<td data-label="@lang('Amount')" class="budget">
									{{ __($general->cur_sym) }}{{ showAmount($deposit->amount ) }} + <span class="text-danger" title="@lang('charge')">{{ showAmount($deposit->charge)}} </span>
									<br>
									<strong title="@lang('Amount with charge')">
										{{ showAmount($deposit->amount+$deposit->charge) }} {{ __($general->cur_text) }}
									</strong>
								</td>
								<td data-label="@lang('Conversion')" class="budget text-success">
									{{ __($general->cur_text) }} =  {{ showAmount($deposit->rate) }} {{__($deposit->method_currency)}}
									<br>
									<strong>{{ showAmount($deposit->final_amo) }} {{__($deposit->method_currency)}}</strong>
								</td>
								<td data-label="@lang('Type')">
								    @if($deposit->type == 1)
								        <span class="fw-bold">Default</span>
								    @elseif($deposit->type == 2)
								        <span class="fw-bold">Committee Installments</span>
								    @endif
								</td>
								<td data-label="@lang('Status')">
									@php echo $deposit->statusBadge @endphp
								</td>
								@php
									$details = ($deposit->detail != null) ? json_encode($deposit->detail) : null;
								@endphp

								<td data-label="@lang('Details')">
									<a href="javascript:void(0)" class="btn btn--base btn-sm @if($deposit->method_code >= 1000) detailBtn @else disabled @endif"
										@if($deposit->method_code >= 1000)
											data-info="{{ $details }}"
										@endif
										@if ($deposit->status == 3)
											data-admin_feedback="{{ $deposit->admin_feedback }}"
										@endif >
										<i class="fa fa-desktop"></i>
									</a>
								</td>
							</tr>
							@empty
								<tr>
									<td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
								</tr>
							@endforelse
							
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
				@if($deposits->hasPages())
                    <div class="card-footer">
                        {{ $deposits->links() }}
                    </div>
                    @endif
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row -->
@endsection


@push('script')
    <script>
        (function ($) {
            "use strict";
            $('.detailBtn').on('click', function () {
                var modal = $('#detailModal');

                var userData = $(this).data('info');
                var html = '';
                if(userData){
                    userData.forEach(element => {
                        if(element.type != 'file'){
                            html += `
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>${element.name}</span>
                                <span">${element.value}</span>
                            </li>`;
                        }
                    });
                }

                modal.find('.userData').html(html);

                if($(this).data('admin_feedback') != undefined){
                    var adminFeedback = `
                        <div class="my-3">
                            <strong>@lang('Admin Feedback')</strong>
                            <p>${$(this).data('admin_feedback')}</p>
                        </div>
                    `;
                }else{
                    var adminFeedback = '';
                }

                modal.find('.feedback').html(adminFeedback);


                modal.modal('show');
            });
        })(jQuery);

    </script>
@endpush
