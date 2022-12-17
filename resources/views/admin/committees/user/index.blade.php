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
                            <th>@lang('Plan Name')</th>
                            <th>@lang('Amount')</th>
                            <th>@lang('Status')</th>
                            <th>@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($plans as $plan)
                            <tr>
                                <td data-label="@lang('Sr#')">
                                     <span class="fw-bold"> {{ $loop->index + 1 }} </span>
                                </td>

                                <td data-label="@lang('Plan Name')">
                                    <span class="fw-bold">{{ $plan->name }}</span><br \>
                                    {{ showDateTime($plan->created_at) }}<br>{{ diffForHumans($plan->created_at) }}
                                </td>

                                <td data-label="@lang('Amount')">
                                    <span class="fw-bold">{{ $general->cur_sym . getAmount($plan->amount) }}</span>
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
                                        <a href="{{ route('admin.committee.committee.index', $plan->id) }}" class="btn btn-outline--primary btn-sm">
                                            @lang('Committees')
                                        </a>
                                            <button class="btn btn-outline--primary btn-sm planBtn" data-id="{{ $plan->id }}" data-amount="{{ getAmount($plan->amount) }}" data-name="{{ $plan->name }}" data-status="{{ $plan->status }}" data-act="Edit">
                                                <i class="la la-pencil"></i> @lang('Edit')
                                            </button>


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
            @if ($plans->hasPages())
            <div class="card-footer py-4">
                {{ paginateLinks($plans) }}
            </div>
            @endif
        </div><!-- card end -->
    </div>
</div>



<div class="modal fade" id="planModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><span class="act"></span> @lang('Subscription Plan')</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i class="las la-times"></i>
            </button>
            </div>
            <form action="{{ route('admin.committee.plan.save') }}" method="post">
                @csrf
                <input type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">@lang('Name') </label>
                        <input type="text" class="form-control" name="name" placeholder="@lang('Plan Name')" required>
                    </div>
                    <div class="form-group">
                        <label for="min_price">@lang('Plan Price') </label>
                        <div class="input-group">
                            <input type="text" class="form-control has-append" name="amount" placeholder="@lang('Price of Plan')" required>
                            <div class="input-group-text">{{ $general->cur_text }}</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">@lang('Status')</label>
                        <input type="checkbox" data-width="100%" data-height="50" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="status">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn--primary w-100">@lang('Submit')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('breadcrumb-plugins')
    <button class="btn btn-outline--primary btn-sm planBtn" data-id="0" data-act="Add" data-bs-toggle="modal" data-bs-target="#planModal"><i class="las la-plus"></i> @lang('Add New')</button>
@endpush

@push('script')
<script>
    (function($){
        "use strict";
        $('.planBtn').on('click', function() {
            var modal = $('#planModal');
            modal.find('.act').text($(this).data('act'));
            modal.find('input[name=id]').val($(this).data('id'));
            modal.find('input[name=name]').val($(this).data('name'));
            modal.find('input[name=amount]').val($(this).data('amount'));
            modal.find('input[name=status]').bootstrapToggle($(this).data('status') == 1 ? 'on' : 'off');
            if($(this).data('id') == 0){
                modal.find('form')[0].reset();
            }
            modal.modal('show');
        });
    })(jQuery);
</script>
@endpush
