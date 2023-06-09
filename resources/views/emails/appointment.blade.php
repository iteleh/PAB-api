{{-- blade-formatter-disable --}}
@component('mail::message')
# Hello {{$user->name}}, 

Your appointment booking details
<br><br>
Date: {{ $appointment->appointment_date }}<br><br>
Time: {{$appointment->appointment_time }}<br><br>
Location: {{$appointment->contact_address}} <br><br>
@if($appointment->status == "1")
Status: Pending
@endif
@if($appointment->status == "2")
Status: Ready
@endif
@if($appointment->status == "3")
Status: Cancelled
@endif

<br> <br>

Thanks, and welcome.<br>
{{ config('app.name') }}
@endcomponent
{{-- blade-formatter-disable --}}