@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img"src="{{$pro_detail['gallery']}}">
        </div>   
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name: {{$pro_detail['name']}}</h2>
            <h4>Price: {{$pro_detail['price']}} $</h4>
            <h4>Category: {{$pro_detail['category']}}</h4>
            <h5>Detail: {{$pro_detail['description']}} </h5> 
            <br><br>
            <form action="/add_to_cart" method="POST">
              <div class="btn-detail">
                <input type="hidden" name="product_id" value="{{$pro_detail['id']}}">
                @csrf
                <button class="btn btn-success">Add to cart</button>
              </div>
            </form>
            <button class="btn btn-primary">Buy Now</button>

        </div>   
            
    </div>
</div>   
@endsection 

