@extends('Head')
@section('content')
<div class="">
  <h3 class="m-5  "> Upload image</h3>
  <div class="filter-product m-5">
    <form method="POST" action="{{ route('userImage') }} " enctype="multipart/form-data">
        @csrf

        
        <div class="mb-3">
            <input type="file" class="form-control form-control-lg" aria-label="Large file input example" name="image">
          </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Upload') }}
                </button>
            </div>
        </div>
    </form>
     
</div>

</div>

@endsection
