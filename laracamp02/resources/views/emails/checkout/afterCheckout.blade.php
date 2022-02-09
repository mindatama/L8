@component('mail::message')
# Pendaftaran Pekerjaan {{$checkout->Camp->title}} dengan judul {{$checkout->judul}}

Semangat pagi militan BUMA<br>
<br>
terimakasih telah mengunggah pekerjaan {{$checkout->Camp->title}}, berikut detailnya : <br>
pembuat : {{$checkout->User->name}} <br>
judul : {{$checkout->judul}} <br>
deskripsi : {{$checkout->deskripsi}} <br>
tanggal mulai : {{$checkout->expired}} <br>
estimasi pekerjaan : {{$checkout->cvc}} hari<br>
pertahankan safety performance, saya dan anda selamat setiap hari

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
Going to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
