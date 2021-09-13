@extends('master')
@section('content')

<div class="container ">
    
      <h1>Cart Items</h1>
      <div class="">
      <a href="/ordernow" class="btn btn-success">Order Now</a> <br><br>

      @foreach($products as $item)
    
      <div class="row cart-items">
        <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
        <img class="cart-img"src="{{$item->gallery}}" >
         </a>
        </div>
        <div class="col-sm-3">
          <div class="">
            <h5>{{$item->name}}</h5>
            <h5>{{$item->description}}</h5>
          </div>

        </div>
        <div class="col-sm-3">
          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Item</a>
        </div>
      </div>
      @endforeach
  
    </div>
    <a href="/ordernow" class="btn btn-success">Order Now</a> <br><br>

    </div>
</div>
@endsection