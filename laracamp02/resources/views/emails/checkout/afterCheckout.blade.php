@component('mail::message')
# Pendaftaran Jobpending: {{$checkout->Camp->title}} judul {{$checkout->judul}}

Hey {{$checkout->User->name}}
<br>
terimakasih telah upload pekerjaan {{$checkout->Camp->title}}, <br>
berikut detail pekerjaan : <br>
pembuat : {{$checkout->User->name}} <br>
judul : {{$checkout->judul}} <br>
deskripsi : {{$checkout->deskripsi}} <br>
tanggal mulai : {{$checkout->expired}} <br>
estimasi pekerjaan : {{$checkout->cvc}} hari<br>
saya dan anda selamat setiap hari

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
Going to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
