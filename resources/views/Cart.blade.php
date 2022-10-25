@extends('Head')
@section('content')
<div class="container">

  <div class="cart-product m-5">
    <h3 class=" "> Cart</h3>

    {{-- <?php
    
    
    if(!$products)
    {echo "<p> Nothing see to cart </p>";} 
    else {
     echo"ss";
    }?> --}}
@foreach ($products as $item)
<div class="product-cart">
    <div class="trending-img ">
      <img src="{{asset('img/' . $item->gallery)}}" alt="">
    </div></div>
    <div class=" cart-text ">
      <h4>{{$item->name}}</h4>
      <h4 class=" h5">$ {{$item->price}}.00</h4>
    </div>
<div class="">
<a href="{{ route('removeCart',$item->cart_id)}}" class=" btn product-details-btn"> Remove</a>
</div>
  
    @endforeach

   
 
  </div>
<a class=" btn  btn-success   <?php if($products)
{echo "";} 
else {
 echo"d-none";
}
?>" href="{{ route('orderNow')}}">Order Now</a>
</div>

@endsection
