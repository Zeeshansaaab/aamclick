@extends($activeTemplate . 'layouts.master')
@section('content')
<div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="show-filter mb-3 text-end">
                    <button type="button" class="btn btn--base showFilterBtn btn-sm"><i class="las la-filter"></i> @lang('Filter')</button>
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive table-responsive--sm">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>@lang('Transaction')</th>
                                    <th>@lang('Amount')</th>
                                    <th>@lang('Date')</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($profits as $profit)
                                    <tr>
                                        <td data-label="@lang('Transaction')">{{ $profit->transaction->trx }}</td>
                                        <td data-label="@lang('Amount')">{{ showAmount($profit->amount) }} {{ __($general->cur_text) }}</td>
                                        <td data-label="@lang('Date')">{{ $profit->created_at }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{paginateLinks($profits)}}
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')
<script>
    (function($){
    "use strict"
        $('[name=remark]').val('{{ request()->remark }}');
        $('[name=level]').val('{{ request()->level }}');
    })(jQuery);
</script>
@endpush
