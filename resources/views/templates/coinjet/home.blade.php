@extends($activeTemplate . 'layouts.front')
@push('styles')
<style>
.widget_contact .contact-list li {
color:white;
font-weight:bold;
}
</style>
@endpush
@section('content')
@include($activeTemplate . 'partials.slider')

@if($sections->secs != null)
@foreach(json_decode($sections->secs) as $sec)
    @include($activeTemplate.'sections.'.$sec)
@endforeach
<div id="calender"></div>
@endif

@endsection

@push('javascript')
<script>
   function changeCrypto(){
        let currency = $('#number_currency').val();
        let currencyselect  = $("#currency_select option:selected").val();
        $('#result_currency').text(currency * currencyselect);
    }
</script>
<script>
    $(document).ready(function() {
        var calendars = {!! json_encode($calendars->toArray()) !!}
        console.log(calendars[0]);
        let calendarEl = $('#calender').fullCalendar({
            defaultView: 'month',
            events: calendars
            });
    })

    </script>
@endpush
