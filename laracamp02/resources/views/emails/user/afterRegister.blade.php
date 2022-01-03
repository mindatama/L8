@component('mail::message')
# Welcome!

Hello {{$user->email}}
welcome to the cave on laracamp

@component('mail::button', ['url' => route('login')])
login here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
