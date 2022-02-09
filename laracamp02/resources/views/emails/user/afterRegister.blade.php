@component('mail::message')
# Welcome!

Hello {{$user->name}}
welcome to the cave militan BUMA di aplikasi jobpending

@component('mail::button', ['url' => route('login')])
login here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
