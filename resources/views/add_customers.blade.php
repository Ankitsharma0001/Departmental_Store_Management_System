
 @extends('layouts.main')
 @section('content')
 
 <div class="container">

 <!-- @if($errors->any())
 @foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>

@endforeach

 @endif
-->
 @if (session('successMsg2'))

<div class="alert alert-success" role="alert">
 {{ session('successMsg2') }}
</div>

@endif


<h1> Addition Customers Page </h1> 


<form class="text-center border border-light p-5" action="{{ route('add') }}" method="POST">

  {{ csrf_field() }}

    <p class="h4 mb-4">Add Customer Details </p>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="cus_name" placeholder="Customer Name">
            @error('cus_name')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror

        </div>
        
    </div>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="email" id="" class="form-control" name="cus_email" placeholder="Customer Email">
            @error('cus_email')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror

        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="cus_products" placeholder="Customer Products">
            @error('cus_products')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror

        </div> 
    </div>    

    
    <input type="number" id="" class="form-control" name="cus_bill" placeholder="Customer Bill">
            @error('cus_bill')
              <div class="alert alert-danger" role="alert">
               {{ $message }}
              </div>
            @enderror
     

    <button class="btn btn-info my-4 btn-block" type="submit">Add Customer</button>

     

</form>

 </div>
 @endsection

