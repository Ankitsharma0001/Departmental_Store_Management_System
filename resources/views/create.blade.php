

 @extends('layouts.main')
 @section('content')
 
 <div class="container">
<!--
 @if($errors->any())
 @foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>

@endforeach

 @endif
-->
 @if (session('successMsg'))

<div class="alert alert-success" role="alert">
 {{ session('successMsg') }}
</div>

@endif


<h1> Addition Products Page </h1> 


<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

  {{ csrf_field() }}

    <p class="h4 mb-4">Add Product </p>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="category_name" placeholder="Category Name">

            @error('category_name')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror
        </div>
        
    </div>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="company_name" placeholder="Company Name">
            @error('company_name')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
          
            <input type="text" id="" class="form-control" name="product_name" placeholder="Product Name">
            @error('product_name')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror
        </div> 
    </div>    

    <input type="number" id="" class="form-control" name="price" placeholder="Price" aria-describedby="defaultRegisterFormPhoneHelpBlock">
       @error('price')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror

    <button class="btn btn-info my-4 btn-block" type="submit">Add Product</button>



</form>
<!-- Default form register -->

 </div>
 @endsection

