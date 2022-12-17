@extends($activeTemplate.'layouts.master')
@section('content')
<div class="cmn-section">
    <div class="container">
        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <select>
                        <option></option>
                    </select>
                </div>
                <div class="form-group">
                    <label>@lang('User ID (Type user ID where you wanna send)')</label>
                    <input type="text" name="aam_id" class="form-control checkUser" placeholder="Own UserID will transfer balance in your balance">
                    <small class="text-danger aam_idExist"></small>
                </div>
                <div class="form-group">
                    <label>@lang('Amount') <small class="text--success">( @lang('Charge'): {{ getAmount($general->bt_fixed) }} {{ $general->cur_text }} + {{ getAmount($general->bt_percent) }}% )</small></label>
                    <div class="input-group">
                        <input type="number" step="any" name="amount" value="{{ old('username') }}" class="form-control">
                        <span class="input-group-text">{{ $general->cur_text }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label>@lang('Amount Will Cut From Your Account')</label>
                    <div class="input-group">
                        <input type="text" class="form-control calculation" readonly>
                        <span class="input-group-text">{{ $general->cur_text }}</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn--base w-100">@lang('Transfer')</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('style')
<style>
    .success-found{
        border:2px solid green;
    }
    .error-found{
        border:2px solid red;
    }
    .cmn-section{
        width: 100%;
    }
    .{
        border:2px solid black;
    }
    .card{
        width: 50%;
        margin: auto;
        -webkit-box-shadow: 0 0 30px rgb(198, 198, 198);
        /* box-shadow: 0 0 30px rgba(184, 184, 184, 0.536); */
        border-radius: 10px;
        padding: 15px;
    }
    @media only screen and (max-width: 600px) {
        .card{
            width: 100%;
        }
    }


</style>
@endpush
@push('script')
<script type="text/javascript">
    $('input[name=amount]').on('input',function(){
        var amo = parseFloat($(this).val());
        var calculation = amo + ( parseFloat({{ $general->bt_fixed }}) + ( amo * parseFloat({{ $general->bt_percent }}) ) / 100 );
        $('.calculation').val(calculation);
    });

    $('.checkUser').on('focusout',function(e){
        var url = '{{ route('user.checkUser') }}';
        var value = $(this).val();
        var token = '{{ csrf_token() }}';
        var data = {aam_id:value,_token:token}
        $.post(url,data,function(response) {
            if(response.data != false){
                $(`.${response.type}Exist`).text('');
                $(`.checkUser`).removeClass('error-found');
                $(`.checkUser`).addClass('success-found');

            }else{
                $(`.checkUser`).removeClass('success-found');
                $(`.checkUser`).addClass('error-found');
                response.type == 'aam_id' ?
                $(`.${response.type}Exist`).text(`UseID not found`) :
                $(`.${response.type}Exist`).text(`${response.type} not found`);
            }
        });
    });
</script>
@endpush
