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
                            <th>@lang('Date')</th>
                            <th>@lang('Profit')</th>
                            <th>@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($calendars as $calendar)
                            <tr>
                                <td data-label="@lang('Sr#')">
                                     <span class="fw-bold"> {{ $loop->index + 1 }} </span>
                                </td>

                                <td data-label="@lang('Date')">
                                    <span class="fw-bold">{{ date('d M Y', strtotime($calendar->start)) }}</span>
                                </td>

                                <td data-label="@lang('Profit')">
                                    <span class="fw-bold">{{ $calendar->title . '%' }}</span>
                                </td>

                                <td data-label="@lang('Action')">
                                    <div class="button--group">
                                        <a href="{{ route('admin.calendar.edit', $calendar->id) }}" class="btn btn-outline--primary btn-sm">
                                            <i class="la la-pencil"></i> @lang('Edit')
                                        </a>
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
            @if ($calendars->hasPages())
            <div class="card-footer py-4">
                {{ paginateLinks($calendars) }}
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
