 @extends('layouts.main')
 @section('content')

<div class="container">

<h1> Customers Detail </h1> 

@if (session('successMsg2'))

<div class="alert alert-success" role="alert">
 {{ session('successMsg2') }}
</div>

@endif
 
 <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Email </th>
      <th scope="col">Customer Products </th>
      <th scope="col">Bill</th>
      <th scope="col">Action </th>
    </tr>
  </thead>


  <tbody>
   @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $customer->id }}</th>
      <td>{{ $customer->cus_name }}</td>
      <td>{{ $customer->cus_email }}</td>
      <td>{{ $customer->cus_products }}</td>
      <td>{{ $customer->cus_bill }}</td>
      
      <td> <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit_customers', $customer->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          
       || 
       
        <form method="POST" id="delete-form-{{ $customer->id }}" action="{{ route('delete_customers', $customer->id) }}" style="display: none;">
    {{ csrf_field() }}
    {{ method_field('delete') }} 
    </form>   
 
   <button onclick="if (confirm('Are you sure to delete this data?')) {
   event.preventDefault();
   document.getElementById('delete-form-{{ $customer->id }}').submit();

   }else{
    event.preventDefault();
   }

   "  class="btn btn-raised btn-danger btn-sm" href=" "><i class="fa fa-trash" aria-hidden="true"></i>  

       </button>

        </td>

    </tr>
   
   @endforeach
  </tbody>
</table>

 {{ $customers->links()  }}

</div>

 @endsection
