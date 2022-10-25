@extends('layouts.app')

@section('content')
<div class="container">
<div class=""> <a href="{{ route('upload')}}" class=" text-decoration-none ">ADD Product</a></div>


<div class="">
    <h2 class=" pt-5">Orders</h2>

<table class="table">
<tr>
    <th>Id</th>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>User Name</th>
    <th>Address</th>
    <th>status</th>


</tr>



@foreach ($orders as $order)
<tr>

   <td> <div class="">  {{$order->id}}</div> </td>
   <td> <div class="">  {{$order->product_id}}</div>  </td>
    <td>  <div class=""> @foreach ($products as $product)

        @if($product->id==$order->product_id) 
         {{$product->name }}   
       @endif
      
        @endforeach</div>  </td>
        <td>  <div class=""> @foreach ($users as $user)

            @if($user->id==$order->user_id) 
             {{$user->name }}   
           @endif
          
            @endforeach</div>  </td>
   <td> <div class="">  {{$order->address}}</div>  </td>
   <td> <div class="">  {{$order->status}}</div>  </td>

 

@endforeach
</tr>
</table>

</div>


<div class="">

    <h2 class=" pt-5">Users</h2>
   <table class=" table">
       <tr>
          <th> Name  </th>
          <th> email  </th>
          <th> role</th>
          <th> created at  </th>
   
   
       </tr>
   
   @foreach ($users as $user)
   <tr>
     
         <td> <div class="">  {{$user->name}}</div></td>  
          <td><div class=""> {{$user->email}}</div></td> 
          <td><div class=""> {{$user->role}}</div></td> 
   
          <td><div class=""> {{$user->created_at}}</div></td> 
   
       
   </tr>
   
   @endforeach
   </table>
   
   </div>
</div>

@endsection