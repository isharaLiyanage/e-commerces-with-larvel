@extends('Head')
@section('content')
<div class="">
  <h3 class=" "> Trending Products</h3>
  <div class="filter-product m-5">
   
      @foreach ($product as $item)
  <div class=" filter-product-bg  ">
    <a class=" text-decoration-none" href="{{ route('details', $item["id"])}}">
    <div class="filter-img ">
      <img src="{{ asset('img/' . $item->gallery)}}" alt="">
          </div>
    <div class=" filter-text ">
      <h4 class="filter-product-filter">{{$item["name"]}}</h4>
      <h4 class="filter-product-filter">$ {{$item["price"]}}.00</h4>

    </div>
  </a>
  </div>
    @endforeach
</div>

</div>

@endsection
