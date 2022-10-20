@extends('layouts.app')

@section('content')
<div class="container">
<div class=""> <a href="{{ route('upload')}}" class=" text-decoration-none ">ADD Product</a></div>

 <h2>Users</h2>

@foreach ($users as $user)
<div class="my-3">
    <div class="">Name:  {{$user->name}}</div>
    <div class="">email:  {{$user->email}}</div></div>
@endforeach
</div>
@endsection