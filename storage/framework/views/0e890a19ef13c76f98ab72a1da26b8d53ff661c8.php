 
 <?php $__env->startSection('content'); ?>

<div class="container">

<h1> Products List </h1> 

<?php if(session('successMsg')): ?>

<div class="alert alert-success" role="alert">
 <?php echo e(session('successMsg')); ?>

</div>

<?php endif; ?>
 
 <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Company Name </th>
      <th scope="col">Product Name </th>
      <th scope="col">Price</th>
      <th scope="col">Action </th>
    </tr>
  </thead>


  <tbody>
   <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($product->id); ?></th>
      <td><?php echo e($product->category_name); ?></td>
      <td><?php echo e($product->company_name); ?></td>
      <td><?php echo e($product->product_name); ?></td>
      <td><?php echo e($product->price); ?></td>
      <td> <a class="btn btn-raised btn-primary btn-sm" href="<?php echo e(route('edit', $product->id)); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          
       || 
       
     <form method="POST" id="delete-form-<?php echo e($product->id); ?>" action="<?php echo e(route('delete', $product->id)); ?>" style="display: none;">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('delete')); ?> 
    </form>   
 
   <button onclick="if (confirm('Are you sure to delete this data?')) {
   event.preventDefault();
   document.getElementById('delete-form-<?php echo e($product->id); ?>').submit();

   }else{
    event.preventDefault();
   }

   "  class="btn btn-raised btn-danger btn-sm" href=" "><i class="fa fa-trash" aria-hidden="true"></i>  

       </button>

        </td>
    </tr>
   
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

 <?php echo e($products->links()); ?>


</div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\departmental\resources\views/manage.blade.php ENDPATH**/ ?>