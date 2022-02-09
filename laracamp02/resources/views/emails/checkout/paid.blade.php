@component('mail::message')
# Pekerjaan {{$checkout->Camp->title}} dengan judul {{$checkout->judul}} telah selesai

semangat pagi militan BUMA<br>
terimakasih telah menyelesaikan pekerjaan {{$checkout->Camp->title}}, berikut detailnya : <br>
<br>
judul : {{$checkout->judul}} <br>
deskripsi : {{$checkout->deskripsi}} <br>
tanggal mulai : {{$checkout->expired}} <br>
estimasi pekerjaan : {{$checkout->cvc}} hari<br>
selesai pekerjaan : {{$checkout->updated_at}}<br>
pertahankan safety performance, saya dan anda selamat setiap hari
@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
