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
                                <strong>{{$checkout->Judul}}</strong>
                            </p>
                            <p>
                                {{$checkout->created_at->format('M d, H:i')}}
                            </p>
                        </td>
                        <td>
                            <strong>{{$checkout->User->name}}</strong>
                        </td>
                        <td>
                            @if ($checkout->is_paid)
                            <strong class="text-success">Job Success</strong>
                            @else
                            <strong>On Progress</strong>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Contact Support
                            </a>
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