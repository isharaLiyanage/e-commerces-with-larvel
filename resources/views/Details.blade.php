@extends('Head')
@section('content')
<div class="row my-5 justify-content-around align-items-center">
    <div class="col-5">
        <div class=" product-details-img">
        <img class="  " src="{{asset('img/' . $product->gallery)}}" alt="">
        </div>
    </div>
<div class="col-5">

<h5 class="product-details-h5" > {{$product['name']}}</h5>
<h5> Price: ${{$product['price']}}</h5>
<p class=" text-black-50">{{$product['description']}}</p>
<form action="{{ route("add_to_cart")}}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product['id']}}">
<button class=" btn product-details-btn my-2"> Add to Cart</button>
</form>


</div>
</div>
@endsection
