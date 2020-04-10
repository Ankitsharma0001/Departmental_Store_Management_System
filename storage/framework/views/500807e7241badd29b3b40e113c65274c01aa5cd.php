<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('style.css')); ?>">
 
</head>
<body>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#"><h3>Departmental Store</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/home')); ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/create')); ?>">Add Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/manage')); ?>">Manage Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Customers
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?php echo e(url('/add_customers')); ?>">Add Details</a>
          <a class="dropdown-item" href="<?php echo e(url('/manage_customers')); ?>">Show Details</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Buy Now
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?php echo e(url('/shop')); ?>">Go Cart</a>
         
        </div>
      </li>
    </ul>

 







                  <div class="card-body" style="padding-left:250px;padding-bottom:10px;padding-top:10px;color:white; text-align: justify;text-decoration:bold;text-shadow: 2px 2px 5px red;font-family: Times New Roman, Times, serif;">
                    <h4>Welcome <?php echo e(ucfirst(Auth()->user()->name)); ?></h4>
                    </div>
                  










    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?php echo e(url('/dashboard')); ?>" >Profile</a>
          <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>">Logout</a>
          
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

</body>
<html><?php /**PATH C:\xampp\htdocs\departmental\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>