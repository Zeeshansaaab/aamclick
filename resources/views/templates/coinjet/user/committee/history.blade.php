@extends($activeTemplate.'layouts.master')
@section('content')
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">{{ $pageTitle }}</h4>

					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th>@lang('Name')</th>
								<th>@lang('Committee')</th>
								<th>@lang('Amount')</th>
								<th>@lang('Total Installments')</th>
								<th>@lang('Status')</th>
								<th>@lang('Subscribed')</th>
								<th>@lang('Action')</th>
							</tr>
						</thead>
						<tbody>
							@forelse($committees as $committee)
							<tr>
								<td data-label="@lang('Name')"><strong>{{ $committee->committee->name }}</strong></td>
								<td data-label="@lang('Committee')">
                                    <strong>{{ $committee->committee_number }}</strong>
                                </td>
								<td data-label="@lang('Amount')"
                                ><strong>{{ $general->cur_sym . getAmount($committee->committee->amount) }}</strong>
                            </td>
								<td data-label="@lang('Total Installments')" class="budget">
                                    <a href="">
                                        <strong>{{ $committee->tcs }}</strong>
                                    </a>
                                </td>
								<td data-label="@lang('Status')" class="fw-bold @if($committee->status == 0) text-warning @elseif($committee->status == 1) text-success @else text-danger @endif">@if($committee->status == 0) Pending @elseif($committee->status == 1) Approved @else Rejected @endif</td>
								<td data-label="@lang('Detail')">
                                    {{ showDateTime($committee->created_at) }}
                                    <br>
                                    {{ diffForHumans($committee->created_at) }}
                                </td>
                                <td data-label="@lang('Action')">
                                    <a href="" class="btn btn-primary">Sumbit Installment</a>
                                </td>
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
                    {{ $committees->links() }}
                </div>
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row -->
@endsection
