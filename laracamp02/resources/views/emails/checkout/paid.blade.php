@component('mail::message')
# Pekerjaanmu telah selesai

semangat pagi {{$checkout->User->name}}
<br>
pekerjaan {$this->checkout->Camp->title} telah selesai, pertahankan safety performance-nya. saya dan anda selamat setiap hari

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
