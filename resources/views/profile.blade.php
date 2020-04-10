@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <form >
                 <h3>Name</h3><br>
                 <input type="text" name="name"placeholder='hello i am Gharu'>
                 @csrf
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection
