 
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


<form class="text-center border border-light p-5" action="<?php echo e(route('update',$product->id)); ?>" method="POST">

  <?php echo e(csrf_field()); ?>


    <p class="h4 mb-4">Add Product </p>

    <div class="form-row mb-4">
        <div class="col">
           
            <input type="text" id="" class="form-control" value="<?php echo e($product->category_name); ?>" name="category_name" placeholder="Category Name">
        </div>
       
    </div>

    <div class="form-row mb-4">
         <div class="col">
            
            <input type="text" id="" class="form-control" value="<?php echo e($product->company_name); ?>" name="company_name" placeholder="Company Name">
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col">
         
            <input type="text" id="" class="form-control" value="<?php echo e($product->product_name); ?>" name="product_name" placeholder="Product Name">
        </div>
    </div>


    
    <input type="text" id="" class="form-control"  value="<?php echo e($product->price); ?>" name="price" placeholder="Price" aria-describedby="defaultRegisterFormPhoneHelpBlock">
     

 
    <button class="btn btn-info my-4 btn-block" type="submit">Update Product</button>

 
     

     

</form>


 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\departmental\resources\views/edit.blade.php ENDPATH**/ ?>