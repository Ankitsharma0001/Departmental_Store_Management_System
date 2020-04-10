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
<div>
<img src="images/sign2.jpg" alt="Avatar" width="600" height="560" style="padding-top:50px;padding-left:50px;">
</div>
<div class="container-fluid" >
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto" style="margin-top:-500px;">
              <h3 class="login-heading mb-4">Register here!</h3>
               <form action="<?php echo e(url('post-registration')); ?>" method="POST" id="regForm">
                 <?php echo e(csrf_field()); ?>

                <div class="form-label-group">
                  <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
                  <label for="inputName">Name</label>
 
                  <?php if($errors->has('name')): ?>
                  <span class="error"><?php echo e($errors->first('name')); ?></span>
                  <?php endif; ?>       
 
                </div> 
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <label for="inputEmail">Email address</label>
 
                  <?php if($errors->has('email')): ?>
                  <span class="error"><?php echo e($errors->first('email')); ?></span>
                  <?php endif; ?>    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                   
                  <?php if($errors->has('password')): ?>
                  <span class="error"><?php echo e($errors->first('password')); ?></span>
                  <?php endif; ?>  
                </div>
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"style="background-color:#00bfa5;" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="<?php echo e(url('/')); ?>">Sign In</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\departmental\resources\views/registration.blade.php ENDPATH**/ ?>