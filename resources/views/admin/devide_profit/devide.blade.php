@extends('admin.layouts.app')
@section('panel')
    <div class="row mb-none-30">
        <div class="col-md-12 mb-30">
            <div class="card bl--5-primary">
                <div class="card-body">
                    <p class="text--primary">@lang('You can put here percentage whatever you want to devide profit to all users depend on their deposit amount.')</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.devideProfit.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group ">
                                    <label> @lang('Profit %age')</label>
                                    <input class="form-control" type="text" name="profit_percent" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label> @lang('Plan')</label>
                                    <select class="form-control" name="plan">
                                        <option value="">@lang('Select One')</option>
                                        @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}">{{ __($plan->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn--primary w-100 h-45">@lang('Submit')</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-lib')
    <script src="{{ asset('assets/admin/js/spectrum.js') }}"></script>
@endpush

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/spectrum.css') }}">
@endpush