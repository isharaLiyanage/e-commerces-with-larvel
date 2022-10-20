@extends('Head')
@section('content')
<div class="">
<div class="row">
  
  <div class="col-12 col-md-10 carousel-hight">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 3"></button>
  
      </div> --}}
      <div class="carousel-inner">
        
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="row   align-items-center">
           
            <div class="col-12 col-sm-6 text-right pe-4">
             
                <p >
                Up to<span class="h3-span"> 25%</span> Off <br>     </p>
               <h5 class="carousel-h3"> SOFA <br> COLLECTION</h5>
               <a href="./items/sofa" class="btn btn-outline-secondary"> Shop Now </a>
            </div>
            <div class="col-12 col-sm-6">
              <img style="height: 300px; " src={{asset('img/table02.png')}} class="d-block img-fluid m-auto" alt="...">
            </div>
          </div>
          
        </div>
        <div class="carousel-item  " data-bs-interval="10000">
          <div class="row   align-items-center">
            <div class="col-12 col-sm-6">
              <img style="height: 300px; " src={{asset('img/table.png')}} class="d-block img-fluid m-auto" alt="...">
            </div>
            <div class="col-12 col-sm-6">
             
                <h5 class="carousel-h5"> Special Discount <br> for today <span>5%</span>   </h5>
                <button class="btn btn-outline-secondary"> Shop Now </button>
            
            </div>
          </div>
          
        
        </div>
        
        
        
        <div class="carousel-item  " data-bs-interval="10000">
          <div class="row   align-items-center">
            <div class="col-12 col-sm-6">
             
              <h5 class="carousel-h4 text-right"> Grow plant for <br> <span> better environment</span>  </h5>
             
          </div>
            <div class="col-12 col-sm-6">
              <img style="height: 300px; " src={{asset('img/tree.png')}} class="d-block img-fluid m-auto" alt="...">
            </div>
           
          </div>
          
        
        </div>
        <div class="carousel-item " data-bs-interval="10000">
          <div class="row m-auto align-items-center">
            <div class="col-12 col-sm-6">
             
              <h5 class="carousel-h5 text-right"> Special discount <br> for today <span>5%</span>   </h5>
              <p></p>
          
          </div>
            <div class="col-12 col-sm-6">
              <img style="height: 300px; " src={{asset('img/tree02.png')}} class="d-block img-fluid m-auto" alt="...">
            </div>
            
          </div>
          
        
        </div>
        
      
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="col-8  col-md-2 mt-5 m-auto">
    <div class="d-flex align-items-end gap-3 d-md-block m-auto">
      <div class="shopping-details">
        <img  class=" img-fluid " src="{{asset('img//icon/fast.png')}}" alt="">
        <p class=" text-center">Fast Delivery</p>
      </div>
      <div class="shopping-details text-center">
        <img  class=" img-fluid " src="{{asset('img//icon/secured.png')}}" alt="">
        <p class=" text-center">100% Safety Delivery</p>
      </div>
      <div class="shopping-details">
        <img class=" img-fluid "  src="{{asset('img//icon/14day.png')}}" alt="">
        <p class=" text-center">14 Day Money Back</p>
      </div>
    </div>
  </div>
</div>

  <div class="">

    <h3 class=" m-5 "> Trending category</h3>
    <div class="category-product m-5">
      <div class="">

      <a class=" text-decoration-none" href="./items/sofa">
        <div class="category-img  ">
          <div class="category-img-border"></div>
          <img  src="{{asset('img/table02.png')}}" alt="" class=" m-auto">
          
        </div>
        <div class=" trending-text ">
          <h6 class="h6 text-center mt-3 text-dark">Sofa</h6>
        </div></a>
      </div>

      <div class="">

        <a class="nav-link" href="./items/sofa">
          <div class="category-img  ">
            <div class="category-img-border"> </div>
            <img  src="{{asset('img/table.png')}}" alt="" class=" m-auto">
           
          </div>
          <div class=" trending-text ">
            <h6 class="h6 text-center mt-3 text-dark">Couch</h6>
          </div></a>
      </div>

          <div class="">         
          <a class="nav-link" href="./items/tree">
            <div class="category-img  ">
             <div class="category-img-border"></div>
              <img  src="{{asset('img/tree.png')}}" alt="" class=" m-auto">
             
            </div>
            <div class=" trending-text ">
              <h6 class="h6 text-center mt-3 text-dark">Tree</h6>
            </div>
          </a>
          </div>

          <div class="">
          <a class="nav-link" href="./items/table">
            <div class="category-img-pc "> 
              <div class="category-img-border"></div>
              <img  src="{{asset('img/pcTable.png')}}" alt="" class=" m-auto">
            </div>
            <div class=" trending-text ">
              <h6 class="h6 text-center mt-3 text-dark">Desktop table</h6>
            </div></a>
          </div>
  
  </div>


  <div class=" ">

  <h3 class=" m-5"> Trending Products</h3>
  <div class="trending-product  m-md-3">
   
@foreach ($products as $item)
<div class="trending-flex">
<a class=" text-decoration-none" href="{{ route('details', $item["id"])}}">
    <div class="trending-img img-fluid ">
      <img src="{{ asset('img/' . $item->gallery)}}" alt="" class=" m-auto">
    </div>
    <div class="  ">
      <h6 class="h6 text-center trending-text">{{$item["name"]}}</h6>
    </div></a>
  </div>
    @endforeach
  </div>
</div>

  </div>
<div class=" ">

  <h3 class=" m-5"> Recent Products</h3>
  <div class="recent-product overflow-x m-md-3">
   <ul class="recent-flex ">

@foreach ($product as $item)
<li class=" recent-flex-li ">
    <div class="trending-img img-fluid ">
      <img src="{{ asset('img/' . $item->gallery)}}" alt="" class=" m-auto">
    </div>
    <div class="  ">
<a class=" text-decoration-none" href="{{ route('details', $item["id"])}}">
  <h6 class="h6 text-center trending-text">{{$item["name"]}}</h6></a>
    </div>
  </li>
    @endforeach
   </ul>
  </div>
</div>

</div>

@endsection


