@extends('master')
@section('content')

<div class="container custom-product">
    <div class="row">
    <div class="tranding-wrapper">
      <h1>Search Result Product</h1>
      <div class="">
      @foreach($products as $item)
      <div class="tranding-items">
        <a href="detail/{{$item['id']}}">
        <img class="tranding-img"src="{{$item['gallery']}}" >
        <div class="">
          <h3>{{$item['name']}}</h3>
        </div>
         </a>
      </div>
      @endforeach
  
    </div>
    </div>
</div>
@endsection