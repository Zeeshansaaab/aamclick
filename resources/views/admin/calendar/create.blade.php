@extends('admin.layouts.app')

@section('panel')
    <div class="row">
        <div class="col-12">
            <div class="card mt-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">@lang('Information')</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.calendar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-control-label">@lang('Date')</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control has-append" name="start_date" placeholder="@lang('Profit %age')" required>
                                        <div class="input-group-text"><i class="las la-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-control-label">@lang('Profi %age')</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control has-append" name="profit" placeholder="@lang('Profit %age')" required>
                                        <div class="input-group-text">%</div>
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
    <a href="{{ route('admin.calendar.index') }}" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="la la-fw la-backward"></i>@lang('back')</a>
@endpush
