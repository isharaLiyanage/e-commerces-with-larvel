@extends('layouts.app')
@section('content')

<div class="container row m-auto my-5">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div>
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="bd-example">
                    <div class="mb-3">
                        <label for="">Product name</label>
                      <input class="form-control form-control-lg" required name="name" type="text" placeholder="title" >
                    </div>
                    <div class="mb-3">
                        <label for="">Product description</label>
                        <input class="form-control form-control-lg" required name="description" type="text" placeholder="description" >
                
                    </div>
                    <div class="mb-3">
                        <label for="">Product category</label>
                        <select class="form-control form-control-lg" required name="category" type="checkbox" placeholder="description" >
                        <option value="tree">House Plant</option>
                        <option value="sofa">Sofa</option>
                        <option value="table">Computer table</option>

                        </select>     
                    </div>
                    <div class="mb-3">
                        <label for="">Product price</label>
                        <input class="form-control form-control-lg" required name="price" type="number" placeholder="price" >
                
                    </div>
                    <div class="mb-3">
                      <input type="file" class="form-control form-control-lg" aria-label="Large file input example" name="gallery">
                    </div>
                    <button type="submit" class=" btn-success btn m-5">Post</button>
                    </div>
            
                </form>
                   
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection
