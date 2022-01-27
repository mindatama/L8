@component('mail::message')
# Register Jobpending: {{$checkout->Camp->title}}

Hey {{$checkout->User->name}}
<br>
thanks for upload job {{$checkout->Camp->title}}, saya dan anda selamat setiap hari

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
Going to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
