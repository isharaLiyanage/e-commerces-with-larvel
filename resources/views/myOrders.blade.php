@extends('Head')
@section('content')
<div class="container">

  <div class="cart-product m-5">
    <h3 class=" text-white-50"> Search Products</h3>
@foreach ($products as $item)
<div class="product-cart">
    <div class="trending-img ">
      <img src="{{asset('img/' . $item->gallery)}}" alt="">
    </div></div>
    <div class=" cart-text ">
      <a  class=" text-decoration-none" href="{{ route('details', $item->id)}}">
        <h4 class="h6">{{$item->name}}</h4>

      </a>
      <h6 class=""> {{$item->status}}</h6>
      <h4 class=" h5">$ {{$item->price}}.00</h4>
    </div>

  
    @endforeach


@endsection
