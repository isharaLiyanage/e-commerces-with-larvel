@extends('Head')
@section('content')
<div class="container">

  <table class=" table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total + 10}}</td>
      </tr>
    </tbody>
  </table>


  <div class="my-5">
    <form action="{{route('orderPlace')}}" method="POST">
      @csrf
      <div class="form-group">

        <textarea name="address" id="address" placeholder=" Enter You Shipping Address"  required cols="30" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="payment" ></label>
       <input type="radio" name="payment" id="payment" checked><span  class="mx-3">Online payment</span>
       <input type="radio" name="payment" id="payment"><span class="mx-3">Cash on delivery</span>
      
      </div>
      <button class=" btn btn-info mt-2" type="submit">Order Now</button>
      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
    </form>
  </div>
</div>

@endsection
