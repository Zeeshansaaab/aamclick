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
                                <th>@lang('User')</th>
                                <th>@lang('Email-Phone')</th>
                                <th>@lang('Country')</th>
                                <th>@lang('Joined At')</th>
                                <th>@lang('Balance')</th>
                                <th>@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td data-label="@lang('User')">
                                    <span class="fw-bold">{{$user->fullname}}</span>
                                    <br>
                                    <span class="small">
                                    <a href="{{ route('admin.users.detail', $user->id) }}"><span>@</span>{{ $user->aam_id }}</a>
                                    </span>
                                </td>


                                <td data-label="@lang('Email-Phone')">
                                    {{ $user->email }}<br>{{ $user->mobile }}
                                </td>
                                <td data-label="@lang('Country')">
                                    <span class="fw-bold" title="{{ @$user->address->country }}">{{ $user->country_code }}</span>
                                </td>



                                <td data-label="@lang('Joined At')">
                                    {{ showDateTime($user->created_at) }} <br> {{ diffForHumans($user->created_at) }}
                                </td>


                                <td data-label="@lang('Balance')">
                                    <span class="fw-bold">

                                    {{ $general->cur_sym }}{{ showAmount($user->balance) }}
                                    </span>
                                </td>
                                <td data-label="@lang('Action')">
                                   <button class="btn btn-sm btn-outline--primary confirmationBtn" data-id="{{$user->id}}">
                                       <i class="las la-desktop text--shadow"></i> Change Referrals
                                   </button>
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
    <div id="referralModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('Confirmation Alert!')</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group ">
                        <label>@lang('Referral ID')</label>
                        <input class="form-control" type="text" name="aam_id" placeholder="AAM00000" required>
                        <input class="form-control" type="hidden" name="curUser" value="{{ Request::route('user')->id }}" required>
                        <input class="form-control" id='toUser' type="hidden" name="toUser" value="{{ Request::route('user')->id }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-bs-dismiss="modal">@lang('No')</button>
                    <button type="submit" class="btn btn--primary">@lang('Update')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@push('script')

<script>
    (function ($)
    {
        "use strict";
        $(document).on('click','.confirmationBtn', function () {
            var modal   = $('#referralModal');
            let data    = $(this).data();
            var url = '{{ route("admin.referrals.change.store") }}';
            modal.find('#toUser').val(data.id)
            modal.find('form').attr('action', url)
            modal.modal('show');
        });
    })(jQuery);
</script>
@endpush

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
