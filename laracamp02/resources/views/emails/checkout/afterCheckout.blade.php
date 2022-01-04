@component('mail::message')
# Register Camp: {{$checkout->Camp->title}}

Hey {{$checkout->User->email}}
<br>
thanks for regist

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
