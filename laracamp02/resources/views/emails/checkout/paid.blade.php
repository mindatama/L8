@component('mail::message')
# Your transaction has been confirmed

hey {{$checkout->User->name}}
<br>
transaction confirmed, enjoy the {{$checkout->Camp->title}} camp

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
