@component('mail::message')
# Register Jobpending: {{$checkout->Camp->title}} judul {{$checkout->judul}}

Hey {{$checkout->User->name}}
<br>
thanks for upload job {{$checkout->Camp->title}}, <br>
berikut detail pekerjaan : <br>
pembuat : {{$checkout->User->name}} <br>
judul : {{$checkout->judul}} <br>
deskripsi : {{$checkout->deskripsi}} <br>
tanggal pekerjaan : {{$checkout->expired}} <br>
estimasi pekerjaan (hari) : {{$checkout->cvc}} <br>
saya dan anda selamat setiap hari

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
Going to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
