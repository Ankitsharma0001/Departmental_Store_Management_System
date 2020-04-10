 
 <?php $__env->startSection('content'); ?>

<div class="container">

<h1> Customers Detail </h1> 

<?php if(session('successMsg2')): ?>

<div class="alert alert-success" role="alert">
 <?php echo e(session('successMsg2')); ?>

</div>

<?php endif; ?>
 
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
   <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($customer->id); ?></th>
      <td><?php echo e($customer->cus_name); ?></td>
      <td><?php echo e($customer->cus_email); ?></td>
      <td><?php echo e($customer->cus_products); ?></td>
      <td><?php echo e($customer->cus_bill); ?></td>
      
      <td> <a class="btn btn-raised btn-primary btn-sm" href="<?php echo e(route('edit_customers', $customer->id)); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          
       || 
       
        <form method="POST" id="delete-form-<?php echo e($customer->id); ?>" action="<?php echo e(route('delete_customers', $customer->id)); ?>" style="display: none;">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('delete')); ?> 
    </form>   
 
   <button onclick="if (confirm('Are you sure to delete this data?')) {
   event.preventDefault();
   document.getElementById('delete-form-<?php echo e($customer->id); ?>').submit();

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

 <?php echo e($customers->links()); ?>


</div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\departmental\resources\views/manage_customers.blade.php ENDPATH**/ ?>