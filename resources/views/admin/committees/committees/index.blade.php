@extends('admin.layouts.app')

@section('panel')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card b-radius--10">
            <div class="card-body p-0">
                <div class="table-responsive--sm table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                        <tr>
                            <th>@lang('Sr#')</th>
                            <th>@lang('Committee Name')</th>
                            <th>@lang('Amount')</th>
                            <th>@lang('Members')</th>
                            <th>@lang('Validity')</th>
                            <th>@lang('Amount Return Time')</th>
                            <th>@lang('Status')</th>
                            <th>@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($committees as $plan)
                            <tr>
                                <td data-label="@lang('Sr#')">
                                     <span class="fw-bold"> {{ $loop->index + 1 }} </span>
                                </td>

                                <td data-label="@lang('Committee Name')">
                                    <span class="fw-bold">{{ $plan->name }}</span><br \>
                                    {{ showDateTime($plan->created_at) }}<br>{{ diffForHumans($plan->created_at) }}
                                </td>

                                <td data-label="@lang('Amount')">
                                    <span class="fw-bold">{{ $general->cur_sym . getAmount($plan->amount) }}</span>
                                </td>

                                <td data-label="@lang('Members')">
                                    <span class="fw-bold">{{$plan->member . ' Members' }}</span>
                                </td>

                                <td data-label="@lang('Validity')">
                                    <span class="fw-bold">{{$plan->validity . ' Months' }}</span>
                                </td>

                                <td data-label="@lang('Amount Return Time')">
                                    <span class="fw-bold">{{ 'In ' . $plan->amount_return . ' Months' }}</span>
                                </td>

                                <td data-label="@lang('Status')">
                                    @if($plan->status == 0)
                                        <span class="text--small badge font-weight-normal badge--warning">@lang('Pending')</span>
                                    @elseif($plan->status == 1)
                                        <span class="text--small badge font-weight-normal badge--success">@lang('Enabled')</span>
                                    @elseif($plan->status == 2)
                                        <span class="text--small badge font-weight-normal badge--danger">@lang('Disabled')</span>
                                    @endif
                                </td>
                                <td data-label="@lang('Action')">
                                    <div class="button--group">
                                        <a href="{{ route('admin.committee.committee.edit', [$committeePlan->id, $plan->id]) }}" class="btn btn-outline--primary btn-sm">
                                            <i class="la la-pencil"></i> @lang('Edit')
                                        </a>

                                            @if($plan->status == 0)
                                                <button class="btn btn-sm btn-outline--success ms-1 confirmationBtn" data-question="@lang('Are you sure to enable this group?')" data-action="activate">
                                                    <i class="la la-eye"></i> @lang('Enable')
                                                </button>
                                            @else
                                                <button class="btn btn-sm btn-outline--danger ms-1 confirmationBtn" data-question="@lang('Are you sure to disable this group?')" data-action="{{ 'deactivate' }}">
                                                    <i class="la la-eye-slash"></i> @lang('Disable')
                                                </button>
                                            @endif
                                        </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table><!-- table end -->
                </div>
            </div>
            @if ($committees->hasPages())
            <div class="card-footer py-4">
                {{ paginateLinks($committees) }}
            </div>
            @endif
        </div><!-- card end -->
    </div>
</div>
@endsection

@push('breadcrumb-plugins')
    <a href="{{ route('admin.committee.committee.create', $committeePlan->id) }}" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="la la-pencil"></i>@lang('Create')</a>
@endpush