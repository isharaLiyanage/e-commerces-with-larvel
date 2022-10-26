
<?php 
use App\Http\Controllers\ProductsController;
$total= ProductsController::cartItem();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Betterhouse.com</title>
        
   
    <!-- Styles -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
 

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
    

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        
    <div class="nav-container">
    
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


        @yield('content')
        <div class="container">
            <footer class="py-5">
              <div class="row">
                <div class="col-2">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route('product')}}" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>           
                    
                  </ul>
                </div>
          
                <div class="col-2">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                   
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                  </ul>
                </div>
        
          
                <div class="col-4 offset-1">
                  <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                      <label for="newsletter1" class="visually-hidden">Email address</label>
                      <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                      <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
          
              <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© Design and develop by ishara dulanjaya.</p>
                <ul class="list-unstyled d-flex">
                  <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
              </div>
            </footer>
          </div>

    </div>
       
       
       
     
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
