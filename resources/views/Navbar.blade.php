{{-- 
<?php 
use App\Http\Controllers\ProductsController;
$total= ProductsController::cartItem();
?>
         <nav class="navbar navbar-expand-sm border-bottom" aria-label="Fifth navbar example">
            <div class="container-fluid">
              <a class=" navbar-brand mx-5" href= {{route('product')}}>Better House</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="navbar-collapse collapse justify-content-end mx-5 " id="navbarsExample05" style="">
                <form action="{{route('search')}}" class="d-flex">
                    <input class="search-input me-2 px-1" type="search" name="query" placeholder="Search for anything" aria-label="Search">
                    <button class="button-input" type="submit">Search</button>
                  </form>
                <ul class="navbar-nav  mb-lg-0">
                    @guest
                    @if (Route::has('login'))
                        
                    <li class="nav-item">
                              <a class="btn btn-sm btn-outline-secondary mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
  
                           </li>
                       
                    @endif
  
                    @if (Route::has('register'))
                       
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary mx-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                           
                    </li> 
                      @endif
                @else
                    
               
              <li class="nav-item dropdown">
                <a class=" mx-2 dropdown-toggle show " href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">
                   <img class="nav-img" src={{asset('img/users/'.Auth::user()->image)}} alt={{ Auth::user()->name }}>  </a>
                <ul class="dropdown-menu " aria-labelledby="dropdown03" data-bs-popper="none">
                  <li><a class="dropdown-item" href="{{route('myOrders')}}">Order</a> </li>
                  <li><a class="dropdown-item" href="{{route('uploadImage')}}">User image</a> </li>

                  <li> <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
                
                </ul>
              </li>
              
              <li class="nav-item">  <a class=" "  href="{{ route('cart') }}" ><div class=" cart-btn"><img src="{{asset("img/icon/593.png")}}" alt=""><p>{{ $total }}</p> </div> </a>
              </li>
                @endguest
                 
            
                </ul>
                
              </div>
            </div>
          </nav>

        







       --}}