@extends('layouts.app')

@section('content')
    <h1 class="text-center">Home</h1> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sequi inventore dicta sed placeat voluptate, quae cupiditate velit laudantium accusantium et eos voluptatum cum quisquam? Natus quaerat itaque harum molestias.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eveniet ab fugiat voluptas impedit laborum iste ipsum atque quidem obcaecati. Fugit et ab ut numquam esse quam illo molestias saepe?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit modi dolores sit officiis delectus doloremque numquam minima voluptatem, minus repudiandae eaque explicabo accusamus similique corporis nobis quaerat quia voluptas in.</p>
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