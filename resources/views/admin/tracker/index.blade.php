@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--md  table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th>@lang('#')</th>
                                <th>@lang('Fullname')</th>
                                <th>@lang('Amount')</th>
                                <th>@lang('Profit Added before')</th>
                                <th>@lang('Profit added at')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td data-label="@lang('Username')">
                                    <span class="fw-bold">{{$user->fullname}}</span>
                                    <br>
                                    <span class="small">
                                    <a href="{{ route('admin.users.detail', $user->id) }}"><span>@</span>{{ $user->aam_id }}</a>
                                    </span>
                                </td>
                                <td data-label="@lang('Amount')">
                                    <span class="fw-bold" title="{{ $user->balance }}">{{ $user->balance }}</span>
                                </td>
                                <td data-label="@lang('Profit Added before')">
                                    {{ diffForHumans($user->last_withdraw) }}
                                </td>
                                <td data-label="@lang('Added at')">
                                    {{ showDateTime($user->last_withdraw) }} <br> {{ diffForHumans($user->last_withdraw) }}
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
                @if ($users->hasPages())
                    <div class="card-footer py-4">
                        {{ paginateLinks($users) }}
                    </div>
                @endif
            </div>
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
