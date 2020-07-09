@extends('layouts.app')

@section('content')
    <h1>Posted Messages</h1> 
    @if (count($messages) > 0)
        @foreach ($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name :: {{$message->name}}</li>
                <li class="list-group-item">Email:: {{$message->email}}</li>
                <li class="list-group-item">Message :: {{$message->message}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <div class="col-12">
        <div class="item-preview">
        <a class="item-preview-img box-shadow-lg d-block mb-3" href="https://shop.startbootstrap.com/product/sb-ui-kit-pro-angular/" onclick="if (!window.__cfRLUnblockHandlers) return false; ga('send','event','Premium Link','click','SB UI Kit Pro Angular')" rel="nofollow" data-cf-modified-343153cfd615a663aa5d1ff0-="">
        <img class="img-fluid" src="{{url('/img/sideimage.jpg')}}" alt="Premium Angular 9 UI Kit - SB UI Kit Pro">
        </a>
        <div class="item-preview-title d-flex align-items-center">
        SB UI Kit Pro Angular
        <span class='badge badge-warning ml-auto small badge-pill'>Pro</span>
        </div>
        </div>
        <hr class="mb-4">
        </div> 
@endsection