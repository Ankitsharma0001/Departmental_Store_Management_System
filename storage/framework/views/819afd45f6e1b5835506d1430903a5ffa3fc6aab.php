 
 <?php $__env->startSection('content'); ?>
 
 <div class="container">

 <?php if($errors->any()): ?>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="alert alert-danger" role="alert">
  <?php echo e($error); ?>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php endif; ?>

 <?php if(session('successMsg')): ?>

<div class="alert alert-success" role="alert">
 <?php echo e(session('successMsg')); ?>

</div>

<?php endif; ?>


<h1> Addition Products Page </h1> 


<form class="text-center border border-light p-5" action="<?php echo e(route('store')); ?>" method="POST">

  <?php echo e(csrf_field()); ?>


    <p class="h4 mb-4">Add Product </p>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="category_name" placeholder="Category Name">
        </div>
        
    </div>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" name="company_name" placeholder="Company Name">
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
          
            <input type="text" id="" class="form-control" name="product_name" placeholder="Product Name">
        </div> 
    </div>    

    <input type="number" id="" class="form-control" name="price" placeholder="Price" aria-describedby="defaultRegisterFormPhoneHelpBlock">
     

    <button class="btn btn-info my-4 btn-block" type="submit">Add Product</button>



</form>
<!-- Default form register -->

 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\XAMPP\htdocs\laravel\departmental\resources\views/create.blade.php ENDPATH**/ ?>