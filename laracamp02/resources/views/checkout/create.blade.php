@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    Bisa, Harus Bisa, Pasti Bisa
                </p>
                <h2 class="primary-header">
                    Saya dan Anda Selamat Setiap Hari
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{asset('images/item_bootcamp_buma.png')}}" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{$camp->title}}
                            </h1>
                            <p class="description">
                                Deskripsikan pekerjaan saat ini
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{route('checkout.store', $camp->id)}}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Name requester</label>
                                <input name="name" readonly type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name') ?: Auth::user()->name}}" />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>    
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email requester</label>
                                <input name="email" readonly type="email" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('email') ?: Auth::user()->email}}" />
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>    
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Judul Pekerjaan</label>
                                <input name="occupation" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('occupation') ?: Auth::user()->judul}}" />
                                @if ($errors->has('occupation'))
                                    <p class="text-danger">{{$errors->first('occupation')}}</p>    
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">deskripsi pekerjaan</label>
                                <input name="card_number" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('card_number') ?: Auth::user()->deskripsi}}"/>
                                @if ($errors->has('card_number'))
                                    <p class="text-danger">{{$errors->first('card_number')}}</p>    
                                @endif
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Tanggal pekerjaan</label>
                                        <input name="expired" type="date" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('expired') ?: Auth::user()->expired}}" />
                                        @if ($errors->has('expired'))
                                            <p class="text-danger">{{$errors->first('expired')}}</p>    
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">estimasi hari</label>
                                        <input name="cvc" type="number" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" maxlength="3" value="{{old('cvc') ?: Auth::user()->cvc}}" />
                                        @if ($errors->has('cvc'))
                                            <p class="text-danger">{{$errors->first('cvc')}}</p>    
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Register Job Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{asset('images/ic_secure.svg')}}" alt=""> check ulang pekerjaan berikut
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection