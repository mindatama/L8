@component('mail::message')
# Welcome!

Hello {{$user->email}}
welcome to the cave on jobpending apps

@component('mail::button', ['url' => route('login')])
login here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
