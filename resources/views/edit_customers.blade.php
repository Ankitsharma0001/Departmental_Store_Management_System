 @extends('layouts.main')
 @section('content')
 
 <div class="container">

 @if($errors->any())
 @foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>

@endforeach

 @endif


<h1> Edit Page </h1> 


<form class="text-center border border-light p-5" action="{{ route('update_customers',$customer->id) }}" method="POST">

  {{ csrf_field() }}

    <p class="h4 mb-4">Update Customer Details</p>

    <div class="form-row mb-4">
        <div class="col">
            
            <input type="text" id="" class="form-control" value="{{ $customer->cus_name }}" name="cus_name" placeholder="cus Name">
        </div>
       
    </div>

    <div class="form-row mb-4">
         <div class="col">

            <input type="email" id="" class="form-control" value="{{ $customer->cus_email }}" name="cus_email" placeholder="cus_email">
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
          
            <input type="text" id="" class="form-control" value="{{ $customer->cus_products }}" name="cus_products" placeholder="cus_products">
        </div>
    </div>


    <input type="number" id="" class="form-control"  value="{{ $customer->cus_bill }}" name="cus_bill" 
     placeholder="cus_bill" >
     

   
    <button class="btn btn-info my-4 btn-block" type="submit">Update Customer</button>
     

     

</form>


 </div>
 @endsection
