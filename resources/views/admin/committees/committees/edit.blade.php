@extends('admin.layouts.app')

@section('panel')
    <div class="row">
        <div class="col-12">
            <div class="card mt-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">@lang('Information')</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.committee.committee.update', [$committeePlan->id, $committee->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-xl-4 col-md- 6col-12">
                                <div class="form-group ">
                                    <label>@lang('Committee Name')</label>
                                    <input class="form-control" type="text" name="name" placeholder="@lang('Committee Name')" value="{{ $committee->name }}" required>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md- 6col-12">
                                <div class="form-group">
                                    <label class="form-control-label">@lang('Committee Price')</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control has-append" name="amount" value="{{ getAmount($committee->amount) }}" placeholder="@lang('Price of Committee')" required>
                                        <div class="input-group-text">{{ $general->cur_text }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md- 6col-12">
                                <div class="form-group">
                                    <label>@lang('Validity') </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control has-append" name="validity" value="{{ $committee->validity }}" placeholder="@lang('Validity')" required>
                                        <div class="input-group-text">{{ __('Months') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md- 6col-12">
                                <div class="form-group">
                                    <label>@lang('Amount will be return') </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control has-append" name="amount_return" value="{{ $committee->amount_return }}" placeholder="@lang('Amount will be return')" required>
                                        <div class="input-group-text">{{ __('Months') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md- 6col-12">
                                <div class="form-group">
                                    <label for="status">@lang('Status')</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" @if($committee->status == 0) selected @endif>Pending</option>
                                        <option value="1" @if($committee->status == 1) selected @endif>Enable</option>
                                        <option value="2" @if($committee->status == 2) selected @endif>Disable</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md- 6col-12">
                                <div class="form-group">
                                    <label for="time">@lang('Committee Open Time')</label>
                                    <div class="input-group">
                                        <input type="datetime-local" min="2018-01-01" max="2599-12-31" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="form-control has-append" name="time" value="{{ $committee->committee_open_time }}" placeholder="@lang('Committee Open Time')">
                                        <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn--primary w-100 h-45">@lang('Submit')
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('breadcrumb-plugins')
    <a href="{{ route('admin.committee.committee.index', $committeePlan->id) }}" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="la la-fw la-backward"></i>@lang('back')</a>
@endpush
