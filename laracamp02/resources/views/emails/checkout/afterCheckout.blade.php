@component('mail::message')
# Register Jobpending: {{$checkout->Camp->title}} judul {{$checkout->judul}}

Hey {{$checkout->User->name}}
<br>
thanks for upload job {{$checkout->Camp->title}}, 
berikut detail pekerjaan : 
pembuat : {{$checkout->User->name}}
judul : {{$checkout->judul}}
deskripsi : {{$checkout->deskripsi}}
tanggal pekerjaan : {{$checkout->expired}}
estimasi pekerjaan (hari) : {{$checkout->cvc}}
saya dan anda selamat setiap hari

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
Going to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
