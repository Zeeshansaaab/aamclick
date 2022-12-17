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
                            <th>@lang('User')</th>
                            <th>@lang('Committee Plan')</th>
                            <th>@lang('Committee Name')</th>
                            <th>@lang('Committee Number')</th>
                            <th>@lang('Total Committee Installments')</th>
                            <th>@lang('Status')</th>
                            <th>@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($committeeMembers as $committeeMember)
                            <tr>
                                <td data-label="@lang('Sr#')">
                                     <span class="fw-bold"> {{ $loop->index + 1 }} </span>
                                </td>

                                <td data-label="@lang('User')">
                                    <span class="fw-bold">{{ $committeeMember->user->firstname }}</span><br \>
                                    {{ $committeeMember->user->email }}<br>
                                    <span class="fw-bold">{{ 'AAM ID: ' . $committeeMember->user->aam_id }}</span><br>
                                    {{ showDateTime($committeeMember->created_at) }}<br>{{ diffForHumans($committeeMember->created_at) }}
                                </td>

                                <td data-label="@lang('Committee Plan')">
                                    <span class="fw-bold">{{ $committeeMember->committee->committeePlan->name }}</span>
                                </td>

                                <td data-label="@lang('Committee Name')">
                                    <span class="fw-bold">{{ $committeeMember->committee->name }}</span>
                                </td>

                                <td data-label="@lang('Committee Number')">
                                    Committee Number <span class="fw-bold">{{ $committeeMember->committee_number }}</span>
                                </td>

                                <td data-label="@lang('Total Committee Installments')">
                                    <span class="fw-bold">{{ 'Total ' . $committeeMember->tcs . ' Installments' }}</span>
                                </td>

                                <td data-label="@lang('Status')">
                                    @if($committeeMember->status == 0)
                                        <span class="text--small badge font-weight-normal badge--warning">@lang('Pending')</span>
                                    @elseif($committeeMember->status == 1)
                                        <span class="text--small badge font-weight-normal badge--success">@lang('Enabled')</span>
                                    @elseif($committeeMember->status == 2)
                                        <span class="text--small badge font-weight-normal badge--danger">@lang('Disabled')</span>
                                    @endif
                                </td>
                                <td data-label="@lang('Action')">
                                    <div class="button--group">
                                        <a href="" class="btn btn-outline--primary btn-sm">
                                            <i class="la la-pencil"></i> @lang('Edit')
                                        </a>

                                            @if($committeeMember->status == 0)
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
            @if ($committeeMembers->hasPages())
            <div class="card-footer py-4">
                {{ paginateLinks($committeeMembers) }}
            </div>
            @endif
        </div><!-- card end -->
    </div>
</div>
@endsection

@push('breadcrumb-plugins')
    <div class="d-flex flex-wrap justify-content-end">
        <form action="" method="GET" class="form-inline">
            <div class="input-group justify-content-end">
                <input type="text" name="search" class="form-control bg--white" placeholder="@lang('Search User ID')" value="{{ request()->search }}">
                <button class="btn btn--primary input-group-text" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
@endpush
