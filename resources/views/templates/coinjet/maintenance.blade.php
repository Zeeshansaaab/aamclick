@extends($activeTemplate.'layouts.front')
@section('content')
<section class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="title">{{ __($pageTitle) }}</h5>
                    </div>
                    <div class="card-body">
                        @php echo $maintenance->data_values->description @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
