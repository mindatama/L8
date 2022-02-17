@extends('layouts.app')
@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    Our Jobs
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_bootcamp_buma.png')}}" height="120" alt="">
                        </td>
                        <td>
                            <p>
                                <strong>{{$checkout->Camp->title}}</strong>
                            </p>
                            <p>
                                start: {{$checkout->expired}}
                            </p>
                        </td>
                        <td><p>
                            <strong>{{$checkout->judul}}</strong>
                        </p>
                            {{$checkout->cvc}} hari kerja
                        </p>
                    </td>
                        <td>
                            @if ($checkout->is_paid)
                            <p><strong class="text-success">Job Success</strong></p>
                            <p>{{$checkout->User->name}} </p>
                            @else
                            <p><strong>On Progress</strong></p>
                            <p>{{$checkout->User->name}} </p>
                            @endif
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="contohModal">
                                Contact Support
                            </button>
                            <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" area-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                   
                                       <img src="{{asset('images/item_bootcamp_buma.png')}}" width="" height="" alt="...">
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <h3>No Data</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection