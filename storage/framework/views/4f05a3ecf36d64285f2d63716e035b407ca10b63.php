 
 <?php $__env->startSection('content'); ?>
 
 <div class="container">

 <?php if($errors->any()): ?>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="alert alert-danger" role="alert">
  <?php echo e($error); ?>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php endif; ?>


<h1> Edit page </h1> 


<form class="text-center border border-light p-5" action="<?php echo e(route('update_customers',$customer->id)); ?>" method="POST">

  <?php echo e(csrf_field()); ?>


    <p class="h4 mb-4">Add Customer </p>

    <div class="form-row mb-4">
        <div class="col">
            
            <input type="text" id="" class="form-control" value="<?php echo e($customer->cus_name); ?>" name="cus_name" placeholder="cus Name">
        </div>
       
    </div>

    <div class="form-row mb-4">
         <div class="col">

            <input type="email" id="" class="form-control" value="<?php echo e($customer->cus_email); ?>" name="cus_email" placeholder="cus_email">
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
          
            <input type="text" id="" class="form-control" value="<?php echo e($customer->cus_products); ?>" name="cus_products" placeholder="cus_products">
        </div>
    </div>


    <input type="number" id="" class="form-control"  value="<?php echo e($customer->cus_bill); ?>" name="cus_bill" 
     placeholder="cus_bill" >
     

   
    <button class="btn btn-info my-4 btn-block" type="submit">Update Customer</button>
     

     

</form>


 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\departmental\resources\views/edit_customers.blade.php ENDPATH**/ ?>