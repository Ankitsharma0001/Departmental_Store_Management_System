 
 <?php $__env->startSection('content'); ?>
 
 <div class="container">

 <?php if($errors->any()): ?>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="alert alert-danger" role="alert">
  <?php echo e($error); ?>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php endif; ?>

 <?php if(session('successMsg2')): ?>

<div class="alert alert-success" role="alert">
 <?php echo e(session('successMsg2')); ?>

</div>

<?php endif; ?>


<h1> Addition Customers Page </h1> 


<form class="text-center border border-light p-5" action="<?php echo e(route('add')); ?>" method="POST">

  <?php echo e(csrf_field()); ?>


    <p class="h4 mb-4">Add Customer Details </p>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="cus_name" placeholder="Customer Name">
        </div>
        
    </div>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="email" id="" class="form-control" name="cus_email" placeholder="Customer Email">
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="cus_products" placeholder="Customer Products">
        </div> 
    </div>    

    
    <input type="number" id="" class="form-control" name="cus_bill" placeholder="Customer Bill">
     

    <button class="btn btn-info my-4 btn-block" type="submit">Add Customer</button>

     

</form>

 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\XAMPP\htdocs\laravel\departmental\resources\views/add_customers.blade.php ENDPATH**/ ?>