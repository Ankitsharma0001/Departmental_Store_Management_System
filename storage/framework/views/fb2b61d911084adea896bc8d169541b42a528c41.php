<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
 
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

<div  style="padding-left:683px; background-color:#00bfa5; border:2px solid #00bfa5 ">
		<h2 style="margin-left:30px;margin-top:40px;color:white;text-align: justify;text-decoration:bold;text-shadow: 2px 2px 5px red;font-family: Times New Roman, Times, serif;">Profile Details</h2>
		<button style="background-color:#00bfa5; margin-left:500px;margin-top:-50px;padding-left:10px;padding-right:10px;"><a href="<?php echo e(url('/home')); ?>" style="color:white;text-decoration: none;">Home</a> </button>
</div>

<div style="background-color:#00bfa5; margin-right:1115px;margin-top:-60px;padding-bottom:305px;">
	<img src="images/Avatar.png" alt="Avatar" width="200" height="200" style="border-radius: 50%;margin-left:20px;margin-top:20px;border:2px solid white">
       
    <div style="color:white;padding-left:50px;text-align: justify;text-decoration:bold;text-shadow: 2px 2px 5px red;font-family: Times New Roman, Times, serif;">
                   <h3> <?php echo e(ucfirst(Auth()->user()->name)); ?></h3>
                            
                  </div>
    <button style="background-color:#00bfa5;margin-left:80px;margin-top:10px;padding-left:10px;padding-right:10px"><a href="<?php echo e(url('logout')); ?>"style="color:white;text-decoration: none;">logout</a> </button>
</div>


    
<div style=" border:2px solid black; margin-left:280px; margin-right:30px; margin-top:-490px; padding-top:430px; ">
       
       
       
  </div>
  <div style="margin-left:350px;margin-top:-430px;">
        <img src="images/sign2.jpg" alt="Avatar" width="380" height="400">
 </div>



        <div style="padding-left:900px; margin-top:-360px;">
                 <div style="margin-bottom:-400px;text-align: justify;text-decoration:bold;text-shadow: 2px 2px 5px green;font-family: Times New Roman, Times, serif;">
                  <h3 style="font-size:60px;text-decoration:underline" >Profile</h3>
                 <p style="font-size:30px;"> Username: <?php echo e(ucfirst(Auth()->user()->name)); ?></p>
                 <p style="font-size:30px;">Email: <?php echo e(ucfirst(Auth()->user()->email)); ?></p>
                 </div> 
             
        </div>  
</body>
</html><?php /**PATH C:\xampp\htdocs\departmental\resources\views/dashboard.blade.php ENDPATH**/ ?>